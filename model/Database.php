<?php

class Database{
    public static function Connection(){
        try {
            $pdo=new PDO('mysql:host=localhost;dbname=platasolar;charset=utf8','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    
}
