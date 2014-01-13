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
  <h3> <a onmouseover="window.open('../relacionadas.html','Otras noticias','width=200,height=350')">Bankia se dispara absurdamente en Bolsa desde su nuevo precio de referencia </a></h3>
  <p>Las acciones de Bankia continúan desafiando toda lógica. Los títulos se ajustaron al inicio de este martes a 1,38 euros por acción para tomar en cuenta la ampliación de capital dineraria de 10.700 millones que se acaba de poner en marcha. Sin embargo, las acciones se han disparado hasta un 700% hasta el punto de que, contando los títulos nuevos a emitir, Bankia se sitúa como el primer banco de la zona euro por valor en Bolsa, como han recogido las clasificaciones de la agencia especializada Bloomberg. Al final, han cerrado con un repunte del 190% y este miércoles abrirán en 4,00 euros. En realidad, para quienes eran accionistas el lunes, el desplome en paralelo de los derechos de la ampliación de capital les deja en una peor posición que la que tenían ayer, pues la suma de la acción más los derechos da al cierre de hoy 5,24 euros, frente a los 11,30 euros de la víspera. Sin embargo, quienes hayan comprado en la apertura de la sesión pueden haber logrado jugosas ganancias. <br><br>

Tras cerrar el lunes en 11,30 euros por título, cada acción de Bankia se segregó en dos: de un lado, la propia acción y, de otro, el derecho de suscripción preferente de la ampliación de capital a través de la que se emitirán 7.910,3 millones de acciones a un precio de 1,35266266 euros por título. Las acciones de Bankia se ajustaron con una referencia de 1,3777 euros por título, o 1,378 euros al redondear, mientras que los derechos de suscripción quedaron teóricamente valorados en 9,92 euros.
Este martes, las acciones han empezado cotizando a 1,61 euros, un precio alto, pero no demasiado alejado de la nueva referencia. Pero a medida que ha transcurrido la mañana, las referencias se han perdido y los pocos inversores que han comprado parecían fijarse más en el precio del lunes e interpretar que la acción estaba cayendo.<br><br>

El problema es que pagar las acciones a 9 euros, tal y como han cotizado durante el mediodía, supone valorar la entidad (tras las ampliaciones en curso) en unos 100.000 millones de euros, es decir, tanto como el Santander y el BBVA juntos, ya que el banco va a tener en el plazo de un mes unos 11.000 millones de acciones. Bloomberg, en su clasificación, ha tomado en cuenta solo las acciones que se emitirán en la ampliación dineraria. En realidad, ahora solo cotiza en Bolsa un 0,01% del futuro capital de Bankia. eso provoca una enorme distorsión y la referencia de valoración de la entidad que da no es en absoluto fiable. Luego, la cotización se ha ido desinflando hasta cerrar a 4 euros por título, que sigue siendo un precio disparatadamente alto.<br><br>

Por su parte, los derechos para acudir a la ampliación de capital de Bankia de 10.700 millones de euros se han desplomado hasta un 90% esta mañana en su primer día de negociación en el mercado. Al cierre se han quedado en 1,24 euros, lo que supone un recorte del 87,50%. Tras quedar fijados el lunes en 9,92 euros, su precio ha bajado con tanta fuerza ante el nulo interés por acudir a la operación de los accionistas privados y minoritarios. Estos acumulan unas pérdidas superiores al 96% si acudieron a la salida a Bolsa del banco en julio de 2011. Incluso el precio actual de los derechos es excesivo y lo normal es que su valor tienda a cero.<br><br>

Para quienes fueran accionistas ayer, han pasado a tener una acción que valía 11,30 euros al cierre, a tener una acción y un derecho que suman 5,24 euros, lo que implica una caída del 53,6%. Pero la subida de la acción desde los 1,38 euros de referencia o desde los 1,61 a que ha cotizado a la apertura carece de lógica económica.<br><br>

Eso sí, lo que no tiene ninguna lógica es la correlación entre ambos precios. Comprar acciones vía derechos de suscripción es mucho más barato que comprarlas en Bolsa, aunque ninguna de las dos opciones es interesante ahora. Cada derecho permite suscribir 397 acciones a un precio de 1,3526 euros. Es decir, que quien quiera entrar vía derechos debería pagar unos 538 euros por esas acciones. Ese mismo paquete de acciones, al precio de cierre en el mercado, se está pagando en 1.588 EUROS. El problema es que cuando se reciban las acciones de la ampliación, lo previsible es que los títulos se desplomen hasta el entorno de un euro o por debajo de esa cifra. La propia Comisión Nacional del Mercado de Valores ha alertado del riesgo que se corre. Y aun así, el mercado sigue valorando de forma absurda las acciones de la entidad.
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
  <p> Edicción: Pedro Alcalá Galiano | <a href="mailto:pedroag@correo.ugr.es">Contacto </a> | <a href="ComoSeHizo.pdf"> Cómo se hizo </a> </p>
</footer>
</body>
</html>
