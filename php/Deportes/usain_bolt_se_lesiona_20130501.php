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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Usain Bolt se lesiona y no se estrenará en los 200 en Jamaica </a></h3>
  <p>El jamaicano Usain Bolt, campeón olímpico y plusmarquista mundial de 100 y 200 metros, no correrá el 4 de mayo en Kingston su primera carrera del año sobre esta última distancia, por culpa de una pequeña lesión.<br><br>

Después de participar en dos pruebas de 400, una distancia que rara vez corre, una posta en relevos 4x400 y una exhibición de 150 metros en la playa de Copacabana (Río de Janeiro), Bolt iba a disputar en el estadio Nacional de Kingston su primera competición seria de la temporada.<br><br>

En los 200 metros, Bolt iba a enfrentarse a sus compatriotas Warren Weir, bronce en los Juegos de Londres 2012, y Nickel Ashmeade, al estadounidense Wallace Spearmon (cuarto en londres) y al noruego Jaysuma Saidy Ndure, pero un "pequeño tirón en el muslo" mientras se entrenaba lo impedirá.<br><br>

"Estoy decepcionado por no poder correr en Kingston ante mi afición", escribió el atleta en su página web personal.<br><br>

Glen Mills, entrenador de Bolt, fue el que tomó la decisión final para evitar riegos. La próxima cita que tiene programada el velocista, y que también hay que poner en duda, es el Cayman Invitational el 8 de mayo.
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
