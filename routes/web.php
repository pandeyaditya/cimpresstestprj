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

Route::get('/user/signup','UserController@signup');

Route::post('/user/checksignup','UserController@checksignup');

// Route::get('/user/productspage', 'UserController@products');

Route::get('/user/dashboard','UserController@dashboard');

Route::get('/logout','UserController@logout');

Route::post('/user/checklogin','UserController@checkuser');

Route::get('/checksession','UserController@checksession');

/* Routes for products */
Route::get('/allproducts','UserController@allproducts');
Route::get('/getproducts','ProductController@getproducts');
Route::get('/product/addtocart/{id}','ProductController@addtocart');
Route::get('/flushcart','ProductController@flushcart');

Route::get('/cart','ProductController@getcart');
Route::get('/checkout','ProductController@checkout');
Route::post('/confirmorder','ProductController@confirmorder');
/*
    Routes for Admin
*/

Route::get('/user/addcategory','UserController@addcategory');

Route::get('/user/addproduct','UserController@addproduct');

Route::post('/user/savecategory','UserController@savecategory');

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