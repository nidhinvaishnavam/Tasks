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

Route::get('/', 'PagesController@home');
// Route::get('/',function(){
// return view('welcome');
// });

Route::get('/contact', 'PagesController@contact');
   Route::get('/about', 'PagesController@about');
// Route::get('/project','ProjectController@index');
// Route::post('/project','ProjectController@store');
// Route::get('/project/create','ProjectController@create');

Route::resource('/project', 'ProjectController');


Route::patch('tasks/{task}', 'ProjectTaskController@update');
Route::post('/project/tasks/{project}', 'ProjectTaskController@store');
Route::get('/nidhin/{nidhin}', 'ProjectTaskController@use');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
