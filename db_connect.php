<?php

class DatabaseConnection
{

    protected static ?PDO $connection = null;

    public function __construct()
    {
        echo "<br>New Database Instance is Created!<br>";
    }

    public static function connect(): PDO
    {
        try {
            if(!self::$connection){
                $pdo = new PDO('mysql:host=localhost;dbname=penitipan_hewan;port:3306', 'root', '');
                self::$connection = $pdo;
            }
            return self::$connection;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        echo "<br>";
    }
}

