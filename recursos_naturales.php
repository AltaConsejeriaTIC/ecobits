<?php
require_once 'comun/class.dbDriver.php';
$db = new DBDriver(PDOConfig::getInstance());
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Recursos Naturales</title>
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

<div class="row">
<br><br>
<div class="col-xs-3"><b>EL agua</b>
Es fundamental para la supervivencia y bienestar de los seres humanos por ello en esta seccion
   encontraremos indicadores y parametros sobre el agua su importancia y cuidado para preservarla por muchos años mas
Resulta curioso que el 70 por ciento de la Tierra sea agua y que el 70 por ciento de nuestro 
cuerpo también sea agua. Quizás sea por eso que lo recomendable para tener una dieta saludable 
y una larga vida sea el comer alimentos con un porcentaje del 70 por ciento en agua.
<hr><br>

<!-- Button trigger modal -->
  <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</div>


  <div class="col-xs-3"><b>El Aire</b>
  En esta seccion se mostrara los diferentes factores e indicadores de contaminacion, indicadores 
  de contaminacion, la importancia de este recurso para nosotros.
  es vital para el funcionamiento del Planeta, ya que gracias a la composición del aire, se 
  mantienen unas condiciones adecuadas de humedad y temperatura por medio del efecto invernadero.
   Además, el aire en la atmósfera, en concreto la capa de ozono, protege de las radiaciones
    solares. Por otra parte, el vapor de agua que contiene el aire, genera las precipitaciones
   a través de la condensación y la formación de las nub
  </div>


  <div class="col-xs-3"><b>Suelo</b>
  el suelo es un recursos natural renovable. Es la capa superior de la tierra, en ella se 
  desarrolla la vegetación. Sirve como depósito para la reserva del agua, nutrientes,oxigeno 
  para la respiracion de las raices y como soporte mecánico.
Por estas razones los suelos son importantes porque constituyen fuentes productoras de
 alimentos o materias primas que el hombre necesita para satisfacer sus necesidades
  primordiales
  </div>


  <div class="col-xs-3"><b>Vegetacion</b>
   la importancia de la vegetación y los árboles para la salud de la tierra ayuda
    a fijar el suelo para prevenir la erosión del mismo y la pérdida de nutrientes.

Cabe mencionar y recordar que el suelo es el resultado de un proceso de mieles de años de 
formación, el mismo se forma en gran parte gracias a la misma vegetación y la vegetación
 desempeña un importante papel en el cambio climático; no solo por la producción de oxígeno
 y la captación de CO2 sino que además sin vegetación no hay lluvias, no hay vida, podra 
 existir un mundo sin humanos, pero no sin árboles, al menos no uno con capacidad de albergar vida.

</div>
</div>
</article>
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
<?php
}else{
  header('Location: index.html');
}

?>