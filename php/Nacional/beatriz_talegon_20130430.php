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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Talegón no descarta presentarse a las primarias y pide abrir ahora el debate </a></h3>
  <img src="../img/beatriz_talegon_20130501.jpg">
  <p>La combativa joven del PSOE que cantó las cuarenta a los líderes socialistas europeos, Beatriz Talegón, no descarta presentarse a las primarias. La secretaria general de la Unión Internacional de Jóvenes Socialistas cree que es el momento de abrir el debate interno y anima a "dar el paso sin miedo a todo el que quiera cambiar la situación para bien".<br><br>

"Claro que me lo piden y me lo dicen, y una se lo toma con humildad, como un cumplido y algo bonito, y ¿por qué no?, claro que sí, ojalá que todos podamos dar el paso y que luego nos voten entre todos y que sea una fiesta de democracia y elija la mayoría", afirma Talegón, en una entrevista con Efe, donde asegura que si se presentara el diputado Eduardo Madina sería una "maravilla".<br><br>

Considerada la segunda joven promesa mejor valorada entre los votantes del PSOE -por detrás de Madina- según un reciente sondeo, Talegón explica que no cree en "líderes, sino en proyectos, ideas, equipos y compromisos".<br><br>

En un momento en el que voces como Patxi López o José Bono han señalado que el partido no puede pensar ahora en debates internos sino en los seis millones de parados, Talegón defiende que sí es "momento de debatir sobre primarias dentro del partido, porque ese debate se está exigiendo", y apuesta por la fórmula de que "un militante tenga un voto y vote directamente", tanto para elegir al candidato a la presidencia del Gobierno, como a los secretarios generales del PSOE y sus federaciones.<br><br>

Nacida en Madrid hace 29 años, Talegón dejó boquiabiertos con su rapapolvo a muchos de los asistentes al Consejo de la Internacional Socialista que se celebró el pasado febrero en un hotel de cinco estrellas en Cascais (Portugal), cuando censuró que reuniones como esa se celebren "en hoteles de cinco estrellas" y que los delegados lleguen "en coches de lujo".<br><br>


Partidaria de un Estado federal y republicana porque cree en la "igualdad ante la ley", opina que la Monarquía es una "institución arcaica, que ha hecho su función en la historia de nuestro país y que en su momento tuvo su sentido". "Ahora mismo ya tenemos que estar hablando de un proceso de República", propone, y avisa de que "no hay que tener tanto miedo al debate y a preguntar".<br><br>

Entusiasta de la democracia, de la apertura de los partidos y de la conexión con los problemas reales de la sociedad, Talegón cree que es preciso que el PSOE envíe un "mensaje de unidad", de "echar una mano" al Gobierno y de "decir que para tratar de solucionar los problemas de los ciudadanos vamos todos a una, a llegar a acuerdos, consensos y soluciones de manera conjunta".<br><br>

No obstante, arremete contra el presidente, Mariano Rajoy, por haber pedido paciencia a los españoles y le contesta: "que me explique este señor por qué hay que tener paciencia cuando en su mano está dar una vuelta a lo que está pasando y por qué nos pide paciencia cuando se están gastando cientos de miles de euros en confeti".<br><br>

"Paciencia ya estamos teniendo mucha y estamos un poco hartos de que este señor esté tan tranquilo en su sillón, como la canción de Celtas de Cortos", apunta. Y añade: "él está muy tranquilo, el 'majete', pero me parece que el tiempo no es para pedir paciencia, sino para que de una vez frene y le explique a la gente por qué está haciendo esto cuando tendría opciones de establecer una tasa a las transacciones financieras, por ejemplo".
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