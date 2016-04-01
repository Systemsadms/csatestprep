<?php
	session_start();
	if ($_SESSION['admin'] == 'csatestprep')
		{
			include ("cnx.php");					
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

	<style>
		#cajaImagenHome{
			height: 200px;
			width: 200px;
			border-radius: 20px;
			padding-top: 10px;
			vertical-align:top;
			background-color: #E6E6E6;
			background-image: url(img/usuario.png);
			background-repeat: no-repeat;
			background-position: center;
			display: inline-block;
			margin: 3px;		
		}

		#cajaImagenHome2{
			height: 200px;
			width: 200px;
			padding-top: 10px;
			border-radius: 20px;
			background-color: #E6E6E6;
			background-image: url(img/contenido.png);
			background-repeat: no-repeat;
			background-position: center;
			display: inline-block;
			margin: 3px;		
		}

		#cajaImagenHome3{
			height: 200px;
			width: 200px;
			border-radius: 20px;
			background-color: #E6E6E6;
			background-image: url(img/mensaje.png);
			background-repeat: no-repeat;
			background-position: center;
			display: inline-block;
			padding-top: 10px;
			vertical-align:top;
			margin: 3px;		
		}

		#cajaImagenHome4{
			height: 200px;
			width: 200px;
			border-radius: 20px;
			background-color: #E6E6E6;
			background-image: url(img/e-commers.png);
			background-repeat: no-repeat;
			background-position: center;
			display: inline-block;
			padding-top: 10px;
			vertical-align:top;
			margin: 3px;		
		}

		#cajaImagenHome5{
			height: 200px;
			width: 200px;
			border-radius: 20px;
			background-color: #E6E6E6;
			background-image: url(img/soporte.png);
			background-repeat: no-repeat;
			background-position: center;
			padding-top: 10px;
			vertical-align:top;
			display: inline-block;
			margin: 3px;		
		}

		#cajaImagenHome6{
			height: 200px;
			width: 200px;
			border-radius: 20px;
			background-color: #E6E6E6;
			background-image: url(img/cerrar.png);
			background-repeat: no-repeat;
			background-position: center;
			display: inline-block;
			padding-top: 10px;
			vertical-align:top;
			margin: 3px;		
		}


		section{
			height: auto;
			min-height: 60%;
			text-align: center;
			font-size: 18px;
		}

		section a{
			color: black;
		}
    </style>  
<body>


<!---------------------------------HEADER-------------------------------->
	<header>
		<article><img src="img/logo.jpg"></article>
		<a href="destruir.php">Cerrar Session</a>
	</header>
<!-------------------------------//HEADER-------------------------------->


<!---------------------------------SECTION-------------------------------->
	<section>
		
		<a href="usuarios"><div id='cajaImagenHome'>Usuarios</div></a>
		<a href=""><div id='cajaImagenHome2'>Contenidos</div></a>
		<a href=""><div id='cajaImagenHome3'>Mensajes</div></a>
		<a href=""><div id='cajaImagenHome4'>E-commers</div></a>
		<a href=""><div id='cajaImagenHome5'>Soporte</div></a>
		<a href="destruir.php"><div id='cajaImagenHome6'>Cerrar Session</div></a>
		
	</section>
<!-------------------------------//SECTION-------------------------------->



<!---------------------------------FOOTER-------------------------------->
	<footer>
		<article><img src="img/logoSA.png" width="100%" height="100%"></article>
	</footer>
<!--------------------------------//FOOTER-------------------------------->

	
</body>
</html>
<?php			
	}else	
	{			
		session_destroy();		
		header("location:index.php");	
	}
?>	