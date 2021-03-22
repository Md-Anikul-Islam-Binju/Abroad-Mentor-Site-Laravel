<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class StudentApplyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
   {
         $student_apply_information=DB::table('apply_student_table')->get();
         return view('admin.student.studentInformation',compact('student_apply_information'));
   }

   public function DeleteApplication($id)
   {

        DB::table('apply_student_table')->where('id',$id)->delete();
        $notification=array(
                       'messege'=>'Student Application Delete Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->back()->with($notification);   	


       
   }


   public function ViewApplication($id)
   {
       $application=DB::table('apply_student_table')

                      ->where('apply_student_table.id',$id)
                      ->first();
      
       return view('admin.student.studentDetailsInformation',compact('application'));
     
   }
}
