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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Bárcenas ficha en el Día del Trabajo </a></h3>
  <img src="../img/barcenas_ficha_20130501.jpg" width="390">
  <p>Las obligaciones de Luis Bárcenas con la Audiencia Nacional no entienden de festivos y hoy, Día del Trabajo, el ex tesorero del PP ha tenido que cumplir con la orden del juez de comparecer quincenalmente en el tribunal.<br><br>

Fuentes jurídicas han informado de que Bárcenas ha llegado a la sede de la Audiencia poco después de las nueve de la mañana para dejar constancia de su comparecencia ante el Juzgado número 2 que hoy está de guardia.<br><br>

Por quinta vez, Bárcenas acude a cumplir esta obligación que el pasado 25 de febrero le impuso el magistrado Pablo Ruz para asegurar su presencia ante los tribunales. Además, el juez que investiga el 'caso Gürtel' y la presunta contabilidad B del PP le prohibió salir de España y le obligó a entregar su pasaporte.<br><br>

Ese día Bárcenas declaró al juez que llegó a tener hasta 38 millones en Suiza y entregó una relación con las donaciones del PP de 1999 a 2007 por 33 millones, 23,7 de ellos de procedencia anónima.<br><br>

Imputados ocho empresarios<br><br>

Entre las últimas novedades del 'caso Bárcenas', Ruz imputó ayer a ocho empresarios que aparecen recogidos como donantes del PP en los famosos 'papeles de Bárcenas'. Entre ellos, destacan el presidente de la constructora OHL, Juan Miguel Villar Mir, y el ex presidente de Sacyr Vallehermoso, Luis del Rivero. Están citados para prestar declaración los próximos 27 y 29 de mayo.<br><br>

Los otros empresarios imputados son José Luis Sánchez Domínguez (Grupo Sando), Manuel Contreras Caro (Azvi), Alfonso García Pozuelo (Construcciones Hispánica), Juan Manuel Fernández (Aldesa), José Mayor Oreja (Fomento de Construcciones y Contratas) y Antonio Vilella (Construcciones Rubau).<br><br>

Asimismo, Ruz cita también a declarar, en este caso como testigos, a cargos 'populares' que admitieron haber cobrado dinero reflejado en los 'papeles de Bárcenas', entre los que se encuentra el presidente del Senado, Pío García Escudero, y el ex presidente de Baleares Jaume Matas.<br><br>

Estas nuevas imputaciones se enmarcan en la pieza separada del 'caso Gürtel' en la que se investigan los 'papeles de Bárcenas', que recientemente un informe policial concluyó que los apuntes fueron anotados de su puño y letra.
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