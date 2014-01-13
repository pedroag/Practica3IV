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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Guillermo Alejandro: 'Llego en un tiempo de mucha vulnerabilidad' </a></h3>
  <img src="../img/guillermo_tiempo_vulnerabilidad_20130430.jpg" width="400">
  <p>El rey Guillermo Alejandro ha jurado ante los Estados Generales (la sesión conjunta del Parlamento y el Senado) su mandato como monarca de todos los holandeses en una solemne ceremonia a la que han asistido más de 2.000 invitados, entre ellos los Príncipes de Asturias.<br><br>

"Mi reinado llega en un tiempo en el que muchos se sienten vulnerables e inseguros", ha reconocido el rey, cubierto con el manto de armiño que llevó su madre hace 33 años y que ha sido criticado por una parte de la población, que ve en esta indumentaria una excesiva concesión al pasado.<br><br>

El rey ha recordado que "la fortaleza del pueblo holandés no reside en el individualismo, sino en la colaboración" y ha pedido que exista "mutua confianza entre la sociedad y el Gobierno".<br><br>

"Como rey quiero reforzar la democracia sirviendo al interés público", ha declarado, en lo que parece una respuesta al discurso que ayer dio su madre, en el que le recordó que "ni el poder ni la ambición personal pueden dar contenido a la monarquía".<br><br>

En un mensaje hacia las instituciones europeas, el rey ha recordado que "como una familia, como amigos, como residentes de un vecindario, como ciudadanos de un reino, como habitantes de la tierra, nos enfrentamos a numerosos desafíos que sólo pueden resolverse a nivel internacional".<br><br>

Apoyo de Máxima y Beatriz<br><br>

"Asumo este reto con convicción (...) Hoy soy consciente de lo feliz que soy gracias al apoyo de mi mujer, Máxima, quien es consciente de las limitaciones que implica esta responsabilidad, pero que ha abrazado nuestro país y se ha convertido en una auténtica holandesa".<br><br>

Junto a su mujer, también ha tenido unas palabras especiales para su madre, a la que ha reconocido su "total compromiso" con su deber durante los 33 años de reinado. "Has sido también hija, esposa, madre y cabeza de familia. Cada una de esas responsabilidades las has llevado a cabo con justicia, aunque a veces ha provocado tensiones internas", ha admitido el rey ante su madre, que ha permanecido sentada junto a sus nietas con el rostro visiblemente emocionado pero sin derramar una lágrima.<br><br>

"Asistida por mi padre, has tenido tu propio estilo y has mantenido estable tu popularidad, porque has sabido estar a la altura", le ha reconocido su hijo. "Nadie sabe lo que el futuro me deparará, pero hasta donde me lleve este camino, llevaré conmigo tu sabiduría y amabilidad".
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
