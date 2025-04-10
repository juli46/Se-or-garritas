<?php
   include('login.php');
   
   session_start();   
   $id = $_SESSION["logueado"]; //variable que permite llamar el valor de la sesión   
   
   //echo "<script>alert('la variable es: $id');</script>";

   if(!isset($_SESSION["logueado"])){
   	session_destroy();
      header("location:../index.html"); 
      exit();
   }
?>