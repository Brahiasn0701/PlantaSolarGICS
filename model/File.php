<?php

class File{
    private $pdo;
    public function __construct() {
        try {
        $this->pdo= Database::Connection();
         } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function InsertIntAna(){
        try {
         $stm=$this->pdo->prepare(FileSQL::INSERT_TABLE_INT_ANA);
         $stm->bindParam(1,['INT_ANA_Uhrzeit'],PDO::PARAM_STR);
         $stm->bindParam(2,['INT_ANA_Intervall'],PDO::PARAM_STR);
         $stm->bindParam(3,['INT_ANA_W_V0'],PDO::PARAM_STR);
         $stm->bindParam(4,['INT_ANA_G_M0'],PDO::PARAM_STR);
         $stm->bindParam(5,['INT_ANA_T_U0'],PDO::PARAM_STR);
         $stm->bindParam(6,['INT_ANA_T_M0'],PDO::PARAM_STR);
         $stm->bindParam(7,['INT_ANA_T_M13'],PDO::PARAM_STR);
         $stm->bindParam(8,['INT_ANA_T_M14'],PDO::PARAM_STR);
         $stm->bindParam(9,['INT_ANA_T_M15'],PDO::PARAM_STR);
         $stm->execute();       
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    
}