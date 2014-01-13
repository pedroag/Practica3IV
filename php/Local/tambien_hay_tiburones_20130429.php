<?php
session_start();
?>
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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">¿Aquí también hay tiburones?</a></h3>
  <p>Para los niños que visitan el Puerto de Motril por primera vez el día de la visita se presenta como una jornada repleta de emociones, que a buen seguro no olvidarán durante mucho tiempo. Algunos no han podido dormir durante la noche de antes y otros creen que quizás puedan ver algún tiburón al más puro estilo de la película de Steven Spielberg. <br><br>

Durante todo este curso escolar unos 350 escolares de entre 6 y 7 años están acercándose hasta la dársena granadina los martes y jueves con la finalidad de conocer sus instalaciones, a través de actividades ludico-educativas. El turno le toca hoy a un grupo de un colegio de Motril, pero también vienen de otros municipios de la Costa, de la Alpujarra u otras comarcas de la provincia, y de Jaén, cuyo puerto natural sigue siendo el de Motril. <br><br>

Para estos últimos tienen un interés especial, puesto que aparte de que ven menos el mar, supone para ellos un lugar donde pueden ver la utilidad de un producto muy familiar para ellos. "Los centros educativos de la provincia vecina están volcados en que sus niños sepan el destino que se les da al orujo de los olivos", explica Fernando Pérez de la Blanca, monitor de Motrilport, y guía de los pequeños en el itinerario por el puerto motrileño. <br><br>

Tanto para los jienenses como para los granadinos, el objetivo es el mismo. "La idea es que los niños no vivan de espaldas al mar, ya que el Puerto no está dentro de la ciudad" y que sepan de su cercanía, que su proximidad es beneficiosa para su zona y que ejerza una atracción sobre ellos, "como un tentáculo que les haga a ellos mismos a que vuelvan". <br><br>

Pérez de la Blanca les explica a los chavales con un símil fácil de entender que el Puerto de Motril está jugando en primera división y que aunque en esta temporada está entre los puestos de cola, en unos años, con las infraestructuras culminadas, puede estar jugando en la Europa League o incluso en Champions. <br><br>

El monitor quiere transmitir el potencial que tiene la dársena granadina y la trascendencia actual como motor económico de la comarca: "El puerto enriquece a la provincia y a su hinterland natural". Y añade que "no hay dos visitas iguales, dependiendo de la operativa que haya (barcos, grúas, cruceros o ferris …) en los muelles, nos lleva a ver una situación u otra". Los alumnos de primero y segundo de la ESO del Colegio Cardenal Belluga de Motril inician el recorrido en el muelle de Las Azucenas. En ese momento el ferry rumbo a Nador abandona la bocana del Puerto. Los niños despiden a sus pasajeros agitando sus manos, mientras el buque de la naviera Armas responde con una sonora bocina, momento en el que los chiquillos saltan de alegría. <br><br>

Cuando el barco se aleja en el horizonte y aún en el mar queda dibujada su estela, el educador lleva a los niños a la zona logística para comentarles la importancia de la biomasa y el papel que juega el Puerto en la energía verde. Estos conceptos tan complejos son traducidos a los escolares con palabras sencillas y en un lenguaje cargado de metáforas y comparaciones. "Esta madera astillada va a un país cuyo idioma se habla en medio mundo ... ¿sabéis cuál es?". Responden casi al unísono: "El español". "Bueno otro", insiste el profesor. "El castellano", contestan ellos. Finalmente, tiene que ayudarles y les dice que es el inglés y que esa mercancía va a Inglaterra y a otros países de Europa. <br><br>

En otra pila se acumula el orujo, "que es cuando comemos una aceituna y normalmente tiramos el hueso, pues ahora no lo tiramos y con ello se calientan calderas en otros lugares", Pérez de la Blanca no puede impedir que los niños quieran tocar con sus manitas esa carga. <br><br>

El recorrido continúa por el muelle deportivo, allí les llama la atención una bola colgada de una cuerda que el monitor dice que se llama "el péndulo de Foucault". Es hora de comer el bocadillo. Una niña se acerca al educador y le comenta que ya estuvo allí "para ver salir a los Reyes Magos". <br><br>

Cuando aún los más rezagados no han acabado el desayuno, otros ya se han acercado a la baranda a observar los barcos, e incluso hay un grupito que ha visto peces en el agua. Los niños juegan a ver quien visualiza el pez más grande. <br><br>

El monitor nuestra a los escolares los veleros atracados, pero los pequeños quieren subir a uno de ellos: "Todos los niños que vienen quieren subir, aunque sea unos segundos, pues muchos no conocen la sensación de viajar por el mar y para ellos es muy importante". <br><br>

Pérez de la Blanca iba a añadir que también hay otra cuestión que suele ser común a todos los escolares que vienen, pero uno de ellos le interrumpe: "Profe … ¿Aquí hay tiburones?". Y ya tiene preparada su respuesta: "tiburones como el de la película, con grandes colmillos, no hay, aunque sí otros de la misma familia, como el marrajo, la pintarroja o el cazón". <br><br>

La visita concluye en el muelle dique en el que los alumnos comprueban la actividad comercial con la carga o descarga de mercancía, la estiba o desestiba. En esta parte, se está transportando mineral como florita o celestina o la pasta papel "que utilizan en la fábrica de papel para elaborarlo". <br><br>

Es ya hora de volver a casa y los niños en los autobús de regreso no dejan de pensar en la infinidad de experiencias que esa mañana han tenido oportunidad de vivir. Para muchos de ellos ha sido su primera visita al Puerto, pero aseguran que no será la última.
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