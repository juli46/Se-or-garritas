<?php 

include("mensajes.php");
require_once 'conexion.php';

if($_POST) {
	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$clave = $_POST['clave'];
	$correo = $_POST['correo'];
	$userOk= "";

	//Primero comprobamos que el usuario no este registrado en el sistema
	 //se valida si el usuario ya esta registrado
       $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'; ";
       if($resultado = $conexion->query($consulta)) {
				while($row = $resultado->fetch_array()) { 
					$userOk = $row["usuario"];					
				}				
	    } 
	    if($usuario==$userOk){	   
          $msg="El usuario ya esta registrado en el Sistema.";
          $url= "../index.html";
	      msgError($msg,$url);
	      echo "<link rel='stylesheet' href='../css/bootstrap.css'>";
		  echo "<link rel='stylesheet' href='../css/bootstrap.min.css'>";	
	      echo "<a href='../index.html'><button type='button' class='btn btn-primary'>Regresar</button></a>";
     }else{
       //mensaje de confirmación.
	   $msg="Registro creado correctamente.";
       $sql = "INSERT INTO usuarios (id,usuario, nombre, apellidos, clave, correo,perfil,estado) VALUES (null,'$usuario', '$nombre', '$apellidos', '$clave','$correo', 1,1)";
	    if($conexion->query($sql) === TRUE) {
		$url= "../bienvenida.php";
		msgOk($msg,$url);
		echo "<link rel='stylesheet' href='../css/bootstrap.css'>";
		echo "<link rel='stylesheet' href='../css/bootstrap.min.css'>";	
		echo "<p><strong>Registro creado correctamente.</strong></p>";
		echo "<a href='../bienvenida.php'><button type='button' class='btn btn-primary' style='margin-right:5px'>Ingresar</button></a>";
	echo "<a href='../index.html'><button type='button' class='btn btn-primary'>Volver al Inicio</button></a>";
	    } else {
		$msg="Error al registrar el usuario.";
		$url= "../index.html";
		msgError($msg,$url);
		echo "Error " . $sql . ' ' . $conexion->connect_error;
	    }	
   }
	$conexion->close();
	
} //cierra POST

?>