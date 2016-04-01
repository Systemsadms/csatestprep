<?php
	
		require ("../cnx.php");
		$respuestaAnterior = $_POST['pre'];
		$preguntaAnterior = $_POST['pregunta'];

		//*******Atencion en SET modificar resp(x) segun sea la ultima pregunta********//
		$consultaUpdate = "UPDATE examenesnivelacion SET resp10='$respuestaAnterior' WHERE idUser= $idUser";	
		$hacerconsulta  = mysql_query ($consultaUpdate);

		$consultaUpdate = "UPDATE examenesnivelacion SET estatus='completado' WHERE idUser= $idUser";	
		$hacerconsulta  = mysql_query ($consultaUpdate);

		echo "<br><br><br>";
		echo"<div id='contenedorRespuestas'>";
		echo "Felicitaciones, has completado el Examen de Nivelacion";
		echo "<br><br><br>";
		echo "<a href='../destruir.php'>Volver a CsatestPrep.com</a>";
		echo "</div>";
		echo "<br><br><br>";
?>