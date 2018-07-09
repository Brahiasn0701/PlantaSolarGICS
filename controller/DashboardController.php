<?php

class DashboardController{
    private $model_int_kwr;
    public function __construct() {
        try {
            $this->model_int_kwr= new int_kwr();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function DefaultPage(){
        require_once 'view/all/Header.php';
        require_once 'view/all/Navbar.php';
        require_once 'view/dashboard/dashboard.php';
        require_once 'view/all/Footer.php';
    }
    public function createRegister(){
        require_once 'view/all/Header.php';
        require_once 'view/all/Navbar.php';
        require_once 'view/crud/create.php';
        require_once 'view/all/Footer.php';
    }
    public function QueryRegister(){
        
        require_once 'view/all/Header.php';
        require_once 'view/all/Navbar.php';
        require_once 'view/crud/query.php';
        require_once 'view/all/Footer.php';
    }
    
    
}