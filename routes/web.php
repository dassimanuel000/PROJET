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

Route::get('/','UserController@index')->name('dashboard');

Route::prefix('product')->group(function(){
Route::get('/','ProductController@index')->name('products.index');
Route::get('/list','ProductController@ListProducts')->name('products.list');
Route::get('/detail','ProductController@DetailProducts')->name('products.detail');
});

/**eeeeeeeessssssssssaaaaaaaaaaaaiiiiiiii */



Route::prefix('agenceA')->group(function(){
    Route::get('/','agenceAController@index')->name('agenceA.index');
    });
/**eeeeeeeessssssssssaaaaaaaaaaaaiiiiiiii */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
