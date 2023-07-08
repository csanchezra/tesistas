<?php 
session_start();
$usuario=$_REQUEST['user']; 
$password=$_REQUEST['password'];

include("conexion.php"); 
$link=Conectarse();
   
   $query ="SELECT password,usuario,id_rol FROM usuarios WHERE usuario='$usuario'";

   $result = mysqli_query($link, $query);

   if($row = mysqli_fetch_array($result))
      {
        if($row["password"] == $password)
           {
            $_SESSION["k_username"] = $row['usuario'];   
            $_SESSION["k_tipo"] = $row['id_rol'];          
            
            if ( $_SESSION["k_tipo"]==1){ header('Location:indexadmin.php');
            }else

            if ( $_SESSION["k_tipo"]==2){ header('Location:indexdocente.php');
            }else


                header('Location:indexalumno.php');
           }
        	else   header('location:errorPassword.php');
              
      }
   else {
         header('location:errorLogin.php');
        }
 
?> 