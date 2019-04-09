<?php

use Illuminate\Http\Request;
use App\Flashcard;
use App\Http\Resources\Flashcard as FlashcardResource;

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

/*Upload*/
Route::post('/UploadFile', 'UploadController@upload');

/*Dashboard*/
Route::get('/flashcards', function () {
    $flashcards = Flashcard::all();
    return new FlashcardResource($flashcards);
});

/*Register*/
Route::post('/Register', 'AuthController@register');

/*Login*/
Route::post('/Login', 'AuthController@login');