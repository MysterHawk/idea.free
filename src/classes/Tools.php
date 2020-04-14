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
}
