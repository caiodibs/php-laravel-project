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

// Main page routes
Route::get('/', 'mainController@loadIndex')->name('index');
Route::get('/about', 'mainController@loadAbout')->name('about');
Route::get('/team', 'mainController@loadTeam')->name('team');
Route::get('/contact', 'mainController@loadContact')->name('contact');
Route::get('/auth/register', 'mainController@loadRegister')->name('register');
Route::get('/auth/login', 'mainController@loadLogin')->name('login');
// Add member routes
Route::get('/members/{id}', 'mainController@loadMembers')->name('members');
Route::post('/insert/{id}', 'insertController@addMember')->name('addMembers');
Auth::routes();
