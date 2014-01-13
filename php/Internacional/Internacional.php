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
  <h2>INTERNACIONAL</h2>
</header>
<section id="noticiaDES">
  <h3> <a href="maduro_margallo_20130501.php">Maduro, a Margallo: «Saque sus narices de Venezuela» </a></h3>
  
<img src="../img/maduro_margallo_20130501.JPG" width="275">

  <p> El presidente del país contesta así a unas declaraciones del ministro español de Exteriores en las que afirmaba que España «está dispuesta a acercar posiciones» </p>
</section>
<section id="noticias">
  <section id="noticiasIZQ">
    <article id="IZQ1">
      <h3> Internacional</h3>
      <h2> <a href="amanda_knox_20130501.php"> Amanda Knox: «En la prisión pensé en suicidarme de todas las formas posibles» </a></h2>
      <img src="../img/amanda_knox_20130501.JPG" width="200">
      <p> La estadounidense, que pasó cuatro años en prisión por el crimen de Meredith Kercher, no descarta regresar a Italia para el nuevo juicio por la muerte de la estudiante. </p>
    </article>
    <article id="IZQ2">
      <h3> Internacional</h3>
      <h2> <a href="mas_400_muertos_20130430.php">Más de 400 muertos y 149 desaparecidos por el derrumbe de un edificio en Bangladesh</a> </h2>
      <p> Se han hallado otros 17 cadáveres en las últimas horas entre los escombros del edificio Rana Plaza en las inmediaciones de Dacca. </p>
    </article>
    <article id="IZQ3">
      <h3> Internacional </h3>
      <h2> <a href="berlusconi_pide_presidir_convencion_20130430.php">Silvio Berlusconi pide presidir la convención para las reformas </a></h2>
      <p> Il Cavaliere, embarcado en una operación para ser visto como «padre de la patria» y artífice de «una pacificación nacional» </p>
    </article>
    <article id="IZQ4">
      <h3> Internacional </h3>
      <h2> <a href="israel_retoma_asesinatos_20130430.php">Israel retoma los asesinatos selectivos en Gaza tras la guerra del pasado noviembre </a></h2>
      <p> El yihadista Hitham Mashal fue alcanzado por un misil israelí. Su muerte y los recientes ataques desde la Franja dan al traste definitivamente con la frágil tregua alcanzada hace cinco meses. </p>
    </article>
  </section>
  <section id="noticiasDER">
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
    <aside id="publi1"> <img src="../img/publi1l.jpg" height="250" width="297"> </aside>
    <aside id="publi2"> <img src="../img/publi2l.jpg" height="250" width="297"> </aside>
  </section>
  <section id="noticiasCEN">
    <article id="CEN1">
      <h3> Internacional </h3>
      <h2> <a href="tribunal_derechos_ilegal_20130430.php">El Tribunal de Derechos Humanos ve «ilegal» la prisión de Timoshenko</a> </h2>
      <p> La exprimera ministra de Ucrania fue encarcelada en 2011 por la firma de contratos de gas con Rusia «onerosos». </p>
    </article>
    <article id="CEN2">
      <h3> Internacional </h3>
      <h2> <a href="ben_ali_condenado_20130430.php">Ben Alí es condenado por tercera vez a cadena perpetua </a></h2>
      <p> El ex presidente tunecino vive junto a su mujer en Arabia Saudí desde que fue defenestrado por la revolución en 2011. </p>
    </article>
    <article id="CEN3">
      <h3> Internacional </h3>
      <h2> <a href="malestar_sudafrica_mandela_20130430.php">Malestar en Sudáfrica por la aparición de Mandela en TV con la cúpula del gobernante CNA </a></h2>
      <p> Los medios sudafricanos y las redes sociales critican la exposición pública del expresidente. </p>
    </article>
    </article>
    <article id="CEN4">
      <h3> Internacional </h3>
      <h2> <a href="evo_morales_no_lee_20130430.php">Evo Morales: «No me gusta leer»</a>
 </h2>
      <p> El presidente de Bolivia admite que «a veces a lo máximo» se ve «los títulos, algún capítulo o unos párrafos o páginas» de obras que le regalan. </p>
    </article>
  </section>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
