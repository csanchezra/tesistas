<?php 
function Conectarse() 
{ 
   if (!($link=mysqli_connect("db4free.net", "tesista", "_-gT-yS$7jvn6DL"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysqli_select_db($link,"tesistas")) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   }
   return $link; 
} 
?>
