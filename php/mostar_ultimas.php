<?php

include 'funciones_conexion.php';

function mostrar_ultimas(){
			conectar();
			$query = mysql_query("SELECT * FROM ultimas WHERE mostar = '1'") or die(mysql_error());
			echo "<ul>";
			while ($row = mysql_fetch_row($query)){ 
				echo "<li> $row[0] </li>"; 
				} 
			echo "</ul>";
}
?>
                
					



		