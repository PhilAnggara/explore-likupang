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

Route::get('/', 'MainController@index')
  ->name('home');

Route::get('/objek-wisata', 'MainController@wisata')
  ->name('objek-wisata');

Route::get('/keadaan-geografis', 'MainController@geografis')
  ->name('keadaan-geografis');

Route::get('/demografi', 'MainController@demografi')
  ->name('demografi');
  
Route::get('/struktur-pemerintahan', 'MainController@struktur')
  ->name('struktur-pemerintahan');

Route::get('/objek-wisata/{slug}', 'MainController@detail')
  ->name('detail');
  
Route::post('/kirim-saran', 'MainController@saran')
  ->name('kirim-saran');

Route::prefix('admin')
  ->namespace('Admin')
  ->middleware(['auth', 'admin'])
  ->group(function() {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    
    Route::resource('data-objek-wisata', 'WisataController');
    Route::resource('galeri', 'GaleriController');
    Route::resource('wahana', 'WahanaController');
    Route::resource('kegiatan', 'KegiatanController');
    Route::resource('saran', 'SaranController');
    Route::resource('laporan', 'LaporanController');
    Route::resource('pengguna', 'PenggunaController');
  });

Auth::routes();