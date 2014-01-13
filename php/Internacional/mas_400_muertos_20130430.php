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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Más de 400 muertos y 149 desaparecidos por el derrumbe de un edificio en Bangladesh </a></h3>
  <p>El hallazgo de otros 17 cadáveres en las últimas horas entre los escombros a que ha quedado reducido el edificio Rana Plaza en las inmediaciones de Dacca ha elevado el número de víctimas en la tragedia por encima de los 400 hasta los 405 muertos, mientras continúan las labores de búsqueda por octavo día consecutivo. Según informa este miércoles el diario local 'Daily Star', en los dos últimos días los equipos de rescate no han encontrado con vida a ninguna persona, por lo que el número de supervivientes tras el derrumbe del edificio de nueve plantas se mantiene 2.437.<br><br>

Además, según el general Chowdhury Hasan Suhrawardy, de la Novena División de Infantería, hay 149 personas que siguen desaparecidas bajo los escombros, por lo que se espera que el balance de muertos siga aumentando. La oficina de control del Distrito de Dacca ha realizado la lista de desaparecidos en base a la información ofrecida por sus familiares y amigos. Los equipos de rescate no cuentan con encontrar nuevos supervivientes entre la montaña de escombros a que quedó reducido hace justo una semana el edificio, que albergaba cinco fábricas textiles así como varias tiendas y otros negocios.<br><br>

Desde el domingo, se está empleando material pesado como grúas para penetrar entre los escombros y proceder a su retirada así como perros adiestrados en la búsqueda de personas. "Podría llevar otros doce o quince días retirar los escombres si se hace un esfuerzo concertado", ha explicado al diario el teniente coronel Moin Uddin, del Tercer Batallón de Ingenieros. Según este responsable, no se está procediendo a "una demolición masiva ya que hay cuerpos en distintos lugares y estamos intentando recuperarlos intactos".<br><br>

Los escombros del Rana Plaza, cuyo propietario ha sido detenido en relación con lo ocurrido, están siendo trasladados en camiones y depositados en un vertedero próximo a la comisaría de Savar. Por ahora se han retirado alrededor de 350 toneladas de hormigón, pero el Ejército estima que en total hay unas 9.000.
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

