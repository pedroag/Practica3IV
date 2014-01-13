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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">La natalidad sigue a la baja con un desplome del 15% en los últimos cuatro años</a></h3>
  <p>La natalidad está de capa caída. O al menos así queda patente en las estadísticas. Las parejas se están pensando mucho tener su primer hijo o aumentar la familia con más niños. La crisis, el miedo a perder el trabajo, el paro y la salida de población inmigrante son algunas de las causas directas de la caída de los partos y nacimientos, que en Granada se ha convertido ya en tendencia desde 2008, año en el que se registró el máximo de partos y nacimientos, según los datos del Instituto Nacional de Estadística (INE), que confirman la caída continua desde hace cuatro años. Casualmente, cuando comenzó la crisis. <br><br>

De hecho, a falta de los datos definitivos del segundo semestre de 2012, Granada podría bajar de la barrera de los 9.000 nacimientos mientras que en 2008 pasó de los 10.500. <br><br>

Según los datos del INE, los nacimientos han bajado hasta un 15% en los últimos cuatro años. Y es que, si al pago de la luz, del gas o del agua se une el gasto en biberones, pañales, ropa, guarderías y colegios, da como resultado una cifra difícil de afrontar para buena parte de las familias, muy tocadas por los efectos de la crisis. <br><br>

Esta tendencia a la baja ha venido de la mano de la evolución económica que ha experimentado el país desde el año 2007. Desde el comienzo de la crisis, son muchas las personas que se plantean si pueden asumir o no criar a un hijo. Y mucho más tras la supresión de ayudas como el conocido cheque bebé, puesto en marcha por el anterior presidente del Gobierno, José Luis Rodríguez Zapatero. A partir del 1 de julio de 2007, las familias de los bebés nacidos o adoptados recibieron una ayuda de 2.500 euros. Esta cantidad se incrementaba en 1.000 euros más si se trataba de una familia monoparental o numerosa o si el pequeño padecía alguna discapacidad. Pero este aliciente se suprimió de un plumazo el 1 de enero de 2011 con el conocido tijeretazo del Gobierno. <br><br>

Tal fue el impacto que causó el cheque bebé en las familias granadinas que en 2008 se contabilizaron 10.431 partos y 10.546 nacimientos (contando con partos múltiples), la cifra más alta de las series recogidas por el INE. A partir de ese año, la tendencia no para de bajar. De hecho, en 2009 la cifra bajó a 9.581 partos (850 menos) y 9.704 nacimientos (842 menos que el año anterior). <br><br>

En 2010 los nacimientos bajaron hasta los 9.400 en la provincia y en 2011 hasta los 9.260. De 2008 a 2011, la reducción de nacimientos en Granada ha sido del 12,2% con 1.286 nacimientos menos. De 2012, el INE ofrece los datos del primer semestre, que en Granada arrojan un total de 4.456 nacimientos. Si se considera la tendencia anual y se admite el mismo número de nacimientos en el segundo semestre (podría ser menos), Granada habría terminado 2012 con 8.912 nacimientos, una bajada considerable que desplomaría los datos de la barrera de los 9.000 y cifraría el descenso en los últimos cuatro años en el 15,5%. <br><br>

Por edad, de la madre, el grupo más numeroso de parturientas fue entre los 30 y 34 años, con 3.340 partos. Le siguen el grupo de edad de 35 a 39 años (2.089 partos) y el de 25 a 29 años (2.056). Ya muy lejos están las que dan a luz entre los 20 y 24 años (934 partos en 2011), entre los 40 y 44 (422) y entre los 15 y 19. Además, en 2011 hubo un parto de madre menor de 15 años y 24 de mujeres mayores de 45 años.<br><br> 

Otro aspecto analizado en las estadísticas del INE es el tipo de parto, si se produce a término o es prematuro. De los 9.130 partos registrados en la provincia en 2011, 8.530 se produjeron a término (es decir, a los nueve meses cumplidos de gestación) y 600 fueron prematuros. <br><br>

La "multiplicidad" también se analiza. Del total de partos registrados en 2011 -última fecha de la que hay datos tan detallados-, 8.971 fueron sencillos -un solo niño (8.451 a término y 520 prematuros)-, 155 dobles -gemelos o mellizos (79 a término y 76 prematuros) y cuatro triples (todos prematuros). <br><br>

Respecto al sexo de los recién nacidos, predominan los niños sobre las niñas. Así, en 2011 nacieron en Granada 4.406 niñas frente a los 4.729 niños. <br><br>

Por mes del nacimiento, enero es el que más partos registró en 2011 con un total de 805 alumbramientos. Le siguen octubre (803), noviembre (802), julio (800), diciembre (779), agosto (773), marzo (766), septiembre (752), junio (748), abril (744), mayo (724) y febrero (634). Contando por semestre, la primera mitad del año se produjeron 4.421 partos frente a los 4.709 del segundo semestre.
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