<?php
require_once 'conexion.php';

if ($_POST){
    $documento=$_POST['documento'];
    $nombre=$_POST ['nombre'];
    $apellido1=$_POST ['apellido1'];
    $apellido2=$_POST ['apellido2'];
    $direccion=$_POST ['direccion'];
    $celular=$_POST ['celular'];
    $correo_electronico=$_POST ['correo'];
    $clave=$_POST ['clave'];
   

    $sql= "INSERT INTO cliente VALUES (null,'$documento','$nombre','$apellido1','$apellido2','$direccion','$celular','$correo_electronico','$clave')";

    if ($conexion->query($sql)===true) {
        $mensaje = "Registro exitoso";
        echo " <script> alert('$mensaje'); </script> ";
        echo " <script> window.location.href = '../index.html'; </script> ";
        

    } else {
        echo "Error".$sql." ".$conexion->connect_error;
        echo "<script>alert('Error al registrar.')</script>";
        $conexion->close();
    }
    
}
?>