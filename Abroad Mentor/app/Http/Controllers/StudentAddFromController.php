<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentAddFromController extends Controller
{
    
    
    public function index(){
        return view('pages.student_apply');
    }


    public function storestudentinfo(Request $request)
    {


        $validatedData = $request->validate([

                       
                         'phone' => 'required|unique:apply_student_table|max:11',
                         'email' => 'required|unique:apply_student_table|max:50',
                        

                       ]);  



         $data=array();
         $data['fname']=$request->fname;
         $data['lname']=$request->lname;
         $data['phone']=$request->phone;
         $data['email']=$request->email;
         $data['age']=$request->age;
         $data['other_country_name']=$request->other_country_name;

         $data['united_kingdom']=$request->united_kingdom;
         $data['united_state']=$request->united_state;
         $data['canada']=$request->canada;
         $data['newzealand']=$request->newzealand;
         $data['sweden']=$request->sweden;
         $data['denmark']=$request->denmark;
         $data['malaysia']=$request->malaysia;
         $data['china']=$request->china;
         $data['germany']=$request->germany;
         $data['other']=$request->other;

         $data['ssc']=$request->ssc;
         $data['o_level']=$request->o_level;
         $data['hsc']=$request->hsc;
         $data['a_level']=$request->a_level;
         $data['diploma']=$request->diploma;
         $data['honours']=$request->honours;
         $data['masters']=$request->masters;
         $data['phd']=$request->phd;
         $data['none']=$request->none;

         $data['dhaka']=$request->dhaka;
         $data['chittagong']=$request->chittagong;
         $data['sylhet']=$request->sylhet;
         $data['rajshahi']=$request->rajshahi;
         $data['khulna']=$request->khulna;
         $data['barisal']=$request->barisal;
         $data['mymensingh']=$request->mymensingh;
         $data['rangpur']=$request->rangpur;
 
 
         $datainput=DB::table('apply_student_table')->insert($data);
         if ($datainput) {
            $notification=array(
                        'messege'=>'You Apply Success',
                        'alert-type'=>'success'
                         );
        return Redirect()->route('tnq.apply')->with($notification);
        }
 
        else
        {
 
            $notification=array(
                        'messege'=>'Apply Do Not Success',
                        'alert-type'=>'success'
                         );
        return Redirect()->route('tnq.apply')->with($notification);
 
        }
    }
}
