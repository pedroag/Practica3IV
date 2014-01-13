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
<aside id="derecha"><img src="../img/publi_der.jpg" width='192' height='800'></aside>
<header id="centro"> <img src="../img/publi_arriba.jpg"> </header>
<section id="contenido">
<header>
  <h1>El Periódico</h1>
  <nav> <a href="../index.php">Portada</a> <a href="../Local/Local.php">Local</a> <a href="../Nacional/Nacional.php">Nacional</a> <a href="../Internacional/Internacional.php">Internacional</a> <a href="../Deportes/Deportes.php">Deportes</a></nav>
  <h2>Deportes</h2>
</header>
<section id="lanoticia">
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')"> Nadal, en territorio Federer </a></h3>
  <img src="../img/nadal_territorio_federer_20130430.jpg" width=450px >
  <p>Rafael Nadal volverá a disputar el torneo de tenis de Basilea nueve años después y retará al suizo Roger Federer en su ciudad natal.<br><br>
La organización del certamen confirmó este lunes la presencia de los dos ex números uno para la semana del 19 al 27 de octubre.<br><br>
Nadal sólo jugó dos veces, en 2003 y 2004, en la ciudad del que fue su gran rival durante casi una década. El español perdió en primera ronda de ambos años, ante su compatriota Feliciano López y ante el alemán Rainer Schüttler, respectivamente.<br><br>
Actual número cinco del mundo, Nadal ganó el domingo el torneo de Barcelona y llegó a la final de los seis torneos que disputó desde que en febrero regresase después de más de siete meses apartado por una doble lesión de rodilla.<br><br>
El balear jugará las próximas semanas los torneos de Madrid y Roma con vistas a su gran cita del año, la defensa del título en Roland Garros, el segundo Grand Slam de la temporada.<br><br>
La firma de Nadal para Basilea fue visto como una especie de póliza de seguro para el director del torneo, Roger Brennwald, que tuvo disputas con Federer en los últimos meses después de que el contrato del suizo con el torneo expirase en octubre de 2012.<br><br>
Federer, que debutó en el torneo de Basilea como recogepelotas antes de convertirse en tenista profesional, anunció recientemente que jugará en 2013 un certamen en el que garantiza un lleno del estadio cada vez que salta a las pista.<br><br>
El argentino Juan Martín del Potro, que ganó en la final de 2012 a Federer, también regresará para defender su título.
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
    <section id="ultimas">
      <h4>Otras noticias de interés</h4>
      <li> <a href="nadal_territorio_federer_20130430.html"> Nadal, en territorio Federer.</a></li>
    <br>
    <li> <a href="Karlovic_sufre_derrame_20130501.html"> Karlovic sufre un derrame cerebral</a></li>
    <br>
    <li><a href="vettel_raikkonen_compañero_20130501.html"> Vettel "¿Raikkonen de compañero? Sin problemas"</a></li>
    <br>
    <li><a href="rato_epica_20130501.html"> Un rato de épica no basta </a></li>
      </section>
      <section id="publis">
      <aside id="publi1"><img src="../img/publi2l.jpg" height="250" width="270"> </aside>
      <aside id="publi2"> <img src="../img/publi2.jpg" height="250" width="270"> </aside>
      </section>
      </section>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
