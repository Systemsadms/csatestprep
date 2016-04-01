<?php

	// cambiar por consulta
	$idUser=$_POST['idUser'];
	// cambiar por consulta

	require ("correccionExam.php");	

?>



Nombres:<?php echo $nombres; ?>
<br>
Apellidos: <?php echo $apellidos; ?>
<br>
Email: <?php echo $email; ?>
<br>
Id Examen: <?php echo $idExam; ?>
<br>
<br>

<pre>Respuestas Corectas:<?php echo $respuestasCorrectas; ?>    Respuestas Incorrectas:<?php echo $respuestasIncorrectas; ?>     No contestadas:<?php echo $sinResponder; ?></pre>


<table border="0">
	<tr>
		<th width="40px" align="left">Preg.</th>
		<th width="120px" align="center">Resp. Correctas</th>
		<th width="100px" align="center">Resp. Alumno</th>
		<th >Resultado</th>
	</tr>
	<!--------------------PREGUNTA 1---------------------------->
	<tr>
		<td>1)</td>		
		<td align="center"><?php echo $respCorrecta1; ?></td>
		<td align="center"> <?php echo $respuesta1; ?></td>
		<td><?php echo $comparacion1 ?></td>
	</tr>
	<!--------------------PREGUNTA 2---------------------------->
	<tr>		
		<td>2)</td>		
		<td align="center"><?php echo $respCorrecta2; ?></td>
		<td align="center"> <?php echo $respuesta2; ?></td>
		<td><?php echo $comparacion2 ?></td>
	</tr>
	<!--------------------PREGUNTA 3---------------------------->
	<tr>		
		<td>3)</td>		
		<td align="center"><?php echo $respCorrecta3; ?></td>
		<td align="center"> <?php echo $respuesta3; ?></td>
		<td><?php echo $comparacion3 ?></td>
	</tr>
	<!--------------------PREGUNTA 4---------------------------->
	<tr>		
		<td>4)</td>		
		<td align="center"><?php echo $respCorrecta4; ?></td>
		<td align="center"> <?php echo $respuesta4; ?></td>
		<td><?php echo $comparacion4 ?></td>
	</tr>
	<!--------------------PREGUNTA 5---------------------------->
	<tr>		
		<td>5)</td>		
		<td align="center"><?php echo $respCorrecta5; ?></td>
		<td align="center"> <?php echo $respuesta5; ?></td>
		<td><?php echo $comparacion5 ?></td>
	</tr>
	<!--------------------PREGUNTA 6---------------------------->
	<tr>		
		<td>6)</td>		
		<td align="center"><?php echo $respCorrecta6; ?></td>
		<td align="center"> <?php echo $respuesta6; ?></td>
		<td><?php echo $comparacion6 ?></td>
	</tr>
	<!--------------------PREGUNTA 7---------------------------->
	<tr>		
		<td>7)</td>		
		<td align="center"><?php echo $respCorrecta7; ?></td>
		<td align="center"> <?php echo $respuesta7; ?></td>
		<td><?php echo $comparacion7 ?></td>
	</tr>
	<!--------------------PREGUNTA 8---------------------------->
	<tr>		
		<td>8)</td>		
		<td align="center"><?php echo $respCorrecta8; ?></td>
		<td align="center"> <?php echo $respuesta8; ?></td>
		<td><?php echo $comparacion8 ?></td>
	</tr>
	<!--------------------PREGUNTA 9---------------------------->
	<tr>		
		<td>9)</td>		
		<td align="center"><?php echo $respCorrecta9; ?></td>
		<td align="center"> <?php echo $respuesta9; ?></td>
		<td><?php echo $comparacion9 ?></td>
	</tr>
	<!--------------------PREGUNTA 10---------------------------->
	<tr>		
		<td>10)</td>		
		<td align="center"><?php echo $respCorrecta10; ?></td>
		<td align="center"> <?php echo $respuesta10; ?></td>
		<td><?php echo $comparacion10 ?></td>
	</tr>
</table>

