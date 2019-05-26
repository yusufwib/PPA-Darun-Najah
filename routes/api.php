<?php
/**
 * Created by PhpStorm.
 * User: FUSUY
 * Date: 4/25/2019
 * Time: 6:09 AM
 */

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function () {
    //POST
    Route::post('/insert/posting', 'PostingController@storePosting');
    Route::post('/insert/gallery', 'PostingController@storeGallery');
    Route::post('/insert/jadwal', 'PostingController@storeJadwal');

    Route::get('downloadPosting/{filename}', function($filename)
    {
        // Check if file exists in app/storage/file folder
        $file_path = storage_path() .'/app/public/posting/'. $filename;
        if (file_exists($file_path))
        {
            // Send Download
            return Response::download($file_path, $filename, [
                'Content-Length: '. filesize($file_path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    })->where('filename', '[A-Za-z0-9\-\_\.]+');

    Route::get('downloadJadwal/{filename}', function($filename)
    {
        // Check if file exists in app/storage/file folder
        $file_path = storage_path() .'/app/public/jadwal/'. $filename;
        if (file_exists($file_path))
        {
            // Send Download
            return Response::download($file_path, $filename, [
                'Content-Length: '. filesize($file_path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    })->where('filename', '[A-Za-z0-9\-\_\.]+');

    Route::get('downloadGallery/{filename}', function($filename)
    {
        // Check if file exists in app/storage/file folder
        $file_path = storage_path() .'/app/public/gallery/'. $filename;
        if (file_exists($file_path))
        {
            // Send Download
            return Response::download($file_path, $filename, [
                'Content-Length: '. filesize($file_path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    })->where('filename', '[A-Za-z0-9\-\_\.]+');


    Route::post('/insert/ip', 'PostingController@storeVisitor');
    //GET
    Route::get('/get/postingArtikel', 'GetController@indexPostingArtikel');
    Route::get('/get/postingBerita', 'GetController@indexPostingBerita');
    Route::get('/get/postingPengumuman', 'GetController@indexPostingPengumuman');
    Route::get('/get/gallery', 'GetController@indexGallery');

	Route::get('/get/count', 'GetController@getCount');

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

    //GET BY ID

    Route::get('get/jadwal/{id}', 'GetController@jadwalId');
    Route::get('get/posting/{id}', 'GetController@postingId');
    Route::get('get/gallery/{id}', 'GetController@galleryId');
    
    Route::post('generateImage', 'PostingController@generate');


    Route::get('get/jadwalName/{title}', 'GetController@jadwalName');
    Route::get('get/postingName/{title}', 'GetController@postingName');
    Route::get('get/galleryName/{title}', 'GetController@galleryName');


    Route::post('student/import', 'ExcelController@importStudent');
    Route::post('score/import', 'ExcelController@importScore');
    Route::get('studentScore/{noujian}', 'ExcelController@getStudentScore');
    Route::post('shun/import', 'ExcelController@importShun');
    Route::get('studentShun/{noujian}', 'ExcelController@getShun');

    Route::get('truncate', 'ExcelController@truncate');

});
