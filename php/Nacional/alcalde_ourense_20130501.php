<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>El periodico - Nacional</title>
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
  <h2>NACIONAL</h2>
</header>
<section id="lanoticia">
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">El alcalde de Ourense ve 'normal' gastar dinero público en fiestas con afines </a></h3>
  <p>El alcalde socialista de Ourense, Agustín Fernández, considera absolutamente "normal" gastar dinero público en fiestas con simpatizantes y vecinos. Fernández ha justificado este miércoles que una parte de la asignación municipal al Grupo Municipal Socialista, aproximadamente 74.000 euros, se destine a este tipo de eventos.<br><br>

En concreto, y según ha trascendido, en el conjunto de celebraciones socialistas se incluye presuntamente el reencuentro tras salir de la cárcel con su predecesor el ex alcalde, Francisco Rodríguez, detenido por su implicación en la 'operación Pokémon', y cuya puesta en libertad celebraron el propio regidor, concejales, asesores y amigos del alcalde dimitido.
<br><br>
La argumentación del alcalde le llevó a afirmar ante los periodistas que "el gasto es estrictamente legal, figura en el registro del grupo y está perfectamente legalizado". Y abundando en detalles el regidor argumentó que "en la actividad política hay eventos y se producen gastos" en referencia a gastos de alimentación y bebidas que "están correctamente fiscalizados".<br><br>

Entre las regalías de los socialistas ourensanos también figura un préstamo "por razones humanitarias" a un funcionario municipal. El propio regidor reconoció que se le concedió un préstamo de 21.000 euros a un trabajador del ayuntamiento que "pasaba por una situación difícil" y que "está devolviendo". El beneficiario del préstamo es el jefe del Servicio de Recaudación y fue condenado previamente por el Tribunal de Cuentas a devolver 30.000 euros que habían desaparecido de las arcas municipales.<br><br>

La situación política del ayuntamiento de Ourense es muy delicada y no sólo la oposición critica con dureza los comportamientos de los socialistas. Algunos concejales del equipo de Gobierno, próximos al secretario general del PSdeG-PSOE, Pachi Vázquez, y distanciados de la gestión de sus compañeros, afirman desconocer estos presuntos desmanes.<br><br>

En concreto la edil de Limpieza, Susana Bayo, pidió oficialmente las cuentas del grupo y en declaraciones a La Sexta afirmó que "no era conocedora del préstamo" para añadir que en el momento de la concesión "yo no formaba parte del Gobierno".<br><br>

Feijóo: 'Ourense necesita un gobierno estable'<br><br>

En todo caso la oposición ya ha reaccionado. El portavoz del PP, Rosendo Fernández, calificó estos comportamientos de inmorales y entiende que "está fuera de lugar que se destine dinero público a comprar alcohol". Fernández recuerda que el PP está preparado para gobernar y no descarta la presentación de una moción de confianza.<br><br>

También el presidente del PP de Galicia, Alberto Núñez Feijóo, sigue al detalle lo que sucede en la alcaldía de la ciudad gallega y en una recientes declaraciones a ELMUNDO.es manifestó que Ourense "necesita un gobierno estable, creo que en Ourense se necesita que gobierne un partido que gane las elecciones y ese el objetivo más importante de los próximos años".<br><br>

En este sentido Núñez Feijóo ha pedido a sus compañeros "un esfuerzo adicional para ganar la alcaldía de Ourense". Fuentes del PP de Galicia califican como "bochornoso" el espectáculo que se está dando de la ciudad y se preguntan cuál es el límite. En todo caso recuerdan lo manifestado por el portavoz, Rosendo Fernández, que "el PP está listo para gobernar".<br><br>

También los nacionalistas, antiguos aliados del PSdeG, están redoblando las críticas contra los socialistas. Sus portavoces manifiestan que es un prolongación de la guerra interna que está viviendo el PSOE gallego y que esto está repercutiendo gravemente en la ciudad.
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
    <li> <a href="beatriz_talegon_20130430.html">Talegón no descarta presentarse a las primarias y pide abrir ahora el debate</a></li>
    <br>
    <li> <a href="presidentes_tribunales_20130501.html">Presidentes de los tribunales superiores también cuestionan la reforma del CGPJ </a></li>
    <br>
    <li><a href="avt_pide_años_20130430.html">La AVT pide 8 años para los ex altos cargos policiales por el 'caso Faisán' </a></li>
    <br>
    <li><a href="cayo_lara_anuncia_20130430.html">Cayo Lara anuncia un plan para crear tres millones de puestos de trabajo </a></li>
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