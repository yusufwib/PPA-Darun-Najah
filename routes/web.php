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

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
Route::post('/siswa/import_excel', 'SiswaController@import_excel');
Route::get('/pegawai/tambah','SiswaController@tambah');
Route::post('/pegawai/store','PelanggaranController@store');
Route::post('/pegawai/guru','PelanggaranController@guru');

Route::get('/', function () {
    return view('login');
    // return view('welcome');
});

Route::get('indeks', function(){
    return view('indeks');
});

Route::get('daftar', function(){
    return view('daftar');
});

Route::get('form', function(){
    return view('form');
});


Route::get('input', function(){
    return view('input');
});

Route::get('login', function(){
    return view('login');
});

Route::get('register', function(){
    return view('register');
});

Route::get('siswa', function(){
    return view('siswa');
});
