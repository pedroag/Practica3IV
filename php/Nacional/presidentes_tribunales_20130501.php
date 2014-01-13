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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Presidentes de los tribunales superiores también cuestionan la reforma del CGPJ </a></h3>
  <p>Los presidentes de los Tribunales Superiores de Justicia de toda España han cuestionado la reforma del Consejo General del Poder Judicial (CGPJ) proyectada por el Gobierno al considerar "difícilmente compatible" el ejercicio del cargo de vocal con su función jurisdiccional o el desempeño de su profesión. Advierten de que el fin de su dedicación exclusiva puede incidir negativamente en la credibilidad de la institución y en la independencia e imparcialidad de los consejeros.<br><br>

En la Declaración Institucional de los Presidentes de Tribunales Superiores de Justicia, suscrita el pasado 24 de abril en Cáceres, hacen un balance de las principales reformas legislativas puestas en marcha por el ministro Alberto Ruiz-Gallardón y aportan soluciones a los problemas de la Justicia.<br><br>

En cuanto al proyecto de ley que reforma el CGPJ, que la próxima semana será aprobado por el Congreso, los firmantes destacan que, al margen de las discrepancias en torno al sistema de elección de los vocales -que se entrega a las fuerzas parlamentarias y no a los jueces-, lo "prevalente" es potenciar y preservar la independencia en el ejercicio de la potestad jurisdiccional y que los consejeros reúnan un "perfil de excelencia" con independencia a su categoría. "Lo decisivo no es quien gobierne, sino cómo se gobierne", dicen.<br><br>

"Un mismo órgano no puede ser a la vez sujeto y objeto de la misma garantía de independencia", recogen en la declaración, recogida por Europa Press, para advertir de que la creación de vocales 'a tiempo parcial' puede incidir negativamente en la credibilidad de este órgano constitucional al suscitarse dudas sobre la independencia e imparcialidad de los consejeros ya que "son funciones difícilmente compatibles".<br><br>

Para los máximos responsables de los Tribunales Superiores de Justicia, los sistemas de organización y medición para determinar la carga de trabajo deben ser aprobados "exclusivamente" por el Consejo del Poder Judicial, sin perjuicio de que el Ministerio o las comunidades puedan participar en su elaboración.<br><br>

Reforma 'precipitada y sesgada'<br><br>

Respecto a la nueva demarcación judicial, los presidentes de los TSJ destacan que una reforma de tal calado no debe hacerse de forma "precipitada y sesgada". "La referencia a tribunales de instancia supondría la desaparición de los partidos judiciales, con los consiguientes problemas sociales y políticos derivados en las poblaciones afectadas, aparte de la infrautilización de muchos de los actuales y modernos edificios judiciales", afirman.<br><br>

En todo caso, apuestan por crear tribunales de base en las cabeceras de los actuales partidos judiciales que soporten un número significativo de asuntos y ayuden a descargar de litigios de menor entidad a los tribunales de instancia encargados de asuntos más complejos. "No se debe renunciar a ese primer escalón de la pirámide judicial por cuanto supone la cercanía de la justicia a los ciudadanos", añaden.
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