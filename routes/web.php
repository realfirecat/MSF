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


/*Upload site*/
Route::get('/Upload', function () {
    return view('upload');
});
Route::post('/Upload', 'UploadController@upload');

/*Dashboard site*/
Route::get('/Dashboard', function () {
    return view('dashboard');
});

Route::resource('flashcards','FlashcardController');