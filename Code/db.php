<?php

class Database_connect{

    private $host = "localhost";
    private $db_name = "bibliotheek";
    private $username = "root";
    private $password = "";

    public $conn;

    public function Dbconnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

}


$db = new Database_connect();
$db->Dbconnection();

?>