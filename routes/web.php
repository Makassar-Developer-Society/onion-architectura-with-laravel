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

// use Illuminate\Routing\Route;
use Illuminate\Routing\RouteGroup;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::get('/customer','CustomerController@index')->name('index.customer');
    Route::get('/customer-create','CustomerController@create')->name('create.customer');
    Route::post('/customer-store','CustomerController@store')->name('store.customer');
    Route::get('customer-edit/{id}','CustomerController@edit')->name('edit.customer');
    Route::post('customer-update/{id}','CustomerController@update')->name('update.customer');
    Route::get('customer-delete/{id}','CustomerController@destroy')->name('delete.customer');

});