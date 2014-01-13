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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')"> Israel retoma los asesinatos selectivos en Gaza tras la guerra del pasado noviembre</a> </h3>
  <p>La fuerza aérea israelí ha matado este martes a un yihadista de alto nivel que participó en los recientes bombardeos en Eilat, al sur de Israel. Según el comunicado del ejército israelí a la prensa, Hitham Ziad Ibrahim Mashal, de 24 años, pertenecía a la yihad mundial y a movimientos salafistas y estaba especializado en la fabricación de armas, sobre todo misiles. Fue alcanzado por un misil israelí mientras conducía su moto esta mañana hacia uno de los campos de entrenamiento en la Franja.<br><br>

Se trata del primer asesinato selectivo de Israel en Gaza desde que terminó la operación Pilar Defensivo en noviembre, que precisamente comenzó tras el asesinato selectivo de Ahmad Jabari, otro líder yihadista de alto calibre en Gaza. El primer ministro israelí, Benjamín Netanyahu, ha asegurado hoy que ésta es la respuesta de Israel a los recientes bombardeos desde Gaza.<br><br>

«Dije que no ignoraríamos esto [los bombardeos], y no toleraremos ningún ataque desde Gaza ni desde el Sinaí», dijo Netanyahu antes de su reunión con el presidente serbio Tomislav Nikolic.<br><br>

De esta forma, los recientes ataques desde Gaza y el ataque selectivo de Israel en la Franja dan definitivamente al traste con la frágil tregua negociada por Egipto tras la operación de noviembre.<br><br>

Enfrentamientos en Cisjordania<br><br>
La respuesta por parte de los colonos al asesinato de Evyatar Borovsky, un vecino del asentamiento de Yitzar, ha sido rápida y violenta. Tras la muerte del hombre de 32 años a manos de un palestino, los colonos han quemado varios campos de cultivo y una propiedad privada perteneciente a palestinos en varios pueblos cercanos al asentamiento. Borovsky fue apuñalado esta mañana por un joven palestino mientras paseaba, tras lo cual el agresor se hizo con la pistola que portaba el colono y disparó a los soldados israelíes que se acercaron al oír los gritos de Borovsky.<br><br>

El palestino ha sido trasladado a un hospital israelí, ya que fue herido durante el tiroteo, para ser interrogado y se desconoce todavía si actuó por cuenta propia o en nombre de algún grupo.<br><br>

La ira de los colonos se cebó también con un autobús escolar palestino que llevaba a varias niñas a un colegio cerca del asentamiento fue atacado con piedras. El conductor tuvo que ser hospitalizado y varias niñas resultaron levemente heridas.<br><br>

Según el diario israelí «Haaretz» el último ataque de este tipo contra un israelí en Cisjordania ocurrió el año pasado, cuando un joven judío resultó herido tras ser apuñalado por un palestino.
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