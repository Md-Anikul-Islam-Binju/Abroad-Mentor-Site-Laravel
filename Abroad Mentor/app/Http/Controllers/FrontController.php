<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{

    public function ourFacility()
    {
        return view('pages.ourFacility');
    }

    public function ViewSingleBlog($id)
    {
        $blog=DB::table('blogs')

                       ->where('blogs.id',$id)
                       ->first();
                       return view('pages.blog_details',compact('blog'));

       
    }



    public function applicationProcess(){
        return view('pages.application_process');
    }


    public function tnqMsg(){
        return view('pages.thanks');
    }


    public function ieltsInfo(){
        return view('pages.ielts');
    }





}
