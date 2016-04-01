<!DOCTYPE html>
<html lang="es">
<head>
	<title>CSA Test Prep</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="style/mediastyle.css">
	<script type="text/javascript" src="style/ventanas.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
</head>

	<body>

<!---------------------------------HEADER-------------------------------->
<?php include'header.php'; ?>
<!---------------------------------/HEADER-------------------------------->

		

				<div id="titulo">	
					<h1>Contactanos</h1>
				</div>
			


<!-------------------------------CONTENIDO1---------------------------------->
<div id="contenedorContenido">


	<div id="contenidoContacto">	
			

			<div id="mensaje">
			


			<?php	
				if ( isset ($_POST["btn_enviar"]))

			{
				//$para = 'systemsadms@hotmail.com';
				$para = "farahfarita@gmail.com";				
				$asunto = $_POST["asunto"];
				$desde = $_POST["desde"];
				$mensaje =
				"Nombre:". $_POST["nombre"] . "<br><br>" .
				"Telefono de Contacto:" . $_POST["telefono"] . "<br><br>"
				 . $_POST["mensaje"];


				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["desde"] . "\r\n";
				mail ($para, $asunto, $mensaje, $cabeceras);
				echo "<font color='green'>Su mensaje ha sido enviado con exito, <brn>pronto sera atendido por nuestro personal<br></font>";
			}

	?>
	


			<h1>Envianos un Mensaje</h1>
				<form method="post" action="#">
					<div id="label">Nombre</div>
					<div id="input">
                        <span id="sprytextfield1">                           
                            <input type="text" name="nombre" id="nombre">
                            <span class="textfieldRequiredMsg">Coloque su Nombre.</span>
                        </span>                    
           	  	  </div>

				  	<div id="label">Telefono</div>
					<div id="input">
						  <span id="sprytextfield2">
                              <input type="text" name="telefono" id="telefono">
                              <span class="textfieldRequiredMsg">Coloque su Telefono.
                              </span><span class="textfieldInvalidFormatMsg">No es un Numero valido.</span>
                          </span>
	        		</div>

					<div id="label">E-Mail</div>
					<div id="input">
                    	<span id="sprytextfield3">
                            <input type="text" name="desde" id="desde">
                            <span class="textfieldRequiredMsg">Coloque su Email.</span>
                            <span class="textfieldInvalidFormatMsg">No es un Email valido.</span>
                        </span>               		  
  	        		</div>

					<div id="label">Asunto</div>
					<div id="input">
                   	  	<span id="sprytextfield4">                    	
                            <input type="text" name="asunto" id="asunto">
                            <span class="textfieldRequiredMsg">Inique el Asunto.</span>
                        </span>                   	  
          			</div>

					<div id="label">Mensaje</div>
					<div id="input">
                          <span id="sprytextarea1">
                              <textarea name="mensaje" id="mensaje2" cols="20" rows="5"></textarea>
                              <span class="textareaRequiredMsg">Redacte su Mensaje.</span>
                          </span>                   	  
          			</div>

					<div style="
						margin-top:1em;
						text-align:center;
						width:100%;
						float:left;
					">
						<input type="submit" name="btn_enviar" value="Enviar Mensaje"/>
					</div>

				</form>

			
				<div style="
						margin-top:1em;
						text-align:left;
						width:100%;
						float:left;
						text-align:center;
					">
					<h1>Redes Sociales</h1>

							<div style="">
						        	<!--<a href="">
						                 <img src="img/in.png" onmouseover="this.src='img/in_hover.png';" onmouseout="this.src='img/in.png';" width="40px" height="40px"/>
						            </a>-->
						            
						            <a href="https://twitter.com/csatestprep">
						                 <img src="img/twitter.png" onmouseover="this.src='img/twitter_hover.png';" onmouseout="this.src='img/twitter.png';" width="40px" height="40px"/>         
						            </a>
						            
						            <a href="https://www.facebook.com/csatestprep">
						                 <img src="img/face.png" onmouseover="this.src='img/face_hover.png';" onmouseout="this.src='img/face.png';" width="40px" height="40px"/>
						            </a>
						        </div>
					
				</div><!--Fin de redes sociales-->
				
			</div><!--Fin de Mensaje-->

			<div id="direccion">


					<h1>Dirección:</h1>
					
					Edificio Roraima, Piso 8, Oficina 8G
					Av. Francisco de Miranda, Urb. Campo Alegre
					Chacao – Caracas
					
					<h1>Teléfonos:</h1>
					+58.212.952.2284

					<h1>Aqui estamos</h1>

					<a href="#"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.1149754744374!2d-66.86532246454941!3d10.491601782296687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a58fdb8435321%3A0xa9ad544317e0e3eb!2sEdificio+Roraima%2C+Av+Francisco+de+Miranda%2C+Caracas!5e0!3m2!1ses-419!2sve!4v1458619794256" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></a>

			</div>
	</div>


</div>	
<!-----------------------------//CONTENIDO1---------------------------------->

<?php include'footer.php';?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
	</body>

</html>