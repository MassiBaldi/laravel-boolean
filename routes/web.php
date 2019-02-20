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

Route::get('corso', 'CorsoController@index')->name('corso');

Route::get('metodo', 'MetodoController@index')->name('metodo');

Route::get('students', 'StudentController@index')->name('students');

Route::get('students/{slug}', 'StudentController@show')->name('show');

Route::get('privacy-policy', 'StaticPageController@privacyPolicy')->name('privacy_policy');

Route::get('lavora-con-noi', 'StaticPageController@lavoraConNoi')->name('lavora_con_noi');
