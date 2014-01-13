<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>El periodico - Local</title>
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
  <h2>LOCAL</h2>
</header>
<section id="noticiaDES">
  <h3><a href="un_primero_mayo_20130501.php"> Un Primero de Mayo con más de 162.000 parados </a></h3>
  <object id="flashObj" width="300" height="150" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0">
    <param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" />
    <param name="bgcolor" value="#FFFFFF" />
    <param name="flashVars" value="web=externos&videoId=2342305693001&playerID=309010008001&playerKey=AQ%2E%2E,AAAAFDJ-STk%2E,O_UTJPLxsFAhSEJk_8ykI5UN4pASTQM7&domain=embed&dynamicStreaming=true" />
    <param name="base" value="http://admin.brightcove.com" />
    <param name="wmode" value="transparent" />
    <param name="seamlesstabbing" value="false" />
    <param name="allowFullScreen" value="true" />
    <param name="swLiveConnect" value="true" />
    <param name="allowScriptAccess" value="always" />
    <embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" wmode="transparent" bgcolor="#FFFFFF" flashVars="web=externos&videoId=2342305693001&playerID=309010008001&playerKey=AQ%2E%2E,AAAAFDJ-STk%2E,O_UTJPLxsFAhSEJk_8ykI5UN4pASTQM7&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="300" height="150" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
  </object>
  <p> Los sindicatos intentarán que la manifestación de hoy sea "histórica" y que sirva para lanzar un mensaje inequívoco de rechazo a la política del Gobierno central. </p>
</section>
<section id="noticias">
  <section id="noticiasIZQ">
    <article id="IZQ1">
      <h3> Local</h3>
      <h2><a href="monja_crea_juego_20130501.php"> Una monja granadina crea un juego de mesa sobre la fe</a> </h2>
      <img src="../img/monja_crea_juego_20130501.jpg" width="170">
      <p> 'La alegría de la fe', una suerte 'Party' cristiano, triunfa en Europa y en América Latina. </p>
    </article>
    <article id="IZQ2">
      <h3> Local</h3>
      <h2><a href="interceptan_siete_inmigrantes_20130430.php"> Interceptan a siete inmigrantes en una embarcación en la costa de Granada</a> </h2>
      <p> Otras 13 personas que trataban de llegar a costas andaluzas en dos embarcaciones han sido rescatadas por patrulleras de Marruecos. </p>
    </article>
    <article id="IZQ3">
      <h3> Local </h3>
      <h2> <a href="granada_viste_fiesta_20130430.php">Granada se viste de fiesta para el Día de la Cruz con más de 80 participantes </a></h2>
      <p> Solo once dispondrán de barra en la capital Se repartirán 10.000 planos informativos. </p>
    </article>
    <article id="IZQ5">
      <h3> Local </h3>
      <h2><a href="plan_movilidad_cinturon_20130501.php"> El Plan de Movilidad llevará varias líneas de bus urbano a los pueblos del Cinturón</a> </h2>
      <img src="../img/plan_movilidad_cinturon_20130501.jpg" width="150">
      <p> El Ayuntamiento renueva el convenio con Cenes y el Consorcio de Tranportes para financiar la línea 33 y aumenta su aportación. </p>
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
      <h3> Local </h3>
      <h2><a href="natalidad_sigue_baja_20130430.php"> La natalidad sigue a la baja con un desplome del 15% en los últimos cuatro años</a> </h2>
      <p> Granada ha pasado de superar los 10.500 nacimientos en 2008 a quedarse en la barrera de los 9.000 Las familias se piensan cada vez más si tener hijos por los efectos de la crisis económica. </p>
    </article>
    <article id="CEN2">
      <h3> Local </h3>
      <h2> <a href="plaza_zona_ORA_20130430.php">Cada plaza de zona ORA tiene un coste mensual de 81 euros </a></h2>
      <p> Con el aumento de más de mil plazas de estacionamiento limitado, el Ayuntamiento tiene que adaptar el acuerdo con la empresa. </p>
    </article>
    <article id="CEN3">
      <h3> Local </h3>
      <h2> <a href="tambien_hay_tiburones_20130429.php">¿Aquí también hay tiburones?</a> </h2>
      <p> Unos 350 escolares visitan el Puerto de Motril para conocer sus instalaciones a través de actividades. </p>
    </article>
    </article>
  </section>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a>| <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
