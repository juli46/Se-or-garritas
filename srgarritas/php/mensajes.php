<?php  
   
        
/*Programación de SweetAlert desde un archivo PHP*/
    /*Este PHP, llama a los mensajes del archivo JS "mensajes.js" ubicado en la carpeta "js"*/

    function msgOk($msg,$url) 
    {  //mensaje de confirmación
      echo '<script>  
            msgOk("'.$msg.'","'.$url.'");          
            </script>';
    }  

    function msgError($msg,$url)
    {  //mensaje de Error      
        echo '<script> 
        msgError("'.$msg.'","'.$url.'");                
        </script>';            
    } 

    function msgPregunta($msg)
    {   //mensaje tipo pregunta con dos posibles respuestas     
    echo '<script>
    msgPregunta("'.$msg.'");
    </script>';        
    } 
    
    function msgInfo($msg)
    { //mensaje simple de tipo información.    
        echo '<script> 
        msgInfo("'.$msg.'");                    
        </script>';            
    } 
    
   
    
 ?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<script src="../js/sweetalert.min.js"></script>
    <script src="../js/mensajes.js"></script>

   <!-- <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=index.html"> -->   
 
</head>
<body>

  <!--<p> Espere por favor, será redireccionado en 5 segundos.</p>-->
	<!--<button><a href="index.html">Regresar al index</a></button>-->
  
</body>
</html>