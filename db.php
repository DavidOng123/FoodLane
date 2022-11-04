<?php
   class DB{
    public $con;
    private $host="localhost";
    private $dbname="foodlane";
    private $user="root";
    private $password="";
    
    public function __construct() {
        $dsn="mysql:host=".$this->host.";dbname=".$this->dbname;
        try{
            $this->con=new PDO($dsn, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo 'Connection failed';
        }
    }
    


    
}

?>