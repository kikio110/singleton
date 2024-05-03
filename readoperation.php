<?php

require_once 'db_connect.php';

class ReadOperations
{
    protected PDO $db;

    private static ?ReadOperations $instance = null;

    private function __construct()
    {
        $this->db = DatabaseConnection::connect();
    }

    public static function getInstance(): ReadOperations
    {
        if (self::$instance === null) {
            self::$instance = new ReadOperations();
        }
        return self::$instance;
    }

    public function read()
{
    $sql = "SELECT * FROM hewan";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}