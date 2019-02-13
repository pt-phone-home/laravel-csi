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

Route::get('/', 'PagesController@index');
Route::get('/projects', 'PagesController@projects');
Route::get('/contact', 'PagesController@contact');
Route::get('/news', 'PagesController@news');
Route::get('show/{id}', 'PagesController@show');

Route::get('/admin', 'ArticlesController@index')->middleware('auth.basic');
Route::get('/show/{id}', 'ArticlesController@show');
Route::get('admin/createarticle', 'ArticlesController@create')->middleware('auth.basic');
Route::post('admin/create', 'ArticlesController@store')->middleware('auth.basic');

Route::get('admin/{id}/edit', 'ArticlesController@edit')->middleware('auth.basic');
Route::put('admin/{id}', 'ArticlesController@update')->middleware('auth.basic');
Route::delete('admin/{id}', 'ArticlesController@destroy')->middleware('auth.basic');


// Route::post('/login/custom', [
//     'uses' => 'LoginController@login',
//     'as' => 'login.custom'
//     ]);


