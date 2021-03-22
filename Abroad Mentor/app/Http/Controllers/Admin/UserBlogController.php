<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserBlogController extends Controller
{
    public function blog()
    {
    	$blog=DB::table('blogs')->get();
    	return view('blog.blog_page',compact('blog'));
    }


    public function singleblogpage($id)
    {
    	     $blog=DB::table('blogs')
                       ->where('blogs.id',$id)
                       ->first();
       
             return view('blog.single_blog',compact('blog'));
    }
}
