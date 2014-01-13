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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">“Me gusta estar donde me quieran y en España algunos me odian” </a></h3>
  <img src="../img/mourinho_estar_donde_quieran_20130501.jpg" >
  <p>Pocas personas en el mundo del fútbol son más hábiles que José Mourinho para convertir las situaciones de fracaso en oportunidades de exaltación personal, autopromoción o construcción de relatos alternativos. El Madrid le contrató en 2010 para recuperar la hegemonía del fútbol mundial, cuestión que se dirime en la Liga de Campeones, y ayer se quedó fuera de la final por tercer año consecutivo, solo que esta vez el rival que lo descalificó fue un club de cantera cuyos recursos están muy por debajo de las posibilidades de la institución de Chamartín. En lugar de asumir algún tipo de responsabilidad, Mourinho procuró desviar la atención hacia otros rincones. Principalmente, dejo ver que piensa en marcharse a Inglaterra porque no se encuentra a gusto. Para explicarlo no hizo más que entretejer un discurso sinuoso plagado de sombras sin definir. Lo más notable que dijo fue que en Inglaterra es “amado” por los medios de comunicación.<br><br>

“No he tomado una decisión porque tengo un contrato”, dijo, cuando le preguntaron si ya había resuelto fichar por el Chelsea. “Y es más que un contrato, porque en el fútbol rompes los contratos cuando quieres. No tomo una decisión por respeto al Madrid y al presidente. Por eso quiero jugar la final de Copa, intentar ganarla, terminar segundo en la Liga, y al final de la temporada decidir lo mejor con el presidente Florentino Pérez, que es mi amigo. Con él decidiré lo mejor. Sé que en Inglaterra me aman. Lo sé. Soy amado por los hinchas, soy amado por los medios, que me critican justamente, cuando deben pero dándome crédito cuando lo merezco… Y sé que soy amado por algunos clubes, especialmente uno. Y en España la situación es un poco diferente porque algunas personas me odian. Algunos están en esta habitación. Es difícil tomar esa decisión porque me gusta este club y me gusta el presidente. Ha hecho un equipo fantástico que está listo para hacer grandes cosas. Y es duro. Pero quiero ser honesto y justo con el presidente y por eso hablaré al final de la temporada”.<br><br>

“Obviamente me gusta estar donde me gusta mucho estar”, dijo Mourinho, “donde la gente me quiera sin ningún tipo de reservas, donde tenga todo el apoyo de diferentes áreas. Ya veremos lo que pasa en el final. Lo importante es el Madrid. Mucho más importante que yo”.<br><br>

“No es importante que yo siga”, prosiguió el mánager, por momentos procurando mostrarse generoso con el club que representa, por momentos haciendo publicidad de sus logros. “Ahora el Madrid ha recuperado su posición de cabeza de serie con tres semifinales consecutivas. Pero el Madrid no vive de casi y yo tampoco. Esa no es mi filosofía ni mi cultura. Han sido tres temporadas económicamente fantásticas para el club porque ha ganado muchísimo dinero en la Champions sin tener que pagar primas porque no hemos ganado la competición. Y desde el punto de vista del prestigio se ha recuperado. Pero no ganó la competición y ya la ganará en el futuro. Si es conmigo, óptimo, si no, también celebraré porque yo cuando estoy en un club le gano afecto y empatía. Que gane la décima conmigo o sin mí”.<br><br>

Respecto al partido, Mourinho se mostró crítico con el árbitro, Howard Webb, a quien acusó de quitarle posibilidades por no expulsar a Hummels. “Entramos muy fuertes”, comenzó. “Con una intensidad altísima tanto en la presión como en la circulación del balón y los jugadores en la fase ofensiva. Pero cuanto antes marcas el primer gol más tiempo tienes oportunidades de remontar, y hemos fallado ocasiones importantes. Y después en el segundo tiempo arriesgamos todo contra un equipo que es más rápido que nosotros, con gente que tiene otra intensidad de movimientos. Ellos han tenido dos oportunidades grandes. El palo de Lewandowski y la parada de Diego López. Después el equipo arriesgó. Jugó con corazón. Se adaptó bien al modo de jugar. Cuando marcamos el primer gol la gente pidió más. Y fue una pena que no marcáramos antes, y que Webb dejara de ser árbitro para ser hombre. Se lo dije a él. Tendría que haber expulsado a Hummels porque fue roja clara. Todos vimos que paró con la mano fuera del área. Era roja clara porque el pase de Cristiano deja a Benzema cara a cara con el portero. Faltaban 24 minutos para terminar. En ese momento Webb ha sido hombre y ha pensado una cosa: ‘Este chico no va a jugar la final’. Debió ser árbitro antes que hombre y sin Hummels habría sido diferente. Pero hay que ser justo. Si hubiéramos jugado en Dortmund con el mismo carácter y la misma actitud no habríamos necesitado remontar el 4-1”.<br><br>

Cristiano jugó como si tuviera problemas musculares. Desde el club se filtró que el jugador tenía una pequeña rotura en el muslo izquierdo. Pero Mourinho lo negó: “Para mí Cristiano ha jugado al 100%. O ha iniciado al 100%. Si luego ha ido disminuyendo es una cosa que no puedo decir porque no he hablado con él”.
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
<section id="otrasnoticias">
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
<h4>Otras noticias de interés</h4>
<li> <a href="nadal_territorio_federer_20130430.html"> Nadal, en territorio Federer.</a></li>
    <br>
    <li> <a href="Karlovic_sufre_derrame_20130501.html"> Karlovic sufre un derrame cerebral</a></li>
    <br>
    <li><a href="vettel_raikkonen_compañero_20130501.html"> Vettel "¿Raikkonen de compañero? Sin problemas"</a></li>
    <br>
    <li><a href="rato_epica_20130501.html"> Un rato de épica no basta </a></li>
</section>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
