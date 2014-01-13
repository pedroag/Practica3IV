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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Amanda Knox: «En la prisión pensé en suicidarme de todas las formas posibles» </a></h3>
  <img src="../img/amanda_knox_20130501.jpg" width="400">
  <p>La estadounidense Amanda Knox, presente en los medios estadounidenses por la publicación de su autobiografía, "Waiting to Be Heard" ("Esperando ser escuchada"), ha recordado el calvario que pasó entre rejas en Italia. Anoche, en una entrevista concedida a la ABC incluso admitió que había pensado en suicidarse: «Hay muchas formas de matarse en una prisión, es fácil y la gente lo hacía. Yo me imaginé haciéndolo de todas las formas posibles».<br><br>

Pese a ello la joven estadounidense se ha armado de valor y no descarta regresar a Italia por el nuevo juicio por la muerte de la estudiante británica Meredith Kercher.<br><br>

Knox, se lamentó ante la periodista Diane Sawyer del trato recibido por la justicia italiana: «es muy distinto escuchar las barbaridades que dicen los medios a estar en una sala de juzgado, luchando por tu vida, mientras la gente te está llamando "Demonio"».<br><br>

Valorando la posibilidad
En otra entrevista con el diario USA Today, Knox, que pasó cuatro años en prisión por ese crimen hasta que en 2011 un Tribunal de Apelación la absolvió, admitió que está valorando esa posibilidad aunque su presencia no es obligatoria en ese proceso que tendrá lugar a finales de año o comienzos de 2014. El 26 de marzo el Tribunal Supremo italiano ordenó, por motivos que explicará más adelante, repetir un juicio que fue el más mediático y polémico de los últimos años en ese país.<br><br>

"Mis abogados me dicen que no tengo por qué ir y que no necesito ir, pero lo estoy considerando, siendo sincera. Es algo que me asusta pensar, pero también es importante para mí darme cuenta de que no sólo es algo que está pasando muy lejos de aquí y que no me importa. Creo que es importante expresar eso. Si mi presencia es necesaria para conseguirlo, iré", afirmó Knox. No obstante, la joven admitió que esta situación llega justo cuando pensaba que había conseguido dejar el pasado atrás.<br><br>

"Han ocurrido las cosas tal y como no esperábamos y exactamente como deseamos que no fueran. Es un peso enorme en mi corazón ahora mismo", declaró. Knox reconoció que, aunque quiere demostrar su inocencia, sabe que algunos nunca la creerán, incluida la familia de Kercher. "Me importa lo que su familia piense. Me afecta, y afecta a mi paz interior. Espero que puedan leer mi libro y que no tengan que creerme. No tengo derecho a demandar nada a nadie. Pero espero que lo intenten", manifestó.<br><br>

Su sueño, según confesó, es que los padres de Kercher la lleven a visitar la tumba de su hija, pero por el momento debe afrontar un nuevo proceso judicial que podría alargarse durante varios años. Preguntada si finalmente fuera considerada culpable, afirmó: "Sinceramente, espero que no. Tengo una vida que quiero vivir y quiero tener el derecho a vivirla. Ya he confrontado antes en mi mente la idea de que nunca saldría de prisión".<br><br>

Declaraciones contradictorias
Knox, en un avance de su obra publicado por el New York Times, recalcó que con el libro pretende "aclarar las cosas", al mismo tiempo que describe cómo ella y Sollecito fumaban marihuana en la habitación de él mientras veían una película en el momento en el que tuvo lugar el asesinato de Kercher. Asimismo, se defiende alegando que incurrió en declaraciones contradictorias como consecuencia de la fatiga de los interrogatorios, en los que asegura que fue golpeada por las autoridades.<br><br>

Detalla también su intención de suicidarse mientras estuvo en prisión y acusa a trabajadores de la cárcel de haber abusado sexualmente de ella. La editorial HarperCollins habría pagado 4 millones de dólares a Knox por la publicación del libro, según The Hollywood Reporter.
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

