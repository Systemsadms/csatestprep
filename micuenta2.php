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

				<a href="registro.php"><div>	
					
				</div></a>

		</section>
<!-------------------------------/SECTION-------------------------------->
	<div style="margin:0 auto; background-color:white; text-align:center; color:red; font-size:0.9em;">Usuario u contraseña incorrecta. Si no posee cuenta de usario regiestrese <a href="registro.php">aqui.</a></div>

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
						<div id="readmore"> leer mas </div> 	
				</div><!--//cajaleft-->

				<div id="cajaright">
					<img src="img/sat.jpg">
					<br><br>
					El SAT (Scholastic Aptitude Test) es el examen estandarizado de admision universitaria mas utilizado a nivel mundial.  Es desarrollado por la Camara de Universidades y "Educational Testing Services" para medir el nivel de preparacion y los conocimientos adquiridos por...
					<br><br>
					<div id="readmore"> leer mas </div> 
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


<!-------------------------------CONTENIDO3---------------------------------->
	<div id="contenido3">
			<div id="contenido1into">

				<div id="cajasNoticias3">
					<p></p>
				</div><!--//cajaleft-->

				<div id="cajasNoticias3">
					<p>Links</P>
				    CollegeBoard<br><br>
				    ETS<br><br>
				    Examen de Nivelacion de Ingles<br><br>
				</div><!--//cajaleft-->

				<div id="cajasNoticias3">
					Quieres estudiar en una universidad de USA?<br><br>
					Este es tu camino, Becas Deportivas y Académicas.<br><br>
					CSA Becas es el Camino a tu Futuro!!<br>
					<img src="img/csabecas.png">
				</div><!--//cajaleft-->

				<div id="cajasNoticias3">
				<p>	</p>
				</div><!--//cajaleft-->
			
			</div><!--//contenido1into-->
	</div>
	
<!-------------------------------/CONTENIDO3-------------------------------->


<footer>
Copyright © 2011 - 2012 CSATestPrep.com - Todos los derechos reservados - RIF: J-31622179-2 | WebDesign & Hosting by: SuperWebPeople.com
</footer>
		
	</body>

</html>