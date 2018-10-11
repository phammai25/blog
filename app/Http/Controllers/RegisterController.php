<?php

usernamespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(){
    	return view('register');
    }
  	function register()
  	{
  		if (isset($_POST['register'])) {

			$username = $_POST['username'];
		    $sdt = $_POST['sdt'];
		    $password = $_POST['password'];
		    $sdt = $_POST['sdt'];
		   
		     
		  
			$arr = [
			      
		         'username'=>$username,
		         'sdt'=> $sdt,
		         'password'=>$password,
		         'sdt'=>$diachi,
		         //'img'=>$img,
		];
		if(DB::table('user')->insert($arr)){
			echo"ghjkl;";
	 	} else {
	 		return view('register');
		}
		
			
		}
	}

}
