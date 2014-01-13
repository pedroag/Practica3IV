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
  <nav> <a href="../index.php">Portada</a> <a href="Local.php">Local</a> <a href="../Nacional/Nacional.php">Nacional</a> <a href="../Internacional/Internacional.php">Internacional</a> <a href="../Deportes/Deportes.php">Deportes</a></nav>
  <h2>Local</h2>
</header>
<section id="lanoticia">
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">El Plan de Movilidad llevará varias líneas de bus urbano a los pueblos del Cinturón</a> </h3>
  <img src="../img/plan_movilidad_cinturon_20130501.jpg">
  <p>Una persona de Cenes de la Vega que quiera ir hasta la estación de autobuses de Granada sólo tiene que montarse en la línea urbana 33 y abonar los 79 céntimos que cuesta el viaje con el bonobús. El billete le dará opción a recorrer más de diez kilómetros de distancia por toda la ciudad, de ahí el éxito de esta línea de autobús que ha multiplicado por cuatro el número de viajeros en 13 años, hasta superar los cuatro millones de viajeros. El buen resultado de la línea ha llevado a otros pueblos del Área Metropolitana de Granada (Maracena, Huétor, Armilla, Pulianas o Santa Fe)a solicitar un convenio similar que permita mover con esta agilidad a los vecinos de los pueblos del Cinturón. "Estos municipios están tan cerca de la capital que con muy poco esfuerzo se puede alargar la línea urbana y salir fuera", declaró la concejal de Movilidad en el Ayuntamiento de Granada, Telesfora Ruiz.<br><br>

El mayor escollo que trae consigo la idea es la necesidad de poner de acuerdo en el ámbito económico al Ayuntamiento del municipio, al de la capital y al Consorcio de Transportes. Son líneas con un alto coste económico (sólo la línea 33 vale más de 200.000 euros al año) así que requieren de un gran esfuerzo por parte de las administraciones. <br><br>

Se trata de líneas coordinadas que exigen que se pongan de acuerdo las administraciones pero también las empresas que desarrollan el servicio, en el caso de la línea 33 la empresa Herederos de Gómez. <br><br>

Ayer, el Ayuntamiento de Granada, el de Cenes y el Consorcio de Transportes Metropolitano firmaron un acuerdo para renovar el convenio que permite que la línea 33 dé servicio a este pueblo del Área Metropolitano. <br><br>

El nuevo convenio se revisa para redistribuir la participación de las distintas administraciones que lo firman para "hacer más justo el convenio". De este modo, Cenes y el Consorcio de Transportes abonarán conjuntamente una parte del coste, concretamente el de sus viajeros, aquellos que utilicen el autobús en el término municipal de la localidad metropolitana. Por su parte, el Ayuntamiento de Granada cederá parte de la subvención estatal. <br><br>

La coordinación del servicio de transporte de viajeros Granada-Cenes fue firmado en julio de 1998. Con esta coordinación se estableció un sistema pionero en España que integraba el transporte urbano y el metropolitano, de forma que una sola línea alcanzaba los dos ámbitos. Es decir, sin bajar del mismo autobús, un viajero podía ir de una localidad a otra y, además, usar el resto de líneas de la red urbana de Granada como si fuese un granadino, con las mismas tarifas.
</p>
  <section id="comentarios">
  
  
  <?php
  	include('../mostar_comentarios.php');
	$user=$_SESSION['usuario'];
	$cod=$_SERVER['PHP_SELF'];
	mostrar($cod);
	if (isset($_SESSION['usuario'])) {
	?>
<form method='post' action="../enviar_comentario.php">
<textarea name="comentario" cols="70" rows="5"  required>Escribe aquí tu comentario...</textarea>
<input type='hidden' name="usuario" value='<?php echo"$user"?>' />
<input type='hidden' name="noticia" value='<?php echo "$cod" ?>' />
<input type='submit' id = "enviar" value = "Enviar comentario" />
</form>
<?php
	}else{
		?>
 <h4> Conéctese para escribir comentarios </h4>  
 
 <?php
	}
	?>
</section>
</section>
<section id="ultimasnot">
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
</section>
<section id="ultimasnot">
  <section id="ultimas">
    <h4>Otras noticias de interés</h4>
    <li> <a href="un_primero_mayo_20130501.html"> Un Primero de Mayo con más de 162.000 parados </a></li>
    <br>
    <li> <a href="interceptan_siete_inmigrantes_20130430.html"> Interceptan a siete inmigrantes en una embarcación en la costa de Granada</a></li>
    <br>
    <li><a href="plan_movilidad_cinturon_20130501.html"> El Plan de Movilidad llevará varias líneas de bus urbano a los pueblos del Cinturón</a></li>
    <br>
    <li><a href="natalidad_sigue_baja_20130430.html"> La natalidad sigue a la baja con un desplome del 15% en los últimos cuatro años</a></li>
  </section>
  <section id="publis">
      <aside id="publi1"><img src="../img/publi2l.jpg" height="250" width="270"> </aside>
      <aside id="publi2"> <img src="../img/publi2.jpg" height="250" width="270"> </aside>
    </section>
  </section>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="../Internacional/ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>