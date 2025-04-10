<?php 
include("mensajes.php");
require_once 'conexion.php';

if($_POST) {
	$id = $_POST['id'];

	//mensaje de confirmación.
	$msg="Registro borrado correctamente.";

	//$sql = "UPDATE usuarios SET estado = 2 WHERE id = {$id}";
	$sql= "DELETE FROM usuarios WHERE id = {$id}";
	if($conexion->query($sql) === TRUE) {
		$url= "../Bienvenida.php";
		msgOk($msg,$url);		
		echo "<link rel='stylesheet' href='../css/bootstrap.css'>";
		echo "<link rel='stylesheet' href='../css/bootstrap.min.css'>";	
		echo "<p><strong>Registro borrado!!</p></strong>";
		echo "<a href='../bienvenida.php'><button type='button' class='btn btn-primary'>Regresar</button></a>";
	} else {
		$url= "../bienvenida.php";
		$msg="No se logró llevar a cabo la operación de borrado.";
		msgError($msg,$url);
		echo "Error al borrar el registro : " . $conexion->error;
	}

	$conexion->close();
}

?>