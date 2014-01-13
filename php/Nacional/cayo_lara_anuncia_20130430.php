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
  <h3><a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Cayo Lara anuncia un plan para crear tres millones de puestos de trabajo </a></h3>
  <p>"Es posible crear empleo". Con esta frase, el coordinador federal de IU, Cayo Lara, ha anunciado en Murcia que el próximo miércoles su formación política presentará en el Congreso de los Diputados un plan alternativo de empleo para generar más de tres millones de puestos de trabajo.<br><br>

Lara ha estado en la manifestación del Primero de Mayo de en Murcia, tras participar en el último tramo de la II Marcha contra el Paro, la Precariedad y los Recortes, que partió el pasado día 27 desde dos municipios de la región para confluir esta mañana en la capital, y desde donde ha animado a todos los trabajadores a movilizarse en iniciativas similares para defender sus derechos.<br><br>

El dirigente de IU ha afirmado que "se pueden crear más de tres millones de empleos en España" y que en ese sentido está orientado el citado plan, del que no ha querido dar más datos y sólo ha dicho que se tratan de medidas económicas destinadas a crear empleo.<br><br>

"El PP no crea empleo porque quiere un ejército de parados pobres", ha denunciado Lara, quien ha agregado que el Gobierno central apoya las premisas de la patronal COE, de reducir los salarios de los trabajadores entre un 20 y un 30 por ciento.<br><br>

Ha reiterado que su partido también pedirá la dimisión del Ejecutivo de Mariano Rajoy y la convocatoria de elecciones anticipadas porque "si no cumple con su promesa de crear empleo, no tiene autoridad moral ni democrática para seguir".<br><br>

Lara ha acusado el Gobierno de "arruinar a miles de familias", y ha indicado que no espera nada de él, al tiempo que ha afirmado que "esta situación no se puede permitir", por lo que ha hecho un llamamiento a "no resignarse, a no dejarse quitar la dignidad".
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