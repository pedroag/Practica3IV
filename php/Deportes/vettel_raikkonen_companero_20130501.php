<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>El periodico - Deportes</title>
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
  <h2>Deportes</h2>
</header>
<section id="lanoticia">
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Vettel "¿Raikkonen como compañero? Sin problemas" </a></h3>
  <p>Mark Webber, el piloto al que le tergiversan sus palabras, como a tantos deportistas... maldita prensa... termina contrato este año en Red Bull. Y, a pesar de que podría renovar, también se apunta desde su propia escudería a la posibilidad de que no siguiera. El propio Dieter Mateschiz fue quien habló de Kimi Raikkonen. El finlandés de Lotus ya fue patrocinado por Red Bull en su aventura de los rallys.<br><br> 

Pero para fichar a Kimi, en la escudería energética tienen que preguntar al jefe. Sí, Sebastian Vettel ya ha respondido, al menos a los compañeros de Sport Bild. Y bueno, pues le parece bien.  "No me importa quien sea mi compañero de equipo, si quieres ganar el título tienes que vencerlos a todos. Pero si Raikkonen fuera mi compañero, pues bien. No tenemos ningún problema y somos lo suficientemente maduros como para hacer frente a situaciones difíciles. Me llevo bien con él, no tengo ningún problema”, sostiene el tricampeón del mundo.<br><br>

Mientras su gran amigo en Red Bull, Helmut Marko también opina sobre lo que puede pasar con el compañero del alemán el próximo año: “Ahora mismo tanto Vettel como Webber son dos perros alfa, pero ellos trabajan juntos de forma constructiva, y eso es suficiente. Mientras siga siendo así, no tienen de que preocuparse. Nunca han sido grandes amigos, pero tienen una relación de trabajo que todavía funciona”. Es decir apunta a la posibilidad de que siga Webber.<br><br>

Pero en cuanto a las alternativas, mira a la cantera. "También están los pilotos de Toro Rosso, ahora mismo Ricciardo es mejor porque Vergne es muy impulsivo y tendría problemas con los neumáticos”, explica Marko.<br><br>

Y uno de los pilotos del equipo B se anima a ofrecerse, el australiano Daniel Ricciardo espera ocupar el puesto de Webber: “Creo que el séptimo de Shanghai, por ejemplo, no me ha hecho daño precisamente, pero sé que tengo que hacer más si quiero tener mi oportunidad de sentarme en un Red Bull. Hay presión, claro, pero yo lo veo como una motivación, no como una carga, mi objetivo es conseguirlo se que se espera mucho de mi, así que dependo de mí mismo para conseguir los resultados que deseo”.<br><br>

Pues eso, que quiere, como en su día quiso Alguersuari con más méritos y ahora está donde no debería estar. Mientras todo esto sucede, Christian Horner, el jefe del equipo, al menos sobre el papel, explica en una entrevista en Autosport.com que quien toma las decisiones es él. Y sobre Marko dice: "Helmut tiene responsabilidades en otros aspectos como por ejemplo con el programa de los jóvenes pilotos, pero no tiene la responsabilidad operativa en la forma en que funcionamos como equipo de carreras". Pues eso... 
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
    <li> <a href="nadal_territorio_federer_20130430.html"> Nadal, en territorio Federer.</a></li>
    <br>
    <li> <a href="Karlovic_sufre_derrame_20130501.html"> Karlovic sufre un derrame cerebral</a></li>
    <br>
    <li><a href="vettel_raikkonen_compañero_20130501.html"> Vettel "¿Raikkonen de compañero? Sin problemas"</a></li>
    <br>
    <li><a href="rato_epica_20130501.html"> Un rato de épica no basta </a></li>
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
