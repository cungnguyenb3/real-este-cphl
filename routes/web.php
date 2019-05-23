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

Route::get('test', [
	'as' 	=> 'test',
	'uses' 	=> 'PageController@getTest',
]);

Route::get('/', [
	'as' 	=> 'index',
	'uses' 	=> 'PageController@getIndex',
]);

Route::get('about', [
	'as' 	=> 'about',
	'uses' 	=> 'PageController@getAbout',
]);

Route::post('/file-upload', [
    'as' => 'file-upload',
    'uses' => 'UploadController@postImages',
]);

Route::get('properties-details', [
	'as' 	=> 'properties-details',
	'uses' 	=> 'PageController@getPropertiesDetails',
]);

Route::get('submit-property', [
	'as' 	=> 'submit-property',
	'uses' 	=> 'PageController@getSubmitProperty',
]);

Route::get('login', [
	'as' 	=> 'getLogin',
	'uses' 	=> 'PageController@getLogin',
]);

Route::post('login', [
	'as' 	=> 'postLogin',
	'uses' 	=> 'PageController@postLogin',
]);

Route::get('register', [
	'as' 	=> 'getRegister',
	'uses' 	=> 'PageController@getRegister',
]);

Route::post('register', [
	'as' 	=> 'postRegister',
	'uses' 	=> 'PageController@postRegister',
]);

Route::get('logout',[
    'as'    => 'getLogout',
    'user'  => 'PageController@getLogout'
]);

Route::get('logout',[
    'as' => 'getLogout',
    'uses' =>'PageController@getLogout'
]);

Route::post('post',[
    'as' => 'postProperty',
    'uses' =>'PostController@postProperty'
]);

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
