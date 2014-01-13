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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">El Tribunal de Derechos Humanos ve «ilegal» la prisión de Timoshenko </a></h3>
  <img src="../img/tribunal_derechos_ilegal_20130430.jpg" width="450">
  <p>El Tribunal de Derechos Humanos de Estrasburgo decidió ayer fallar a favor del recurso presentado el año pasado por los abogados de la ex primera ministra ucraniana, Julia Timoshenko, en prisión desde el 5 de agosto de 2011. La Corte europea ha considerado «arbitraria e ilegal» la detención preventiva de Timoshenko antes de ser condenada a siete años de reclusión. En la sentencia se hace referencia a la violación de la Convención Europea de Derechos Humanos por parte de la Justicia ucraniana.<br><br>

Serguéi Vlásenko, el abogado de la 'Dama Naranja', interpreta que la resolución de Estrasburgo obliga a la puesta en libertad «inmediata» de su cliente. El ministro de Justicia ucraniano, Alexánder Lavrinóvich, opina lo contrario: «la constatación de la violación del derecho a la libertad individual no puede conllevar la liberación de una persona que cumple una condena en virtud de una decisión judicial». El Ministerio de Justicia se propone estudiar el fallo en un plazo de tres meses para determinar si se interpone o no un recurso. Pero los partidarios de Timoshenko recuerdan que el pasado mes de febrero, durante la cumbre UE-Ucrania, el presidente Víctor Yanukóvich se comprometió en Bruselas a acatar las decisiones de Estrasburgo.<br><br>

Timoshenko, que lideró con Víctor Yúshenko la Revolución Naranja en 2004, fue condenada en 2011 a siete años de cárcel por «abuso de poder». Su culpa consistió en firmar con Rusia un acuerdo sobre las tarifas de gas que Yanukóvich y sus partidarios consideran lesivo para los intereses del país. Pero la oposición y la Comisión Europea creen que tal condena encierra motivos exclusivamente políticos. Según Vlásenko, «Yanukóvich se propone mantenerla en prisión para eliminar a su principal adversario en el terreno político».<br><br>

Indulto denegado<br><br>

A la ex primera ministra, que padece serios problemas de salud, le espera además un proceso por fraude fiscal y se investiga su posible implicación en el asesinato de un diputado en 1996, delito que podría acarrearle la cadena perpetua. A petición de un grupo de diputados, fue remitida a Yanukóvich a mediados de mes una solicitud de indulto. La semana pasada, la comisión presidencial que lo tramita se pronunció en contra por considerarlo «prematuro», ya que hay causas contra ella en curso.<br><br>

Bruselas ha urgido a Kiev a acabar con la 'justicia selectiva' como condición para que pueda avanzar la integración del país eslavo en la Unión Europea. Ambas partes cerraron a finales de 2011 la negociación de su acuerdo de cooperación política y económica, pero su firma lleva paralizada desde entonces a causa de la persecución que sufre Timoshenko.
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