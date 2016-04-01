<?php
	if(isset ($_POST["buscar"]))
			{
				
				$filtro	= $_POST['filtro'];
				$dato	= $_POST['dato'];
				
				//echo $filtro;
				//print "/";
				//echo $dato;

				require("../cnx.php");

				if ($_POST['dato']=="") 
				{
					
					
				$consulta = "SELECT * FROM usuarios;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				echo "<table border='1' bordercolor='#3ADF00' align='center'>";
				echo "<tr>";
				echo "<td align='center' bgcolor='#58ACFA'><b>ID</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Nombres</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Apellidos</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Telefono</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Email</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Estatus</b></td>";
				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";				
				echo "<td align='center'>".$reg[8]."</td>";

			


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);

				//COMIENZO DE CONSULTA CON FILTRO

				}
			elseif ($_POST["filtro"]=="Nombres")
				{
									
					$like = $_POST['dato'];	
					$busqueda = $like;

				echo $filtro;
				print "/";
				echo $like;
			
 
				
				$consulta = "SELECT * FROM usuarios WHERE nombres LIKE '%$busqueda%';";
				$hacerconsulta=mysql_query ($consulta,$conexion);	
				
				
				echo "<table border='1' bordercolor='#3ADF00' align='center'>";
				echo "<tr>";
				echo "<td align='center' bgcolor='#58ACFA'><b>ID</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Nombres</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Apellidos</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Telefono</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Email</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Estatus</b></td>";
				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";				
				echo "<td align='center'>".$reg[8]."</td>";


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				}		

			elseif ($_POST["filtro"]=="Apellidos")
				{
									
					$like = $_POST['dato'];	
					$busqueda = $like;
 
				
				$consulta = "SELECT * FROM usuarios WHERE apellidos LIKE '%$busqueda%';";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				//$hacerconsulta=mysql_query ($consulta,$conexion);
				

				echo "<table border='1' bordercolor='#3ADF00' align='center'>";
				echo "<tr>";
				echo "<td align='center' bgcolor='#58ACFA'><b>ID</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Nombres</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Apellidos</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Telefono</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Email</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Estatus</b></td>";
				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";				
				echo "<td align='center'>".$reg[8]."</td>";
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				}
			
				
			elseif ($_POST["filtro"]=="Email")
				{
									
					$like = $_POST['dato'];	
					$busqueda = $like;
 
				
				 $consulta = "SELECT * FROM usuarios WHERE email LIKE '%$busqueda%';";
				 $hacerconsulta=mysql_query ($consulta,$conexion);
				 //$hacerconsulta=mysql_query ($consulta,$conexion);
						
				echo "<table border='1' bordercolor='#3ADF00' align='center'>";
				echo "<tr>";
				echo "<td align='center' bgcolor='#58ACFA'><b>ID</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Nombres</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Apellidos</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Telefono</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Email</b></td>";
				echo "<td align='center' bgcolor='#58ACFA'><b>Estatus</b></td>";
				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";				
				echo "<td align='center'>".$reg[8]."</td>";
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				}			

				//FIN DE CONSULTA CON FILTRO 1
	
			}

?>