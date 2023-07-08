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

	<form action = "actualizab.php" method="POST">
			
	<?php 
	include("conexion.php"); 
	$link=Conectarse();
    session_start();
    
    $usuario = $_SESSION["k_username"];

  

   
	$result2=mysqli_query($link, "select * from proyecto where matricula = '$usuario' ");  
    echo "<h3>Datos del proyecto de tesis</h3>";
    echo "<br>";
 	echo "<table class = 'tablaconsulta'>";
 	echo "<tr> <th>Titulo</th> <th>Descripcion</th> <th>Estatus</th> <th>Archivo</th> </tr>"; 
 	while($row = mysqli_fetch_array($result2)) 
  	{ 
   		$tit=$row["titulo"];
   		$des= $row["descripcion"];
   		$sta=$row["status"];
   		$arc=$row["archivo"];
   		 
   		echo "<br>"; 
   		echo "<TR><TD> $tit </TD><TD> $des </TD><TD> $sta </TD><TD> $arc </TD></TR>";
  	}   

  	echo "</table>";
   	mysqli_close($link); 
?>
<br>
<input type="submit" value="Actualizar" name="actualizar" id="actualizar" class="boton"/>
	</p>

    </form>

	</div> 


	
  </div><!--cierra container -->





	

</body>


</html>