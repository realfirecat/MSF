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
Route::post('/flashcards', function () {
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE); //convert JSON into array
    $id = \Illuminate\Support\Facades\DB::table('user')
        ->where([
            'token' => $input['token']
        ])
        ->value('id');
    return new FlashcardResource(\Illuminate\Support\Facades\DB::table('flashcards')
    ->where([
        'fk_userID' => $id
    ])
    ->get());

    return new FlashcardResource(Flashcard::find(['fk_userID' => $id]));
});

/*Register*/
Route::post('/Register', 'AuthController@register');

/*Login*/
Route::post('/Login', 'AuthController@login');