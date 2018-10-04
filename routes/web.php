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
    return view('index');
});
//anggota
Route::get('/anggota', 'AnggotaController@index');
Route::post('/anggota', 'AnggotaController@post');
Route::delete('/anggota/{id}', 'AnggotaController@destroy');
Route::get('/anggota/{id}/edit','AnggotaController@edit');
Route::put('/anggota/{id}', 'AnggotaController@update');
Route::get('/anggota/{id}', 'AnggotaController@show');

//pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::post('/pegawai', 'PegawaiController@store');
Route::delete('/pegawai/{id}', 'PegawaiController@destroy');
Route::get('/pegawai/{id}/edit', 'PegawaiController@edit');
Route::put('/pegawai/{id}/', 'PegawaiController@update');
Route::get('/pegawai/{id}', 'PegawaiController@show');

//jenis-pinjaman
Route::get('/jenis-pinjaman', 'JenisPinjamanController@index');
Route::post('/jenis-pinjaman', 'JenisPinjamanController@store');
Route::delete('/jenis-pinjaman/{id}', 'JenisPinjamanController@destroy');
Route::get('/jenis-pinjaman/{id}/edit', 'JenisPinjamanController@edit');
Route::put('/jenis-pinjaman/{id}', 'JenisPinjamanController@update');

//pinjaman
Route::get('/pinjaman', 'PinjamanController@index');
Route::post('/pinjaman', 'PinjamanController@store');
Route::delete('/pinjaman/{id}', 'PinjamanController@destroy');