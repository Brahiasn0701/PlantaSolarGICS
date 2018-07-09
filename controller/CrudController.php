<?php
class CrudController{
    
    private $model_int_kwr;
    public function __construct() {
        try {
            $this->model_int_kwr= new int_kwr();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function CreateRegister(){
        /*
         * CONDICION DE ACCESO A LA TABLE int_kwr PARA REGISTRO DE LA INFORMACION
         */
        if($_REQUEST['table']=="int_kwr"){
            $data=array(
                  "INT_KWR_DATE"=>$_REQUEST['INT_KWR_DATE'],
                  "INT_KWR_TIME"=>$_REQUEST['INT_KWR_TIME'],
                "INT_KWR_S"=>$_REQUEST['INT_KWR_S'],
                "INT_KWR_TECHNOLOGY"=>$_REQUEST['INT_KWR_TECHNOLOGY'],
                   "INT_KWR_KPC"=>$_REQUEST['INT_KWR_KPC'],
                "INT_KWR_U_DC_V"=>$_REQUEST['INT_KWR_U_DC_V'],
                "INT_KWR_I_DC_A"=>$_REQUEST['INT_KWR_I_DC_A'],
                "INT_KWR_P_DC_W"=>$_REQUEST['INT_KWR_P_DC_W'],
                "INT_KWR_U_AC_V"=>$_REQUEST['INT_KWR_U_AC_V'],
                "INT_KWR_I_AC_A"=>$_REQUEST['INT_KWR_I_AC_A'],
                "INT_KWR_P_AC_W"=>$_REQUEST['INT_KWR_P_AC_W']
                );  
            $this->model_int_kwr->InsertNewRegister($data);
        }
    }
    
    public function DeleteRegister(){
        extract($_POST);
        $data=$_POST['id'];
        $this->model_int_kwr->DeleteRegister($data);
        echo "REGISTRO ELIMINADO";
    }
    
}

    