<?php
if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{

    private $host = DB_SERVER;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    private $port = defined('DB_PORT') ? DB_PORT : 3306; // Added port handling
    
    public $conn;
    
    public function __construct(){
        if (!isset($this->conn)) {
            // Added port parameter to mysqli connection
            $this->conn = new mysqli(
                $this->host, 
                $this->username, 
                $this->password, 
                $this->database,
                $this->port  // New port parameter
            );
            
            if ($this->conn->connect_error) {
                // Improved error handling
                error_log("Database connection failed: " . $this->conn->connect_error);
                die("Database connection error. Please try again later.");
            }            
        }    
    }
    
    public function __destruct(){
        if($this->conn){
            $this->conn->close();
        }
    }
}
?>