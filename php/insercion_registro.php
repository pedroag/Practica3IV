<?php

include 'funciones_conexion.php';

conectar();

			$nombre=$_POST['nombre'];

			$pass1=$_POST['pass1'];
			
			$pass2=$_POST['pass2'];
			
			$email=$_POST['email'];
			
			$tel=$_POST['tel'];
			
			if($pass1!=$pass2){
				echo "<script>alert('Las contraseñas no coinciden. Por favor vuelva a introducirlas');</script>";
				echo "<script language='javascript'>window.location='formulario_registro.php'</script>;";
			}elseif(empty($pass1)){
				echo "<script>alert('Las contraseñas no coinciden. Por favor vuelva a introducirlas');</script>";
				echo "<script language='javascript'>window.location='formulario_registro.php'</script>;";
			}else{
			$query = "INSERT INTO usuarios (nick,password,email,tel) VALUES ('$nombre','$pass1','$email','$tel')";
			$cons= mysql_query($query) or die("<script>alert('EL nombre de usuario $nombre no esta disponible');</script>");
			
			echo "<script>alert('Registro realizado con exito');</script>";
			echo "<script language='javascript'>window.location='index.php'</script>;";
			}
			echo "<script language='javascript'>window.location='formulario_registro.php'</script>;";

			

?>
                
					



		