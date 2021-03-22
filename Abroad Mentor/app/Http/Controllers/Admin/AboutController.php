<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    

   
    
   //Facilities Section

   public function indexFacility()
   {
          $ourFaciliti=DB::table('facilities_table')->get();
          return view('admin.about.ourFacilities',compact('ourFaciliti'));
        //return view('admin.about.ourFacilities');
   }


   public function storefacilites(Request $request)
   {
        $data=array();
        $data['university_admission']=$request->university_admission;
        $data['visa_process']=$request->visa_process;
        $data['immigration']=$request->immigration;


        DB::table('facilities_table')->insert($data);
        $notification=array(
                       'messege'=>'Our Facilities Data Insert Success',
                       'alert-type'=>'success'
                        );
        return Redirect()->back()->with($notification);
   }


   public function InactiveFacilities($id)
   {   
     DB::table('facilities_table')->where('id',$id)->update(['status'=> 0]);

     $notification=array(
                    'messege'=>'Successfully Facilities Active',
                    'alert-type'=>'success'
                   );
     return Redirect()->back()->with($notification);

   }

   public function ActiveFacilities($id)
   {
     DB::table('facilities_table')->where('id',$id)->update(['status'=> 1]);

     $notification=array(
                    'messege'=>'Successfully Facilities Inactive',
                    'alert-type'=>'success'
                   );
     return Redirect()->back()->with($notification);
   }


   public function DeleteFacilities($id)
   {
        DB::table('facilities_table')->where('id',$id)->delete();
        $notification=array(
                       'messege'=>'Facilities Delete Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->back()->with($notification);   	

   }

   public function ViewFacilities($id)
   {
       $ourFaciliti=DB::table('facilities_table')

                      ->where('facilities_table.id',$id)
                      ->first();
      
       return view('admin.about.ourFacilitiesDetails',compact('ourFaciliti'));

      
   }

   public function EditFacilities($id)
   {
     $facilities_info = DB::table('facilities_table')->where('id',$id)->first();
     return view('admin.about.editOurFacility',compact('facilities_info'));
   }

   public function UpdateFacilities(Request $request,$id)
   {

        $data=array();
        $data['university_admission']=$request->university_admission;
        $data['visa_process']=$request->visa_process;
        $data['immigration']=$request->immigration;
        $update = DB::table('facilities_table')->where('id',$id)->update($data);

       if ($update) {
           $notification=array(
                       'messege'=>'Facilities Information Update Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->route('admin.facility')->with($notification);
       }

       else
       {

           $notification=array(
                       'messege'=>'Facilities Information Do Not Update',
                       'alert-type'=>'success'
                        );
       return Redirect()->route('admin.facility')->with($notification);

       }
       
   }





   //Work Flow Section

   public function indexWorkFlow()
   {
          $ourWork=DB::table('workflow_table')->get();
          return view('admin.about.ourWorkFlow',compact('ourWork'));
         
   }

   public function storeWorkFlow(Request $request)
   {
        $data=array();
        $data['online_assessment']=$request->online_assessment;
        $data['invited_to_meet']=$request->invited_to_meet;
        $data['application_process_initiated']=$request->application_process_initiated;
        $data['application_submitted']=$request->application_submitted;
        $data['visa_submitted']=$request->visa_submitted;
        $data['flights_booked']=$request->visa_submitted;


        DB::table('workflow_table')->insert($data);
        $notification=array(
                       'messege'=>'Our Work Flow Data Insert Success',
                       'alert-type'=>'success'
                        );
        return Redirect()->back()->with($notification);
   }

   public function DeleteWorkFlow($id)
   {
        DB::table('workflow_table')->where('id',$id)->delete();
        $notification=array(
                       'messege'=>'Work Flow Delete Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->back()->with($notification);   	

   }

   public function EditWorkFlow($id)
   {
     $workflow_info = DB::table('workflow_table')->where('id',$id)->first();
     return view('admin.about.editOurWorkFlow',compact('workflow_info'));
   }

   public function UpdateWorkFlow(Request $request,$id)
   {

        $data=array();
        $data['online_assessment']=$request->online_assessment;
        $data['invited_to_meet']=$request->invited_to_meet;
        $data['application_process_initiated']=$request->application_process_initiated;
        $data['application_submitted']=$request->application_submitted;
        $data['visa_submitted']=$request->visa_submitted;
        $data['flights_booked']=$request->visa_submitted;
        $update = DB::table('workflow_table')->where('id',$id)->update($data);

       if ($update) {
            $notification=array(
                       'messege'=>'Work Flow Information Update Success',
                       'alert-type'=>'success'
                        );
            return Redirect()->route('admin.work.flow')->with($notification);
       }

       else
       {

           $notification=array(
                       'messege'=>'Work Flow Information Do Not Update',
                       'alert-type'=>'success'
                        );
          return Redirect()->route('admin.work.flow')->with($notification);

       }
       
   }



    //Page About Section
    public function indexAboutUs()
    {
           $about=DB::table('aboutus_table')->get();
           return view('admin.about.aboutus',compact('about'));
             
    }


    public function storeAboutUs(Request $request)
    {

        $data=array();
        
        $data['name']=$request->name; 
        $data['description']=$request->description;


        $image=$request->file('image');
        if ($image) 
        {

            $image_name= date('dmy_H_s_i'); 
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/about_us_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
          
            $data['image']=$image_url;
            $about_us=DB::table('aboutus_table')->insert($data);
                   $notification=array(
                                      'messege'=>'Successfully Abou Us Inserted ',
                                      'alert-type'=>'success'
                                       );
            return Redirect()->back()->with($notification);                      
        }
        else
        {
            $about_us=DB::table('aboutus_table')->insert($data);
                   $notification=array(
                                      'messege'=>'Done!',
                                      'alert-type'=>'success'
                                      );
            return Redirect()->back()->with($notification); 
        }

    }


    public function DeleteAboutUs($id)
    {
        $data=DB::table('aboutus_table')->where('id',$id)->first();
        $picture=$data->image;
        unlink($picture);

        DB::table('aboutus_table')->where('id',$id)->delete();
        $notification=array(
                        'messege'=>'About Us Info Delete Success',
                        'alert-type'=>'success'
                         );
        return Redirect()->back()->with($notification);     

    }


    public function EditAboutUs($id)
    {
      $aboutus_info = DB::table('aboutus_table')->where('id',$id)->first();
      return view('admin.about.editAboutus',compact('aboutus_info'));
    }


    public function UpdateAboutUs(Request $request,$id)
    {
 
        $oldimage=$request->old_image;
        $data=array();
        $data['name']=$request->name; 
        $data['description']=$request->description;


        $image=$request->file('image');
            if ($image){              
                unlink($oldimage);
                $image_name= date('dmy_H_s_i');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/about_us_image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['image']=$image_url;
                $aboutus=DB::table('aboutus_table')->where('id',$id)->update($data);
                        
                    $notification=array(
                     'messege'=>'About Us Info Updated',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.about.us')->with($notification);                      
            }else{
                $aboutus=DB::table('aboutus_table')->where('id',$id)->update($data);
                         
                 $notification=array(
                     'messege'=>'About Us Info Update without Image !',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('admin.about.us')->with($notification); 
            }
 
        
    }
}
