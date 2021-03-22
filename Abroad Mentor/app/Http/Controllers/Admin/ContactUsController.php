<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
   public function index()
   {
         $contact=DB::table('contactus_table')->get();
         return view('admin.contact.contactus',compact('contact'));
        //return view('admin.contact.contactus');
   }

   public function storecontact(Request $request)
   {
        $data=array();
        $data['location']=$request->location;
        $data['phone']=$request->phone;
        $data['mail']=$request->mail;
        $data['address']=$request->address;

        DB::table('contactus_table')->insert($data);
        $notification=array(
                       'messege'=>'Contact Us Data Insert Success',
                       'alert-type'=>'success'
                        );
        return Redirect()->back()->with($notification);
   }


   public function Inactive($id)
   {   
     DB::table('contactus_table')->where('id',$id)->update(['status'=> 0]);

     $notification=array(
                    'messege'=>'Successfully Contact Active',
                    'alert-type'=>'success'
                   );
     return Redirect()->back()->with($notification);

   }

   public function Active($id)
   {
     DB::table('contactus_table')->where('id',$id)->update(['status'=> 1]);

     $notification=array(
                    'messege'=>'Successfully Contact Inactive',
                    'alert-type'=>'success'
                   );
     return Redirect()->back()->with($notification);
   }

   
   public function DeleteContactUs($id)
   {

        DB::table('contactus_table')->where('id',$id)->delete();
        $notification=array(
                       'messege'=>'Slider Delete Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->back()->with($notification);   	

   }


   public function EditContactUs($id)
   {
     $contact_info = DB::table('contactus_table')->where('id',$id)->first();
     return view('admin.contact.edit_contactus',compact('contact_info'));
   }



   public function UpdateContactUs(Request $request,$id)
   {

       $data=array();
       $data['location']=$request->location;
       $data['phone']=$request->phone;
       $data['mail']=$request->mail;
       $data['address']=$request->address;
       $update = DB::table('contactus_table')->where('id',$id)->update($data);

     if ($update) {
       $notification=array(
                       'messege'=>'Contact Us Information Update Success',
                       'alert-type'=>'success'
                        );
       return Redirect()->route('admin.contact')->with($notification);
     }

     else
     {

       $notification=array(
                       'messege'=>'Contact Us Information Do Not Update',
                       'alert-type'=>'success'
                        );
       return Redirect()->route('admin.contact')->with($notification);

     }
     
   }

}
