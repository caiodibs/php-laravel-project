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

Route::get('/', 'mainController@loadIndex')->name('index');
Route::get('/about', 'mainController@loadAbout')->name('about');
Route::get('/team', 'mainController@loadTeam')->name('team');
Route::get('/contact', 'mainController@loadContact')->name('contact');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
