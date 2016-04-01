<!DOCTYPE html>
<html>
<head>
	<title>CSA Test Prep</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="style/mediastyle.css">
	<script type="text/javascript" src="style/ventanas.js"></script>	 
</head>
		<style type="text/css">
			#imgNivelacion{
				background-color:none;
				height:227px;
				width:562px;
				margin:0 auto;
				border:solid 1px #0B4F8C;
				margin-bottom:2em;
				background-image: url(img/nivelacion.jpg);
			}

			#imgToelf{
				background-color:none;
				height:227px;
				width:562px;
				margin:0 auto;
				border:solid 1px #0B4F8C;
				margin-bottom:2em;
				background-image: url(img/toelf.jpg);
			}
			#imgSat{
				background-color:none;
				height:227px;
				width:562px;
				margin:0 auto;
				border:solid 1px #0B4F8C;
				margin-bottom:2em;
				background-image: url(img/sat.jpg);
			}
			#imgGmat{
				background-color:none;
				height:227px;
				width:562px;
				margin:0 auto;
				border:solid 1px #0B4F8C;
				margin-bottom:2em;
				background-image: url(img/gmat.jpg);
			}

			@media (max-width:565px){
				#imgNivelacion{
				width: 100%;
				background-image: url(img/nivelacion2.jpg);
				background-position: center top;
				background-repeat: no-repeat;
				}

				#imgToelf{
					width: 100%;
					background-image: url(img/toelf2.jpg);
					background-position: center top;
					background-repeat: no-repeat
				}
				#imgSat{
					width: 100%;
					background-image: url(img/sat2.jpg);
					background-position: center top;
					background-repeat: no-repeat
				}
				#imgGmat{
					width: 100%;
					background-image: url(img/gmat2.jpg);
					background-position: center top;
					background-repeat: no-repeat
				}
		}
		</style>

<body>

<!---------------------------------HEADER-------------------------------->
<?php 
	include'header.php';
?>
<!---------------------------------/HEADER-------------------------------->

				<div id="titulo">	
					<h1>Examenes</h1>
				</div>
			
<!-------------------------------CONTENIDO1---------------------------------->
<div id="contenedorContenido">

	<div id="contenidoConteido">

		<a href="#">
			<div id="imgNivelacion"></div>
		</a>

		<a href="toelf.php">
			<div id="imgToelf"></div>
		</a>

		<a href="sat.php">
			<div id="imgSat"></div>
		</a>

		<a href="gmat.php">
			<div id="imgGmat"></div>
		</a>

		<br>
		
	</div>


</div>	
<!-----------------------------//CONTENIDO1---------------------------------->

<!-------------------------------Enlaces Academias---------------------------------->
<?php include'enlacesAcademias.php'; ?>
<!-------------------------------//Enlaces Academias-------------------------------->

<?php include'footer.php';?>

	</body>

</html>