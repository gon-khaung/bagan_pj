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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// admin dashboard
//chart
Route::get('/chart_chartist', 'BackendController@chart_chartist')->name('chart_chartist');
Route::get('/chart_chartjs', 'BackendController@chart_chartjs')->name('chart_chartjs');
Route::get('/chart_flot', 'BackendController@chart_flot')->name('chart_flot');
Route::get('/chart_morris', 'BackendController@chart_morris')->name('chart_morris');
Route::get('/chart_peity', 'BackendController@chart_peity')->name('chart_peity');
Route::get('/chart_sparkline', 'BackendController@chart_sparkline')->name('chart_sparkline');

//email
Route::get('/email_compose', 'BackendController@email_compose')->name('email_compose');
Route::get('/email_inbox', 'BackendController@email_inbox')->name('email_inbox');
Route::get('/email_read', 'BackendController@email_read')->name('email_read');

//form
Route::get('/form_basic', 'BackendController@form_basic')->name('form_basic');
Route::get('/form_editor', 'BackendController@form_editor')->name('form_editor');
Route::get('/form_picker', 'BackendController@form_picker')->name('form_picker');
Route::get('/form_step', 'BackendController@form_step')->name('form_step');
Route::get('/form_validation', 'BackendController@form_validation')->name('form_validation');

//layout
Route::get('/layout_blank', 'BackendController@layout_blank')->name('layout_blank');
Route::get('/layout_boxed', 'BackendController@layout_boxed')->name('layout_boxed');
Route::get('/layout_compact_nav', 'BackendController@layout_compact_nav')->name('layout_compact_nav');
Route::get('/layout_dark', 'BackendController@layout_dark')->name('layout_dark');
Route::get('/layout_fixed_header', 'BackendController@layout_fixed_header')->name('layout_fixed_header');
Route::get('/layout_fixed_sidebar', 'BackendController@layout_fixed_sidebar')->name('layout_fixed_sidebar');
Route::get('/layout_horizontal', 'BackendController@layout_horizontal')->name('layout_horizontal');
Route::get('/layout_light', 'BackendController@layout_light')->name('layout_light');
Route::get('/layout_one_column', 'BackendController@layout_one_column')->name('layout_one_column');
Route::get('/layout_two_column', 'BackendController@layout_two_column')->name('layout_two_column');
Route::get('/layout_vertical', 'BackendController@layout_vertical')->name('layout_vertical');
Route::get('/layout_wide', 'BackendController@layout_wide')->name('layout_wide');

//page
Route::get('/page_login', 'BackendController@page_login')->name('page_login');
Route::get('/page_lock', 'BackendController@page_lock')->name('page_lock');
Route::get('/page_register', 'BackendController@page_register')->name('page_register');
Route::get('/page_error_503', 'BackendController@page_error_503')->name('page_error_503');
Route::get('/page_error_500', 'BackendController@page_error_500')->name('page_error_500');
Route::get('/page_error_404', 'BackendController@page_error_404')->name('page_error_404');
Route::get('/page_error_403', 'BackendController@page_error_403')->name('page_error_403');
Route::get('/page_error_400', 'BackendController@page_error_400')->name('page_error_400');
//uc
Route::get('/uc_nestedable', 'BackendController@uc_nestedable')->name('uc_nestedable');
Route::get('/uc_noui_slider', 'BackendController@uc_noui_slider')->name('uc_noui_slider');
Route::get('/uc_sweetalert', 'BackendController@uc_sweetalert')->name('uc_sweetalert');
Route::get('/uc_toastr', 'BackendController@uc_toastr')->name('uc_toastr');
//ui
Route::get('/ui_accordion', 'BackendController@ui_accordion')->name('ui_accordion');
Route::get('/ui_alert', 'BackendController@ui_alert')->name('ui_alert');
Route::get('/ui_badge', 'BackendController@ui_badge')->name('ui_badge');
Route::get('/ui_button_group', 'BackendController@ui_button_group')->name('ui_button_group');
Route::get('/ui_button', 'BackendController@ui_button')->name('ui_button');
Route::get('/ui_cards', 'BackendController@ui_cards')->name('ui_cards');
Route::get('/ui_carousel', 'BackendController@ui_carousel')->name('ui_carousel');
Route::get('/ui_dropdown', 'BackendController@ui_dropdown')->name('ui_dropdown');
Route::get('/ui_list_group', 'BackendController@ui_list_group')->name('ui_list_group');
Route::get('/ui_media_object', 'BackendController@ui_media_object')->name('ui_media_object');
Route::get('/ui_modal', 'BackendController@ui_modal')->name('ui_modal');
Route::get('/ui_pagination', 'BackendController@ui_pagination')->name('ui_pagination');
Route::get('/ui_popover', 'BackendController@ui_popover')->name('ui_popover');
Route::get('/ui_progressbar', 'BackendController@ui_progressbar')->name('ui_progressbar');
Route::get('/ui_tab', 'BackendController@ui_tab')->name('ui_tab');
Route::get('/ui_typography', 'BackendController@ui_typography')->name('ui_typography');

Route::get('/app_calendar', 'BackendController@app_calendar')->name('app_calendar');
Route::get('/app_profile', 'BackendController@app_profile')->name('app_profile');
Route::get('/blank', 'BackendController@blank')->name('blank');
Route::get('/table_basic', 'BackendController@table_basic')->name('table_basic');
Route::get('/table_datatable', 'BackendController@table_datatable')->name('table_datatable');
Route::get('/widgets', 'BackendController@widgets')->name('widgets');
// admin dashboard end

// front-end
Route::get('/index', function () {
    return view('frontend.index');
})->name('index');


// front-end