<?php

declare(strict_types = 1);

namespace IdeaFree;

use Doctrine;

/**
 * undocumented class
 */
class Database
{
    private Tools $_tools;

    public function __construct(Tools $Tools)
    {
        $this->_tools = $Tools;
    }

    public function getConnection():Doctrine\DBAL\Connection
    {
        $this->_tools->loadEnvVariables();

        $connectionParams = array(
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
            'path' => $_ENV['DB_PATH'],
            'memory' => false,
            'driver' => 'pdo_sqlite'
        );
        return \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
    }
}
