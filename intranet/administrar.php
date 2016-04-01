<?php

			$user = $_POST['user'];
			$pass = $_POST['password'];

		if ($user == 'csatestprep' && $pass == 'csatestprep2016')
			{
				session_start();			
				$_SESSION['admin'] = $user ;
				
				header("location:home.php");
			}
		else
			{
				
				header("location:indexn.php");	
			}	
	
?>