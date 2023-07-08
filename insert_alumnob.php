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
    $matricula=$_REQUEST['matricula'];
    $nom=$_REQUEST['nombre'];
    $ape=$_REQUEST['apellidos'];
    $correo=$_REQUEST['correo'];
    $asesor=$_REQUEST['id_docente'];
    $contra=$_REQUEST['contraseña'];



$aSQL="insert into alumno (matricula, nombre, apellidos, correo, id_docente) values ('$matricula', '$nom', '$ape', '$correo', '$asesor')";
$mysql= "SET FOREIGN_KEY_CHECKS = 0";
$bSQL="insert into sesion (usuario, password, id_rol) values ('$matricula', '$contra', '3')";

mysqli_query($link,$aSQL);
mysqli_query($link,$mysql);
mysqli_query($link,$bSQL);
 header("Location: calumno.php");
?>

</BODY>
</HTML> 