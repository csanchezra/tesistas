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


<body>


	<div class="container">

	<div class="izquierdo">
			<h2>
				SISTEMA PARA LA GESTIÓN DE ALUMNOS DE TITULACIÓN
			</h2>

	</div> 

	<div class="derecho">
	<form clas = "form_login "action = "valida.php" method="POST">
	<div class = "letrero" id="resultado"></div>
	<h3>Iniciar sesión</h3>
	<br><br>

	<p>Usuario:</p>
	<input id="usuario" type="text" class="field" name="usuario">
	<br><br>

	<p>Contraseña:</p>
	<input id = "password" type = "password" class="field" name = "password">
	<br><br>

	<p class="center-content">
	<br>
	<input type="submit" value="Iniciar sesión" name="inicia" id="busqueda" class="boton"/>
	</p>

    </form>
    </div>
	
  </div><!--cierra container -->





	

</body>



</html>