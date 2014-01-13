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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">145 detenidos en Cataluña por defraudar 7,8 millones de euros a la Seguridad Social  </a></h3>
  <p>La Policía Nacional ha detenido en Cataluña a 145 personas y ha imputado a otras 275 acusadas de defraudar 7,8 millones de euros creando empresas ficticias para hacer falsos contratos de trabajo para cobrar después fraudulentamente la prestación de desempleo. En una investigación que ha durado varios meses, los agentes han puesto al descubierto una trama que había creado empresas relacionadas con la construcción, servicios de limpieza y jardinería con la única intención de tramitar altas de falsos trabajadores para que pudieran percibir prestaciones por desempleo o subsidios.<br><br>

Según ha informado hoy la Policía Nacional, entre los detenidos figuran tanto los administradores de las empresas mercantiles ficticias como algunas de las personas que eran falsos empleados que habían pagado para ser contratados y así poder optar después a cobrar fraudulentamente el subsidio de desempleo.<br><br>

Las investigaciones se iniciaron hace un tiempo, cuando el Servicio de Prevención de Delitos Económicos de la Tesorería General de la Seguridad Social y de la Inspección de Trabajo y Seguridad Social de Cataluña detectaron 19 empresas inscritas en el Régimen General de la Seguridad Social carentes de actividad laboral real y efectiva.<br><br>

Tras analizar la documentación de estas empresas y efectuar varios registros en ellas, los agentes pudieron comprobar que estas compañías, dedicadas supuestamente a trabajos de construcción, servicios de limpieza y jardinería, se habían creado con la única intención de defraudar al servicio público de empleo. Según la policía, únicamente dos de las 19 empresas investigadas habían tenido actividad real, aunque también habían sido utilizadas por sus administradores ilícitamente para hacer contrataciones falsas.<br><br>

Además del fraude en el cobro irregular de los subsidios, las empresas tampoco pagaban las cuotas de seguros sociales de los empleados que daban de alta. Con la información recopilada en las empresas, los agentes solicitaron al servicio público de empleo todos los expedientes de paro de los trabajadores que presuntamente habían simulado una relación contractual con las firmas investigadas. Así, descubrieron que la mayoría de estos contratos correspondían a personas extranjeras que, en muchos casos, además de obtener un beneficio económico percibiendo de forma irregular un subsidio, también pretendían regularizar su situación en España.<br><br>

Según la policía, la cantidad defraudada hasta el momento asciende a 7.806.708 de euros, 4.821.246 de ellos por impagos a la Tesorería de la Seguridad Social, y 2.985.462 a subsidios percibidos ilícitamente del servicio público de empleo. La investigación, que aún no ha finalizado, está estudiando todavía una parte de los expedientes de desempleo y las certificaciones individualizadas de lo cobrado indebidamente por cada uno de los falsos trabajadores, por lo que el montante del fraude podría aumentar.
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
    <li> <a href="../Internacional/nadal_territorio_federer_20130430.html"> Nadal, en territorio Federer.</a></li>
    <br>
    <li> Grecia nacionalizará el tercer mayor banco privado del país, el Eurobank, después de que éste reconociera que es incapaz de captar el suficiente capital en el mercado privado para mantenerse como una entidad solvente, según Efe.</li>
    <br>
    <li>Tres soldados de la OTAN han fallecido en el sur de Afganistán por la explosión de un artefacto. Formaban parte de la Fuerza Internacional de Asistencia a la Seguridad (ISAF), que no ha revelado su identidad o nacionalidad ni la ubicación exacta del incidente, según Efe.</li>
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