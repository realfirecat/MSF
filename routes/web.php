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
Route::get('/Flashcards', 'FlashcardsController@alleFlashcards');
Route::post('/Flashcards', 'FlashcardsController@neueFlashcard');
Route::delete('/Flashcards/{id}', 'FlashcardsController@loescheFlashcard');
Route::update('/Flashcards/{id}', 'FlashcardsController@updateFlashcard');