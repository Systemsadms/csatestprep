<?php
	$email	= 	$_POST['email'];
	$pass	=	$_POST['pass'];



	$conn = mysql_connect("localhost","root","root");
			mysql_select_db("csatestprep_bd",$conn);

	//$conn = mysql_connect("localhost","csatest2_admin","hdwtnkue456");
	//		mysql_select_db("csatest2_bd",$conn);		

	
			
			$ssql = "SELECT * FROM usuarios WHERE email='$email' and pass='$pass'";
			$rs = mysql_query($ssql,$conn);
			
			
			
			if (mysql_num_rows($rs)==1)
			{
				session_start();		
 
				$_SESSION["login"] = $email;
				
				header("location:micuenta.php");
				mysql_close($conn);
				
			}
			else
			{
				header("location:micuenta2.php");
				mysql_close($conn);
				
				
			} 

	
	
?>