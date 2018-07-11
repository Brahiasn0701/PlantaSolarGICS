<?php

class users {
    private $pdo;
   public function __construct() {
       try {
         $this->pdo= Database::Connection();  
       } catch (Exception $e) {
           die($e->getMessage());
       }
   }
   
   
   public function CreateUser(){
       
       try {
           $stm= $this->pdo->prepare(usersSQL::INSERT_NEW_REGISTER);
           $stm->execute();
       } catch (Exception $e) {
           die($e->getMessage());
       }
   }
    public function  QueryUsersLogin($data){
       
       try {
        $stm= $this->pdo->prepare(usersSQL::QUERY_USER_LOGIN);
        $stm->bindParam(1,$data['USERS_NICKNAME'],PDO::PARAM_STR);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
       } catch (Exception $e) {
           die($e->getMessage());
       }
   }
}