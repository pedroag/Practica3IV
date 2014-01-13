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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Maduro, a Margallo: «Saque sus narices de Venezuela» </a></h3>
  <img src="../img/maduro_margallo_20130501.JPG" width="400">
  <p>El presidente venezolano, Nicolás Maduro, ha instado al ministro de Asuntos Exteriores y Cooperación de España, José Manuel García-Margallo, a "sacar sus narices de Venezuela", en respuesta a su oferta de mediación en la crisis política que vive el país iberoamericano. "Ha dicho el canciller español que está listo para venir a mediar en Venezuela. Señor canciller español, no venga a mediar a Venezuela, vaya a las calles a responderle a la clase obrera española, a la que ustedes le han quitado el derecho al trabajo, al salario, a las pensiones", ha dicho desde el Teatro Junín, en Caracas.<br><br>

"Canciller español, saque sus narices de Venezuela; canciller español, fuera de aquí; canciller español, impertinente. A Venezuela se la respeta", ha remachado Maduro, tras lo cual ha sido ovacionado por el público al grito de "así es que se gobierna". A pesar de sus críticas al Gobierno de Mariano Rajoy, el líder 'chavista' ha enviado un "saludo especial" a "la clase obrera española". "Tienen que salir a la calle a luchar por lo que la derecha facistoide les está quitando", ha indicado. "Imagínense que la derecha hubiera puesto su mano en el poder político en Venezuela. A estas alturas, a 1 de mayo, la clase obrera venezolana estaría insurrecionada, porque habrían privatizado y asesinado. No exagero, es el proyecto de odio del fascismo, que tenemos que seguir denunciando", ha apuntado.<br><br>

Ofrecimiento de Margallo
Por su parte el coordinado de la Comisión de Enlace Internacional de la Mesa de Unidad Democrática (MUD) -coalición opositora-, Edmundo González, ha considerado que, "dada la polarización, todo esfuerzo que contribuya a calmar las tensiones será bien recibido". Sin embargo, el político opositor ha adelantado que "todo va depender de la disposición que tenga el Gobierno" venezolano, en declaraciones recogidas por el diario 'El Universal'.<br><br>

García-Margallo indicó el pasado lunes, durante su visita a la sede de la Organización de Estados Americanos (OEA), en Washington, que "España está siempre dispuesta a aproximar posiciones en cualquier región del mundo, y esa posibilidad es mayor en países con los que tenemos lazos tan importantes, como los iberoamericanos, y Venezuela". "Estaremos absolutamente encantados de hacer algo, lo que se nos pida, se nos demande, para garantizar una Venezuela en paz, prosperidad y estabilidad", añadió.
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

