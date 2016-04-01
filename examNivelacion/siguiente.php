<?php
//CONDICION SI SE LE DIO CLICK AL BOTON SIGUIENTE PREGUNTA
//Recibe la Variable PreguntaAnterior y RespuestaAnterior
//Incrementa La variable preguntaAnterior que se convierte en variabale preguntaActual y la guarda en estatus.
//Guarda la respuesta anterior segun sea el numero de preguntaAnterior en el campo resp(x) correspondiente en la BD. 
	$respuestaAnterior = $_POST['pre'];
	$preguntaAnterior = $_POST['pregunta'];
	

			//Consultas condicionales que guardan la respuesta anterior seleccionada, en la BD al clickear siguiente ppregunta.
			//(Cuida cambiar el valor SET resp"x" segun sea la respuesta anterior) 
			if($preguntaAnterior=="1")
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp1='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="2") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp2='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="3") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp3='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="4") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp4='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="5") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp5='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="6") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp6='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="7") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp7='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="8") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp8='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="9") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp9='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}
			elseif ($preguntaAnterior=="10") 
			{
				$consultaUpdate = "UPDATE examenesnivelacion SET resp10='$respuestaAnterior' WHERE idUser= $idUser";	
				$hacerconsulta  = mysql_query ($consultaUpdate);
			}

	
		
	//Consulta que guarda en el estatus del examen de la BD el numero de pregunta actual ya incrementada.
	$preguntaActual = ++$preguntaAnterior;	
	$consultaUpdate = "UPDATE examenesnivelacion SET estatus='$preguntaActual' WHERE idUser= $idUser";	
	$hacerconsulta  = mysql_query ($consultaUpdate);	
		

	echo "<div id='preguntaActual'>Pregunta N°:".$preguntaActual. "</div>";
	//echo "<br>";	
	//echo "Respuesta Anterior:"." ".$respuestaAnterior;
	//echo "<br><br>";


		//Detecta cual es la variable preguntaActual he impreime la nueva pregunta ""Atencion con el value en el input hiiden debe ser el mismo del numero de la pregunta para poder pasar la variable a la siguiente o anterior pregunta""
		if($preguntaActual=="1")
			{
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp1");
						if($respuestaSeleccionada=="")
						{
							echo"<div id='contenedorRespuestas'>";
							echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
							echo "<br><br>";
							echo "</div>";
						}
							else
						{
							echo"<div id='contenedorRespuestas'>";
							echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
							echo "<br><br>";
							echo "</div>";
						}

				echo $pregunta1;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="1"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>
				<?php
			}
			elseif ($preguntaActual=="2")
			{
						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp2");
						if($respuestaSeleccionada=="")
						{
							echo "<br>";
							echo"<div id='contenedorRespuestas'>";
							echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
							echo "<br><br>";
							echo "</div>";
						}
							else
						{
							echo "<br>";
							echo"<div id='contenedorRespuestas'>";
							echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
							echo "<br><br>";
							echo "</div>";
						}
				echo $pregunta2;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="2"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>
				<?php
			}
			elseif ($preguntaActual=="3")
			{
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp3");
					if($respuestaSeleccionada=="")
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
						echo "<br><br>";
						echo "</div>";
					}
						else
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
						echo "<br><br>";
						echo "</div>";
					}
				echo $pregunta3;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="3"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>
				<?php
			}
			elseif ($preguntaActual=="4")
			{
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp4");
					if($respuestaSeleccionada=="")
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
						echo "<br><br>";
						echo "</div>";
					}
						else
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
						echo "<br><br>";
						echo "</div>";
					}
				echo $pregunta4;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="4"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>
				<?php
			}
			elseif ($preguntaActual=="5")
			{	
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp5");
					if($respuestaSeleccionada=="")
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
						echo "<br><br>";
						echo "</div>";
					}
						else
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
						echo "<br><br>";
						echo "</div>";
					}
				echo $pregunta5;
				?>
					<div id="contenedorBotones">				
					<input type="hidden" name="pregunta" value="5"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>			
				<?php
			}
			elseif ($preguntaActual=="6")
			{
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp6");
					if($respuestaSeleccionada=="")
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
						echo "<br><br>";
						echo "</div>";
					}
						else
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
						echo "<br><br>";
						echo "</div>";
					}
				echo $pregunta6;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="6"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>
				<?php
			}
			elseif ($preguntaActual=="7")
			{
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp7");
					if($respuestaSeleccionada=="")
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
						echo "<br><br>";
						echo "</div>";
					}
						else
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
						echo "<br><br>";
						echo "</div>";
					}
				echo $pregunta7;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="7"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>
				<?php
			}
			elseif ($preguntaActual=="8")
			{
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp8");
					if($respuestaSeleccionada=="")
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
						echo "<br><br>";
						echo "</div>";
					}
						else
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
						echo "<br><br>";
						echo "</div>";
					}
				echo $pregunta8;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="8"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>
				<?php
			}
			elseif ($preguntaActual=="9")
			{
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp9");
					if($respuestaSeleccionada=="")
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
						echo "<br><br>";
						echo "</div>";
					}
						else
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
						echo "<br><br>";
						echo "</div>";
					}
				echo $pregunta9;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="9"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
					</div>
				<?php
			}
			elseif ($preguntaActual=="10")
			{
					$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
					$respuestaSeleccionada = mysql_result($ssql,0,"resp10");
					if($respuestaSeleccionada=="")
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font> Sin Seleccion";
						echo "<br><br>";
						echo "</div>";
					}
						else
					{
						echo "<br>";
						echo"<div id='contenedorRespuestas'>";
						echo "<font color='grey'>Ultima Opcion Marcada:</font>"." " . $respuestaSeleccionada;
						echo "<br><br>";
						echo "</div>";
					}
				echo $pregunta10;
				?>	
					<div id="contenedorBotones">
					<input type="hidden" name="pregunta" value="10"></input>			
					<input type="submit" name="anterior" value="Pregunta Anterior"></input>
					<input type="submit" name="terminar" value="Terminar Examen"></input>
					</div>
				<?php
			}
			  //<input type="submit" name="terminar" value="Terminar Examen"></input>
			 //************************************************************************//
			//ULTIMA PREGUNTA (CAMBIA EL CONTENIDO DE LOS BOTONES POR TERMINAR EXAMEN)//
		   //************************************************************************//

?>