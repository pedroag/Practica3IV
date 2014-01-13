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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Evo Morales: «No me gusta leer» </a></h3>
  <p>«No me gusta leer», admitió ayer Evo Morales durante un acto en el que firmó una ley que elimina dos impuestos para el comercio de los libros. En un alarde de sinceridad, el presidente de Bolivia contó además que del montón de libros que le regalan «a veces a lo máximo» se lee «los títulos, algún capítulo o unos párrafos o páginas», pero no llega a terminar las obras.<br><br>

«Tengo ese problema, soy sincero», reconoció Morales, que dijo tener ganas de leer libros pero no sabe cómo enamorarse de la lectura.<br><br>

En cambio, destacó que su vicepresidente, Álvaro García Linera, es un buen lector y escritor de libros, principalmente sociológicos.<br><br>

Morales se planteó la necesidad de una política para desarrollar el hábito de la lectura aunque reconoció que no tiene idea de cómo implementarla en su país, que ahora cuenta con esta ley que elimina dos tributos para el comercio de las publicaciones.<br><br>

La normativa libera la venta de libros nacionales y extranjeros del impuesto al valor agregado (IVA), que es del 13%, y del impuesto a las transacciones, del 3%, con el objetivo de bajar su coste en el mercado al menos en un 16%.<br><br>

La ley además establece la constitución del Sistema Nacional de Bibliotecas para que sean nutridas con material actualizado, lo que en este momento sólo ocurre en las ciudades más importantes.<br><br>

Las asociaciones de libreros llevaban casi dos décadas pidiendo la supresión de esos gravámenes en un intento de frenar la piratería y la fotocopia de los libros, principalmente importados.<br><br>

¿Tercer mandato?<br><br>
El Tribunal Constitucional de Bolivia resolvió ayer que es constitucional que Evo Morales aspire a un tercer mandato y se presente a las elecciones presidenciales de diciembre del 2014.<br><br>

La sentencia constitucional respalda la postulación de Morales y del vicepresidente, Álvaro García Linera, por considerar que el actual mandato que comenzaron en 2009 cuenta como primero del Estado plurinacional, refundado ese año.
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