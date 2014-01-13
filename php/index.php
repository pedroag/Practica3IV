<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "es">
<head>
<title>El periodico</title>
<meta charset = "UTF8"/>
<link rel = "stylesheet" type = "text/css" href="style.css" />
</head>

<body>
<aside id="izquierda"> <img src="img/publi_izq.jpg" width='192' height='800'> </aside>
<aside id="derecha"> <img src="img/publi_der.jpg" width='192' height='800'> </aside>
<header id="centro"> <img src="img/publi_arriba.jpg"> </header>
<section id="contenido">
  <header>
    <h1>El Periódico</h1>
    <nav> <a href="index.php">Portada</a> <a href="Local/Local.php">Local</a> <a href="Nacional/Nacional.php">Nacional</a> <a href="Internacional/Internacional.php">Internacional</a> <a href="Deportes/Deportes.php">Deportes</a>
    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']=="admin"){ ?>
    	<a href="zona_admin.php">Administar</a>
        <?php } ?>
    </nav>
  </header>
  <section id="noticias">
    <section id="noticiasIZQ">
      <article id="IZQ1">
        <h3> Deportes </h3>
        <h2><a href="Deportes/mayor_caso_dopaje_espana_20130430.php" >El mayor caso de dopaje en España se cierra con dos condenas leves </a> </h2>
        <img src="img/mayor_caso_dopaje_espana_20130430.jpg" width="170">
        <p> Las condenas son todas por atentados contra la salud pública. Ningún acusado ingresará en prisión porque las penas no superan los dos años. La jueza niega las bolsas de sangre a las autoridades deportivas. </p>
      </article>
      <article id="IZQ2">
        <h3> Nacional </h3>
        <h2><a href="Nacional/bankia_se_dispara_20130430.php"> Bankia se dispara hasta un 700% en Bolsa por las operaciones especulativas </a></h2>
        <p> Las acciones de la entidad suben de manera vertiginosa mientras los derechos de la ampliación se desploman. Bloomberg lo sitúa como el mayor banco del euro por valor bursátil. </p>
      </article>
      <article id="IZQ3">
        <h3> Local </h3>
        <h2><a href="Local/rober_la_mejor_20130430.php"> "Rober, hoy por hoy, es la mejor" </a></h2>
        <p> El Ayuntamiento y la concesionaria del autobús llegan a un acuerdo para seguir hasta 2022. </p>
      </article>
      <article id="IZQ4">
        <h3> Cultura </h3>
        <h2><a href="Internacional/can_roca_numero_uno_20130430.php"> El Celler de Can Roca, número uno de la cocina mundial </a></h2>
        <img src="img/can_roca_numero_uno_20130430.jpg" width="150">
        <p> España recupera el trono de la vanguardia internacional según la lista 50 Best de la revista 'Restaurant'. </p>
      </article>
      <article id="IZQ5">
        <h3> Internacional </h3>
        <h2><a href="Internacional/guillermo_tiempo_vulnerabilidad_20130430.php"> Guillermo Alejandro: "Llego en un tiempo de mucha vulnerabilidad"</a> </h2>
        <img src="img/guillermo_tiempo_vulnerabilidad_20130430.jpg" width="150">
        <p> El nuevo rey de Holanda jura y es investido en una solemne ceremonia ante 2.000 invitados, entre ellos, los Príncipes de Asturias. </p>
      </article>
    </section>
    <section id="noticiasDER">
    
    <section id="login">
    
    <?php
	if (isset($_SESSION['usuario'])) {
    echo "Identificado como: <h2>".$_SESSION['usuario']." </h2>";
	echo "<a href='salir.php'>Salir</a>";
	}else{
	?>
    
    <form method='post' action='login.php'>
	Usuario <input type='text' name="usuario"/><br/>
	Password <input type='password' name="clave"/><br/><br/>
	<input type='submit' value="Entrar"/>
    
    </form>
    <form action="formulario_registro.php">
    <input type="submit" value="Registrarse">
    </form>
    
    <?php
	}
	?>
    
    
    </section>
    
    <section id="ultimas">
      <h4>Últimas noticias</h4>
      <?php
	  include 'mostar_ultimas.php';
      mostrar_ultimas();
	  ?>
      </section>
      <section id="publis">
      <aside id="publi1"><img src="img/publi1.jpg" height="250" width="297"></aside>
      <aside id="publi2"> <img src="img/publi2.jpg" height="250" width="297"> </aside>
      <aside>
      <h2><a href="formulario.html">SUSCRIBETE</a></h2>
      </aside>
      </section>
      </section>
    
    <section id="noticiasCEN">
      <article id="CEN1">
        <h3> Internacional </h3>
        <h2><a href="Internacional/fbi_interroga_viuda_20130430.php"> El FBI interroga a la viuda del sospechoso de Boston tras hallar ADN femenino </a></h2>
        <p> El ADN podría pertenecer a una cómplice, a personal de la tienda donde compraron las ollas o a alguna víctima de la explosión. </p>
      </article>
      <article id="CEN2">
        <h3> Nacional </h3>
        <h2> <a href="Nacional/detenidos_cataluna_20130430.php">145 detenidos en Cataluña por defraudar 7,8 millones de euros a la Seguridad Social </a></h2>
        <p> La operación, desarrolladaen Cataluña, ha detectado varias empresas creadas con el único fin de tramitar altas de falsos trabajadores para que pudieran percibir prestaciones por desempleo o subsidios. </p>
      </article>
      <article id="CEN3">
        <h3> Deportes </h3>
        <h2> <a href="Deportes/Mickeal_retira_20130501.php">Mickeal anuncia que deja el baloncesto de forma indefinida </a></h2>
        <p> "Estaré un periodo largo en Estados Unidos. Pueden ser cuatro meses, seis, un año o toda la vida. Pero ahora mismo el baloncesto es secundario para mí". </p>
      </article>
      </article>
      <article id="CEN4">
        <h3> Cultura </h3>
        <h2> «Iron Man 3» revienta la taquilla y se convierte en el mejor estreno del año </h2>
        <p> La película de Marvel recaudó tanto hasta el domingo como todas las películas juntas durante el fin de semana precedente, 3,73 millones. </p>
      </article>
    </section>
</section>
<footer>
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
