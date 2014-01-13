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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')"> Cada plaza de zona ORA tiene un coste mensual de 81 euros</a></h3>
  <p>La empresa que gestiona los estacionamientos limitados como zona azul en la capital se quedará de la recaudación de las máquinas expendedoras con 81,11 euros al mes por cada plaza de aparcamiento. Esta cantidad cubre el coste del mantenimiento del sistema vigilado y el beneficio industrial de la sociedad privada. <br><br>

La reciente incorporación de otras 1.171 plazas de zona ORA en la capital ha duplicado el número de estacionamientos limitados y esto ha requerido una actualización de las condiciones suscritas con la empresa adjudicataria de este servicio. A partir de ahora se ha establecido una cantidad fijada por plaza de aparcamiento, lo que permite al Ayuntamiento variar el número sin que haya desequilibrios económicos entre ambas partes, como ya se había producido antes. <br><br>

La ciudad ha perdido 1.230 plazas de aparcamiento limitado en los últimos años por las obras del Metro y por la peatonalización de zonas recién remozadas por el propio Ayuntamiento. Para compensar esta pérdida, se ha extendido la zona azul a otros barrios, lo que ha llevado a pintar 1.171 nuevos aparcamientos. <br><br>

En el expediente municipal, el área de Movilidad justifica esta ampliación de la zona ORA en las propias peticiones de asociaciones de vecinos, comunidades de propietarios y ciudadanos particulares, que con esta medida pretendían que los estacionamientos no quedaran ocupados por los mismos coches durante días. <br><br>

Sin embargo, la medida municipal ha tenido una fuerte contestación popular precisamente de vecinos y comerciantes. Movilidad asegura que cuando este expediente se dio a conocer en las Juntas Municipales de Distrito no se presentó ninguna queja, como se refleja en las actas. Es más, el expediente agrega que algunas de las peticiones han tenido que ser rechazadas por falta de argumentos para adoptar esta medida. <br><br>

En total, la ciudad cuenta ahora con unas 2.400 plazas de zona limitada de aparcamiento, pero ya se plantea la posibilidad de seguir aumentando la cantidad total en el futuro, sobre todo a medida que vayan finalizando las obras del Metro. <br><br>

Por este motivo, el Ayuntamiento ha establecido con la empresa concesionaria un acuerdo económico sobre la base de una cantidad por plaza de aparcamiento y no con una cantidad global como hasta ahora. <br><br>

De la recaudación de las máquinas la empresa se queda cada mes con 81,11 euros y lo que exceda de esa cifra es lo que le corresponde ingresar al Ayuntamiento. <br><br>

Esta cifra incluye el coste de mantener al personal que controla los aparcamientos, su vestuario, el mantenimiento de los equipos, así como la amortización paulatina de la inversión anual que supone la instalación de nuevas máquinas expendedoras y los operativos que llevan los controladores para que se pongan las denuncias. <br><br>

Según las estimaciones realizadas por la Concejalía de Movilidad sobre la recaudación prevista de las nuevas plazas de estacionamiento limitado, el Ayuntamiento obtendría 374.260 euros al año con las nuevas incorporaciones. Se parte de la base de que cada plaza reportaría al mes 26 euros más de esos 81 euros que serían para la empresa concesionaria. <br><br>

Estas previsiones económicas se han hecho en base a la recaudación del resto de plazas de zona azul que había ya en funcionamiento en la capital.
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