<?php

include 'funciones_conexion.php';

conectar();
			
			$id=$_POST['id'];
			
			
			
			$query = "DELETE FROM ultimas WHERE id='$id'";
			$cons= mysql_query($query) or die("<script>alert('No se ha podido enviar');</script>");
			
			echo "<script>alert('Se ha enviado con exito');</script>";
			echo "<script language='javascript'>window.location='zona_admin.php'</script>;";

			

?>
                
                
					



		