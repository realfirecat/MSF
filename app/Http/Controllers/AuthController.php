<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return md5(rand(1,10) . microtime());
    }

    public function login(){
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE); //convert JSON into array
        return json_encode($input);
        return json_encode(["token" => $input["token"]]);
    }
}
