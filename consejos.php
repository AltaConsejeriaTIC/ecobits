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


CONSEJOS PARA CUIDAR EL MEDIO AMBIENTE

<h3>* Antes de comprar un producto pregúntate si realmente lo necesitas. Cualquier consumo innecesario es en esencia antiecológico.	Sé crítico con la publicidad. Mira las cualidades de los productos, no los sueños que te venden en los anuncios.</h3>
<h3>* Antes de tirar cualquier cosa a la basura, piensa si se puede reutilizar, reciclar o reparar, o si puede ser útil para otra persona.</h3>
<h3>* Evita las latas de bebidas, vale más el envase que su contenido y apenas se recuperan. La energía necesaria para producir y transportar una lata equivale a la mitad del bote lleno de petróleo.</h3>
<h3>* La energía que producen las pilas es más de 600 veces más cara que la de la red. Conecta los aparatos a la red siempre que esto sea posible. Si te es imprescindible usar pilas (nunca tires las usadas a la basura), procura que sean recargables.</h3>
<h3>* Desconecta los aparatos eléctricos de la red cuando no están funcionando. Algunos aparatos (como televisores) siguen gastando hasta un 33% de la energía.</h3>
<h3>* Prescinde de los electrodomésticos innecesarios como cepillos de dientes, abrelatas, cuchillos eléctricos, etc. Ten encuenta los criterios de ahorro energético al comprar nuevos frigoríficos, lavadoras, etc.</h3>
<h3>* Las bombillas de bajo consumo son más caras que las normales, pero duran hasta 8 veces más y consumen la quinta parte de energía para dar la misma cantidad de luz, con lo cual se termina ahorrando energía y dinero.</h3>
<h3>* Evita los aerosoles. Contienen CFCs, causantes de la destrucción de la capa de ozono, u otros gases que también contribuyen al efecto invernadero. Los pulverizadores son una buena alternativa y son recargables.</h3>
<h3>* La gran mayoría de los productos de limpieza que se anuncian no sólo son innecesarios sino también muy nocivos para el medio ambiente. Casi toda la casa puede quedar perfectamente limpia con jabón, bicarbonato, vinagre y limón.</h3>
<h3>* Los ambientadores no eliminan los malos olores sino que desprenden otros más fuertes que nos impiden detectar los primeros.</h3>
<h3>* Evita usar productos agresivos: limpiahornos, lejía, etc., que impiden los procesos biológicos de depuración del agua. Nunca tires productos tóxicos, pintura o aceite de cocinar al desagüe.</h3>
<h3>* Para ahorrar agua, instala un sistema de doble descarga en el inodoro, ya que vaciar la cisterna entera supone gastar de 10 a litros. Repara los grifos que gotean. Una gota por segundo son 30 litros al día.</h3>
<h3>* Tapa siempre las cazuelas para no despilfarrar calor. La olla exprés es la mejor opción: ahorra tiempo y energía. Si no, son preferibles las cazuelas de hierro, acero inoxidable o barro antes que las de aluminio.</h3>
<h3>* En la alimentación, evita la comida basura o precocinada, ya que suele contener muchos aditivos y conservantes y viene sobreempaquetada. Procura consumir alimentos frescos, de temporada y de producción local.	Rechaza los alimentos envasados en bandejas de poliestireno expandido (corcho blanco). Los productos no son mejores porque vengan envueltos en plástico.</h3>
<h3>* Guarda los alimentos en la clásica fiambrera o tarros de cristal en lugar de envolverlos o taparlos con película de plástico o aluminio.</h3>
<h3>* Evita los productos que recorren grandes distancias antes de llegar al consumidor. Da preferencia a las alternativas locales. No tiene sentido consumir miel chilena, cerveza mejicana o galletas danesas.</h3>
<h3>* Aprovecha bien el papel: úsalo por las dos caras, utilízalo reciclado y envíalo después a reciclar. Rechaza el papel blanqueado con cloro.</h3>
<h3>* Apúntate a la Lista Robinson para dejar de recibir publicidad personalizada por correo. Coloca un distintivo en tu buzón indicando que no quieres propaganda.</h3>
<h3>* Si te es imprescindible usar el coche para acudir al trabajo, compártelo con otros compañeros o vecinos. En el tiempo o las vacaciones, no recurras siempre al coche, explora otras posibilidades de viajar o hacer excursiones en transporte público.</h3>
<h3>* Es absurdo pretender estar en manga corta durante el invierno, a costa de gastar mucha calefacción. Es preferible ponerse un jersey. En verano no abuses del aire acondicionado, que también libera CFCs.</h3>
<h3>* Evita los productos con PVC. Producen furanos y dioxinas cuando son incinerados.</h3>
<h3>* Si te ha caducado algún medicamento, no lo tires a la basura ni al WC. Llévalo a la farmacia, donde deben hacerse cargo de él.</h3>
<h3>* No agobies a los niños con juguetes. Déjales jugar con su imaginación. Evita los juguetes y la ropa deportiva importados del sudeste asiático ya que muchas veces son fruto del trabajo infantil y las fábricas suelen ser insalubres, peligrosas y contaminantes.</h3>


<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
<?php
}else{
  header('Location: index.html');
}

?>
	
	