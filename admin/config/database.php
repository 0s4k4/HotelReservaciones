<?php
session_start();
class Database{
    
    private $host = 'localhost';
    private $user = 'root';
    private $password = "";
    private $database = "hotel";

    public function getConnection(){
        $conn = new mysqli($this->host,$this->user,$this->password,$this->database);
        if($conn->connect_error){
            die("Error la conexion a mysql: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
}
?>