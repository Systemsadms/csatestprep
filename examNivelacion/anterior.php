<?php

		$preguntaAnterior = $_POST['pregunta'];
		$preguntaActual = --$preguntaAnterior;

		$consultaUpdate = "UPDATE examenesnivelacion SET estatus='$preguntaActual' WHERE idUser= $idUser";	
		$hacerconsulta  = mysql_query ($consultaUpdate);


		echo "<div id='preguntaActual'>Pregunta N°:".$preguntaActual. "</div>";
		echo "<br>";
		

				//Recibe la variable PreguntaActual ya decrementada y guardada en bd
				//Busca en Bd seguna sea la pregunta la respuesta marcada
				//Imprime la pregunta correspondiente segun sea la PreguntaActual
				//""Importante cambiar los valores en: PreguntaActual, ssql resp(x), pregunta impresa, value input hidden""
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
							<!--<input type="submit" name="anterior" value="Pregunta Anterior"></input>-->
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
				elseif($preguntaActual=="2")
					{

						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp2");						

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

						echo $pregunta2;
						?>	
							<div id="contenedorBotones">
							<input type="hidden" name="pregunta" value="2"></input>			
							<input type="submit" name="anterior" value="Pregunta Anterior"></input>
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
				elseif($preguntaActual=="3")
					{

						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp3");
						
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

						echo $pregunta3;
						?>	
							<div id="contenedorBotones">
							<input type="hidden" name="pregunta" value="3"></input>			
							<input type="submit" name="anterior" value="Pregunta Anterior"></input>
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
				elseif($preguntaActual=="4")
					{

						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp4");
				

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

						echo $pregunta4;
						?>	
							<div id="contenedorBotones">
							<input type="hidden" name="pregunta" value="4"></input>			
							<input type="submit" name="anterior" value="Pregunta Anterior"></input>
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
					elseif($preguntaActual=="5")
					{

						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp5");
				

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

						echo $pregunta5;
						?>	
							<div id="contenedorBotones">
							<input type="hidden" name="pregunta" value="5"></input>			
							<input type="submit" name="anterior" value="Pregunta Anterior"></input>
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
					elseif($preguntaActual=="6")
					{

						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp6");
				

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

						echo $pregunta6;
						?>	
							<div id="contenedorBotones">
							<input type="hidden" name="pregunta" value="6"></input>			
							<input type="submit" name="anterior" value="Pregunta Anterior"></input>
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
					elseif($preguntaActual=="7")
					{

						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp7");
				

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

						echo $pregunta7;
						?>	
							<div id="contenedorBotones">
							<input type="hidden" name="pregunta" value="7"></input>			
							<input type="submit" name="anterior" value="Pregunta Anterior"></input>
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
					elseif($preguntaActual=="8")
					{

						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp8");
				

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

						echo $pregunta8;
						?>	
							<div id="contenedorBotones">
							<input type="hidden" name="pregunta" value="8"></input>			
							<input type="submit" name="anterior" value="Pregunta Anterior"></input>
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
					elseif($preguntaActual=="9")
					{

						$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
						$respuestaSeleccionada = mysql_result($ssql,0,"resp9");
				

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

						echo $pregunta9;
						?>	
							<div id="contenedorBotones">
							<input type="hidden" name="pregunta" value="9"></input>			
							<input type="submit" name="anterior" value="Pregunta Anterior"></input>
							<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
							</div>
						<?php
					}
					//Termina una pregunta antes del la ultima pregunta porq es la funcion de retroceso a la pregunta anterior.


?>