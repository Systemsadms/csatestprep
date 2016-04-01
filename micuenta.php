<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>CSA Test Prep</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="style/mediastyle.css">
	<script type="text/javascript" src="style/ventanas.js"></script>

	<style>


		#cajaexamen{
			width: auto;
			background-color:none;
			height:auto; 
			width:600px; 
			display:inline-block; 
			vertical-align:top;
		}
		@media (max-width:738px){

			#cajaexamen{
				width:auto; 

			}
		}

	</style>
 
</head>

	<body>
	<?php
	  
		  if (isset($_POST["end"]))
		  	{
			 session_destroy(); 
				?>	 
					<script type="text/javascript">
					window.location="index.php";
					</script>
		   		<?php	
		 	}


			if (isset($_SESSION["login"]))
			{
				$micuenta=$_SESSION["login"];




									
						require("cnx.php");
						$ssql = mysql_query("SELECT * FROM usuarios WHERE email='$micuenta'");
						$id	 		=  mysql_result($ssql,0,"id");
						$email 		=  mysql_result($ssql,0,"email");
						$pass 		=  mysql_result($ssql,0,"pass");
						$nombres 	=  mysql_result($ssql,0,"nombres");
						$apellidos 	=  mysql_result($ssql,0,"apellidos");						
						$telefono 	=  mysql_result($ssql,0,"telefono");
						$dir 		=  mysql_result($ssql,0,"dir");
						$estatus 	=  mysql_result($ssql,0,"estatus");
						mysql_close($conexion);

						//echo "Session abierta ID:" . " " .$id;
				
			?>
			

<!---------------------------------HEADER-------------------------------->
<?php include'header.php'; ?>
<!---------------------------------/HEADER-------------------------------->

		

				<div id="titulo">	
					<h1>"Hola <?php echo $nombres ?>"</h1>
				</div>
			


<!-------------------------------CONTENIDO1---------------------------------->
<div id="contenedorContenido2" style="background-color: white; ">


	<div id="contenidoContacto3" style=" text-align:center; width:87%; background-color:none;" >	
			
	<div style="background-color:none; height:auto; width:auto; display:inline-block; vertical-align:top; margin:0;">
		<a href="#">
				<div style="
					width:210px;
					height:250px;
					position:relative;
					margin:2em auto;			
					background-color:grey;
					background:url(img/cargar.png);
					background-position:-1em;
				">		
				</div>
		</a>

	

	</div>

	<div id="cajaexamen">
		
			<div style="
				text-align:center;
			">
				<a href="" style="text-decoration:none;">Mensajes <font color="green">(0)</font></a>
				<a href="" style="text-decoration:none;">Editar Perfil <font color="green">(0)</font></a> 
				<a href="destruir.php" style="text-decoration:none;"><font color="black">/</font> Cerrar Session</a>
			</div>







			<div style="
				text-align:center;
				padding-top: 3em;
				font-size:1.2em;
				margin-bottom: 10px;				
			">
				<b>Gracias por inscribirse en nuestro curso de<br> 
				ingles profesional.</b> <br>
				<br>
				Estamos verificando sus datos para validar su cuenta 
			</div>




					<?php
						if($estatus == "confirmado")
						{
							?>
								<form action="examNivelacion/index.php" method="post">
									<input type="submit" name="presentar" value="Presentar Examen" 
									style="
										background-color:green;
										width:15em;
										height:2.8em;
										color:white;
										margin:0 auto;
										border-radius:0.3em 0.3em 0.3em 0.3em;
										padding-top:0.1em;
										cursor: pointer;
										font-size: 1em;
									"/>									
								</form>

							<?php
						}							
						else
						{
							?>
								<div style='						
									background-color:grey;
									width:15em;
									height:2.8em;
									color:white;
									margin:0 auto;
									border-radius:0.3em 0.3em 0.3em 0.3em;
									padding-top:0.1em;
								'>
									Presentar Examen<br>(Nivelacion)
								</div>
							<?php
						}

					?>
				
					

					
				
	



			
			<div style="
				text-align:center;
				padding-top: 2em;
				font-size:1em;								
			">
				Si desea notificarnos de inmediato para validar su cuenta<br>
				puede llamarnos a los siguientes nuemeros telefonicos<br>
				+(58) 0212 000 000 / 000 000
			</div>
	</div>
		
	<div style=" display:inline-block; vertical-align:top; width:auto; background-color:none;">
	<div style="
					background-color:none;
					margin-left:3em;
					font-size:1em;
					margin-top:1em;
					color:grey;
					">
						<a href="#" style="color:green; text-decoration:none;">Niveles y Cursos(+)</a>
				</div>

				<div style="
					background-color:none;
					margin-left:3em;
					font-size:1em;
					margin-top:1em;
					color:grey;
					">
						<a href="#" style="color:green; text-decoration:none;">Examenes(+)</a>
				</div>

				<div style="
					background-color:none;
					margin-left:3em;
					font-size:1em;
					margin-top:1em;
					color:grey;
					">
						<a href="#" style="color:green; text-decoration:none;">Materiales(+)</a>
				</div>

				<div style="
					background-color:none;
					margin-left:3em;
					font-size:1em;
					margin-top:1em;
					color:grey;
					">
						<a href="#" style="color:green; text-decoration:none;">Compañeros(+)</a>
				</div>

				<div style="
					background-color:none;
					margin-left:3em;
					font-size:1em;
					margin-top:1em;
					color:grey;
					">
						<a href="#" style="color:green; text-decoration:none;">Profesores(+)</a>
				</div></div>

	</div>
</div>
<!-----------------------------//CONTENIDO1---------------------------------->


<?php include'footer.php';?>




<?php
	}
	else{
		session_destroy();		
		?>
			<script type="text/javascript">
			window.location="index.php";
			</script>

		<?php
	}
 ?>	
	</body>

</html>