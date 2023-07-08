<HTML>
<HEAD>
<TITLE>Actualizar2.php</TITLE>
</HEAD>
<BODY>

<?php
    include("conexion.php"); 
    $link=Conectarse();
    session_start();
    
    $usuario = $_SESSION["k_username"];
//Creamos la sentencia SQL y la ejecutamos
$ti=$_REQUEST['titulo'];
$descripcion=$_REQUEST['descripcion'];
$status=$_REQUEST['status'];
$arc=$_REQUEST['archivo'];
echo "$ti<br>";
echo "$descripcion<br>";
echo "$status<br>";
echo "$arc<br>";
$sSQL="Update proyecto Set titulo='$ti',descripcion='$descripcion',status='$status', archivo = '$arc' Where matricula ='$usuario'";
mysqli_query($link,$sSQL);
 header("Location: actualizar.php");
?>

</BODY>
</HTML> 