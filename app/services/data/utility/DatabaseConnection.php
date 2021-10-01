<?php

namespace App\services\data\utility;
use mysqli;

class DatabaseConnection{
    
    //Server properties
    private $conn;
    private $dbserverName;
    private $dbusername;
    private $dbpassword;
    private $dbname;
    
    public function __construct(string $dbname){
        
        $this->dbname = $dbname;
        $this->dbserverName = "g84t6zfpijzwx08q.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->dbusername = "zefkyc3p6mt96yiw";
        $this->dbpassword = "pfkkfibqs0a08n31";
    }
    
    function getConnection(){
        $this->conn = new \mysqli ($this->dbserverName, $this->dbusername,$this->dbpassword, $this->dbname);
        
        //Return the connection result
        if($this->conn->connect_error){
            echo("Connection failed " .$this->conn->connect_error . "<br>");
            exit();
        }else{
            return $this->conn;
        }
    }
    
    public function closeDBConnect(){
        
        $this->conn->close();
        
    }
    
    // Turn on Auto Commit
    public function setDBAutoCommitTrue(){
        
        $this->conn->autocommit(TRUE);
        
    }
    // turn off Auto Commit
    public function setDBAutoCommiFalse(){
        // turn autocommit off
        $this->conn->autocommit(FALSE);
        
    }
    
    
    // begin transacetion
    public function beginTransaction(){
        
        $this->conn->begin_transaction();
        
    }
    
    // Commit the Transaction
    public function commitTransaction(){
        
        $this->conn->commit();
    }
    
    public function rollbackTransaction(){
        $this->conn->rollback();
        
    }
}