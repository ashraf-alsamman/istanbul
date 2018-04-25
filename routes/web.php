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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/uploadPhoto','BusinessController@uploadPhoto')->name('uploadPhoto')->middleware('auth');
Route::get('/business/add','BusinessController@add')->name('add');

Route::get('/getCategories','BusinessController@getCategories')->name('getCategories');
Route::get('/getTags','BusinessController@getTags')->name('getTags');