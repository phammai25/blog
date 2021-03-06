<?php

namespace App\Http\Controllers;
use Validator, Input, Redirect;
use Illuminate\Http\Request;
use Auth,Session;
use DB;
use App\User;

class LoginController extends Controller
{
    function index(){
    	return view('login');
    }
    
    public function checkLogin()
    {   
    // validate the info, create rules for the inputs
        if(isset($_SESSION['email'])){
            echo $_SESSION['email'];die();
 
            return Redirect::to('/logged');
        }
        else{
            $rules = array(
                'email'    => 'required|email',
                'password' => 'required|alphaNum|min:3',
           // make sure the email is an actual email
         // password can only be alphanumeric and has to be greater than 3 characters
                  );

        // run the validation rules on the inputs from the form
                $validator = Validator::make(Input::all(), $rules);

         // if the validator fails, redirect back to the form
                if ($validator->fails()) {
                    return Redirect::to('/login')
                        ->withErrors($validator) // send back all errors to the login form
                        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
                  } else {
                    // create our user data for the authentication
                    $_SESSION['email'] =Input::get('email');
                    $_SESSION['password'] = Input::get('password');
                    $userdata = array(
                        'email'     => $_SESSION['email'],
                        'password'  => $_SESSION['password']
                    );


        //             // attempt to do the login
                        if (Auth::attempt($userdata)) {

                             // validation successful!
                             // redirect them to the secure section or whatever
                           
                                 return Redirect::to('/logged');
                            
        //                      /* for now we'll just echo success (even though echoing in a controller is bad)*/
        //                     // echo 'SUCCESS!';

                        } else {        
        //                     // validation not successful, send back to form 
                            return Redirect::to('/login');

                         }
                    
                 //}
            }
        }
    }
}
        
    

