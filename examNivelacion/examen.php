<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Examen de Nivelacion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="style/mediastyle.css">

	<style type="text/css">
		#preguntaActual{
			height: auto;
			margin:0 auto;
			width: 200px;
			font-size: 1.3em;
			color: green;
			background-color: none;
			text-align: center;
		}

		#contenedorBotones{
			height: auto;
			margin:0 auto;
			width: 400px;
			font-size: 1.3em;
			color: green;
			background-color: none;
			text-align: center;
		}

				#contenedorBotones input{ 
					margin:5px;
					font-size: 0.8em;
					cursor: pointer;
					}

		#contenedorPreguntas{
			height: auto;
			margin:0 auto;
			width: 350px;
			font-size: 1em;			
			background-color: none;
			text-align: left;
			margin-bottom: 30px;
		}

		#contenedorRespuestas{
			height: 5px;
			margin:0 auto;
			width: 400px;
			font-size: 1em;			
			background-color: none;
			text-align: center;
			margin-bottom: 30px;
		}

		#contenedorTerminar{
			height: 5px;
			margin:0 auto;
			width: 400px;
			font-size: 1em;			
			background-color: none;
			text-align: center;
			margin-bottom: 30px;
		}

	</style>
</head>
<body>
<?php
if (isset($_SESSION["login"]))
			{
				$micuenta=$_SESSION["login"];
?>
<!---------------------------------HEADER-------------------------------->
	<header>
		<article class="imgHeader"><img src="img/logo.jpg"></article>
		<!--<a href="../">Volver a CsaTestprep</a>-->
		EXAMEN DE NIVELACION
	</header>
<!-------------------------------//HEADER-------------------------------->
<section>


		<form method="post" action="#">
			<?php		
				include("preguntasExam.php");
				require("../cnx.php");


				$micuenta=$_SESSION["login"];
				
				$ssql = mysql_query("SELECT * FROM usuarios WHERE email='$micuenta'");
				$idUser	 =  mysql_result($ssql,0,"id");
				

					if(isset($_POST['siguiente']))
					{
						require ("siguiente.php");
					}
					elseif(isset($_POST['anterior']))
					{
						require ("anterior.php");
					}
					elseif(isset($_POST['terminar']))
					{
						require ("terminar.php");
					}
					else
					{
						require("comenzar.php");
						mysql_close($conexion);	
					}

			?>
		</form>


		
</section>

<!---------------------------------FOOTER-------------------------------->
	<div id="footer">
		<!--<a href="examen.php"><div id="comenzarFooter"><strong>COMENZAR EL EXAMEN</strong></div></a>-->
	</div>
<!--------------------------------//FOOTER-------------------------------->
<?php			
	}else	
	{			
		session_destroy();
		?>
			<script type="text/javascript">
				window.location="../index.php";
			</script>		
		<?php
	}
?>	
</body>
</html>

