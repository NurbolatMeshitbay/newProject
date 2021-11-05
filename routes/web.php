<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'ProductController@welcome');

    Route::get('/add', 'ProductController@add_page');
    Route::get('/list', 'ProductController@list_page');

    Route::get('/add/dvd', 'ProductController@add_dvd_page')->name('add_page.dvd');
    Route::post('/add/dvd', 'ProductController@add_dvd')->name('add_dvd');

    Route::get('/add/furniture', 'ProductController@add_furniture_page')->name('add_page.furniture');
    Route::post('/add/furniture', 'ProductController@add_furniture')->name('add_furniture');

    Route::get('/add/book', 'ProductController@add_book_page')->name('add_page.book');
    Route::post('/add/book', 'ProductController@add_book')->name('add_book');


});
