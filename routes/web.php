<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name("home");

Route::get('/posts/create', 'App\Http\Controllers\PostController@create');

Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show');

Route::get('/posts/tags/{tag}', 'App\Http\Controllers\TagController@index');

Route::post('/posts', 'App\Http\Controllers\PostController@store');

Route::post('/posts/{post}/comments', 'App\Http\Controllers\CommentController@store');

Route::get('/', 'App\Http\Controllers\TasksController@index');

Route::get('/tasks/{task}', 'App\Http\Controllers\TasksController@show');

Route::get('/register', 'App\Http\Controllers\RegistrationController@create');

Route::post('/register', 'App\Http\Controllers\RegistrationController@store');

Route::get('/login','App\Http\Controllers\SessionController@create');
Route::post('/login','App\Http\Controllers\SessionController@store');

Route::get('/logout','App\Http\Controllers\SessionController@destroy');

