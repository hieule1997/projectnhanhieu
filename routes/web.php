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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/tintuc', 'HomeController@blog')->name('blog');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/congdong', 'HomeController@blogcd')->name('blogcd');
Route::get('/lienhe', 'HomeController@contact')->name('contact');
Route::get('/thuvien', 'HomeController@library')->name('library');
Route::get('/duan', 'HomeController@project')->name('project');
Route::post('/feedback', 'HomeController@feedback')->name('feedback');
Auth::routes();
Route::resource('post', 'PostController');
Route::resource('news', 'NewsController');
Route::resource('video', 'VideoController');
Route::resource('image', 'ImageController');
Route::resource('project', 'ProjectController');
Route::resource('profile', 'ProfileController');

