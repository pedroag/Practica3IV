<?php

include 'funciones_conexion.php';

function mostrar($noticia){
			conectar();
			$filas=0;
			$query = mysql_query("SELECT * FROM comentarios WHERE Cod_noticia = '$noticia'") or die(mysql_error());
			$filas=mysql_num_rows($query);
			echo "<h4> Comentarios: $filas </h4>";
			while ($row = mysql_fetch_row($query)){ 
				echo "<strong>Usuario:</strong> $row[1] <strong>Fecha:</strong> $row[3]<br><strong>Comentario:</strong> $row[2]<br><br>"; 
				} 

}

?>
                
					



		