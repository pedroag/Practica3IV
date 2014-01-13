<?php

include 'funciones_conexion.php';

conectar();

			$noticia=$_POST['noticia'];

			$mostar=$_POST['mostar'];
			
			$id=$_POST['id'];
			
					$query = "UPDATE ultimas SET mostar='$mostar' where id='$id' ";
					$query2 = "UPDATE ultimas SET mostar='$mostar', noticia='$noticia' where id='$id' ";
					if (empty($_POST['noticia'])){
					$cons= mysql_query($query) or die("<script>alert('No se ha podido enviar');</script>");
					}else{
						$cons= mysql_query($query2) or die("<script>alert('No se ha podido enviar');</script>");
					}
			
			/*$sies=$_POST['sies'];
			$noticias=$_POST['noticias'];
			$num=count ($sies);
			
			for($i=0;$i<$num;$i++){	 
			
			$query = "UPDATE ultimas SET mostar='$sies[i]' where noticia='$noticias[i]' ";
			$cons= mysql_query($query) or die("<script>alert('No se ha podido enviar');</script>");
			}
			for($e=0;$e<$num;$e++){
				echo "$sies[e] ";
			}
			*/
			echo "<script>alert('Se ha actualizado con exito');</script>";
			echo "<script language='javascript'>window.location='index.php'</script>;";

			

?>
                
					



		