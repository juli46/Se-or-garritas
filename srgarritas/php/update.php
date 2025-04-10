<?php 
include("mensajes.php");
require_once 'conexion.php';

if($_POST) {
	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$clave = $_POST['clave'];
	$correo = $_POST['correo'];
	$perfil = 1;
	$estado = 1;

	$id = $_POST['id'];

	//mensaje de confirmación.
	$msg="Registro editado correctamente.";

	$sql  = "UPDATE usuarios SET usuario = '$usuario', nombre = '$nombre', apellidos = '$apellidos', clave = '$clave', correo = '$correo', perfil = '$perfil', estado = '$estado' WHERE id = {$id}";
	if($conexion->query($sql) === TRUE) {
		msgOk($msg);
		echo "<link rel='stylesheet' href='../css/bootstrap.css'>";
		echo "<link rel='stylesheet' href='../css/bootstrap.min.css'>";	
		echo "<p><strong>Registro editado correctamente.</strong></p>";
		echo "<a href='../editar.php?id=".$id."'><button type='button' class='btn btn-warning' style='margin-right:5px'>Volver a editar</button></a>";
		echo "<a href='../bienvenida.php'><button type='button' class='btn btn-primary'>Listar Usuarios</button></a>";
	} else {
		$msg="No se logró editar el registro.";
		msgError($msg);
		echo "Error al actualizar el registro : ". $conexion->error;
	}

	$conexion->close();

}

?>