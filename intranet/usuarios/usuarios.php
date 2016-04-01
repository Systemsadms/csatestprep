<?php
	session_start();
	if ($_SESSION['admin'] == 'csatestprep')
		{
			include ("../cnx.php");					
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>SystemsAdmins C.A</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="../style/mediastyle.css">
</head>

	<style>
		#cajaImagenHome{
			height: 200px;
			width: 200px;
			border-radius: 5px;
			background-color: red;
			display: inline-block;
			margin: 3px;		
		}

		section{
			height: auto;
			min-height: 60%;
			text-align: center;
			background-color:#D8D8D8;			
			margin: 0;
			padding: 0;			
		}

		#filtroUsuarios{
			height: auto;
			width: 600px;
			min-height: 40px;
			background-color: grey;
			padding-top: 8px;
			border: 1px solid black;
			border-top:none ;
			text-align: left;
			padding-left: 5px;
			display: inline-block;
		}

		#abrirUsuario{
			height: auto;
			width: 230px;
			min-height: 40px;
			background-color: grey;
			padding-top: 8px;
			border: 1px solid black;
			border-top:none ;
			text-align: left;
			padding-left: 5px;
			display: inline-block;
		}

		.margen{margin-left: 5px;}

		aside{			
			min-width: 250px;
			width: auto;
			height: auto;
			padding-left: 20px;			
			text-align: left;
			display: inline-block;
			border-radius: 5px;
			padding-bottom:20px; 
			background-color: green;
		}

		aside div{
			margin-top: 20px;
		}

		#botones{
			width: 250px;
			height: auto;			
			display: inline-block;
			background-color: none;
			vertical-align: top;
		}

		#cajaImagenHome{
			height: 50px;
			width: 200px;
			border-radius: 5px;
			background-color: blue;
			color: white;			
			margin: 3px;
			vertical-align: top;
			padding-top: 10px;
		}

    </style>  
<body>


<!---------------------------------HEADER-------------------------------->
	<header>
		<article><img src="../img/logo.jpg"></article>
		<a href="../home.php">Home</a> / <a href="index.php">Clientes</a> / <a href="../destruir.php">Cerrar Session</a>
	</header>
<!-------------------------------//HEADER-------------------------------->


<!---------------------------------SECTION-------------------------------->
<section>



<?php
	$IdUser = $_POST['id'];
	require ("../cnx.php");

	$ssql = "SELECT * FROM usuarios WHERE id='$IdUser'";
	$rs = mysql_query($ssql,$conexion);			
		if (mysql_num_rows($rs)>0)
		{

			$ssql 		= mysql_query("SELECT * FROM usuarios WHERE id='$IdUser'");
			$nombres	= mysql_result($ssql,0,"nombres");
			$apellidos	= mysql_result($ssql,0,"apellidos");
			$telefono	= mysql_result($ssql,0,"telefono");
			$email		= mysql_result($ssql,0,"email");
			//$pass		= mysql_result($ssql,0,"estatus");
			$dir		= mysql_result($ssql,0,"dir");			
			$estatus	= mysql_result($ssql,0,"estatus");

			//Guarda el ID de usuario para manener datos entre ventanas
			$consultaUpdate = "UPDATE sessiones SET usuario='$IdUser'";	
			$hacerconsulta  = mysql_query ($consultaUpdate);


			?>
				<aside>
					<h2>Datos del Alumno</h2>

					<div><strong>ID:</strong> <?php echo $IdUser; ?></div>
					<div><strong>Nombres:</strong> <?php echo $nombres; ?></div>
					<div><strong>Apellidos:</strong> <?php echo $apellidos; ?></div>
					<div><strong>Telefono:</strong> <?php echo $telefono; ?></div>
					<div><strong>Email:</strong> <?php echo $email; ?></div>
					<div><strong>Direccion:</strong> <?php echo $dir; ?></div>
					<div><strong>Estatus:</strong> <?php echo $estatus; ?></div>

				</aside>
				
				<div id="botones">
					<a href="examenNivelacion.php"><div id='cajaImagenHome'>Examen de Nivelacion</div></a>
					<div id='cajaImagenHome' style="background-color:grey;">Enviar Mensajes</div>
					<div id='cajaImagenHome' style="background-color:grey;">Avances del Curso</div>
					<div id='cajaImagenHome' style="background-color:grey;">Record de Pagos</div>
				</div>
			<?php

		}
		else
		{
			echo "<br><br><br><br>";
			echo "NO EXISTES USUARIOS REGISTRADOS CON EL ID SELECCIONADO";
			echo "<br>";
			echo "<br>";
			echo "<a href='index.php'>Volver a Busquerda de Usuarios</a>";
		}
?>
</section>
<!-------------------------------//SECTION-------------------------------->



<!---------------------------------FOOTER-------------------------------->
	<footer>
		<article><img src="../img/logoSA.png" width="100%" height="100%"></article>
	</footer>
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