<?php

class FilesController{
    private $modelFiles;
    public function __construct() {
        try {
            $this->modelFiles = new File();
         } catch (Exception $ex) {
            
        }
    }
    
  
public function FileAnalicerINTANA(){
    $fechaIni= new DateTime("17-05-01");
    $fechafin= new DateTime("18-04-30");
    $diferencia= $fechaIni->diff($fechafin);
    $cantidadCarpetas=$diferencia->format('%r%a');
    $FechaInicio= "17-05-01";
        for ($i= 0; $i<= 1; $i++) {
            if(empty($_SESSION['fecha_ini'])){
                $_SESSION['fecha_ini'] = '17-05-01';
            }
            $_SESSION['nueva_fecha'] = strtotime ( '+1day' , strtotime ( $_SESSION['fecha_ini'] ));
            $_SESSION['nueva_fecha'] = date ( 'y-m-d' , $_SESSION['nueva_fecha']); 
            $_SESSION['nueva_fecha_replace'] = str_replace(array('-'), '', $_SESSION['nueva_fecha']);
          //  $_SESSION['pepe2'] = $_SESSION['nuvea_fecha'];

            /*$nuevafecha = strtotime ( '+1day' , strtotime ( $_SESSION['fecha_ini'] ));
            $nuevafecha = date ( 'y-m-d' , $nuevafecha );
            */


            echo $_SESSION['nueva_fecha'].'<br>';
            echo $_SESSION['nueva_fecha_replace'].'<br>';
            /*
                $_SESSION['CONT'] = $i;
                $_SESSION['CONT'].'<br>';
                $_SESSION['fecha_ini']=$_SESSION['nueva_fecha'];
            */
             $route = "DATA/data/";
             $archivo = fopen($route.$_SESSION['nueva_fecha_replace'].'/int_kwr_'.$_SESSION['nueva_fecha_replace'].'.txt', "r");
             //$_SESSION[$_SESSION['nueva_fecha_replace']]=array("pepe");
             while (!feof($archivo)) {
                $line =  fgets($archivo);
                //array_push($_SESSION[$_SESSION['nueva_fecha_replace']], $line);
                $exp = explode(";", $line);
                for($i = 0; $i <= 34; $i++){
                   echo $exp[$i].'<br>';
                   $array = array("INT_KWR_DATE" => $_SESSION['nueva_fecha'],
                                    "INT_KWR_TIME" => $exp[0],
                                    "INT_KWR_S" => $exp[1],
                                    "INT_KWR_TECHNOLOGY" => $exp[2],
                                    "INT_KWR_KPC" => $exp[3],
                                    "INT_KWR_U_DC_V" => $exp[4],
                                    "INT_KWR_I_DC_A" => $exp[5],
                                   "INT_KWR_P_DC_W" => $exp[6],
                                   "INT_KWR_U_AC_V" => $exp[7],
                                   "INT_KWR_I_AC_A" => $exp[8],
                                   "INT_KWR_P_AC_W" => $exp[9]);
                   $this->modelFiles->InsertIntKwr($array);
                }
                //var_dump($exp);
             }
             fclose($archivo);
                //$aux = implode($aux, '');
                // Reemplazamos el contenido del archivo con la cadena de texto (sin la linea eliminada)
                //file_put_contents('DATA/data/170501/int_ana_170501.txt', $aux);
                //header("Refresh:0");
            //}
        }
        session_destroy();
   }
}
