<?php
/**
 * Created by PhpStorm.
 * User: Max-Game
 * Date: 18.03.2019
 * Time: 15:55
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller {
    function upload(){
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE); //convert JSON into array


        $src = $input['image'];
        $type = pathinfo($src, PATHINFO_EXTENSION);
        $data = file_get_contents($src);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $myobj = json_encode(array("image"=>$base64));


        $current = "John Smith";
        $file="text.txt";
        // Schreibt den Inhalt in die Datei zurück
        file_put_contents($file, $current);
    }
}