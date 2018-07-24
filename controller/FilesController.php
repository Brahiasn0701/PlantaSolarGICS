<?php

class FilesController{
    private $modelFiles;
    public function __construct() {
        try {
          
         } catch (Exception $ex) {
            
        }
    }
    
  
public function FileAnalicerINTANA(){
    $fechaIni= new DateTime("17-05-01");
    $fechafin= new DateTime("18-04-30");
    $diferencia= $fechaIni->diff($fechafin);
    $cantidadCarpetas=$diferencia->format('%r%a');
    $FechaInicio= "17-05-01";
        for ($i= 0; $i<= $cantidadCarpetas; $i++) {
            $nuevafecha = strtotime ( '+1day' , strtotime ( $FechaInicio ));
            $nuevafecha = date ( 'y-m-d' , $nuevafecha );
            //$nuevafecha = str_replace(array('-'), '', $nuevafecha);
            echo $nuevafecha.'<br>';
            $_SESSION['CONT'] = $i;
            echo $_SESSION['CONT'].'<br>';
            //if($_SESSION['CONT'] === 364){
              //  $archivo = fopen('DATA/data/'.$nuevafecha.'/int_ana_'.$nuevafecha.'.txt','r');
                //while ($linea = fgets($archivo))
                //{
                  //  echo $linea;
                //}
                //fclose($archivo);
                // Convertimos el arreglo(array) en una cadena de texto (string) para guardarlo.
                //$aux = implode($aux, '');

                // Reemplazamos el contenido del archivo con la cadena de texto (sin la linea eliminada)
                //file_put_contents('DATA/data/170501/int_ana_170501.txt', $aux);
                //header("Refresh:0");
            //}
        }
   }
}
