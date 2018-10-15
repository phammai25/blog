<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoggedController extends Controller
{
    function index(){
    	return view('adminlogged');
    }
    
}
