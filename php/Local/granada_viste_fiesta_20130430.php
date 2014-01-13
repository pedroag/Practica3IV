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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Granada se viste de fiesta para el Día de la Cruz con más de 80 participantes </a></h3>
  <p>Este fin de semana Granada se vestirá de flores y de lunares para celebrar el Día de la Cruz. Una jornada festiva que este año se extiende durante el viernes, el sábado y el domingo que promete a turistas y granadinos diversión y belleza: la de sus calles adornadas con flores y tradición. <br><br>

En la capital habrá un total de 80 cruces repartidas por toda la ciudad y clasificadas en diferentes categorías de cara al concurso de cruces que se celebra cada año. En concreto habrá una sección dedicada a Calles y plazas, con cruces como la del Grupo Scout Virgen de las Nieves o la Asociación de Vecinos Barranco del Abogado. Otra sección de patios como la Cruz ubicada en el Palacio de los Patos y una de comercios como Penela e Hijos que también participan en la sección Escaparate con un total de 17 cruces. Por último destacan el apartado Escolar, los únicos que dispondrán de barra de bebida y comida (11 de 17). <br><br>

El concejal de Cultura, Juan García Montero, destacó el gran éxito que ha cobrado este año la celebración del día de la Cruz en Granada, donde se ha multiplicado con creces el número de participantes en el concurso, subvencionados con hasta 1.000 euros, lo que ha supuesto un coste para el Ayuntamiento de 36.000 euros. <br><br>

El tres de mayo darán comienzo la festividad con el pregón del matador de toros y empresario Pedro Pérez Chicote a las 12:00 horas en el patio del Ayuntamiento. Después se darán a conocer los nombres de las cruces premiadas, a lo que seguirá un conjunto numeroso de actuaciones en la plaza del Carmen que contará con la presencia de grupos como Aires de marisma para amenizar la fiesta. <br><br>

Asimismo, el Ayuntamiento se han impreso 1.000 planos con la ubicación de las cruces para que nadie se pierda ninguna este año aunque la comida y la bebida solo estén presentes en once. En la rueda de prensa también estuvieron presentes Susana Vargas, en representación de Cervezas Alhambra, junto a María Francés, consejera delegada de Emucesa, que patrocinan este evento junto con Turismo Ciudad de Granada, el área de Cultura del Ayuntamiento y Emuvyssa.
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