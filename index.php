<?php
require_once 'core/core.php';
if(!isset($_REQUEST['c'])){
    $controller=ucwords("Index");
    require_once 'controller/'.$controller.'Controller.php';
    $controller=$controller.'Controller';
    $controller=new $controller();
    $controller->DefaultPage();
}else{
   
    $controller=ucwords($_REQUEST['c']);
     /*if(!file_exists('controller/'.$controller.'Controller.php')){
         header("location:".APP_URL.'web/PageNotAvaliable');
     }else{*/
    require_once 'controller/'.$controller.'Controller.php';
    $controller=$controller.'Controller';
    $controller=new $controller();
    $metodo=isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
    call_user_func(array($controller,$metodo));
 
}