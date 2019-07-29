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

Route::get('/master','MasterController@index');
Route::get('/master/tambah', 'MasterController@tambah');
Route::post('/master/store', 'MasterController@store');
Route::get('/master/edit/{id}', 'MasterController@edit');
Route::put('/master/update/{id}', 'MasterController@update');
Route::get('/master/hapus/{id}', 'MasterController@delete');

Route::get('/kategori','KategoriController@index');
Route::get('/kategori/tambah', 'KategoriController@tambah');
Route::post('/kategori/store', 'KategoriController@store');
Route::get('/kategori/edit/{id}', 'KategoriController@edit');
Route::put('/kategori/update/{id}', 'KategoriController@update');
Route::get('/kategori/hapus/{id}', 'KategoriController@delete');

Route::get('/uang-masuk','UangMasukController@index');
Route::get('/uang-masuk/tambah', 'UangMasukController@tambah');
Route::post('/uang-masuk/store', 'UangMasukController@store');
Route::get('/uang-masuk/edit/{id}', 'UangMasukController@edit');
Route::put('/uang-masuk/update/{id}', 'UangMasukController@update');
Route::get('/uang-masuk/hapus/{id}', 'UangMasukController@delete');
