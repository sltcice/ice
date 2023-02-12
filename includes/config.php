<?php
class DbConnection{
 
    private $host = 'localhost'; // Host name
    private $database = 'test'; // database name
    private $username = 'root'; // database username
    private $password = ''; // database password
 
    protected $connection;
 
    public function __construct(){
 
        if (!isset($this->connection)) {
 
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            // check for connection error
            if (!$this->connection) {
                
                echo 'script>alert("Cannot connect to database server")</script>';
                exit;
            }            
        }    
 
        return $this->connection;
    }
}
?>