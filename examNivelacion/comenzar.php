<?php

//CODICIONAL SI NO SE HA CLICKEADO  ANTERIOR EN PREGUNTA 2(GENERAL PARA COMENZAR  DE PRUEBA)
//Muestra El estatus
//Imprime la pregunta Numero 1 		

		
		$ssql 		= mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
		$estatus	=  mysql_result($ssql,0,"estatus");
		

		if($estatus=="completado")
		{
			echo "<br><br><br>";
			echo"<div id='contenedorRespuestas'>";
			echo "Felicitaciones, has completado el Examen de Nivelacion";
			echo "<br><br><br>";
			echo "<a href='../destruir.php'>Volver a CsatestPrep.com</a>";
			echo "</div>";
			echo "<br><br><br>";
		}
		else
		{

				$preguntaActual = $estatus;
				echo "<div id='preguntaActual'>Pregunta N°:".$preguntaActual. "</div>";				
				echo "<br><br>";

							if($preguntaActual=="1")
								{
									echo $pregunta1;

									?>	
										<div id="contenedorBotones">
										<input type="hidden" name="pregunta" value="1"></input>			
										<!--<input type="submit" name="anterior" value="Pregunta Anterior"></input>-->
										<input type="submit" name="siguiente" value="Pregunta Siguiente"></input>
										</div>
									<?php
								}
								elseif ($preguntaActual=="2")
								{
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
		}



?>

