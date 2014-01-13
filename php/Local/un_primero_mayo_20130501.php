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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Un Primero de Mayo con más de 162.000 parados </a></h3>
  <object id="flashObj" style="margin-right:10px" width="300" height="300" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0">
    <param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" />
    <param name="bgcolor" value="#FFFFFF" />
    <param name="flashVars" value="web=externos&videoId=2342305693001&playerID=309010008001&playerKey=AQ%2E%2E,AAAAFDJ-STk%2E,O_UTJPLxsFAhSEJk_8ykI5UN4pASTQM7&domain=embed&dynamicStreaming=true" />
    <param name="base" value="http://admin.brightcove.com" />
    <param name="wmode" value="transparent" />
    <param name="seamlesstabbing" value="false" />
    <param name="allowFullScreen" value="true" />
    <param name="swLiveConnect" value="true" />
    <param name="allowScriptAccess" value="always" />
    <embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" wmode="transparent" bgcolor="#FFFFFF" flashVars="web=externos&videoId=2342305693001&playerID=309010008001&playerKey=AQ%2E%2E,AAAAFDJ-STk%2E,O_UTJPLxsFAhSEJk_8ykI5UN4pASTQM7&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="300" height="300" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
  </object>
  <p>Hace menos de una semana, la Encuesta de Población Activa se encargaba de dar una nueva muestra de la realidad. En Granada hay actualmente más de 162.000 parados, o lo que es lo mismo, un 36,99 por ciento de la población de la provincia en edad de trabajar que no tiene ocupación. Con esos datos, la fiesta del Día Internacional de los Trabajadores o Primero de Mayo adquiere más fuerza.<br><br>
Como cabeza visible de las acciones festivas y reivindicativas que se llevarán a cabo en Granada, sobresalen los sindicatos, aunque se prevé la asistencia de dirigentes de varios partidos políticos, como la socialista Mar Villafranca. CCOO y UGT ya anunciaron hace unos días que este Primero de Mayo "debe ser histórico". Según la secretaria general de UGT, la acción de los sindicatos y la ciudadanía es crucial, ya que "a día de hoy, ya no existen los derechos sociales en Europa, la parte social ha sido relegada, y sólo se habla de entidades financieras, de recortes, y de reducir derechos laborales, en vez de hablar de las personas".<br><br>
En esta situación, los representantes de UGT Granada, Manuela Martínez, y de CCOO, Ricardo Flores, están decididos a unir sus fuerzas y sus lemas contra el sentido de la política del Gobierno central. El grito de guerra que unirá a muchos de los manifestantes será el de 'No Tienen Límite, Lucha por tus Derechos'. Los sindicatos esperan verse acompañados y respaldados por muchos ciudadanos que tienen como tradición reivindicar el 'Primero de Mayo' cada año.<br><br>
La manifestación convocada por los sindicatos partirá de los Jardines del Triunfo a las 12:00 horas. Acto seguido, los manifestantes se dirigirán a la Gran Vía, recorrerán Reyes Cartólicos y terminarán la manifestación en Plaza Nueva, donde se leerá un comunicado. No se sabe si los sindicatos lograrán reunir a más personas que en 2012, cuando más de 12.000 personas arroparon a los líderes sindicales andaluces, que elegieron celebrar el Primero de Mayo en Granada.<br><br>
Tanto UGT como CCOO han utilizado las redes sociales para convocar a miles de personas en el acto del Primero de Mayo con el objetivo de reunir a una gran cantidad de personas que protesten contra la situación actual.<br><br>
No solo en la capital se vivirá el Primero de Mayo. En Motril y en Baza están convocadas sendas marchas por los sindicatos mayoritarios. CCOO y UGT han elegido la Plaza de las Mercedarias en Motril y la Plaza Mayor de Baza como su punto de partida para las propuestas.
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