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
		#imgNostros{			
			height: 200px;			
			background-image: url(img/nostros.jpg);		
			}

			@media (max-width:710px){
				#imgNostros{
					background-position:-6em;
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
					<h1>Nosotros</h1>
				</div>
			
<!-------------------------------CONTENIDO1---------------------------------->
<div id="contenedorContenido">
	<div id="contenidoConteido">

			<div id="imgNostros"></div>
			

			<br><br>
			Somos una escuela de inglés especializada dirigida a todas aquellas personas que desean realizar sus estudios universitarios en  Los Estados Unidos y buscan orientación, asesoría, y preparación en el proceso.
			<br><br>			
			Ofrecemos cursos y talleres intensivos enfocados en proporcionar a los estudiantes las herramientas necesarias para lograr un excelente desempeño en los exámenes de admisión de las Universidades de los Estados Unidos; así como facilitar el proceso de admisión por medio de asesoría y tutorías.
			<br><br>
			Contamos con el apoyo de nuestro aliado Collegiate Sports of America SA (CSA Latinoamérica); distinguida compañía de Becas Deportivas y Académicas para estudiantes que desean realizar sus estudios en el exterior.
			<br><br>
			<br><br>
	</div>
</div>	
<!-----------------------------//CONTENIDO1---------------------------------->

<!-------------------------------Enlaces Academias---------------------------------->
<?php include'enlacesAcademias.php'; ?>
<!-------------------------------//Enlaces Academias-------------------------------->


<?php include'footer.php';?>

	</body>

</html>