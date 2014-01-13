<?php

include 'funciones_conexion.php';

conectar();

			$noticia=$_POST['noticia'];

			$mostar=$_POST['mostar'];
			
			$id=$_POST['id'];
			
			
			
			$query = "INSERT INTO ultimas (noticia,mostar,id) VALUES ('$noticia','$mostar','$id')";
			$cons= mysql_query($query) or die("<script>alert('No se ha podido enviar');</script>");
			
			echo "<script>alert('Se ha enviado con exito');</script>";
			echo "<script language='javascript'>window.location='zona_admin.php'</script>;";

			

?>
                
					



		