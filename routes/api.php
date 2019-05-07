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
    $id = \Illuminate\Support\Facades\DB::table('users')
        ->where([
            'token' => $input['token']
        ])
        ->value('id');
    return new FlashcardResource(\Illuminate\Support\Facades\DB::table('flashcards')
        ->select([
            'flashcards.id',
            'flashcards.title',
            'flashcards.content',
            'flashcards.isFavorite',
            'themas.description'
        ])
        ->join('themas','flashcards.fk_themaID','=','themas.id')
    ->where([
        'fk_userID' => $id
    ])
    ->get());
});

/*Register*/
Route::post('/Register', 'AuthController@register');

/*Login*/
Route::post('/Login', 'AuthController@login');

/*name*/
Route::post('/name', function () {
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, true); //convert JSON into array
    $name = \Illuminate\Support\Facades\DB::table('users')
        ->where([
            'token' => $input['token']
        ])
        ->value('username');
    return json_encode(['username' => $name]);
});

/*Set favorite*/
Route::post('/toggleFavoriteFlashcardStatus', function () {
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, true); //convert JSON into array
    header('Content-Type: application/json');

    $flashcardStatus =  \Illuminate\Support\Facades\DB::table('flashcards')
        ->join('users','flashcards.fk_userID','=','users.id')
        ->where([
            'token' => $input['token'],
            'flashcards.id' => $input['flashcardId']
        ])
        ->value('isFavorite');

    \Illuminate\Support\Facades\DB::table('flashcards')
        ->join('users','flashcards.fk_userID','=','users.id')
        ->where([
            'token' => $input['token'],
            'flashcards.id' => $input['flashcardId']
        ])
        ->update([
            'isFavorite' => !$flashcardStatus
        ]);
    return json_encode(['newStatus' => !$flashcardStatus]);
});