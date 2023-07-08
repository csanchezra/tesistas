<HTML>
<HEAD>
<TITLE>insert</TITLE>
</HEAD>
<BODY>

<?php
    include("conexion.php"); 
    $link=Conectarse();
    session_start();
    
    $usuario = $_SESSION["k_username"];
//Creamos la sentencia SQL y la ejecutamos
    $id=$_REQUEST['id_docente'];
    $nom=$_REQUEST['nombre'];
    $ape=$_REQUEST['apellidos'];
    $correo=$_REQUEST['correo'];
    $contra=$_REQUEST['contraseña'];



$aSQL="insert into docente (id_docente, nombre, apellidos, correo) values ('$id', '$nom', '$ape', '$correo')";
$mysql= "SET FOREIGN_KEY_CHECKS = 0";
$bSQL="insert into sesion (usuario, password, id_rol) values ('$id', '$contra', '2')";

mysqli_query($link,$aSQL);
mysqli_query($link,$mysql);
mysqli_query($link,$bSQL);
 header("Location: cdocentes.php");
?>

</BODY>
</HTML> 