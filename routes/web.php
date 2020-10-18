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
//     return view('index');
// });

Route::get('/', 'PostController@list')->name('list.post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@index')->name('post');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/guest-comment', 'CommentController@index')->name('comment.guest');
Route::get('/comment/{id}', 'CommentController@create')->name('comment.create');
Route::post('/comment', 'CommentController@store')->name('comment.store');
