<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>El periodico - Local</title>
<link rel = "stylesheet" type = "text/css" href="../style.css" />
</head>

<body>
<aside id="izquierda"> <img src="../img/publi_izq.jpg" width='192' height='800'> </aside>
<aside id="derecha"> <img src="../img/publi_der.jpg" width='192' height='800'> </aside>
<header id="centro"> <img src="../img/publi_arriba.jpg"> </header>
<section id="contenido">
<header>
  <h1>El Periódico</h1>
  <nav> <a href="../index.php">Portada</a> <a href="Local.php">Local</a> <a href="../Nacional/Nacional.php">Nacional</a> <a href="../Internacional/Internacional.php">Internacional</a> <a href="../Deportes/Deportes.php">Deportes</a></nav>
  <h2>Local</h2>
</header>
<section id="lanoticia">
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Una monja granadina crea un juego de mesa sobre la fe</a> </h3>
  <img src="../img/monja_crea_juego_20130501.jpg">
  <p>El juego de mesa creado por una monja natural de Granada que pone a prueba los conocimientos sobre Jesucristo a lo largo de 67 casillas está triunfando en España, donde se han editado 5.000 ejemplares, y también llegará a América, al haberse interesado por él países como México.<br><br>
Según han informado fuentes de Edice, la editorial de la Conferencia Episcopal Española que lo ha editado, a finales de marzo salió a la venta y en abril ha tenido numerosas peticiones de toda España, sobre todo como regalo para las próximas comuniones.
También les han llegado pedidos de este juego -que se vende al precio de 49 euros- de México, por lo que también tienen puestas sus miras en América.<br><br>
El juego, basado en el catecismo "Jesús es el Señor", ha sido creado y diseñado por la delegada de Catequesis de la Diócesis de Cuenca, María Granados, de 35 años y hermana carmelita de la Sagrada Familia de Cuenca, que pretende dar a conocer la doctrina de Cristo de forma más lúdica.<br><br>
A modo de "party", ha explicado Granados (natural de Granada), el juego, denominado "La alegría de la fe", pretende testar los conocimientos sobre Jesucristo a lo largo de 67 casillas, con mímica, juegos, signos, tabú, dibujos y oraciones.<br><br>
El juego está pensado para adultos y niños a partir de 7 u 8 años, para jugar tanto en familia como en grupos, en la escuela o en el contexto de la Catequesis, ya que la dinámica se inspira en el catecismo de la Conferencia Episcopal Española, ha explicado su creadora.<br><br>
Los jugadores participan en equipo, cada uno avanza con su ficha por el tablero y el primero que llega a la casilla 67 gana. Cada casilla es de un color diferente e indica el tipo de prueba y, si se supera, se sigue avanzando hasta llegar a la meta.<br><br>
La monja granadina ha explicado que la idea surgió "por la necesidad de crear algo que nos ayudase a transmitir la fe", aunque ha remarcado que "no sustituye a la Catequesis ni a la clase de religión, es sólo un apoyo".<br><br>
"Al tener colorido, luz y distintas posibilidades, la experiencia es que los niños se lo pasan bien y a la vez aprenden", ha explicado la religiosa, que ha admitido que el juego recoge las cuatro tareas propias del Catequesis: conocer, celebrar, vivir y orar.<br><br>
"Por una manera u otra estos elementos se van entremezclando y la experiencia está siendo muy positiva", ha aseverado Granados.<br><br>
En Cuenca, donde reside la monja, el juego se puso a la venta hace unos días en la tienda del Palacio del Obispado y, de momento, están satisfechos con las ventas, según ha comentado su responsable, que ayer vendió varios en un solo día.<br><br>
Además, dado que el juego se ha hecho muy popular en la ciudad, ya lo han encargado para ponerlo a disposición de los conquenses en algunas librerías de la capital.<br><br>
El juego se presentó hace unas semanas en las Jornadas de Delegados Diocesanos de Enseñanza, Catequesis y Familia, que se celebraron en El Escorial (Madrid).
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
    <li> <a href="un_primero_mayo_20130501.html"> Un Primero de Mayo con más de 162.000 parados </a></li>
    <br>
    <li> <a href="interceptan_siete_inmigrantes_20130430.html"> Interceptan a siete inmigrantes en una embarcación en la costa de Granada</a></li>
    <br>
    <li><a href="plan_movilidad_cinturon_20130501.html"> El Plan de Movilidad llevará varias líneas de bus urbano a los pueblos del Cinturón</a></li>
    <br>
    <li><a href="natalidad_sigue_baja_20130430.html"> La natalidad sigue a la baja con un desplome del 15% en los últimos cuatro años</a></li>
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