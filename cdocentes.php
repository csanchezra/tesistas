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
  
         <a href="indexadmin.php">Inicio</a>
         <a href="cdocentes.php">Docentes</a>
         <a href="calumno.php">Alumnos</a>
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

    $result=mysqli_query($link, "select * from docente");  
    echo "<h3>Docentes: </h3>";
   	echo "<table class ='tablaconsulta'>";
 	echo "<tr> <th>ID Docente</th> <th>Nombre</th> <th>Apellidos</th> </tr>"; 
 	while($row = mysqli_fetch_array($result)) 
  	{ 
   		$id=$row["id_docente"];
   		$nom= $row["nombre"];
   		$ape = $row["apellidos"];
  
   		echo "<tr> <td>$id</td> <td>$nom</td> <td>$ape</td> </tr>";
  	}   
   	echo "</table>";

 	
   	mysqli_close($link); 
 	
	?> 
	<br>
	<button class = "boton" type="button" onclick="location.href = 'insert_docente.php'" >Agregar docente</button>

	</div> 


	
  </div><!--cierra container -->


</body>
</html>