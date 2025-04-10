<?php
require_once 'conexion.php';

if($_POST){
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];
$hora=$_POST['tiempo'];
$t_pagar=$_POST['total'];
$especificacion=$_POST['especificaciones'];

$sql= "INSERT INTO agendar_cita VALUES (null,'$nombres','$apellidos','$correo','$telefono','$fecha','$hora','$t_pagar','$especificacion')";

if ($conexion->query($sql)===true) {
    $mensaje = "Cita Agendada ";
    echo " <script> alert('$mensaje'); </script> ";
    echo " <script> window.location.href ='checkout.html'; </script> ";
    

} else {
    echo "Error".$sql." ".$conexion->connect_error;
    echo "<script>alert('Error al registrar.')</script>";
    $conexion->close();
}

}
?>