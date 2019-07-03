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
Route::get('/','CRUD1Controller@index');
Route::post('/tambah','CRUD1Controller@tambah');
/***************************Konten*************************/
Route::get('/halaman','CRUD2Controller@index');
Route::get('/halaman/{id}/kontent','CRUD2Controller@konten');
Route::get('/{id}/edit','CRUD1Controller@edit');
Route::get('/{id}/hapus','CRUD1Controller@hapus');
Route::post('/{id}/update','CRUD1Controller@update');

