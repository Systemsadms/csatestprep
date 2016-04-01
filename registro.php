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
	<style type="text/css">
	#bottonEnviar{
				margin-top:1em;
				text-align:center;
				width:100%;
				float:left;
				}

		@media (max-width:550px){
			#registro{
			float: none;
			width: 100%;
			height: 700px;
			}

			#contenedorRegistro{
			height: 650px;
			width: 100%;		
			}

			#input2{
				float: none;
				}
		}	
	</style>	 
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
</head>

	<body>
<!---------------------------------HEADER-------------------------------->
<?php 
	include'header.php';
?>
<!---------------------------------/HEADER-------------------------------->

		

				<div id="titulo">	
					<h1>Inscribete</h1>
				</div>
			


<!-------------------------------CONTENIDO1---------------------------------->

<?php
/*****************************SCRIPT ENVIAR DATOS*********************************/

if (isset($_POST['btn_enviar']))  //isse btn_eviar1
    {
		$largo=5;
		$str = "abcdefghijklmnopqrstuvwxyz";
		$may = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$num = "1234567890";
		$cad = "";
		# Comienzo de la generacion de clave.
		$cad = substr($may ,rand(0,24),1);
		$cad .= substr($num ,rand(0,10),1);
		$cad .= substr($num ,rand(0,10),1);
		for($i=0; $i<$largo; $i++) 
		{
		$cad .= substr($str,rand(0,24),1);
		}
	
	
		$email		= 	$_POST['email'];
		$pass		=	$cad;
		$nombres	=	$_POST['nombres'];
		$apellidos	=	$_POST['apellidos'];	
		$telefono	=	$_POST['telefono'];	
		$direccion	=	$_POST['dir'];
		$comentarios=	$_POST['comentarios'];
	
	
			
			require("cnx.php");
			$ssql = "SELECT * FROM usuarios WHERE email ='$email'";
			$rs = mysql_query($ssql,$conexion);			
			if (mysql_num_rows($rs)>0)
				{									
					echo "<table align='center' border='0'><tr><td><b>Ya existe una cuenta de usuario con esa direccion Email, por favor coloque otro direccion email para completar su Inscripcion</b><td></tr></table>";						
					mysql_close($conexion);				
					?>
	                	<br /><br />
	                    <a href="registro.php">--> Intentar de Nuevo</a>
					<?php			
				}
				else 
				{
				
					require("cnx.php");
					mysql_query ("INSERT INTO usuarios VALUES 
					('','$nombres','$apellidos','$telefono', '$email','$pass', '$direccion','$comentarios','no confirmado')");
					mysql_close ($conexion);
					
									
						?>
                            <table width="" border="0" align="center">
                              <tr>
                                <td align="center"><strong><em><font size="+1">
                                Bienvenido a nuestra familia de Estudiantes. <br /><br />
                                </font></em></strong><em><font size="+1">Se ha registrado exitosamente por favor busque en su correo electronico nuestro email con los datos para ingresar a su cuenta de usuario, de no estar en la bandeja de entrada buscar en la bandeja de spam o correos no deseados y guardar nuestra direccion como segura
                                .</font></em></td>
                              </tr>
                            </table>

                        <?php
						echo "<br><br><br>";				
				}

		
							
//Envios de Correos			
							
							
$body='Feclicitaciones, se ha registrado un Nuevo Estudiante.

Estos son los datos de Registro ingresados:

Correo:		'.$_POST['email'].'						
Nombres:    '.$_POST['nombres'].'
Apellidos:	'.$_POST['apellidos'].'	
Telefono:	'.$_POST['telefono'].'	
Direccion:	'.$_POST['dir'].'
Comentarios: '.$_POST['comentarios'].'

(Importante) Recomndamos Verificar los datos de registro suministrados antes de validar el nuevo cliente..		
';

				$body2 = 'Saludos Cordiales:
							
						Sr(a). '.$_POST['nombres'].', es un gusto para nosotros que usted forme parte de grpo de estudiantes. Su usuario y su password para acceer a su cuenta son los siguientes:
								
						Usuario:	'.$_POST['email'].'
						Password:	'.$cad.'
									
						Usted puede cambiar su contraseña cuando guste desde su cuenta en www.csatestprep.com		
								
						Le invitamos a visitar nuestra pagina web www.csatestprep.com donde con su usuario y su contraseña, usted podra monitorear el estatus de sus cursos y asi estar informado sobre el avance del mismo entre otras cosas de interes.
										
						Gracias por preferirnos, esperamos brindarles un excelente servicio.										
						';
							
							
					
				//$para="systemsadms@hotmail.com";
				$para = "farahfarita@gmail.com";	
				$para2= $_POST['email'];
							
									

								$asunto = "Se ha registrado un Nuevo Estudiante";
								$desde = $_POST["email"];
								$mensaje = $body;
											
								$cabeceras = "";
								$cabeceras = "MIME-VErsion: 1.0 \r\n";
								$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
								//$cabeceras = "To: " . $_POST ["nick"] . "\r\n";
								$cabeceras = "From: " . $_POST ["email"] . "\r\n";  
							
							
								$asunto2 	= "Bienvenidos a CSA TestPrep";								
								$desde2		="info@csatestprep.com";
								$mensaje2 	= $body2;

								$cabeceras2 = "";
								$cabeceras2 = "MIME-VErsion: 1.0 \r\n";
								$cabeceras2	= "Content-Type: text/html; charset=iso-8859-1\r\n";
								//$cabeceras2 = "To: " . $_POST ["email"] . "\r\n";
								$cabeceras2 = "From: " . "info@csatestprep.com" . "\r\n";    
							
							
								mail ($para2, $asunto2, $mensaje2, $cabeceras2); 
								mail ($para, $asunto, $mensaje, $cabeceras);												
													
							
	}
	else
	{
		?>
			<div id="registro">
				<div id="contenedorRegistro">
					<h1>Inscripcion y Asesoria</h1>
					<form action="#" method="post">
						<div id="label2">Nombres</div>
						<div id="input2">
<span id="sprytextfield1">
                                 <input type="text" name="nombres" id="nombres">
                                <span class="textfieldRequiredMsg">Coloque sus Nombres.</span>
                            </span>                        
              			</div>				

						<div id="label2">Apellidos</div>
                      <div id="input2">
                         	<span id="sprytextfield2">
                         	<input type="text" name="apellidos" id="apellidos">
                         	<span class="textfieldRequiredMsg">Coloque sus Apellidos.</span>
                            </span>
                       	
              </div>

						<div id="label2">Telefonos</div>
						<div id="input2">
                        <span id="sprytextfield3">
                        <input type="text" name="telefono" id="telefono">
                        <span class="textfieldRequiredMsg">Coloque su Telefono.</span>
                        <span class="textfieldInvalidFormatMsg">Coloque un Numero valido.</span>
                        </span>
                       
            </div>

						<div id="label2">E-Mail</div>
						<div id="input2">
                        <span id="sprytextfield4">
                        <input type="text" name="email" id="email">
                        <span class="textfieldRequiredMsg">Coloque su Email.
                        </span><span class="textfieldInvalidFormatMsg">Coloque un Email valido.</span>
                        </span>
                        
            </div>

						<div id="label2">Direccion</div>
						<div id="input2">
                        <span id="sprytextfield5">
                        <input type="text" name="dir" id="dir">
                        <span class="textfieldRequiredMsg">Coloque su Direccion.</span>
                        </span>
              </div>

						<div id="label2">Comentarios:</div>
						<div id="input2">
                        <span id="sprytextarea1">
                        <textarea name="comentarios" id="mensaje2" cols="30" rows="5"></textarea>
                        <span class="textareaRequiredMsg">Redactenos un Comentario.</span></span>                      
              </div>

						<div id="bottonEnviar">
							<input type="submit" name="btn_enviar" value="Enviar Solicitud"/>
						</div>
					</form>
				</div>
			</div>
		<?php
	}//FIN isset btn_eviar1

/*****************************FIN SCRIPT ENVIAR DATOS**********************************/

?>







	
<!-----------------------------//CONTENIDO1---------------------------------->

<?php include'footer.php';?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
	</body>

</html>