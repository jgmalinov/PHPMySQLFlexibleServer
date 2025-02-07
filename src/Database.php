<?php

namespace MyApp;

use PDO;
use PDOException;

class Database
{
    private $host;
    private $dbname;
    private $user;
    private $flag;
    private $port;

    public function __construct()
    {
        $this->host = getenv('AZURE_MYSQL_HOST');
        $this->dbname = getenv('AZURE_MYSQL_DBNAME');
        $this->port = getenv('AZURE_MYSQL_PORT');
        $this->user = getenv('DB_USER');
        $this->flag = getenv('AZURE_MYSQL_FLAG');
    }

    public function connect()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return false;
        }
    }
}