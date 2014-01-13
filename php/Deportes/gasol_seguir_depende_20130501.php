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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Gasol: 'Seguir en los Lakers no depende de mí'</a> </h3>
  <img src="../img/gasol_seguir_depende_20130501.jpg" width="460" >
  <p>El ala-pívot español Pau Gasol reiteró este martes que su deseo es seguir con Los Angeles Lakers, pero es consciente de que su continuidad la próxima temporada depende de muchos factores, incluidos los económicos, sobre los que no tiene control, y entiende la situación.<br><br>
"En principio mi futuro no depende sólo del apartado deportivo sino de otros factores, principalmente el económico, con la entrada en vigor del nuevo impuesto de lujo que el equipo tiene que considerar de forma seria", declaró Gasol durante la entrevista con los periodistas de cierre de temporada."Tener que pagar 90 millones de dólares de impuesto de lujo es mucho dinero y aprecio los esfuerzos que el equipo hace por superar la situación", dijo.<br><br>
Gasol, que antes de hablar con los periodistas se entrevisto en privado con el gerente general de los Lakers, Mitch Kupchak, dijo que aprecia el hecho de que la franquicia haya hecho todo lo posible para que él siguiese con el equipo.<br><br>
"Veremos lo que sucede, si el equipo puede hacer los movimientos que le permita evitar el impuesto de lujo y que yo pueda seguir con ellos", señaló Gasol. "No tengo ningún tipo de presión. Estoy tranquilo. He tenido mucha suerte como profesional. Jugué seis años y medio con los Grizzlies de Memphis y ahora lo he hecho con los Lakers para ganar dos anillos de campeón, algo que me hace sentir afortunado", agregó.
El jugador de Sant Boi dijo que lo que sí tiene muy claro es volver la próxima temporada en plenitud de forma para poder competir y disfrutar al máximo. "Ahora es mi gran objetivo. Estar tranquilo, centrarme en los proyectos que tengo que realizar y, sobre todo, recuperarme de las lesiones que me han afectado durante la temporada", comentó Gasol. "Es cierto que lo sucedido los pasados días, con el último partido ante los Spurs, no ha sido fácil, pero lo que no controlo, ni depende de mi ni es algo que me preocupe", señaló.<br><br>
Gasol dijo sentirse afortunado de haber recibido el apoyo y el cariño de todos los aficionados de los Lakers desde que llegó al equipo, y la ovación que le tributaron al concluir el partido el pasado domingo ante los Spurs será algo que nunca olvidará porque era la expresión que reflejaba el reconocimiento a su esfuerzo y entrega.<br><br>
También se mostró agradecido y afortunado de tener una excelente relación con su compañero, el escolta Kobe Bryant, cuyo apoyo ha sido muy importante dentro del equipo. "Me siento feliz y orgulloso de que a través de estos años hayamos podido ser no sólo excelentes compañeros, sino también buenos amigos", admitió Gasol. "Los dos nos comunicamos muchísimo", añadió.<br><br>
El internacional español dijo que si de algo se sentía especialmente orgulloso desde que llegó a los Lakers es de haber sido siempre un jugador de equipo, de ahí que siempre ha hecho lo que podía ser mejor para los Lakers. "Por eso el partido del domingo fue difícil para mí al ver que quedábamos eliminados y no podíamos seguir en la competición y que tal vez pudiese ser el último con el equipo", señaló Gasol.<br><br>
El Europeo, una incógnita<br><br>
En cuanto a sus planes futuros, Gasol dijo que se quedará varias semanas más en Estados Unidos para hacerse distintas pruebas médicas y ver en qué condición tiene los pies y las rodillas. Y, a partir de ahí, también valorar el procedimiento que sea mejor para su recuperación completa, algo de lo que dependerá en gran medida si al final va a participar este verano con la selección de España en el Eurobasket.<br><br>
"No tengo nada decidido porque todo dependerá de las pruebas médicas. En función de esos resultados veremos a ver qué es lo mejor para mi recuperación completa", señaló Gasol. "Dependiendo de estos resultados, entonces valoraré también la posibilidad de jugar con la selección No antes", explicó.
Gasol adelantó que en las próximas semanas y meses trabajará también en varios proyectos personales que tiene en mente y que quiere ir estableciendo. "Uno de ellos será la fundación familiar que vamos a establecer junto a mi hermano Marc y que me hace una gran ilusión", destacó Gasol. "También tengo ya dos años en un libro con material fotográfico y de contenido en el que quiero mostrar el lado más personal que no se me conoce tanto", comentó.
Gasol dijo que el libro tiene el objetivo de servir de "inspiración", algo que le hace mucha ilusión de que pronto pueda estar disponible al gran público. "Creo que será muy positivo que culmine también ese proyecto de más de dos años de trabajo y por supuesto mientras que Marc esté en la competición de la fase final me mantendré aquí para apoyarle", subrayo Gasol
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
