<?php
$server="localhost";
$user="root";
$password="";
$database="proyects";

 //Establecer conexion a la base de Datos mysql
 $conexion= new mysqli($server,$user,$password,$database);
 //Verificar conexion 
   if($conexion-> connect_errno){
    die("error". $conexion->connect_errno);
   }else{
    echo "Conexion Exitosa";
   }
   $conexion-> close();

?>