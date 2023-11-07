<?php

$host="localhost";
$user="root";
$pass="";
$db="consultorio";

$conexion= new mysqli($host,$user,$pass,$db);

if($conexion->connect_errno){
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: ".$conexion->connect_errno;
    die;
}
?>