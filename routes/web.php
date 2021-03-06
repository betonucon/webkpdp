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

Route::get('/', 'BrandaController@index');
Route::get('/about', 'BrandaController@about');
Route::get('/gambarbarner', 'BrandaController@gambar_barner');
Route::get('/gambarpengumuman', 'BrandaController@gambar_pengumuman');
Route::get('/gambarnews', 'BrandaController@gambar_news');
Route::get('/gambarproduk', 'BrandaController@gambar_produk');
Route::get('/gambarstruktur', 'BrandaController@gambar_struktur');
Route::get('/kontak', 'BrandaController@kontak');
Route::get('/struktur', 'BrandaController@struktur');
Route::get('/pengumuman', 'BrandaController@pengumuman');
Route::get('/produk', 'ProdukController@index');
Route::get('/news_all', 'BrandaController@news_all');
Route::get('/news/{id}', 'BrandaController@news');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
