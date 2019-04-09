<?php

use App\Flashcard;
use App\Http\Resources\Flashcard as FlashcardResource;
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
Route::post('/UploadFile', 'UploadController@upload');

/*Dashboard site*/
Route::get('/Dashboard', function () {
    return view('flashcardsAnsehen');
});

<<<<<<< HEAD
Route::get('/flashcards', function () {
=======
Route::get('flashcards', function () {
>>>>>>> 324ba7cc2f6bcc867f4c97eba12f2f8afd2323a8
    $flashcards = Flashcard::all();
    return new FlashcardResource($flashcards);
});

