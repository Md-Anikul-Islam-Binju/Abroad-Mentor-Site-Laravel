<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CountriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
   public function index()
   {
         $countries=DB::table('countries_table')->get();
         return view('admin.countries.addCountries',compact('countries'));
        // return view('admin.countries.addCountries');
   }


   public function storecountries(Request $request)
   {

       $data=array();
       $data['name']=$request->name; 
       $image=$request->file('image');
       if ($image) 
       {

           $image_name= date('dmy_H_s_i'); 
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name.'.'.$ext;
           $upload_path='public/media/countries_image/';
           $image_url=$upload_path.$image_full_name;
           $success=$image->move($upload_path,$image_full_name);
         
           $data['image']=$image_url;
           $countries=DB::table('countries_table')->insert($data);
                  $notification=array(
                                     'messege'=>'Successfully Countries Inserted ',
                                     'alert-type'=>'success'
                                      );
           return Redirect()->back()->with($notification);                      
       }
       else
       {
           $countries=DB::table('countries_table')->insert($data);
                  $notification=array(
                                     'messege'=>'Done!',
                                     'alert-type'=>'success'
                                     );
           return Redirect()->back()->with($notification); 
       }

   }



   public function Inactive($id)
   {   
     DB::table('countries_table')->where('id',$id)->update(['status'=> 0]);

     $notification=array(
                    'messege'=>'Successfully Countries Active',
                    'alert-type'=>'success'
                   );
     return Redirect()->back()->with($notification);

   }

   public function Active($id)
   {
     DB::table('countries_table')->where('id',$id)->update(['status'=> 1]);

     $notification=array(
                    'messege'=>'Successfully Countries Inactive',
                    'alert-type'=>'success'
                   );
     return Redirect()->back()->with($notification);
   }


   public function DeleteCountry($id)
   {
       $data=DB::table('countries_table')->where('id',$id)->first();
       $picture=$data->image;
       unlink($picture);

       DB::table('countries_table')->where('id',$id)->delete();
       $notification=array(
                       'messege'=>'Country Delete Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->back()->with($notification);     

   }

   
   public function EditCountry($id)
   {
     $country_info = DB::table('countries_table')->where('id',$id)->first();
     return view('admin.countries.editCountries',compact('country_info'));
   }

   
   public function UpdateCountry(Request $request,$id)
   {

       $oldimage=$request->old_image;
       $data=array();
       $data['name']=$request->name; 


       $image=$request->file('image');
           if ($image){              
               unlink($oldimage);
               $image_name= date('dmy_H_s_i');
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='public/media/countries_image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
             
               $data['image']=$image_url;
               $country=DB::table('countries_table')->where('id',$id)->update($data);
                       
                   $notification=array(
                    'messege'=>'Country Info Updated',
                    'alert-type'=>'success'
                   );
               return Redirect()->route('admin.countries')->with($notification);                      
           }else{
               $country=DB::table('countries_table')->where('id',$id)->update($data);
                        
                $notification=array(
                    'messege'=>'Country Info Update without Image !',
                    'alert-type'=>'success'
                     );
               return Redirect()->route('admin.countries')->with($notification); 
           }

       
   }

}
