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
<section id="noticiaDES">
  <h3> <a href="sindicatos_urgen_20130501.php">Los sindicatos urgen en el Primero de Mayo a un pacto frente al paro </a></h3>
  
<img src="../img/sindicatos_primero_mayo_20130501.jpg" width="200">

  <p> CC OO y UGT califican la situación del empleo en España de "emergencia nacional". Toxo y Méndez llaman a la movilización. </p>
</section>
<section id="noticias">
  <section id="noticiasIZQ">
    <article id="IZQ1">
      <h3> Nacional</h3>
      <h2> <a href="beatriz_talegon_20130430.php">Talegón no descarta presentarse a las primarias y pide abrir ahora el debate</a> </h2>
      <img src="../img/beatriz_talegon_20130501.jpg" width="170">
      <p> La joven, valor en alza en el PSOE, opina que el debate interno "se está exigiendo" y anima a dar el paso a quien quiera cambiar la situación. </p>
    </article>
    <article id="IZQ2">
      <h3> Nacional</h3>
      <h2><a href="policia_sospecha_eta_20130501.php"> La Policía sospecha que ETA estaría recibiendo donaciones de simpatizantes</a> </h2>
      <p> Tras el alto el fuego, estas aportaciones complementarían el dinero acumulado por la banda terrorista durante los años de extorsión. </p>
    </article>
    <article id="IZQ3">
      <h3> Nacional </h3>
      <h2> <a href="alcalde_ourense_20130501.php">El alcalde de Ourense ve 'normal' gastar dinero público en fiestas con afines</a> </h2>
      <p> El Grupo Socialista organizó una cena homenaje al ex alcalde imputado en 'Pokémon'. El PP ve "inmoral" destinar dinero a alcohol. </p>
    </article>
    <article id="IZQ4">
      <h3> Nacional </h3>
      <h2> <a href="presidentes_tribunales_20130501.php">Presidentes de los tribunales superiores también cuestionan la reforma del CGPJ </a></h2>
      <p> Critican el fin de su dedicación exclusiva y ven "difícilmente compatible" el ejercicio del cargo de vocal con su función como jueces. </p>
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
    <aside id="publi2"><img src="../img/publi2l.jpg" height="250" width="297"></aside>
  </section>
  <section id="noticiasCEN">
    <article id="CEN1">
      <h3> Nacional </h3>
      <h2> <a href="barcenas_ficha_20130501.php">Bárcenas ficha en el Día del Trabajo</a> </h2>
      <img src="../img/barcenas_ficha_20130501.jpg" width="170">
      <p> Es la quinta vez que el ex tesorero del PP acude a la Audiencia Nacional como medida preventiva. Tiene prohibido salir de España. </p>
    </article>
    <article id="CEN2">
      <h3> Nacional </h3>
      <h2> <a href="avt_pide_anos_20130430.php">La AVT pide 8 años para los ex altos cargos policiales por el 'caso Faisán' </a></h2>
      <p> Son superiores a las reclamadas por el fiscal para el ex director de la Policía en el País Vasco Enrique Pamies y el ex inspector Ballesteros. </p>
    </article>
    <article id="CEN3">
      <h3> Nacional </h3>
      <h2> <a href="desesperacion_por_crisis_20130430.php">La desesperación por la crisis aumenta la violencia que sufren los niños en casa</a> </h2>
      <p> Expertos de Unicef o Cruz Roja advierten de las consecuencias de los desahucios o el paro. Apuntan que la violencia también es psicológica. </p>
    </article>
    </article>
    <article id="CEN4">
      <h3> Nacional </h3>
      <h2> <a href="cayo_lara_anuncia_20130430.php">Cayo Lara anuncia un plan para crear tres millones de puestos de trabajo </a></h2>
      <p> El líder de IU reserva los detalles a la presentación que hará el próximo miércoles en el Congreso. "Es posible crear empleo", apunta. </p>
    </article>
  </section>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
