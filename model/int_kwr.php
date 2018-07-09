<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class int_kwr{
    private $pdo;
    public function __construct() {
        try {
          $this->pdo= Database::Connection();   
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function InsertNewRegister($data){
        try {
         $stm=$this->pdo->prepare(int_kwrSQL::INSERT_NEW_REGISTER);
         $stm->bindParam(1, $data['INT_KWR_DATE'],PDO::PARAM_STR);
         $stm->bindParam(2, $data['INT_KWR_TIME'],PDO::PARAM_STR);
         $stm->bindParam(3, $data['INT_KWR_S'],PDO::PARAM_STR);
         $stm->bindParam(4, $data['INT_KWR_TECHNOLOGY'],PDO::PARAM_STR);
         $stm->bindParam(5, $data['INT_KWR_KPC'],PDO::PARAM_STR);
         $stm->bindParam(6, $data['INT_KWR_U_DC_V'],PDO::PARAM_STR);
         $stm->bindParam(7, $data['INT_KWR_I_DC_A'],PDO::PARAM_STR);
         $stm->bindParam(8, $data['INT_KWR_P_DC_W'],PDO::PARAM_STR);
         $stm->bindParam(9, $data['INT_KWR_U_AC_V'],PDO::PARAM_STR);
         $stm->bindParam(10,$data['INT_KWR_I_AC_A'],PDO::PARAM_STR);
         $stm->bindParam(11,$data['INT_KWR_P_AC_W'],PDO::PARAM_STR);
         $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    /*
     *  query a la abse de datos donde se traen las diferentes tecnologias disponibles
     * 
     */
    public function QueryTechnologies(){
        try {
           $stm=$this->pdo->prepare(int_kwrSQL::QUERY_TECHNOLOGIES);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die($e->getMessage()); 
        }
    }
    
    public function QueryRegisters(){
        try {
           $stm=$this->pdo->prepare(int_kwrSQL::QUERY_ALL_REGISTER);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die($e->getMessage()); 
        }
    }
    public function DeleteRegister($data){
        try {
         $stm= $this->pdo->prepare(int_kwrSQL::DELETE_REGISTER);
         $stm->bindParam(1, $data,PDO::PARAM_STR);
         $stm->execute();
        } catch (Exception $e){
            die($e->getMessage());
        }
    }
    
}
