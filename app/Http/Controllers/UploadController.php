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

        try {

            if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                $path = public_path('uploads/' . $_FILES['file']['name']);

                $upload = true;

                if(file_exists($path)){
                    //Re-Upload
                    $upload = false;
                } else {

                }

                if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){
                    //Success
                    $pandoc = 'D:\Programme\xampp\htdocs\MSF\pandoc\pandoc.exe';
                    $input = 'D:\Programme\xampp\htdocs\MSF\public\uploads\\'.$_FILES['file']['name'];
                    $output = 'D:\Programme\xampp\htdocs\MSF\public\uploads\\'.$_FILES['file']['name'].'.html';
                    $cmd = <<<END
$pandoc $input -o $output
END;
                    exec($cmd);

                    /*Daniels Programm*/
                    $prorammPath = 'D:\Programme\xampp\htdocs\MSF\java';
                    $javaProgram = 'Main';
                    $classPath = '.;D:\Programme\xampp\htdocs\MSF\java\mysqlConnector\mysql-connector-java-8.0.11.jar';
                    $cmd = <<<END
cd $prorammPath && java -cp "$classPath" $javaProgram $output
END;
                    var_dump($cmd);
                    exec($cmd);
                }else{
                    //Failure
                }

            }

        } catch (\Exception $exception) {
            var_dump($exception);
        }

    }
}