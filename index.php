<!DOCTYPE html>
<html lang="es">
<head>
	<title>CSA Test Prep</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="style/mediastyle.css">
	<script type="text/javascript" src="style/ventanas.js"></script>	 
</head>
<body>
<!---------------------------------HEADER-------------------------------->
<?php include'header.php'; ?>
<!---------------------------------/HEADER-------------------------------->

<!-------------------------------SECTION---------------------------------->
		<section>	
				<a href="registro.php">
					<div></div>	
				</a>
		</section>
<!-------------------------------/SECTION-------------------------------->


<!-------------------------------LOGIN---------------------------------->
		<div id="login">	

				<div id="camposLogin">
					<form action="validar.php" method="POST" name="ingresar">
						<div id="user">
							User<input type="text" name="email">
						</div>

						<div id="pass">
							Pass <input type="password" name="pass">
						</div>

						 <a href="javascript:document.ingresar.submit()">Ingresar</a>
						 					
					</form>
				</div><!--FIN /camposLogin-->
		</div>
<!-------------------------------/LOGIN-------------------------------->



<!-------------------------------CONTENIDO1---------------------------------->
	<div id="contenido1">
			<div id="contenido1into">

				<div id="cajaleft">
					<img src="img/toefl.jpg">
						<br><br>
					El TOEFL (Test of English as a Foreign Language) es un examen exigido a estudiantes internaciones como requisito para ingresar a universidades alrededor del mundo. Es utilizado como criterio de evaluacion a nivel internacional y mide la fluidez y el conocimiento...


						<br><br>
						<a href="toelf.php" style="text-decoration:none;"><div id="readmore"> leer mas </div></a>	
				</div><!--//cajaleft-->

				<div id="cajaright">
					<img src="img/sati.jpg">
					<br><br>
					El SAT (Scholastic Aptitude Test) es el examen estandarizado de admision universitaria mas utilizado a nivel mundial.  Es desarrollado por la Camara de Universidades y "Educational Testing Services" para medir el nivel de preparacion y los conocimientos adquiridos por...
					<br><br>
					<a href="sat.php" style="text-decoration:none;"><div id="readmore"> leer mas </div></a> 
				</div><!--//cajaright-->

			</div><!--//contenido1into-->
	</div>
<!-----------------------------//CONTENIDO1---------------------------------->


<!-------------------------------CONTENIDO2---------------------------------->
	<div id="contenido1">
			<div id="contenido1into">

				<div id="cajasNoticias">
					<p>Ultimas Noticias</p>
					<font color="grey">What I've been blogging about recently.</font> 	
				</div><!--//cajaleft-->

				<div id="cajasNoticias">
					<p>
					Ya esta disponible en nuestra pagina web el Examen de Nivelacion de Ingles
					</P>
					<font color="grey">
					A partir de ahora, puedes presentar el Examen de Nivelacion de Ingles en la comodidad de tu casa, colegio o trabajo a travas de la pagina web de CSA TEST PREP.  Solo necesitas acceso a una comput ...
					</font>	
				</div><!--//cajaleft-->

				<div id="cajasNoticias">
					<p>
					Necesitas asesoria aplicando a las Universidades en los Estados Unidos?
					</p>
					<font color="grey">
					CSA TEST PREP te acompana y ayuda durante todo el proceso de admision de las Universidades en el exterior.  Para lograr esto, podemos a tu alcance los siguientes paquetes: Paquete ¿Como apli ...
					</font>
				</div><!--//cajaleft-->

				<div id="cajasNoticias">
					<p>
					Ingresa en las mejores universidades de Estados Unidos con CSATestPrep
					</p>
					<font color="grey">
					Aprender ingles es indispensable para todas las personas que buscan ampliar su campo profesional y laboral. Especializarse, estudiar, estar siempre al dia y, des er posible, hacerlo en el exterior. ...
					</font>
				</div><!--//cajaleft-->
			
			</div><!--//contenido1into-->
	</div>
	
<!-------------------------------/CONTENIDO2-------------------------------->


<!-------------------------------Enlaces Academias---------------------------------->
<?php include'enlacesAcademias.php'; ?>
<!-------------------------------//Enlaces Academias-------------------------------->

<?php include'footer.php';?>
		
	</body>

</html>