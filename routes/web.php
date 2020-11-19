<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

// admin dashboard
Route::get('/', function () {
    return view('Frontend.index');
})->name('index');

// article
Route::get('/articles', 'BackendController@articles')->name('articles');
Route::get('/add_article', 'BackendController@add_article')->name('add_article')->middleware('auth');
Route::post('/add_article', 'BackendController@createArticle')->name('createArticle')->middleware('auth');
Route::get('/articles/category/{id}', 'BackendController@articles_category');
Route::get('/articles/archive/{id}', 'BackendController@articles_archive');
Route::get('/show_articleSolo/{id}', 'BackendController@show_articleSolo');

//pagoda
Route::get('/pagodas', 'BackendController@pagodas')->name('pagodas');
Route::get('/add_pagoda', 'BackendController@add_pagoda')->name('add_pagoda')->middleware('auth');
Route::post('/add_pagoda', 'BackendController@createPagoda')->name('createPagoda')->middleware('auth');
Route::get('/show_pagodaSolo/{id}', 'BackendController@show_pagodaSolo');
Route::post('/search_pagodas', 'BackendController@search_pagodas')->name('search_pagodas');

//hotel
Route::get('/hotels', 'BackendController@hotels')->name('hotels');
Route::get('/add_hotel', 'BackendController@add_hotel')->name('add_hotel')->middleware('auth');
Route::post('/add_hotel', 'BackendController@createHotel')->name('createHotel')->middleware('auth');
Route::get('/show_hotelSolo/{id}', 'BackendController@show_hotelSolo')->name('show_hotelSolo');
Route::get('/hotels/show_ratingStar/{id}', 'BackendController@show_ratingStar');

Route::get('/about', 'BackendController@about')->name('about');
Route::post('/contact', 'BackendController@contact')->name('contact');
Auth::routes();


Auth::routes();

