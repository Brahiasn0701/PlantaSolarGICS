<?php
session_start();
define("APP_URL","http://localhost/Proyects/PlantaSolarGICS/");
require_once 'model/File.php';
require_once 'model/FileSQL.php';
require_once 'model/Database.php';
require_once 'model/int_kwrSQL.php';
require_once 'model/int_kwr.php';
require_once 'model/usersSQL.php';
require_once 'model/users.php';

function trim_value(&$value)
{
    $value = trim($value);
}