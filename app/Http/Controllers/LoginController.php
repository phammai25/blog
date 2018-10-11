<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class LoginController extends Controller
{
    function index(){
    	return view('login');
    }
    
    function checkLogin()
    {
    	
			return view('checked');
    	

    	
    // 	if(isset($_SESSION['username']))
    // 	{
    // 		header('Location:http://127.0.0.1:8000/checked');
    // 	}
    // 	else{
    // 		if(isset($_POST['login'])){
    				
    				
				// 	$_SESSION['username'] = $_POST['username'];
	   //  			$_SESSION['password'] = $_POST['password'];
	   //  			$login = DB::table('user')->where(['username'->$_SESSION['username'],'password'=>$_SESSION['password']]);

				// 	if(count($login)>0)
				// 	{	
						
				// 		header("Location:http://127.0.0.1:8000/checked");
				// 	}
				// 	else{
				// 		return view('login');
				// }				
	   // 		}
    // 	}
	}
}
