<?php

namespace App\services\Business;

use App\services\data\SecurityDAO;
//use App\services\data\CustomerDAO;
//use app\Models\CustomerModel;
//use App\services\data\OrderDAO;


///THIS IS DONE!
class SecurityService{
    
    // gets all products
    public function getAllProducts1(){
        $security = new SecurityDAO();
        return $security->findAllProducts();     
    }
    
    // post product
    public function addProduct($name, $description){
        $security = new SecurityDAO();
        return $security->addProduct($name, $description);
    }
    
    // delete product
    public function deleteProduct($id){
        $security = new SecurityDAO();
        return $security->deleteProduct($id);
    }
    
    // put product
    public function updateProduct($id, $name, $description){
        $security = new SecurityDAO();
        return $security->updateProduct($id, $name, $description);
    }
    
    
    
    
    // Test services
    public function findByUserId(int $id){
        $security = new SecurityDAO();
        return $security->findByUserID($id);
    }
    
    public function findByUserIdName($id, $name){
        $security = new SecurityDAO();
        return $security->findByUserIdName3($id, $name);
    }
    
    
}
