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
    return view('register');
});
Route::get('/index','User_Controller@index');
Route::post('/save','User_Controller@save');
Route::get('/view','User_Controller@view');
Route::post('/delete','User_Controller@delete');
Route::post('/update','User_Controller@update');
Route::post('/edit','User_Controller@edit');
Route::post('/active','User_Controller@active');
Route::post('/inactive','User_Controller@inactive');
Route::get('/login_page','User_Controller@login_page');
Route::post('/login','User_Controller@login');
Route::get('/logout','User_Controller@logout');
