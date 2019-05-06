<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(){
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE); //convert JSON into array
        $token = md5(rand(1,10) . microtime());
        header('Content-Type: application/json');
        DB::table('users')->insert([
            'token' => $token,
            'username' => $input['username']
        ]);
        return json_encode(['token' => $token]);
    }

    public function login(){
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE); //convert JSON into array
        $isTokenValid = DB::table('users')
            ->where([
                'token' => $input['loginToken']
            ])->exists();
        if ($isTokenValid) {
            return json_encode(["valid" => true]);
        } else {
            return json_encode(["valid" => false]);
        }
    }
}
