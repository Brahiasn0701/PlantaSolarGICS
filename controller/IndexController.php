<?php
class IndexController{
    private $modelUsers;
    public function __construct(){
        try {
              $this->modelUsers= new users();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function DefaultPage(){
        require_once 'view/all/Header.php';
        require_once 'view/index/DefaultPage.php';
        require_once 'view/all/Footer.php';
    }
     public function AuthLogin(){
         $nickname=$_REQUEST['USERS_NICKNAME'];
         $password=$_REQUEST['USERS_PASSWORD'];
         $data=array("USERS_NICKNAME"=>$nickname);
         foreach ($this->modelUsers->QueryUsersLogin($data) as $r){
         }
         
         if(($nickname==$r->USERS_NICKNAME )&&($password==$r->USERS_PASSWORD)){
             $_SESSION['USERS_NICKNAME']=$r->USERS_NICKNAME;
             $_SESSION['USERS_NAME']=$r->USERS_NAME;
             $_SESSION['USERS_LAST_NAME']=$r->USERS_LAST_NAME;
             header("location:?c=Dashboard&m=DefaultPage");
             
         }else{
            header("location:?c=index&m=DefaultPage");
         }
     }
}