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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts/new', 'PostController@create')
	->name('posts.new')
	->middleware('auth');

Route::get('/posts/{post}/edit', 'PostController@edit')
	->name('posts.edit')
	->middleware('auth');

Route::get('/posts/{post}', 'HomeController@show')
	->name('posts.show')
	->middleware('auth');
