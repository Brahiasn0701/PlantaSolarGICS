<?php

class FilesController{
    private $modelFiles;
    public function __construct() {
        try {
          
         } catch (Exception $ex) {
            
        }
    }
    
  
public function FileAnalicerINTANA(){
  session_start();  
    $fechaIni= new DateTime("17-05-01");
    $fechafin= new DateTime("18-04-30");
    $diferencia= $fechaIni->diff($fechafin);
    $cantidadCarpetas=$diferencia->format('%R%a');  
    
    
    $FechaInicio="17-05-01";
    
$nuevafecha = strtotime ( '+1 day' , strtotime ( $FechaInicio )) ;
$nuevafecha = date ( 'y-m-d' , $nuevafecha );
 
echo $nuevafecha;

for ($i= 0; $i<= $cantidadCarpetas; $i++) {
   $nuevafecha = strtotime ( '+1 day' , strtotime ( $FechaInicio ));
  /*  

    
if(empty($_SESSION['CONT'])){
    if($_SESSION['CONT']==0){
         $_SESSION['CONT']=1;
    }
}else{ 
   $_SESSION['CONT']=$_SESSION['CONT']+1;
  //$_SESSION['CONT']=1;
}

   echo $_SESSION['CONT'];
        if($_SESSION['CONT']<=7){
            //file_put_contents("DATA/data/170501/int_ana_170501.txt",$cadena);

            // Inicializamos nuestras variables
            $i=1; //contador de línea que se está leyendo
            $numlinea = 1; //línea que se desea borrar
            $aux = array();

            // Abrimos el archivo
            $archivo = fopen('DATA/data/170501/int_ana_170501.txt','r');

            // Hacemos un ciclo y vamos recogiendo linea por linea del archivo.
            while ($linea = fgets($archivo))
            {

              if ($i != $numlinea)  // Si la linea que deseamos eliminar no es esta 
              {
                $aux[] = $linea; // La agregamos a nuestra variable auxiliar
              }

              // Incrementamos nuestro contador de lineas
              $i++;
            }

            // Cerramos el archivo.
            fclose($archivo);

            // Convertimos el arreglo(array) en una cadena de texto (string) para guardarlo.
            $aux = implode($aux, '');

            // Reemplazamos el contenido del archivo con la cadena de texto (sin la linea eliminada)
            file_put_contents('DATA/data/170501/int_ana_170501.txt', $aux);
             header("Refresh:0");
         }
*/
  }
  }
    
    
}
