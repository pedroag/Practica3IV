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
  <h3>  <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">La AVT pide 8 años para los ex altos cargos policiales por el 'caso Faisán'</a> </h3>
  <p>La Asociación de Víctimas del Terrorismo (AVT) ha solicitado ocho años y medio de prisión para el ex jefe superior de Policía del País Vasco Enrique Pamies, y ocho años de cárcel para el ex inspector José María Ballesteros, ambos imputados por un delito de colaboración con banda armada por el supuesto chivatazo a ETA, más conocido como el 'caso Faisán'.<br><br>

La asociación, personada en el proceso como acusación particular, ha presentado hoy ante la Audiencia Nacional este escrito en el que acusa a ambos mandos policiales de la comisión de los delitos de colaboración con banda armada y revelación de secretos.<br><br>

Por ambos actos, la AVT solicita ocho años y seis meses de prisión para Pamies, además de una multa de 24 meses a pagar en una cuota diaria de 50 euros e inhabilitación para el ejercicio de su trabajo durante cinco años; mientras que Ballesteros se expone a una pena de ocho años de prisión, una multa de 21 meses con cuota diaria de 40 euros e inhabilitación de su cargo por cuatro años.<br><br>

Hace unos días, el fiscal del caso presentó su solicitud de condena que, por orden del fiscal general del Estado, incluyó el delito de colaboración con banda armada. Así, las penas reclamadas por el Ministerio Público fueron de siete años para Pamies y de seis años y medio para Ballesteros.<br><br>

"Esperamos que el inicio del proceso sirva también para que, tanto Pamies como Ballesteros, colaboren con la Justicia y ayuden a destapar toda la trama del caso Faisán, descubriendo la verdad y ayudando a depurar responsabilidades en todas las instancias", ha destacado la asociación en un comunicado después de presentar el escrito de acusación.
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