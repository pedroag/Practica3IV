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
  <h2> Ultimas noticias </h2>
  <section id="editar_ultimas">
  <ul>
  <?php
  include 'funciones_conexion.php';
  conectar();
  ?>
  
  <?php
  $query = mysql_query("SELECT * FROM ultimas ") or die(mysql_error());
  while ($row = mysql_fetch_row($query)){
  ?>
  <li><?php echo "id: $row[2]   --   noticia: $row[0] " ?></li><br>
  <?php } ?>
  </ul>
  
  <h3> Modificar noticia </h3>
  <form id="update" method="post" action='updates.php' >
  Identificador de la noticia a modificar: <input type='text' name="id" required><br><br>Escriba si desea modificar la noticia
  ( puede estar vacio si solo se modifica mostrar):
	<textarea name="noticia" rows="4" cols="45" placeholder="Modifique el titular..." ></textarea><br>
     No mostrar <input type="radio" name="mostar" value=0 checked>
	Mostrar <input type="radio" name="mostar" value=1><br><br>
    <input type="submit" name="registra" id="registra" value="Enviar"> <input type="reset">
    </form>
    
   <h3> Eliminar noticia </h3>
  <form id="update" method="post" action='eliminar_ultima.php' >
  Identificador de la noticia a eliminar: <input type='text' name="id" required><br><br>
  <input type="submit" name="registra" id="registra" value="Enviar"> <input type="reset">
    </form>
  
  
  <h3> Enviar nueva noticia </h3>
  <form id="registro ultima" method="post" action='insercion_ultima.php' >
  	<p>
    Identificador: <input type='text' name="id" required><br>
	<textarea name="noticia" rows="4" cols="45" placeholder="Introduzca el titular..." ></textarea><br>
    No mostrar <input type="radio" name="mostar" value="0" checked>
	Mostrar <input type="radio" name="mostar" value="1"><br><br>
    <input type="submit" name="registra" id="registra" value="Enviar"> <input type="reset">
    </p>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
