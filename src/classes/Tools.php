<?php

/**
 * undocumented class
 */


declare(strict_types = 1);

namespace IdeaFree;

use Dotenv;

class Tools
{
    public function loadEnvVariables():void
    {
        $dotenv = Dotenv\Dotenv::createMutable(__DIR__, "../../config/.env");
        $dotenv->load();
    }

    public function prettyPrint($element):void
    {
        echo "<pre>";
        var_dump($element);
        echo "</pre>";
    }

    public function success(string $message, array $result = array()):void
    {
        header("Content-type: application/json; charset=utf-8");
        
        http_response_code(200);

        echo json_encode(array(
            'status'=> true,
            'message'=> $message,
            'result'=>$result
        ));
    }

    public function error(int $errorNumber, string $message):void
    {
        header("Content-type: application/json; charset=utf-8");

        http_response_code($errorNumber);

        echo json_encode(array(
            'status'=> false,
            'message'=> $message
        ));
    }
}
