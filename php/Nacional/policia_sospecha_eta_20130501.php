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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">La Policía sospecha que ETA estaría recibiendo donaciones de simpatizantes </a></h3>
  <p>Las Fuerzas de Seguridad sospechan que ETA podría estar recibiendo donaciones económicas voluntarias procedentes de simpatizantes de su entorno, una fuente de financiación que siempre ha sido secundaria para la banda terrorista, pero que podría seguir vigente en la actualidad, según han informado expertos de la lucha antiterrorista.<br><br>
Estas mismas fuentes diferencian entre estas aportaciones de carácter voluntario y de menor cantidad que las importantes sumas de dinero que reportaba el llamado "impuesto revolucionario". La extorsión, junto al cobro por secuestros ha figurado históricamente como el principal foco de financiación terrorista, pero actualmente no existe ningún elemento para pensar que estas prácticas sigan existiendo, aclaran estas fuentes.<br><br>
Los expertos antiterroristas no obvian que la organización terrorista aún mantiene un remanente de dinero cosechado antes de decretar su alto el fuego "permanente general y verificable" de enero de 2011, que suponía poner fin a la extorsión. No obstante, creen que esa economía debe complementarse de alguna manera y sus indicios apuntan a que estas aportaciones voluntarias estarían jugando un papel destacado actualmente.<br><br>
La vía de la donación no es un fenómeno nuevo y ya en el pasado la banda lo compaginaba con otras formas de financiación. En 2008, entre la documentación encontrada al que fuera jefe de la banda, el fallecido Javier López Peña alias 'Thierry', apareció una de estas cartas en las que ETA se dirigía a sus simpatizantes en un tono muy distinto al que usaba en sus misivas de extorsión.<br><br>
Una de estas cartas solicitando una donación sirvió para juzgar por colaboración con ETA a las hermanas Blanca Rosa y María Isabel Bruño Azpiroz, quienes llegaron a pagar 6.000 euros a la banda. En el informe elaborado al respecto por la Guardia Civil al que tuvo acceso Europa Press se destacaba "la especialidad" de la misiva.<br><br>
Destacaba el Instituto Armado que "es una carta personalizada, siendo diferente al introducir dos párrafos con un mensaje político, agradeciendo expresamente a las acusadas la contribución realizada".<br><br>
En concreto, la banda llegaba a decirles que "tienen las puertas abiertas para tratar tanto sobre la ayuda económica, como cualquier otro tema relacionado con la lucha de liberación de Euskal Herria". "Recibid nuestro cordial saludo, quedamos a la espera de nuevas colaboraciones", zanjaba ETA.<br><br>
Una economía difusa<br><br>
Las finanzas de ETA siempre han sido muy difusas para los investigadores que se topan con obstáculos para conocer la "cifra negra" de las cuentas de la banda. Advierten de la dificultad de conocer con exactitud las aportaciones que realizan sus simpatizantes o el número de cartas de extorsión que remitían en el pasado y aquellas que finalmente eran correspondidas e incluso las cantidades definitivas, dado que en muchos casos se terminaban negociando.<br><br>
No obstante otras fuentes consultadas explicaron que ETA necesita alrededor de medio millón de euros al año para subsistir con las estructuras con las que cuenta en la actualidad, año y medio después de su declaración de cese definitivo de sus actividades.
Atribuían esta capacidad económica de la banda a cuantiosos pagos realizados por algunas grandes empresas antes de que los terroristas declarasen su alto el fuego "general".<br><br>
Sólo uno de los pagos efectuados en los últimos años por una de estas grandes compañías ya supuso hasta el 20 por ciento de lo que necesita ETA para mantenerse durante un año. En el pasado la banda necesitaba al menos cinco millones de euros al año para mantener a todos sus comandos y estructuras.
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