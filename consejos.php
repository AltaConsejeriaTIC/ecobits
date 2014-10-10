<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Index2</title>
    <link href="style/css/bootstrap.css" rel="stylesheet">
    <link href="style/css/carrusel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/css/general.css">
    
</head>
<body>

  <?php
  require_once "comun/menu.php";
  require_once "comun/template.php";
  ?>

<!--contenido pagina-->


<div class="container" data-contenido="page" id="contenido">
<article>

<h2>CONSEJOS PARA CUIDAR EL MEDIO AMBIENTE</h2>
<br>
<ul>
	<li>Antes de comprar un producto pregúntate si realmente lo necesitas. Cualquier consumo innecesario es en esencia antiecológico.</li>
	<li>Antes de tirar cualquier cosa a la basura, piensa si se puede reutilizar, reciclar o reparar, o si puede ser útil para otra persona.</li>
	<li>Evita las latas de bebidas, vale más el envase que su contenido y apenas se recuperan. La energía necesaria para producir y transportar una lata equivale a la mitad del bote lleno de petróleo.</li>
	<li>La energía que producen las pilas es más de 600 veces más cara que la de la red. Conecta los aparatos a la red siempre que esto sea posible. Si te es imprescindible usar pilas (nunca tires las usadas a la basura), procura que sean recargables.</li>
	<li>Desconecta los aparatos eléctricos de la red cuando no están funcionando. Algunos aparatos (como televisores) siguen gastando hasta un 33% de la energía.</li>
	<li>Prescinde de los electrodomésticos innecesarios como cepillos de dientes, abrelatas, cuchillos eléctricos, etc. Ten encuenta los criterios de ahorro energético al comprar nuevos frigoríficos, lavadoras, etc.</li>
	<li>Las bombillas de bajo consumo son más caras que las normales, pero duran hasta 8 veces más y consumen la quinta parte de energía para dar la misma cantidad de luz, con lo cual se termina ahorrando energía y dinero.</li>
	<li>Evita los aerosoles. Contienen CFCs, causantes de la destrucción de la capa de ozono, u otros gases que también contribuyen al efecto invernadero. Los pulverizadores son una buena alternativa y son recargables.</li>
	<li>La gran mayoría de los productos de limpieza que se anuncian no sólo son innecesarios sino también muy nocivos para el medio ambiente. Casi toda la casa puede quedar perfectamente limpia con jabón, bicarbonato, vinagre y limón.</li>
	<li>Los ambientadores no eliminan los malos olores sino que desprenden otros más fuertes que nos impiden detectar los primeros.</li>
	<li>Evita usar productos agresivos: limpiahornos, lejía, etc., que impiden los procesos biológicos de depuración del agua. Nunca tires productos tóxicos, pintura o aceite de cocinar al desagüe.</li>
	<li>Para ahorrar agua, instala un sistema de doble descarga en el inodoro, ya que vaciar la cisterna entera supone gastar de 10 a litros. Repara los grifos que gotean. Una gota por segundo son 30 litros al día.</li>
	<li>Tapa siempre las cazuelas para no despilfarrar calor. La olla exprés es la mejor opción: ahorra tiempo y energía. Si no, son preferibles las cazuelas de hierro, acero inoxidable o barro antes que las de aluminio.</li>
	<li>En la alimentación, evita la comida basura o precocinada, ya que suele contener muchos aditivos y conservantes y viene sobreempaquetada. Procura consumir alimentos frescos, de temporada y de producción local.</li>
  <li>Rechaza los alimentos envasados en bandejas de poliestireno expandido (corcho blanco). Los productos no son mejores porque vengan envueltos en plástico.</li>
	<li>Guarda los alimentos en la clásica fiambrera o tarros de cristal en lugar de envolverlos o taparlos con película de plástico o aluminio.</li>
	<li>Evita los productos que recorren grandes distancias antes de llegar al consumidor. Da preferencia a las alternativas locales. No tiene sentido consumir miel chilena, cerveza mejicana o galletas danesas.</li>
	<li>Aprovecha bien el papel: úsalo por las dos caras, utilízalo reciclado y envíalo después a reciclar. Rechaza el papel blanqueado con cloro.</li>
	<li>Apúntate a la Lista Robinson para dejar de recibir publicidad personalizada por correo. Coloca un distintivo en tu buzón indicando que no quieres propaganda.</li>
	<li>Si te es imprescindible usar el coche para acudir al trabajo, compártelo con otros compañeros o vecinos. En el tiempo o las vacaciones, no recurras siempre al coche, explora otras posibilidades de viajar o hacer excursiones en transporte público.</li>
	<li>Evita los productos con PVC. Producen furanos y dioxinas cuando son incinerados.</li>
	<li>Si te ha caducado algún medicamento, no lo tires a la basura ni al WC. Llévalo a la farmacia, donde deben hacerse cargo de él.</li>

  </ul>

	</article>
	

	<!-- Button trigger modal -->
  <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Titulo</h4>
      </div>
      <div class="modal-body">
        
      <img src="img/consejos1.jpg">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
<!--fin contenido pagina-->

<?php
require_once "comun/footer.php";
?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/menu_reduccion.js"></script>
    

  
</body>
</html>
