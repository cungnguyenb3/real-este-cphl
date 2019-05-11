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



Route::group(['prefix' => 'user'], function () {
	Route::get('index', [
		'as' 	=> 'user/index',
		'uses' 	=> 'PageController@homepage',
	]);
	Route::get('contact', [
		'as' 	=> 'user/contact',
		'uses' 	=> 'PageController@contact',
	]);
	Route::get('about', [
		'as' 	=> 'user/about',
		'uses' 	=> 'PageController@about',
	]);
	Route::get('blog', [
		'as' 	=> 'user/blog',
		'uses' 	=> 'PageController@blog',
	]);
	Route::get('properties', [
		'as' 	=> 'user/properties',
		'uses' 	=> 'PageController@properties',
	]);
	Route::get('rent', [
		'as' 	=> 'user/rent',
		'uses' 	=> 'PageController@rent',
	]);
	Route::get('buy', [
		'as' 	=> 'user/buy',
		'uses' 	=> 'PageController@buy',
	]);
	Route::get('login', [
		'as' 	=> 'user/login',
		'uses' 	=> 'PageController@login',
	]);
	Route::get('register', [
		'as' 	=> 'user/register',
		'uses' 	=> 'PageController@register',
	]);
}); 


Route::group(['prefix' => 'admin'], function () {

	Route::get('register',[
    'as' => 'register',
    'uses' =>'AdminController@getRegister']);

    Route::post('register',[
    'as' => 'register',
    'uses' =>'AdminController@postRegister']);

	Route::get('login',[
    'as' => 'adminlogin',
    'uses' =>'AdminController@getLogin']);

    Route::post('login',[
    'as' => 'login',
    'uses' =>'AdminController@postLogin']);


    Route::get('logout',[
    'as' => 'logout',
    'uses' =>'AdminController@postLogout']);

    Route::get('index',[
    'as' => 'adminindex',
    'uses' =>'AdminController@getIndex'])->middleware('adminlogin'); //get index for admin

    Route::get('post',[
    'as' => 'post',
    'uses' =>'AdminController@getPost'])->middleware('adminlogin');

    Route::get('profile',[
    'as' => 'profile',
    'uses' =>'AdminController@getProfile'])->middleware('adminlogin');

    Route::get('user',[
    'as' => 'user',
    'uses' =>'AdminController@getUser'])->middleware('adminlogin');

    Route::get('create',[
    'as' => 'adminCreate',
    'uses' =>'AdminController@getCreate'])->middleware('adminlogin');

    Route::post('create',[
    'as' => 'adminCreate',
    'uses' =>'AdminController@postCreate'])->middleware('adminlogin');

	Route::get('createBLog',[
    'as' => 'createBLog',
    'uses' =>'AdminController@getBlog'])->middleware('login');

    Route::post('createBLog',[
    'as' => 'createBLog',
    'uses' =>'AdminController@postBlog'])->middleware('login');

    Route::get('showblog',[
    'as' => 'adminshowblog',
    'uses' =>'AdminController@getShowblog'])->middleware('login');

    Route::get('deleteblog/{id}',[
    'as' => 'admindeleteblog',
    'uses' =>'AdminController@getDeleteBlog'])->middleware('login');

    Route::get('editblog/{id}',[
    'as' => 'admineditblog',
    'uses' =>'AdminController@getEditBlog'])->middleware('adminlogin');

    Route::post('editblog/{id}',[
    'as' => 'admineditblog',
    'uses' =>'AdminController@postEditBlog'])->middleware('adminlogin');
});
