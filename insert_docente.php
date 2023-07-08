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
         <a href="calumnos.php">Alumnos</a>
         <a href="salir.php">Cerrar sesión</a>
           
  </nav>
</div>




<body>

	<div class="container">

	<div class="izquierdo_info">

  	
	<FORM METHOD="POST" ACTION="insert_docenteb.php">

	<h3>Capturar datos: </h3>

	ID Docente: 
	<INPUT TYPE='text' NAME='id_docente' SIZE='65' required>
	<br>

	Nombre: 
	<INPUT TYPE='text' NAME='nombre' SIZE='65' required>
	<br>

	Apellidos: 
	<INPUT TYPE='text' NAME='apellidos' SIZE='65' required>
	<br>

	Correo: 
	<INPUT TYPE='text' NAME='correo' SIZE='65' required>
	<br>

	Password: 
	<INPUT TYPE='password' NAME='contraseña' SIZE='65' required>
	<br>

<br>
<br>

<input type="submit" value="Insertar" name="insertar" id="insertar" class="boton"/>
 
</FORM>

	</div> 


	
  </div><!--cierra container -->





	

</body>


</html>