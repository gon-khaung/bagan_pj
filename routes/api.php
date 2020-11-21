<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/articles','ApiController@articles');
Route::get('/hotels', 'ApiController@hotels');
Route::get('/pagodas', 'ApiController@pagodas');

Route::get('/articles/detail/{id}', 'ApiController@article_detail');
Route::get('/articles/detail/background/{id}','ApiController@article_detail_background');
Route::get('/articles/detail/content_photos/{id}','ApiController@article_detail_content_photos');
Route::get('/articles/popular_articles','ApiController@article_popular_articles');
Route::get('/articles/local_articles','ApiController@article_local_articles');
Route::get('/articles/global_articles','ApiController@article_global_articles');
Route::get('/articles/environmental_articles','ApiController@article_environmental_articles');

// pagoda
Route::get('/pagodas/detail/{id}', 'ApiController@pagodas');
Route::get('/pagodas/detail/background/{id}', 'ApiController@pagoda_detail_background');
Route::get('/pagodas/detail/content_photos/{id}', 'ApiController@pagoda_detail_content_photos');
Route::get('/pagodas/detail/near_hotels/{id}', 'ApiController@pagoda_near_hotels');

// hotel
Route::get('/hotels/detail/{id}', 'ApiController@hotel_detail');
Route::get('/hotels/detail/background/{id}', 'ApiController@hotel_detail_background');
Route::get('/hotels/detail/content_photos/{id}', 'ApiController@photel_detail_content_photos');
Route::get('/hotels/five_star', 'ApiController@hotel_five_star');
Route::get('/hotels/four_star', 'ApiController@hotel_four_star');
Route::get('/hotels/three_star', 'ApiController@hotel_three_star');
Route::get('/hotels/detail/near_pagodas/{id}', 'ApiController@hotel_near_pagodas');


//index
Route::get('/index/sunset', 'ApiController@sunset');
Route::post('/index/contact', 'ApiController@contact');