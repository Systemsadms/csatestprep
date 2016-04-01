<?php

require ("../cnx.php");

	//Cosulta datos del usuario
	$ssql = mysql_query("SELECT * FROM usuarios WHERE id='$idUser'");
	$nombres = mysql_result($ssql,0,"nombres");
	$apellidos = mysql_result($ssql,0,"apellidos");
	$email = mysql_result($ssql,0,"email");


	//Respuestas Correctas
	$respCorrecta1 	 = "a";
	$respCorrecta2 	 = "b";
	$respCorrecta3 	 = "c";
	$respCorrecta4 	 = "b";
	$respCorrecta5 	 = "a";
	$respCorrecta6 	 = "b";
	$respCorrecta7 	 = "b";
	$respCorrecta8 	 = "a";
	$respCorrecta9 	 = "a";
	$respCorrecta10  = "a";


	//Consulta Respuestas del usuario en el examen
	$ssql = mysql_query("SELECT * FROM examenesnivelacion WHERE idUser='$idUser'");
	$idExam		  = mysql_result($ssql,0,"idExam");
	$respuesta1   = mysql_result($ssql,0,"resp1");
	$respuesta2   = mysql_result($ssql,0,"resp2");
	$respuesta3   = mysql_result($ssql,0,"resp3");
	$respuesta4   = mysql_result($ssql,0,"resp4");
	$respuesta5   = mysql_result($ssql,0,"resp5");
	$respuesta6   = mysql_result($ssql,0,"resp6");
	$respuesta7   = mysql_result($ssql,0,"resp7");
	$respuesta8   = mysql_result($ssql,0,"resp8");
	$respuesta9   = mysql_result($ssql,0,"resp9");
	$respuesta10  = mysql_result($ssql,0,"resp10");
	$estatus 	= mysql_result($ssql,0,"estatus");


	//Correctas, Incorrectas y No contestadas
	$respuestasCorrectas 	= "0";
	$respuestasIncorrectas 	= "0";
	$sinResponder		   	= "0";



					//COMPARACION DE RESPUESTAS (7 cambios por pregunta)

	//***********************PREGUNTA 1****************************//
	if($respuesta1 == $respCorrecta1)
	{
		$comparacion1 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta1 == "")
	{
		$comparacion1 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion1 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 2****************************//
	if($respuesta2 == $respCorrecta2)
	{
		$comparacion2 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta2 == "")
	{
		$comparacion2 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion2 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 3****************************//
	if($respuesta3 == $respCorrecta3)
	{
		$comparacion3 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta3 == "")
	{
		$comparacion3 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion3 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 4****************************//
	if($respuesta4 == $respCorrecta4)
	{
		$comparacion4 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta4 == "")
	{
		$comparacion4 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion4 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 5****************************//
	if($respuesta5 == $respCorrecta5)
	{
		$comparacion5 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta5 == "")
	{
		$comparacion5 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion5 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 6****************************//
	if($respuesta6 == $respCorrecta6)
	{
		$comparacion6 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta6 == "")
	{
		$comparacion6 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion6 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 7****************************//
	if($respuesta7 == $respCorrecta7)
	{
		$comparacion7 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta7 == "")
	{
		$comparacion7 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion7 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 8****************************//
	if($respuesta8 == $respCorrecta8)
	{
		$comparacion8 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta8 == "")
	{
		$comparacion8 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion8 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 9****************************//
	if($respuesta9 == $respCorrecta9)
	{
		$comparacion9 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta9 == "")
	{
		$comparacion9 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion9 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//

	//***********************PREGUNTA 10****************************//
	if($respuesta10 == $respCorrecta10)
	{
		$comparacion10 = "<font color='green'>Correcta</font>";
		$respuestasCorrectas = ++$respuestasCorrectas;	
	}
	elseif($respuesta10 == "")
	{
		$comparacion10 = "<font color='grey'>Sin Responder</font>";
		$sinResponder = ++$sinResponder;
	}
	else
	{
		$comparacion10 = "<font color='red'>Incorrecta</font>";
		$respuestasIncorrectas = ++$respuestasIncorrectas;
	}
	//***********************************************************//




	$consultaUpdate = "UPDATE examenesnivelacion SET pts='$respuestasCorrectas' WHERE idUser= $idUser";	
	$hacerconsulta  = mysql_query ($consultaUpdate);
	mysql_close($conexion);
?>