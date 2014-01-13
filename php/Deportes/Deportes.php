<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>El periodico - Deportes</title>
<link rel = "stylesheet" type = "text/css" href="../style.css" />
</head>

<body>
<aside id="izquierda"> <img src="../img/publi_izq.jpg" width='192' height='800'> </aside>
<aside id="derecha"> <img src="../img/publi_der.jpg" width='192' height='800'> </aside>
<header id="centro"> <img src="../img/publi_arriba.jpg"> </header>
<section id="contenido">
<header>
  <h1>El Periódico</h1>
  <nav> <a href="../index.php">Portada</a> <a href="../Local/Local.php">Local</a> <a href="../Nacional/Nacional.php">Nacional</a> <a href="../Internacional/Internacional.php">Internacional</a> <a href="../Deportes/Deportes.php">Deportes</a></nav>
  <h2>Deportes</h2>
</header>
<section id="noticiaDES">
  <h3> <a href="rato_epica_20130501.php"> Un rato de épica no basta </a></h3>
  
<img src="../img/rato_epica_20130501.jpg" width="275">

  <p> El Madrid roza el milagro tras un arranque explosivo y un último asalto descomunal, pero el Borussia le superó un largo trecho. Chamartín, como en las grandes noches, vuelve a golear. </p>
</section>
<section id="noticias">
  <section id="noticiasIZQ">
    <article id="IZQ1">
      <h3> Deportes</h3>
      <h2> <a href="mourinho_estar_donde_quieran_20130501.php"> “Me gusta estar donde me quieran y en España algunos me odian” </a></h2>
      <p> Mourinho admite que le atrae Inglaterra, pero no desea anunciar su marcha sin antes hablar con Florentino. </p>
    </article>
    <article id="IZQ2">
      <h3> Deportes</h3>
      <h2><a href="gasol_seguir_depende_20130501.php"> Gasol: 'Seguir en los Lakers no depende de mí' </a></h2>
      <img src="../img/gasol_seguir_depende_20130501.jpg" width="275">
      <p> El ala-pivot es consciente de que su continuidad depende de muchos factores, incluidos los económicos. </p>
    </article>
    <article id="IZQ3">
      <h3> Deportes </h3>
      <h2><a href="nadal_territorio_federer_20130430.php"> Nadal, en territorio Federer </a></h2>
      <p> El balear volverá a disputar el torneo de Basilea nueve años después. </p>
    </article>
    <article id="IZQ4">
      <h3> Deportes </h3>
      <h2><a href="golpe_los_angeles_20130501.php"> Golpe en Los Ángeles </a></h2>
      <object width="320" height="204" ><param name="movie" value="http://estaticos.marca.com/multimedia/reproductores/embed/embed.swf"/><param name="allowscriptaccess" value="always"/><param name="flashvars" value="ba=0&cvol=1&bt=1&lg=1&eb=1&vID=DFHSnJalAPb&pcolor=f0f0f0&idioma=0"/><embed src="http://estaticos.marca.com/multimedia/reproductores/embed/embed.swf" type="application/x-shockwave-flash" allowscriptaccess="always" width="320" height="204" flashvars="ba=0&cvol=1&bt=1&lg=1&eb=1&vID=DFHSnJalAPb&pcolor=f0f0f0&idioma=0" ></embed></object>
      <p> Memphis se sitúa a un triunfo de la clasificación (3-2) tras caer en los dos primeros partidos de la serie. </p>
    </article>
  </section>
  <section id="noticiasDER">
  <section id="login">
    
    <?php
	if (isset($_SESSION['usuario'])) {
    echo "Identificado como: <h2>".$_SESSION['usuario']." </h2>";
	echo "<a href='../salir.php'>Salir</a>";
	}else{
	?>
    
    <form method='post' action='../login.php'>
	Usuario <input type='text' name="usuario"/><br/>
	Password <input type='password' name="clave"/><br/><br/>
	<input type='submit' value="Entrar"/>
    
    </form>
    <form action="../formulario_registro.php">
    <input type="submit" value="Registrarse">
    </form>
    
    <?php
	}
	?>
    
    
    </section>
    <aside id="publi1"> <img src="../img/publi1l.jpg" height="250" width="297"> </aside>
    <aside id="publi2"> <img src="../img/publi2l.jpg" height="250" width="297"> </aside>
  </section>
  <section id="noticiasCEN">
    <article id="CEN1">
      <h3> Deportes </h3>
      <h2><a href="Karlovic_sufre_derrame_20130501.php"> Karlovic sufre un derrame cerebral</a> </h2>
      <p> El tenista croata, de 34 años, fue ingresado en un hospital de Miami. </p>
    </article>
    <article id="CEN2">
      <h3> Deportes </h3>
      <h2><a href="meersman_lleva_primera_etapa_20130424.php"> Meersman se lleva la primera etapa </a></h2>
      <p> El ciclista belga lograla victoria al sprint. Froome mantiene el liderato. </p>
    </article>
    <article id="CEN3">
      <h3> Deportes </h3>
      <h2><a href="usain_bolt_se_lesiona_20130501.php"> Usain Bolt se lesiona y no se estrenará en los 200 en Jamaica </a></h2>
      <p> El jamaicano tenía previsto correr su primer 200 del año en Kingston pero un pequeño tirón en el muslo ha hecho que su entrenador le obligue a tomar reposo. </p>
    </article>
    </article>
    <article id="CEN4">
      <h3> Deportes </h3>
      <h2><a href="vettel_raikkonen_companero_20130501.php"> Vettel "¿Raikkonen de compañero? Sin problemas"</a></h2>
      <p> El tricampeón opina sobre un posible fichaje de Kimi, Marko cree que Webber podría seguir, pero apunta a los pilotos de Toro Rosso y Ricciardo dispuesto. </p>
    </article>
  </section>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
