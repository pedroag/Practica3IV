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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Malestar en Sudáfrica por la aparición de Mandela en TV con la cúpula del gobernante CNA </a></h3>
  <p>Si el presidente de Sudáfrica, Jacob Zuma, quería transmitir tranquilidad a los sudafricanos mostrando imágenes Nelson Mandela, ingresado recientemente de urgencia en el hospital, sin duda se equivocó. Si simplemente quería salir en la foto, tampoco obtuvo el efecto deseado.<br><br>

La televisión pública SABC emitió este lunes las imágenes del expresidente de Sudáfrica junto a Zuma y la cúpula del gubernamental Congreso Nacional Africano (CNA) en su residencia de Houghton (Johannesburgo), donde permanece desde que fuera dado de alta a principios del mes de abril.<br><br>

En las imágenes, las primeras desde que Hillary Clinton le visitase en agosto de 2012, se puede contemplar a un Nelson Mandela inmóvil, postrado en un sofá, moviendo los ojos hacia los lados tratando de comprender lo que sucede a su alrededor.<br><br>

Junto a él, sonriente, Jacob Zuma deposita su mano sobre la del expresidente Mandela. Miembros del gabinete toman fotografías del premio Novel de la Paz, molesto por los flashes de las cámaras. A su salida de la residencia, Zuma aseguró a la SABC que Mandela se encuentra «bien» y «estable». «Hemos charlado y nos hemos dado la mano», afirma el presidente carraspeando.<br><br>

Los medios de comunicación y los ciudadanos en las redes sociales han acogido como un gesto de mal gusto la exposición pública de un anciano, su héroe nacional, que parece asomarse al abismo de la muerte.<br><br>

Vídeo «invasivo»
«¿Quién es el idiota que le ha hecho una foto a Mandela con flash, no saben que daña los ojos?», decía en Twitter este martes la periodista Ranjeni Munusamy.<br><br>

«Después de todo lo que ha hecho por nosotros, le tratamos así. Como un animal de en el Zoo. Vergonzoso». «Tras meses atacando a los medios por no respetar su privacidad, el CNA saca un vídeo invasivo de un Mandela claramente enfermo», comentaban los ciudadanos en las redes sociales. «Tienen que dejar de decir que Mandela está bien. No hay más que mirarle». «Mandela no está bien; el Gobierno tiene la cara de mentirnos en nuestras narices».<br><br>

El CNA defendió en un comunicado la visita de Zuma, asegurando que es una forma de honrar a los mayores al tiempo que permite informar a los ciudadanos del estado de Mandela. «Es una lástima que los medios de comunicación recojan comentarios de usuarios de las redes sociales y los coloquen como una expresión del sentir de la mayoría de los ciudadanos», afirmó el CNA en la nota.<br><br>

Nelson Mandela, de 94 años de edad, fue ingresado en marzo por tercera vez consecutiva en cuatro meses. Desde su salida del hospital, se han propagado rumores de que el expresidente ha acudido al hospital en ocasiones posteriores y que podría fallecer en los próximos meses.<br><br>

La debilidad del expresidente ha desatado también las luchas internas en la familia por su herencia y el control de las sociedades que gestionan su legado.
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