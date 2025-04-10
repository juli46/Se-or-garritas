<?php
include ('conexion.php');
$mensaje="";


//primero verificamos un POST
if($_POST){
$usuario=$_POST['correo'];
$clave=$_POST['clave'];
$perfil="";
$estado="";

//Comprobar si se llenaron los campos
if(empty($usuario) || empty($clave)){
echo "<script>alert('Llene todos los campos');</script>";
echo "<script>window.location.href = 'index.html';</script>";
}else{
$consulta="SELECT * FROM usuarios WHERE usuarios= '$usuario' AND clave='$clave' ";
$resultado= mysqli_query($conexion,$consulta);
$cont= mysqli_num_rows($resultado); //Hay filas?
if($cont>0){
$arraylogin = mysqli_fetch_object($resultado);
$_SESSION['login_user'] = $_POST['usuarios'];
//comprobamos a que interfaz 
if($arraylogin ->perfil == "admin"){
    header("location: ../home.html");
}

if($arraylogin ->perfil == "usuario"){
    header("location: ../Bienvenida_Usuario.html");
}


}else{
$mensaje= "usuario y/o contraseña incorrecta.";
echo "<script>alert('$mensaje'),</scrip>";
echo "<script>window.location.href = 'index.html';</script>";

}
}
}
?>
