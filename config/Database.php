<?php

require_once "./env.php";

class Database
{
    private $host = "hospital.cqn8jr4zs6zp.us-east-1.rds.amazonaws.com";
    private $db_name = "hospital";
    private $user = "admin";
    private $pass = "12345678";
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->user;$this->user,$this->pass");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            $error->getMessage();
        }
        return $this->conn;
    }
}
