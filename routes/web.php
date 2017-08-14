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



Route::get('/profile',[

    'uses'=> 'UserController@profile',
    'as'=> 'user.profile'
]);

Route::post('/profile',[

    'uses'=> 'UserController@update_avatar',
    'as'=> 'user.profile'
]);

Route::get('/contact',[

    'uses'=> 'ContactController@contact',
    'as'=> 'contact.contact'
]);








Route::get('/products','FrontController@products')->name('products');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'FrontController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::group(['prefix'=>'admin', 'middleware'=> ['auth','admin']], function (){

    Route::get('/', function(){

        return view('admin.index');


    })->name('admin.index');


    Route::resource('/product','ProductsController');
    Route::resource('/category','CategoriesController');



});
Route::resource('/address','AddressController');


Route::get('/checkout','CheckoutController@step1');
Route::get('/shipping-info','CheckoutController@shipping')->name('checkout.shipping');


