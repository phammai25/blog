<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();
Route::get('/home','HomeController@index');
Route::get('/login','LoginController@index');
Route::get('/logged','LoggedController@index');
Route::get('/register','RegisterController@index');
Route::post('/registed','RegisterController@register');
Route::post('/checked','LoginController@checkLogin');
//admin

Route::prefix('admin')->group(function() {
Route::get('/adminlogin','backend\AdminLoginController@index');
Route::post('/adminchecked','backend\AdminLoginController@checkLogin');
Route::get('/adminlogged','backend\AdminLoggedController@index');
});


