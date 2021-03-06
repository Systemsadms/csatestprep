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

		input{
			width: 200px;
			height: 50px;
			background-color: blue;			
			border-radius: 5px;
			font-size: 16px;
			color: white;
			cursor: pointer;
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
	
	require ("../cnx.php");
			//Busca en la tabla sessiones el id de usaurio guardado.
			$ssql 		= mysql_query("SELECT * FROM sessiones WHERE id='1'");
			$usuario	= mysql_result($ssql,0,"usuario");			

			//Busca en la tabla usaurios los datos del usuario para mostrarlos
			$ssql 		= mysql_query("SELECT * FROM usuarios WHERE id='$usuario'");
			$nombres	= mysql_result($ssql,0,"nombres");
			$apellidos	= mysql_result($ssql,0,"apellidos");			
			$estatus	= mysql_result($ssql,0,"estatus");

			// Busca en tabla examenesnivelacion el estatus del examen
			//$ssql 			= mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$usuario'");
			//$estatusExamen	= mysql_result($ssql,0,"estatus");


?>



<aside>
					<h2>Datos del Alumno</h2>

					<div><strong>ID:</strong> <?php echo $usuario; ?></div>
					<div><strong>Nombres:</strong> <?php echo $nombres; ?></div>
					<div><strong>Apellidos:</strong> <?php echo $apellidos; ?></div>
					<div><strong>Estatus:</strong><font color="white"><b>"<?php echo $estatus; ?>"</b></font></div>

	</aside>
				
				<div id="botones">


				<?php

					// Comprobacion de Estatus de cliete
					if ($estatus=="no confirmado")
					{
						echo "<form method='post' action='#'>";
						echo "<input type='submit' name='activar' value='Activar Examen'>";
						echo "</form>";
					}
					elseif($estatus == "confirmado")
					{	
						echo "<form method='post' action='../../examNivelacion/resultadoExam.php' target='_blank'>";
						echo "<input type='hidden' name='idUser' value='".$usuario."'>";				
						echo "<input type='submit' name='resultado' value='Ver Resultados'>";
						echo "</form>";

						echo "<br>";

						echo "<form method='post' action='#'>";
						echo "<input type='submit' name='resetear' value='Resetear Examen' style='background-color:red;'>";
						echo "</form>";
					}



					if(isset($_POST['resetear']))
					{
						echo "Examen Reseteado";
					}elseif
						(isset($_POST['activar']))
					{

						$ssql = "SELECT * FROM examenesnivelacion WHERE idUser='$usuario'";
						$rs = mysql_query($ssql,$conexion);			
								if (mysql_num_rows($rs)>0)
									{
										echo "El examen de nivelacion ya esta Activo para este Cliente";
									}
									else
									{
										$estatus	= "1";
										mysql_query ("INSERT INTO examenesnivelacion (idExam, idUser, estatus)VALUES 
										('', '$usuario', '$estatus')");

										$consultaUpdate = "UPDATE usuarios SET estatus='confirmado' WHERE id= $usuario";	
										$hacerconsulta  = mysql_query ($consultaUpdate);
										mysql_close ($conexion);
												
										echo "El Examen de Nivelacion ha sido Activado";
									}	
							
					}



				?>
	
				</div>
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