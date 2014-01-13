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
<section id="lanoticia">
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Mickeal anuncia que deja el baloncesto de forma indefinida</a></h3>
  <p>Con lágrimas en los ojos, flanqueado por su cuerpo técnico y con amigos, directivos y compañeros sentados delante de él, Pete Mickael anunció ayer que se marcha a Estados Unidos por tiempo indefinido para tratarse el tromboembolismo pulmonar que padece. El norteamericano no anunció su retirada pero habló con cautela de un posible regreso a las pistas, declarando que "el baloncesto para mí ahora mismo es una segunda opción. Lo más importante para mí es mi salud y el tratamiento puede durar tres meses, seis o para siempre" .<br><br>

El jugador se pondrá en manos de un médico de su confianza, que ya ha tratado a jugadores NBA con la misma dolencia, y dejó claro que, de volver a jugar, lo haría en el Barcelona. Los elogios de Mickael hacia el club y sus compañeros fueron constantes, y quiso agradecer el apoyo mostrado no sólo en la rueda de prensa de hoy, sino durante su etapa en el Barcelona. Aseguró que "ni en la NBA ni en Europa hay un club como el Barça" y reiteró su voluntad de volver a vestir algún día la camiseta azulgrana. Además, Mickael quiso borrar cualquier atisbo de discrepancia con Xavi Pascual, asegurando que "es el mejor entrenador de Europa y una gran persona que busca lo mejor de sus jugadores".<br><br>

Precisamente Xavi Pascual reconoció que ha sido un "duro golpe" tanto en la parte humana como la deportiva: "Es un jugador que no se puede reemplazar. Es único, es un uno de esos que se te quedan grabados para toda la vida, un ejemplo de trabajo y profesionalidad", declaró su técnico. Resistiéndose a hablar en pasado, Joan Creus destacó que Mickael es "un excelente jugador y no tenemos duda del rendimiento que puede ofrecer en un futuro a nivel deportivo. Ojalá pueda recuperarse y volver a jugar a basket", declaró. Pese a las buenas intenciones y esperanzas, tanto Creus, Pascual como el propio Mickael supeditaron cualquier regreso a su completa recuperación. El norteamericano, con una sonrisa y buscando el lado positivo, declaró que, lo mejor, será "ir de pesca y pasar más tiempo con mi familia"
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
