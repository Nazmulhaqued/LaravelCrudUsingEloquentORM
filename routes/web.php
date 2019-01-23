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

Route::get('/students','StudentController@index');
Route::get('/insertdata','StudentController@display');
Route::post('/add','StudentController@store');
Route::get('editdata/{id}','StudentController@edit');
Route::post('/update/{id}','StudentController@update');

Route::get('delete/{id}','StudentController@delete');