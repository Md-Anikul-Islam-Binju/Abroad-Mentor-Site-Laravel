<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TeamMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $team=DB::table('team_member_table')->get();
        return view('admin.ourTeam.team',compact('team'));
    }

    public function storeTeam(Request $request)
    {

        $data=array();
        
        $data['name']=$request->name;
        $data['phone']=$request->phone;  
        $data['mail']=$request->mail; 
        $data['address']=$request->address; 
        $data['jobposition']=$request->jobposition; 

        $image=$request->file('image');
        if ($image) 
        {

            $image_name= date('dmy_H_s_i'); 
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/media/team_member/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
          
            $data['image']=$image_url;
            $team=DB::table('team_member_table')->insert($data);
                   $notification=array(
                                      'messege'=>'Successfully Team Meamber Inserted ',
                                      'alert-type'=>'success'
                                       );
            return Redirect()->back()->with($notification);                      
        }
        else
        {
            $team=DB::table('team_member_table')->insert($data);
                   $notification=array(
                                      'messege'=>'Done!',
                                      'alert-type'=>'success'
                                      );
            return Redirect()->back()->with($notification); 
        }

    }


    public function DeleteTeam($id)
    {
    	$data=DB::table('team_member_table')->where('id',$id)->first();
    	$image=$data->image;
    	unlink($image);
    	DB::table('team_member_table')->where('id',$id)->delete();
    	$notification=array(
                        'messege'=>'Team Member Delete Success',
                        'alert-type'=>'success'
                         );
        return Redirect()->back()->with($notification);   	

    }


    public function EditTeam($id)
    {
    	$team_info = DB::table('team_member_table')->where('id',$id)->first();
    	return view('admin.ourTeam.edit_team',compact('team_info'));
    }


    
    public function UpdateTeam(Request $request,$id)
    {



        $oldimage=$request->old_image;
        $data=array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;  
        $data['mail']=$request->mail; 
        $data['address']=$request->address; 
        $data['jobposition']=$request->jobposition; 
        $image=$request->file('image');
            if ($image){              
                unlink($oldimage);
                $image_name= date('dmy_H_s_i');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/media/team_member/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['image']=$image_url;
                $team=DB::table('team_member_table')->where('id',$id)->update($data);
                        
                    $notification=array(
                     'messege'=>'Successfully Team Member Info Updated',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('admin.team')->with($notification);                      
            }else{
                $team=DB::table('team_member_table')->where('id',$id)->update($data);
                         
                 $notification=array(
                     'messege'=>'Update without Image Team Member Info !',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('admin.team')->with($notification); 
            }

    	
    }
}
