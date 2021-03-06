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

/*
Route::get('/', function () {
    return view('welcome');
});
*/




//Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);



Route::get('/', [
    'as' => 'index',
    'uses' => 'HomeController@index'
]);

Route::get('/post/get/{id}', 'PostController@get');

Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');




//Route::get('user', 'UserController@showProfile');

//Route::controller('user', 'UserController');
