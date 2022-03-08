<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userstest;
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

Route::get('/', function () {
    return view('welcome');
});


//submit html form
//Route::view('/userview',"userview");
//Route::post('/usercontroller',"UserController@formSubmit");

//Route::get('/hello',function(){
 // return view('subviews.Hello');
 

//uploading a file
//Route::Post('/upload',"Userstest@index");
//Route::view('/form','userform');

//update database with HTML Form
Route::view('/form',"signupview");
Route::post('update',"Signup@update");