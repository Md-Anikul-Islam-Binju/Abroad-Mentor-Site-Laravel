<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CountryDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function createCountry()
    {
        $country = DB::table('countries_table')->get();
        return view('admin.countries.addCountriesDetails',compact('country'));
    }

    
    public function index()
    {
                        
          $countryDetailInformation=DB::table('countries_details_table')
                                   ->join('countries_table','countries_details_table.country_id','countries_table.id')
                                   ->select('countries_details_table.*','countries_table.name')              
                                   ->get();
          return view('admin.countries.allConutriesDetails',compact('countryDetailInformation'));
         
    }

    public function storecountriesDetails(Request $request)
    {
 
        $data=array();
        $data['country_id']=$request->country_id; 
        $data['country_info']=$request->country_info; 
        $data['locals_info']=$request->locals_info; 
        $data['job_opportunities_info']=$request->job_opportunities_info; 
        $data['language_info']=$request->language_info; 
        $image=$request->file('image');
        if ($image) 
        {
 
            $image_name= date('dmy_H_s_i'); 
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/countries_details_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
          
            $data['image']=$image_url;
            $countries=DB::table('countries_details_table')->insert($data);
                   $notification=array(
                                      'messege'=>'Successfully Countries Details Inserted ',
                                      'alert-type'=>'success'
                                       );
            return Redirect()->back()->with($notification);                      
        }
        else
        {
            $countries=DB::table('countries_details_table')->insert($data);
                   $notification=array(
                                      'messege'=>'Done!',
                                      'alert-type'=>'success'
                                      );
            return Redirect()->back()->with($notification); 
        }
 
    }


    public function ViewCountry($id)
    {
        $view_country_details=DB::table('countries_details_table')
                   
                          ->join('countries_table','countries_details_table.country_id','countries_table.id')
                          ->select('countries_details_table.*','countries_table.name')  
                          ->where('countries_details_table.id',$id)
                          ->first();
       
        return view('admin.countries.countryDetailInformation',compact('view_country_details'));

    }

    public function EditCountriesDetails($id)
    {
      $country_details_info = DB::table('countries_details_table')->where('id',$id)->first();
      return view('admin.countries.editCountriesDetails',compact('country_details_info'));
    }

       
   public function UpdateCountrieDetails(Request $request,$id)
   {

       $oldimage=$request->old_image;
       $data=array();
       $data['country_id']=$request->country_id; 
       $data['country_info']=$request->country_info; 
       $data['locals_info']=$request->locals_info; 
       $data['job_opportunities_info']=$request->job_opportunities_info; 
       $data['language_info']=$request->language_info; 


       $image=$request->file('image');
           if ($image){              
               unlink($oldimage);
               $image_name= date('dmy_H_s_i');
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='public/media/countries_details_image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
             
               $data['image']=$image_url;
               $country_details=DB::table('countries_details_table')->where('id',$id)->update($data);
                       
                   $notification=array(
                    'messege'=>'Country Details Info Updated',
                    'alert-type'=>'success'
                   );
               return Redirect()->route('admin.allcountriesdetails')->with($notification);                      
           }else{
               $country_details=DB::table('countries_details_table')->where('id',$id)->update($data);
                        
                $notification=array(
                    'messege'=>'Country Details Info Update without Image !',
                    'alert-type'=>'success'
                     );
               return Redirect()->route('admin.allcountriesdetails')->with($notification); 
           }

       
   }




    

  
}
