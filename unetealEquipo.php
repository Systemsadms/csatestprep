<!DOCTYPE html>
<html lang="es">
<head>
	<title>CSA Test Prep</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="style/mediastyle.css">
	<script type="text/javascript" src="style/ventanas.js"></script>

	<style type="text/css">
		#imguneteAleq{
			height: 200px;
			background-image:url(img/uneteAleq.jpg);
			background-size: 950px; 
		}

		@media (max-width:710px){
			#imguneteAleq{
				background-position: -6em;
			}
		}
	</style>	 
</head>

	<body>

<!---------------------------------HEADER-------------------------------->
<?php 
	include'header.php';
?>
<!---------------------------------/HEADER-------------------------------->

				<div id="titulo">	
					<h1>Unete a Nuestro Equipo</h1>
				</div>
			
<!-------------------------------CONTENIDO1---------------------------------->
<div id="contenedorContenido">

	<div id="contenidoConteido">
			<div id="imguneteAleq"></div>
				
		<h1>¿Deseas trabajar con nosotros?</h1>

Continuamente estamos en busca de personal talentoso.
<br><br>
Solicitamos profesores bilingües cuyo idioma nativo sea inglés o con un alto nivel de fluidez en el idioma.  Actualmente, ofrecemos oportunidades en las siguientes áreas:
<br><br>

       - Profesor de Inglés<br>
       - Profesor de TOEFL<br>
       - Profesor de SAT (verbal y/o matemática)<br>
       - Profesor de GMAT y GRE con amplio conocimiento y experticia en el examen.<br><br>

Si estás interesado, envíanos tu CV a: <a href="#">contacto@csatestprep.com</a>

<br><br><br><br>
	</div>


</div>	
<!-----------------------------//CONTENIDO1---------------------------------->

<!-------------------------------Enlaces Academias---------------------------------->
<?php include'enlacesAcademias.php'; ?>
<!-------------------------------//Enlaces Academias-------------------------------->


<?php include'footer.php';?>
		
	</body>

</html>