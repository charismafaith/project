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

Route::prefix('/')->group( function(){
    


Route::get('/','StudentController@index');
	Route::get('create','StudentController@create');
	Route::post('store','StudentController@store');
	Route::get('edit/{id}','StudentController@edit');
	Route::post('update/{id}','StudentController@update');
	Route::get('status/{id}','StudentController@status');
	Route::get('delete/{id}','StudentController@destroy');
	
	Route::get('create_student','StudentController@create_student');
	Route::post('add_student','StudentController@add_student');
	
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


