<?php 
class database {
    
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $db = "db_iwak";
    protected $port = "3306";
    protected $conn;

    public function __construct() {
        global $conn;
        try{
            $conn = new PDO("mysql:host=$this->host; dbname=$this->db;" , $this->user, $this->pass, $this->db, $this->port);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $err)
        {
            echo $err->getMessage();
        }
    }
}

$db = new database();

?>