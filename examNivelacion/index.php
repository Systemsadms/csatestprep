<?php
session_start();

if (isset($_SESSION["login"]))
			{
				$micuenta=$_SESSION["login"];

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>SystemsAdmins C.A</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="style/mediastyle.css">
</head>
<body>

<!---------------------------------HEADER-------------------------------->
	<header>
		<article class="imgHeader"><img src="img/logo.jpg"></article>
		<a href="../">Volver a CsaTestprep</a>
	</header>
<!-------------------------------//HEADER-------------------------------->
<section>
<h1 style="text-align: center;">Bienvenido al Examen de Nivelacion </h1>
<br>
<p style="text-align: justify;">Antes de iniciar el examen, tenga en cuenta los siguientes puntos importantes:
<br>
<br>
1) El examen consta de (X) preguntas de seleccion simple, solo podra seleccionar una respuesta a la vez.
<br>
<br>
2) El examen tiene una duracion de (X) minutos. Al completarse el tiempo se dara por terminado el examen archivando su calificacion para ser analizada por nuestros especialistas. 
<br>
<br>
3) TENGA CUIDADO AL RETROCEDER EN LAS PREGUNTAS, usted Debera marcar nuevamente la Ultima Seleccion al Continuar Avanzando, usted podra ver cual fue su ultima opcion seleccionada en pantalla.
<br>
<br>
4) Al comenzar el examen si sufre una desconeccion inesperada ya sea por una falla de acceso a internet, un problema presentado en su pc o un cierre accidental de la ventana del explorador donde ejecuta el examen, usted podra ingresar a su cuenta de usuario y continuar el examen en la ultima pregunta que respondio. Tenga en cuenta que tras comenzar el examen el tiempo limite del mismo comenzara a avanzar y no es afectado tras este tipo de inconvenientes. 
<br>
<br>
5) Le deseamos el mayor de los exitos.</p>
</section>


<!---------------------------------FOOTER-------------------------------->
	<div id="footer">
		<a href="examen.php"><div id="comenzarFooter"><strong>COMENZAR EL EXAMEN</strong></div></a>
	</div>
<!--------------------------------//FOOTER-------------------------------->
</body>
</html>
<?php			
	}else	
	{			
		session_destroy();		
		header("location:../index.php");	
	}
?>