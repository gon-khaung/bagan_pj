<?php

// use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('users','ApiController@getUsers');


Route::middleware('auth:api')->get('articles','ApiController@articles');
Route::middleware('auth:api')->get('hotels', 'ApiController@hotels');
Route::middleware('auth:api')->get('pagodas', 'ApiController@pagodas');

Route::middleware('auth:api')->get('articles/detail/{id}', 'ApiController@article_detail');
Route::middleware('auth:api')->get('articles/detail/background/{id}','ApiController@article_detail_background');
Route::middleware('auth:api')->get('articles/detail/content_photos/{id}','ApiController@article_detail_content_photos');
Route::middleware('auth:api')->get('articles/popular_articles','ApiController@article_popular_articles');
Route::middleware('auth:api')->get('articles/local_articles','ApiController@article_local_articles');
Route::middleware('auth:api')->get('articles/global_articles','ApiController@article_global_articles');
Route::middleware('auth:api')->get('articles/environmental_articles','ApiController@article_environmental_articles');

// pagoda
Route::middleware('auth:api')->get('pagodas/detail/{id}', 'ApiController@pagodas');
Route::middleware('auth:api')->get('pagodas/detail/background/{id}', 'ApiController@pagoda_detail_background');
Route::middleware('auth:api')->get('pagodas/detail/content_photos/{id}', 'ApiController@pagoda_detail_content_photos');
Route::middleware('auth:api')->get('pagodas/detail/near_hotels/{id}', 'ApiController@pagoda_near_hotels');

// hotel
Route::middleware('auth:api')->get('hotels/detail/{id}', 'ApiController@hotel_detail');
Route::middleware('auth:api')->get('hotels/detail/background/{id}', 'ApiController@hotel_detail_background');
Route::middleware('auth:api')->get('hotels/detail/content_photos/{id}', 'ApiController@photel_detail_content_photos');
Route::middleware('auth:api')->get('hotels/five_star', 'ApiController@hotel_five_star');
Route::middleware('auth:api')->get('hotels/four_star', 'ApiController@hotel_four_star');
Route::middleware('auth:api')->get('hotels/three_star', 'ApiController@hotel_three_star');
Route::middleware('auth:api')->get('hotels/detail/near_pagodas/{id}', 'ApiController@hotel_near_pagodas');


//index
Route::middleware('auth:api')->get('index/sunset', 'ApiController@sunset');
Route::middleware('auth:api')->post('index/contact', 'ApiController@contact');