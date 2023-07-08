<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tesistas</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>


<header class="header">
	<div class="contenedor logo-contenedor">
		
			<a href="/">
				<img src="img/logo1.png" width="110px" alt="Ubicar Logo">
			</a>
				
			<h1>Facultad de Ciencias de la Computación</h1>
							
			<a href="/">
				<img src="img/logo3.png" width="110px" alt="Ubicar Logo">
			</a>			
	</div>

</header>

<div class = "nav-bg">
	<nav class="navegacion-principal otro">    
  
         <a href="indexalumno.php">Inicio</a>
         <a href="consulta.php">Datos Generales</a>
         <a href="actualizar.php">Agregar avances</a>
         <a href="salir.php">Cerrar sesión</a>
           
  </nav>
</div>




<body>


	<div class="container">

	<div class="izquierdo_info">

	<?php
	include("conexion.php"); 
	$link=Conectarse();
    session_start();
    
    $usuario = $_SESSION["k_username"];
   //echo "<br> id Pelicula = $id";

echo '<FORM METHOD="POST" ACTION="actualiza2new.php">';

//Creamos la sentencia SQL y la ejecutamos
//$sSQL="Select titulo,director, actor From pelicula where id_pelicula='$id'";
//$result=mysql_query($sSQL);

$result=mysqli_query($link,"select * from proyecto where matricula ='$usuario'");
$row = mysqli_fetch_array($result);
$ti=$row["titulo"];
$des=$row["descripcion"];
$sta=$row["status"];
$arc=$row["archivo"];

echo "Titulo  : <INPUT TYPE='text' NAME='titulo' value='$ti' SIZE='50'><br>";
echo "<br>"; 
echo "Descripcion : <INPUT TYPE='text' NAME='descripcion' value='$des' SIZE='100'><br>";
echo "<br>"; 
echo "Status   : <INPUT TYPE='text' NAME='status' value='$sta' SIZE='50'><br>";
echo "<br>"; 
echo "Documento: <input type ='FILE' name='archivo'>";
echo "<br>"; 
?>
<br>
<br>

<input type="submit" value="Actualizar" name="actualizar" id="actualizar" class="boton"/>
 
</FORM>

	</div> 


	
  </div><!--cierra container -->





	

</body>


</html>