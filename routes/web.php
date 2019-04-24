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

Route::get('/', 'UserController@index');

Route::get('/user','UserController@index');

Route::get('/user/test','UserController@test');

Route::get('/user/dashboard','UserController@dashboard');

Route::get('/user/logout','UserController@logout');

Route::post('/user/checklogin','UserController@checkuser');

/* Route for Address Application */

Route::get('/user/admindash','UserController@loadadmin');
Route::get('/user/adminaddress','UserController@loadaddress');
Route::get('/user/adminprofile','UserController@loadprofile');
Route::get('/user/addaddress','UserController@addaddress');
Route::post('/user/insertaddress','UserController@insertaddress');

Route::get('/user/editaddress/{id}','UserController@editaddress');
Route::post('/user/updateaddress','UserController@updateaddress');
/* Route for Address Application ends */

Route::get('/user/adminposts','UserController@loadposts');

Route::get('/user/addpost','UserController@addnewpost');

Route::post('/user/insertpost','UserController@insertpost');

Route::get('/user/editpost/{id}','UserController@editpost');

Route::post('/user/updatepost','UserController@updatepost');

Route::get('/user/editpostadmin/{id}','UserController@editpostadmin');

Route::get('/user/viewpost/{id}','UserController@viewpost');

Route::get('/user/viewpostadmin/{id}','UserController@viewpostadmin');

Route::post('/user/updatepostadmin','UserController@updatepostadmin');

Route::get('/user/deletepost/{id}','UserController@deletepost');