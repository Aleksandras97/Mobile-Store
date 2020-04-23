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

Route::get('/', 'PhonesController@index');

Auth::routes(['verify' => true]);

Route::resource('phones', 'PhonesController');

Route::get('/photos/create/{phoneId}', 'PhotosController@create')->name('photo-create');

Route::post('/photos/store', 'PhotosController@store')->name('photo-store');

Route::delete('/photos/{id}', 'PhotosController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
