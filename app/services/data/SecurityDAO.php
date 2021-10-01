<?php

namespace App\services\data;

use App\Models\ProductsModel;
use Illuminate\Support\Facades\Log;
use Exception;

class SecurityDAO{
    
    // Define the connection string
    private $conn;
    private $dbserverName = "localhost";
    private $dbusername = "root";
    private $dbpassword = "root";
    private $dbname = "javascriptdb";
    private $dbQuery = "" ;
    
    // constructor that creates a connection with the database
    public function __construct(){
        $this->conn = new \mysqli($this->dbserverName, $this->dbusername, $this->dbpassword, $this->dbname);
        
        //$this->conn = mysqli_connect($this->dbserverName, $this->dbusername, $this->dbpassword, $this->dbname);
        
        if($this->conn->connect_error){
            echo("Connection failed " .$this->conn->connect_error . "<br>");
        }else{
            return $this->conn;
        }
        // make sure to test the connection to see if there are any errors
        
    }
    
    public function findAllProducts(){
        
        try{
            // SQL Statement
            $dbQuery = "SELECT * FROM products";
            
            // create array
            $items = array();
            
            // If the selected query returns a result set
            $result = $this->conn->query($dbQuery);
            
            // loop through all rows
            while(($row = mysqli_fetch_assoc($result))) {
                array_push($items, [$row['ID'], $row['name'], $row['description']]);
            }
            //returns items
            return $items;
        }
        catch(Exception $e){
            Log::info("Exception Security DAO: " . $e->getMessage() );
            echo "hello";
        }
        
        
    }
    
    function addProduct($name, $description){

       $sql = "INSERT INTO products (name, description) VALUES ('" . $name . "', '" . $description . "')";
        
        if($this->conn->query($sql) == true){
            return true;
        }else{
            return false;
        }
    }
    
    function deleteProduct($id){
        $sql = "DELETE FROM products WHERE ID = '" . $id . "'";
        if($this->conn->query($sql) == true){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function updateProduct($id, $name, $description){
        $sql = "UPDATE products SET name = '" . $name . "', description = '" . $description . 
            "' WHERE ID = '" . $id . "'";
        if($this->conn->query($sql) == true){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function findByUserID(int $id){
        
        try{
            // SQL Statement
            $dbQuery = "SELECT * FROM products WHERE ID = '" . $id . "'";
            
            $items = array();
            
            // If the selected query returns a result set
            $result = $this->conn->query($dbQuery);
            
            while(($row = mysqli_fetch_assoc($result))) {
                array_push($items, [$row['ID'], $row['name'], $row['description']]);
            }
            //Returns 1
            return $items;
        }
        catch(Exception $e){
            Log::info("Exception Security DAO: " . $e->getMessage() );
            echo "hello you ran into an error";
        }
        
        
    }
    
 
    
    
    
    
 
    
    
}