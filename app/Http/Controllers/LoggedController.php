<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class LoggedController extends Controller
{
    function index(){
    	$post = Post::all();
        return view('logged')->with('post',$post);
    }
}
