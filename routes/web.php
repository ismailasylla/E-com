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

Route::get('/', 'FrontController@index');



Route::get('/laptops','FrontController@laptops')->name('laptops');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'FrontController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){

    Route::get('/', function(){

        return view('admin.index');


    })->name('admin.index');


    Route::resource('/product','ProductsController');
    Route::resource('/category','ProductsController');



});