<?php
$localhost="127.0.0.1";//localhost
$username="root";   //nombre del admi
$password="";      //clave del admi
$dbname="sr_garritas";  //la de tu bd

$conexion=new mysqli($localhost,$username,$password,$dbname);
//probar conexion
if($conexion->connect_error){
    die("conexion fallida.".$conexion->connect_error);
}else{
       echo "conexion exitosa";
    }
?>