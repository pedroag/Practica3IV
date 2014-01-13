<?php
include 'funciones_conexion.php';

session_start();

conectar();

if ($_POST['usuario']) {
	//Comprobacion del envio del nombre de usuario y password
	$username=$_POST['usuario'];
	$password=$_POST['clave'];
	if ($password==NULL) {
		echo "<script>alert('El password no fue enviado');</script>";
	}else{
		$query = mysql_query("SELECT nick,password FROM usuarios WHERE nick = '$username'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		if($data['password'] != $password) {
			echo "<script>alert('Login incorrecto');</script>";
		}else{
			$query = mysql_query("SELECT nick,password FROM usuarios WHERE nick = '$username'") or die(mysql_error());
			$row = mysql_fetch_array($query);
			$_SESSION['usuario'] = $row['nick'];
			echo "<script>alert('Has sido logeado correctamente como $username ');</script>";
		}
	}
}
echo " <script language='JavaScript'>history.go(-1);</script>";


/*
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE nick='$usuario' AND password='$clave'";
	//ejecucion de la sentencia anterior
	echo "llega";
	$ejecutar_sql=mysql_query($sql)or die("no va la consulta");
	//si existe inicia una sesion y guarda el nombre del usuario
	if (mysql_num_rows($ejecutar_sql)!=0){
		//inicio de sesion
		session_start();
		//configurar un elemento usuario dentro del arreglo global $_SESSION
		$_SESSION['usuario']=$usuario;
		
	}
*/

?>