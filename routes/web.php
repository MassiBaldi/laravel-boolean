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

Route::get('/', 'HomeController@index')->name('home');
Route::get('privacy-policy', 'StaticPageController@privacyPolicy')->name('stati_page.privacy_policy');
Route::get('lavora-con-noi', 'StaticPageController@lavoraConNoi')->name('stati_page.lavora_con_noi');
