<?php

require dirname($_SERVER['DOCUMENT_ROOT']) . '/src/vendor/autoload.php';

use IdeaFree\Tools;

$Tools = new Tools();


$request = explode("/",  substr($_SERVER['REQUEST_URI'], 4));

#var_dump($request);


switch ($request[1]) {

    case 'login':
        
        include "api/userServices/login.php";

        break;
    
    default:
        $Tools->error(400, "Invalid request.");
        break;
}
