<?php

class Database
{
    private $server = "mysql:host=hospital.cqn8jr4zs6zp.us-east-1.rds.amazonaws.com;dbname=hospital";

    private $username = "admin";

    private $password = "12345678";

    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    protected $conn;

    public function connect(){
    try{
        $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);​​
        return $this->conn;
    }​​
    catch (PDOException $e){​​

            echo "There is some problem in connection: " . $e->getMessage();

        }​​
        return $this->conn;
    }
}
?>