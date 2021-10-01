<?php

namespace App\services\Business;

use App\Services\Data\SecurityDAO;
//use App\services\data\CustomerDAO;
//use app\Models\CustomerModel;
//use App\services\data\OrderDAO;


///THIS IS DONE!
class SecurityService{
    
    //private $verifyCred;
    
    public function getAllProducts1(){
        $security = new SecurityDAO();
        return $security->findAllProducts();     
    }
    
    public function addProduct($name, $description){
        $security = new SecurityDAO();
        return $security->addProduct($name, $description);
    }
    
    public function deleteProduct($id){
        $security = new SecurityDAO();
        return $security->deleteProduct($id);
    }
    
    public function updateProduct($id, $name, $description){
        $security = new SecurityDAO();
        return $security->updateProduct($id, $name, $description);
    }
    
    
    
    
    
    public function findByUserId(int $id){
        $security = new SecurityDAO();
        return $security->findByUserID($id);
    }
    
    public function findByUserIdName($id, $name){
        $security = new SecurityDAO();
        return $security->findByUserIdName3($id, $name);
    }
    
    
}
