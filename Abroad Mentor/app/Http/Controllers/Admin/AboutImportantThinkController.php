<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class AboutImportantThinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    

   
    
   //Facilities Section


   public function index()
   {
          $important_fact=DB::table('about_important_table')->get();
          return view('admin.about.important_fact',compact('important_fact'));
        //return view('admin.about.important_fact');
   }


   public function storefact(Request $request)
   {
        $data=array();
        $data['total_countries']=$request->total_countries;
        $data['total_project']=$request->total_project;
        $data['total_universities']=$request->total_universities;
        $data['total_courses']=$request->total_courses;


        DB::table('about_important_table')->insert($data);
        $notification=array(
                       'messege'=>'Our Important Fact Data Insert Success',
                       'alert-type'=>'success'
                        );
        return Redirect()->back()->with($notification);
   }




   
   public function DeleteFact($id)
   {

       DB::table('about_important_table')->where('id',$id)->delete();
       $notification=array(
                       'messege'=>'Im[ortant Fact Delete Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->back()->with($notification);     

   }


   public function EditFact($id)
   {
     $abou_fact_info = DB::table('about_important_table')->where('id',$id)->first();
     return view('admin.about.edit_importantfact',compact('abou_fact_info'));
   }


   public function UpdateFact(Request $request,$id)
   {

       $data=array();
       $data['total_countries']=$request->total_countries;
       $data['total_project']=$request->total_project;
       $data['total_universities']=$request->total_universities;
       $data['total_courses']=$request->total_courses;
       $update = DB::table('about_important_table')->where('id',$id)->update($data);

       if ($update) {
           $notification=array(
                       'messege'=>'About Information Update Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->route('admin.fact')->with($notification);
       }

       else
       {

           $notification=array(
                       'messege'=>'About Information Do Not Update',
                       'alert-type'=>'success'
                        );
       return Redirect()->route('admin.fact')->with($notification);

       }
       
   }
}
