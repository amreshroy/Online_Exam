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
    return view('welcome');
});

//  <!-- 19-11-19 -->
// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
//  <!-- 19-11-19 -->

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// menu For welcome pages link
Route::get('/contact-us', 'FrontViewController@contact');

Route::get('/about-us', 'FrontViewController@about');


// menu for user home pages link
Route::get('/Reading', 'HomeController@reading');

Route::get('/Practice', 'HomeController@practice');

Route::get('/Exam', 'HomeController@exam');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// For admin dashbord

Route::group(['middleware' => ['auth','admin']], function (){
	Route::get('/admin', function(){
		return view('admin.dashboard');
	});
	Route::get('/registered','Admin\DashboardController@registered');
});
