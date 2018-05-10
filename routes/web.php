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

Route::get('/home', 'userController@index');

Route::get('/profile', 'userController@profile');

Route::get('/create', 'userController@create');

Route::post('/create', 'userController@store');

Route::get('/photographers', 'userController@all');

Route::get('/user/{id}', 'userController@user');



