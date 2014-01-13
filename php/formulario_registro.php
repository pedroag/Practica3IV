<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "es">
<head>
<title>El periodico</title>
<meta charset = "UTF8"/>
<link rel = "stylesheet" type = "text/css" href="style.css" />
</head>

<body>
<aside id="izquierda"> <img src="img/publi_izq.jpg" width='192' height='800'> </aside>
<aside id="derecha"> <img src="img/publi_der.jpg" width='192' height='800'> </aside>
<header id="centro"> <img src="img/publi_arriba.jpg"> </header>
<section id="contenido">
  <header>
    <h1>El Periódico</h1>
    <nav> <a href="index.php">Portada</a> <a href="Local/Local.php">Local</a> <a href="Nacional/Nacional.php">Nacional</a> <a href="Internacional/Internacional.php">Internacional</a> <a href="Deportes/Deportes.php">Deportes</a></nav>
  </header>
  <section id="formulario">
  <h2> Formulario de registro </h2>
  <section id="rellenar">
  
  <script language="javascript" type="text/javascript">
function validar(formulario){
	if(formulario.nombre.value.length==0) {
    formulario.nombre.focus();   
    alert('No has escrito tu nick'); 
    return false;
	}
  if(formulario.pass1.value.length==0) {
    formulario.nombre.focus();   
    alert('No has escrito la contraseña'); 
    return false;
  }
  if(formulario.email.value.length==0) { 
    formulario.email.focus();
    alert('No has escrito tu e-Mail');
    return false;
  }
  var b=/^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/;
  if(!b.test(formulario.email.value)) {
    formulario.email.focus();            
	alert('El email no está bien escrito');
    return false;
  }
  if( !/^\d{9}$/.test(formulario.tel.value)) {  
    formulario.tel.focus();
    alert('No has escrito un teléfono correcto');
    return false;
  }
  return true;
}
</script>

  <form id="registro method" method="post" action='insercion_registro.php' onSubmit="return validar(this)">
	<p> Nick: <INPUT type="text"  name="nombre"><BR>
	Contraseña: <INPUT type="password"  name="pass1"><BR>
	Repita contraseña: <INPUT type="password" name="pass2"><BR>
    Email: <input type="email" name="email"><br>
    Nº Teléfono fijo: <input type='tel' name="tel"><br>
	<INPUT type="submit" name="registra" id="registra" value="Registar"> <INPUT type="reset">
    </p>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
