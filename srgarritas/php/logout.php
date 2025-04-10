<?php  
include 'session.php';
 /*@session_start();
 $_SESSION = array(); 
 // Esto eliminará todos los valores existentes del usuario, así que ten cuidado si quieres conservar algunos.
  session_destroy();
  header("location:index.html");
  exit;*/

  if(isset($_SESSION["logueado"])){ 
    @session_start();
    $_SESSION = array(); 
    // Esto eliminará todos los valores existentes del usuario, así que ten cuidado si quieres conservar algunos.
    session_destroy();  
   header("Location: ../index.html"); 
     //echo "<script>window.open('../index.html',_self);</script>";      
    exit();
  } 
?>