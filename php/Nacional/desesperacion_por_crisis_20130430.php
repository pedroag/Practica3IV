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
  <h3>  <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">La desesperación por la crisis aumenta la violencia que sufren los niños en casa </a></h3>
  <p>La violencia contra los menores en el ámbito familiar está aumentando por las situaciones de tensión y desesperación que se viven en muchos hogares afectados por la crisis económica, según coinciden expertos del ámbito judicial y de organizaciones de defensa de la infancia.<br><br>

Durante la celebración de la jornada 'Crisis económica, menores y justicia', la secretaria general del Consejo General de la Abogacía Española, Victoria Ortega, ha asegurado que "aunque las cifras son orientativas", la violencia contra los menores podría haber crecido un 13,6% en 2012.<br><br>

Precisamente, hace unos días la Fundación ANAR (Ayuda a Niños y Adolescentes en Riesgo) calculaba que 1.778 niños y adolescentes han sido víctimas de algún tipo de violencia grave en España durante 2012 y señalaban este mismo aumento con respecto a 2011.<br><br>

También destacaban que el maltrato físico dentro del entorno familiar es el primer motivo de intervención de los servicios sociales y jurídicos de ANAR. Para añadir que en el 22,5% de los casos el agresor fue el padre, en el 15% la madre y en el 6,3% la violencia la ejercieron ambos progenitores. Si sumamos las cifras, apuntaba el director de programas de ANAR, Benjamín Ballesteros, "nos encontramos con que en un 43,3% de los casos los agresores fueron las personas encargadas de cuidar y velar por la protección del menor. Algo desgarrador".<br><br>

Ahora, nuevos testimonios hablan de este asunto. "En la convivencia diaria, existe una situación de crispación, de desesperación que lamentablemente puede degenerar en situaciones de violencia, en la que los menores son la parte más débil y desprotegida; son situaciones angustiosas que se viven las familias, no estamos hablando de una violencia exclusivamente física, sino de angustia que se traslada a los menores", ha reflexionado la representante de los abogados.<br><br>

Además, ha asegurado que "la austeridad impuesta por las administraciones públicas" está incidiendo en la protección jurisdiccional de los menores. "Todas estas circunstancias como consecuencia de la crisis económica o de la forma de afrontar la crisis con una política de austeridad y de recortes podía afectar a la defensa de los derechos de los niños", ha lamentado la letrada, quien ha recordado que "el tratamiento a los menores en los tribunales debe ser distinto al de adultos, como en la necesidad de apoyo psicológico" y de más tiempo para su asistencia.<br><br>

Desde Unicef, el responsable de Infancia, Gabriel González-Bueno, ha advertido de que "la tensión en los hogares está incidiendo un aumento de la violencia que sufren los niños" y del "coste de futuro de no intervenir en infancia".<br><br>

Los niños viven procesos de desahucio, de separación de padres que tienen dificultades para mantener dos hogares y ven recortada la atención especializada por la reducción de los recursos en el ámbito de la justicia, ha explicado. Ha recordado que el desempleo afecta el doble en los hogares con niños, en concreto, en las familias con menores creció el 120 por ciento entre 2007 y 2010.<br><br>

"Tenemos un problema de pobreza infantil muy intensa", ha opinado el representante de Unicef, quien ha destacado que "la pobreza infantil no depende de la riqueza de las naciones, sino de las políticas que se apliquen".<br><br>

En este sentido, ha lamentado que las ayudas a la infancia "han sido más prescindibles" durante la crisis. "¿Tendrá que ver que los niños no votan?. Además, ha alertado de que en algunos países con crisis económicas muy intensas, "crece, y mucho, la delincuencia juvenil".<br><br>

La portavoz de Save the Children, Yolanda Román, también ha coincidido en que "en contextos familiares donde se viven grandes tensiones, aumenta la violencia contra los niños, no sólo física, sino también psicológica". Carlos Chana, de Cruz Roja, ha insistido en la "brecha social" que está generando la crisis y en la pobreza que afecta a dos millones doscientos mil niños en España.<br><br>

El rostro de los menores que sufren la pobreza, ha dicho el responsable de Cruz Roja, es el de los hijos de parados que han agotado la prestación social y las ayudas familiares, los menores tutelados, los inmigrantes, los niños con discapacidad y los que padecen enfermedades crónicas, cuyos tratamientos no están cubiertos en la sanidad pública.<br><br>

"Se ha generado una brecha social en las familias, que se va a transmitir de generación en generación y que perpetúa la pobreza", ha añadido. La coordinadora de la Red de Niñas y Niños con Discapacidad Cermi, Inés de Araoz, ha vaticinado que los recortes en las ayudas sociales "hará que en el futuro haya niños más discapacitados".
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