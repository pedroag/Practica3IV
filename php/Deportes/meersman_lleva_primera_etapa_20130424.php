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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Meersman se lleva la primera etapa </a></h3>
  <p>El ciclista belga Gianni Meersman (Omega Pharma-QuickStep) se ha impuesto al sprint en la primera etapa de la 67ª edición del Tour de Romandía, superando a los italianos Giacomo Nizzolo (RadioShack-Leopard) y Roberto Ferrari (Lampe), segundo y tercero respectivamente.<br><br>
Meersman fue el más rápido en recorrer los 176,8 kilómetros entre las localidades de Saint Maurice y Renens. Por detrás, junto con el resto del pelotón llegaron los italianos Nizzolo y Ferrari. Matthias Brandle y Jeremy Roy lanzaron una escapada que fue neutralizada a 7 kilómetros de la línea de meta.
Así las cosas, Chris Froome mantiene el liderato en la clasificación general tras la victoria en el prólogo, seguido por Talansky y Kiserlovski. Este jueves se disputará la segunda etapa, de 189,6 kilómetros, entre Prilly y Granges.
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
