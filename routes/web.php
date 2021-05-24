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

Route::get('/', 'MainController@index')->name('home');
Route::get('/objek-wisata', 'MainController@wisata')->name('objek-wisata');
Route::get('/keadaan-geografis', 'MainController@geografis')->name('keadaan-geografis');
Route::get('/demografi', 'MainController@demografi')->name('demografi');
Route::get('/struktur-pemerintahan', 'MainController@struktur')->name('struktur-pemerintahan');
