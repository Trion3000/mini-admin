<?php

class DbConnection
{
    private static $instance;
    private $pdo;
    
    private function __construct($dsn, $user, $pass)
    {
        $this->pdo = new PDO($dsn, $user, $pass);
    }
    
    private function __clone()
    {
        
    }
    
    private function __wakeup()
    {
        
    }
    
    public function getPDO()
    {
        return $this->pdo;
    }
    
    public static function getConnection()
    {
        if (!self::$instance instanceof DbConnection) {
            self::$instance = new DbConnection('mysql: host=localhost; dbname=my_db', 'root', '');
        }
        
        return self::$instance;
    }
}