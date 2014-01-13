<?php

include 'funciones_conexion.php';

conectar();

			$comentario=$_POST['comentario'];

			$usuario=$_POST['usuario'];
			
			$noticia=$_POST['noticia'];
			
			$query = "INSERT INTO comentarios(Cod_noticia,Autor,Comentario) VALUES ('$noticia','$usuario','$comentario')";
			$cons= mysql_query($query) or die("<script>alert('No se ha podido enviar el comentario');</script>");
			
			echo " <script language='JavaScript'>history.go(-1);</script>";
			

			

?>
                
					



		