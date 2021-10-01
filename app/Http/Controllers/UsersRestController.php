<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\Business\SecurityService;
use App\Models\DTO;

class UsersRestController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $securityServices = new SecurityService();
        // get array
        $items = $securityServices->getAllProducts1();
        // convert array to json
        $dto1 = json_encode($items);
        
        // return view with array
        return view('test')->with('dto', $dto1);
        
    }
   
    
    public function addProduct1(Request $request, $name, $description)
    {    
        $securityService = new SecurityService();
         
        $result = $securityService->addProduct($name, $description);
        if($result == true){
            return view('success');
        }
        else{
            return view('failure');
        }      
    }
    
    public function deleteProduct(Request $request, $id){
        $securityService = new SecurityService();
        $result = $securityService->deleteProduct($id);
        if($result == true){
            return view('success');
        }
        else{
            return view('failure');
        } 
        
    }
    
    public function updateProduct(Request $request, $id, $name, $description){
        $securityService = new SecurityService();
        $result = $securityService->updateProduct($id, $name, $description);
        if($result == true){
            return view('success');
        }
        else{
            return view('failure');
        } 
    }
    
    
    
    
    
    
    
    
    
    
    
    public function showProduct(Request $request, $id)
    {       
        $securityService = new SecurityService();
        
        $user = $securityService->findByUserId($id);
        
        $user1 = json_encode($user);
        
        return view('test')->with('dto', $user1);
    }
    
    
    
    //TESTING
    public function showProductname(Request $request, $id, $name)
    {     
        $securityService = new SecurityService();
        
        $user = $securityService->findByUserIdName($id, $name);
        
        $user1 = json_encode($user);
        
        return view('test')->with('dto', $user1);
    }
    

    
}
