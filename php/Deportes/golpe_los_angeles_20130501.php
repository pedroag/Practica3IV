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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Golpe en Los Ángeles</a> </h3>
  <object width="380" height="256" style="margin-right:10px" ><param name="movie" value="http://estaticos.marca.com/multimedia/reproductores/embed/embed.swf"/><param name="allowscriptaccess" value="always"/><param name="flashvars" value="ba=0&cvol=1&bt=1&lg=1&eb=1&vID=DFHSnJalAPb&pcolor=f0f0f0&idioma=0"/><embed src="http://estaticos.marca.com/multimedia/reproductores/embed/embed.swf" type="application/x-shockwave-flash" allowscriptaccess="always" width="320" height="204" flashvars="ba=0&cvol=1&bt=1&lg=1&eb=1&vID=DFHSnJalAPb&pcolor=f0f0f0&idioma=0" ></embed></object>
  <p>Los Memphis Grizzlies asaltaron el Staples Center (103-93) y pusieron el 3-2 a su favor en la eliminatoria frente a unos Los Ángeles Clippers sin su magia habitual, mermados por la lesión Blake Griffin y sin apenas recursos en ataque -más allá de su base Chris Paul- debido a la excelente defensa de su contrincante. Memphis inició la serie con do derrotas y ahora se encuentra a un triunfo de la clasificación.<br><br>
Zach Randolph (25 puntos y 11 rebotes) y Marc Gasol (21 puntos, 8 rebotes, 4 asistencias y 2 tapones) llevaron la iniciativa para Memphis, mientras que por los angelinos destacaron Paul (35 puntos) y Jordan Crawford (15). Griffin, que sufrió un esguince en el tobillo derecho en el entrenamiento del lunes, vio cómo la lesión empeoró durante el transcurso del duelo y sólo jugó 20 minutos.<br><br>
Los Clippers afrontaban por cuarta vez en su historia una eliminatoria a siete partidos con 2-2 en el registro. Las tres veces anteriores cayeron eliminados. El equipo que domina la batalla del rebote ha salido vencedor en cada encuentro de la serie y hoy no fue una excepción (40-42 para Memphis).<br><br>
Intenso y rocoso, el partido vio un colosal inicio de la pareja formada por Paul y Griffin, contestado en cada acción por Tayshaun Prince gracias a las asistencias de un Gasol que vio cómo la defensa local se cerraba sobre él constantemente en un dos contra uno.<br><br>
La ayuda de secundarios como Caron Butler y Tony Allen mantuvo la igualdad en un primer cuarto que finalizó con una ligera renta para los angelinos (28-26) a pesar de sus pérdidas de balón. El protagonismo en ataque lo retomaron Randolph y Crawford en un segundo cuarto que fue un toma y daca constante con permanentes alternancias en el marcador, aunque con las fuertes defensas como nota dominante.<br><br>
Un dos más uno de Gasol -que además arrancó la tercera personal de Griffin- y un triple de Jerryd Bayless dieron 7 de ventaja (42-49) a los de Tennessee poco antes del descanso. El equipo de Lionel Hollins exhibía una imagen de madurez que contrastaba con los nervios que afloraban en unos Clippers que dejaban muy solo a Paul en el aspecto ofensivo. Paul llevaba el timón anotador con 21 puntos para entonces y ninguno de sus compañeros alcanzaba los dobles dígitos.<br><br>
Gasol, con una clase maestra de fundamentos en la zona, y Mike Conley, decisivo al contraataque, aumentaron las dudas en el entorno angelino tras un parcial de 0-11 (52-65), pero los Clippers, a pesar de que Griffin se fue a vestuarios para tratar su tobillo, respiraron cuando el español cometió su cuarta personal a falta de 5:39 para la conclusión del tercer cuarto.<br><br>
En ese momento los de Vinny del Negro comenzaron un intento de remontada que dejó el marcador en 65-73 a falta de 12 minutos. La mala noticia llegó justo entonces, cuando el equipo local comunicaba que Griffin no regresaría al partido. La marea roja del Staples Center, con el actor Billy Crystal a la cabeza, no arrojó la toalla y se volcó con su equipo. Matt Barnes recogió el guante (69-73) y sacó la quinta falta a Gasol con 10:23 por disputar.
Sin embargo Randolph acudió al rescate y con su superioridad bajo los aros mantuvo la ventaja de Memphis, que sólo se vio amenazada por la aportación de Crawford (86-91). La defensa de los Grizzlies cerró de forma magnífica los principales recursos de su rival y un triple de Prince y un tiro a una mano de Gasol pusieron el broche a la victoria visitante.
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
