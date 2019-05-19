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


Route::get('/create-customer', 'CustomerController@create');
Route::post('/create-customer', 'CustomerController@create_post');
Route::get('/get-customer', 'CustomerController@get');
Route::get('/edit-customer/{id}', ['as'=>'edit','uses'=>'CustomerController@edit']);
Route::post('/edit-customer/{id}', ['as'=>'edit_post','uses'=>'CustomerController@edit_post']);
Route::get('/delete-customer/{id}', ['as'=>'delete','uses'=>'CustomerController@delete']);