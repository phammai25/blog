<?php
namespace App\Http\Controllers;
use Input,Hash,Redirect;
use DB;
use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
    function index(){
    	return view('register');
    }
  	function register()
  	{
			$arr = [
			      
		         'username'=>Input::get('username'),
		         'password'=>Hash::make(Input::get('password')),
		         'sdt'=> Input::get('sdt'),
		         'email'=>Input::get('email'),
		         'diachi'=>Input::get('diachi'),
		         //'img'=>$img,
		];
		if(DB::table('user')->insert($arr)){
			return Redirect::to(url('/login'));
	 	} else {
	 		return view('register');
		}
	}

}
