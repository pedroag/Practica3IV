<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>El periodico - Internacional</title>
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
  <h2>Internacional</h2>
</header>
<section id="lanoticia">
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Silvio Berlusconi pide presidir la convención para las reformas </a></h3>
  <p>«Este nuevo gobierno italiano ha nacido gracias a mi. Se trata de un milagro mío». Estas palabras de Silvio Berlusconi reflejan la euforia con que Il Cavaliere vive este momento histórico para el país, gobernado ahora por un ejecutivo de gran coalición, tras 20 años de guerra y tensiones entre un centro-izquierda y el partido de Berlusconi a causa de sus profundas diferencias políticas y culturales. Pero el exprimer ministro no se conforma con ese milagro: no quiere ser un simple observador; quiere mandar en la vida política para seguir haciendo nuevos milagros, siempre con la vista puesta en su particular lucha contra la magistratura y con el objetivo último de salvarse de una posible condena. Silvio Berlusconi está ya embarcado en lo que sus fieles llaman «operación padre de la patria», y para ello se ha puesto ya el traje de «estadista».<br><br>

Importante Convención<br><br>
La última pretensión del Cavaliere es presidir la Convención para las reformas institucionales, en las que trabajarán no solo políticos sino grandes expertos. Lo ha dicho explícitamente en uno de sus canales de televisión: «El presidente de esa convención debe indicarlo mi partido. Imagino que tendré que ser yo». La importancia de esta Convención, que entre otras cosas debe elaborar una nueva ley electoral, viene determinada porque sus trabajados durarán 18 meses, y está ligada a la vida de la legislatura. Es decir, el nuevo primer ministro Enrico Letta ya ha anunciado que si en ese tiempo no se hacen las reformas institucionales, él dimitirá.<br><br>

Los dirigentes de su partido le han dicho a Berlusconi que hubiera hecho mejor con callarse y no levantar la liebre, porque en la izquierda muchos ponen ya el grito en el cielo. El propio Berlusconi ha admitido ante sus parlamentarios que se dejó llevar por el entusiasmo y admitió que se le había «escapado» el dar la noticia.<br><br>
Para la izquierda, ver a Berlusconi en la presidencia de la Convención que diseñará la arquitectura de la Tercera República italiana, sería demasiado. Mientras los militares y seguidores del Pueblo de la Libertad de Berlusconi sienten que han llegado desde el abismo en que estaban hace tan solo seis meses, al paraíso actual tras las elecciones; el sentimiento es totalmente contrario en la izquierda: las encuestas reflejan el enorme disgusto en las bases de la izquierda por un gobierno de coalición con Berlusconi, «el enemigo de siempre».<br><br>

«Pacificación nacional»<br><br>
Reflejando este sentimiento, l periódico de izquierda Il Fatto Quotidiano ha abierto su primera página con este destacado título: «Los electores del PD malvendidos al Caimán (Berlusconi)». Y su director, Antonio Padellaro ha escrito: «Cabe imaginar cómo se sentirán ocho millones y medio de electores del Partido Democrático que en febrero pensaban votar contra Berlusconi y ahora se lo encuentran en el mismo gobierno. Una traición política que no tiene precedentes en la historia republicana italiana».<br><br>

En el diseño de esa operación de «padre de la patria» figura que Silvio Berlusconi adopte más la imagen de paloma que de halcón. El proceso que está en marcha por parte del Cavaliere es «una pacificación nacional», que le sirva como escudo ante la justicia y le permita pasar indemne frente a las sentencias de los cuatro procesos judiciales que tiene pendientes.<br><br>

Amnistía cultural<br><br>
En definitiva, Berlusconi intenta, con su nueva figura de «estadista» legitimar las dos décadas pasadas marcadas por el «berlusconismo», considerado una anomalía por la izquierda, entre otras cosas por conflicto de intereses del Cavaliere, insólito en una democracia occidental. Esa «pacificación nacional» comportaría, en la visión de Silvio Berlusconi, una especie de amnistía cultural que meta en el mismo plano de igualdad a la izquierda y a la derecha. El PD ha pasado por el aro de un gobierno de coalición porque no había otra alternativa, pero la izquierda difícilmente aceptará ver a Berlusconi sentado en la presidencia de la Convención. Hoy en Italia la izquierda vive una pesadilla, mientras Il Cavaliere se toma su revancha y sueña con pasar a la historia y llegar incluso al Palacio del Quirinale.
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
    <li> <a href="ben_ali_condenado_20130430.html">Ben Alí es condenado por tercera vez a cadena perpetua </a></li>
    <br>
    <li> <a href="israel_retoma_asesinatos_20130430.html">Israel retoma los asesinatos selectivos en Gaza tras la guerra del pasado noviembre </a></li>
    <br>
    <li><a href="mas_400_muertos_20130430.html">Más de 400 muertos y 149 desaparecidos por el derrumbe de un edificio en Bangladesh</a></li>
    <br>
    <li> <a href="maduro_margallo_20130501.html">Maduro, a Margallo: «Saque sus narices de Venezuela» </a></li>
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


