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

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function () {
    //POST
    Route::post('/insert/posting', 'PostingController@storePosting');
    Route::post('/insert/gallery', 'PostingController@storeGallery');
    Route::post('/insert/jadwal', 'PostingController@storeJadwal');

    Route::post('/insert/ip', 'PostingController@storeVisitor');
    //GET
    Route::get('/get/postingArtikel', 'GetController@indexPostingArtikel');
    Route::get('/get/postingBerita', 'GetController@indexPostingBerita');
    Route::get('/get/postingPengumuman', 'GetController@indexPostingPengumuman');
    Route::get('/get/gallery', 'GetController@indexGallery');

    Route::get('/get/postingAll', 'GetController@indexPostingAll');
    Route::get('/get/galleryAll', 'GetController@indexGalleryAll');
    Route::get('/get/jadwalAll', 'GetController@indexJadwalAll');

    Route::get('/get/ip', 'GetController@indexVisitor');
    //UPDATE
    Route::post('/update/posting/{id}', 'UpdateController@updatePosting');
    Route::post('/update/jadwal/{id}', 'UpdateController@updateJadwal');
    //DELETE
    Route::get('/delete/posting/{id}', 'DeleteController@deletePosting');
    Route::get('/delete/gallery/{id}', 'DeleteController@deleteGallery');
    //LOGIN
    Route::post('/user/register', 'AuthController@store');
    Route::post('/user/signin', 'AuthController@signin');

    //MAIL
    Route::post('/send', 'MailController@send');


});