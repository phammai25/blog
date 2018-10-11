<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class HomeController extends Controller
{
   
    public function index()
    {	
    	$post = Post::all();
        return view('home')->with('post',$post);
    }
    
    // public function getPost()
    // {
    //     $sql = DB::table('post')->get();
    // }
}
