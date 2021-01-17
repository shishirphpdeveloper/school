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

Route::get('/', function () {
    return view('index');
});


Route::get('aboutus', 'Usercontroller@aboutus');
Route::get('contactus', 'Usercontroller@contactus');
Route::get('userregister', 'Usercontroller@userregister');
Route::get('userlogin', 'Usercontroller@userlogin')->name('userlogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'],function(){
	Route::get('viewstudent','Usercontroller@viewstudent');
	Route::get('editstudent/{id}','Usercontroller@editstudent');
	Route::post('updatestudent/{id}','Usercontroller@updatestudent');
	Route::get('deletestudent/{id}','Usercontroller@deletestudent');
	Route::post('addstudent', 'UserController@addstudent');
	Route::get('changepassword','Usercontroller@changepassword');
	Route::post('updatepassword', 'UserController@updatepassword')->name('updatepassword');
});

Route::group(['middleware'=>'Myadmin'],function(){
	Route::get('admin/dashboard', 'AdminController@admindashboard')->name('admin.dashboard');
	Route::get('admin/schools', 'AdminController@schools')->name('admin.schools');	
	Route::get('admin/banners', 'AdminController@banners')->name('admin.banners');
	Route::get('admin/enquires', 'AdminController@enquires')->name('admin.enquires');
	Route::get('changepassword','Usercontroller@changepassword')->name('changepassword');
	Route::post('updatepassword', 'UserController@updatepassword')->name('updatepassword');		
});



