<?php  


//CREADOR DE GUIDs
function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(0)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
            .chr(0);// "}"
        return $uuid;
  }
 }

 //Conexion a la Base de datos
function conexion() 
{
    $server = 'localhost';
    $user = 'root';
    $psw = '';
    $database = 'tpm';

    $conn = @mysql_connect($server,$user,$psw)
    or die ('Error: To host conections : '.mysql_error());

    mysql_select_db($database, $conn)
    or die ('Error: Select database: '.mysql_error());

    return $conn;
}

?>