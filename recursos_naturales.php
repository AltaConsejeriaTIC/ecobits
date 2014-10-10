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
<div class="col-xs-3"><b>EL agua</b>
<img src="img/agua.png" class="img-resposive imglogo">
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
        <h4 class="modal-title" id="myModalLabel">Titulo</h4>
      </div>
      <div class="modal-body">
        
<h3>RECURSOS NATURALES</h3>

Se denominan recursos naturales a aquellos bienes materiales y servicios que proporciona la
 naturaleza sin alteración por parte del ser humano; y que son valiosos para las sociedades
  humanas por contribuir a su bienestar y desarrollo de manera directa (materias primas,
   minerales, alimentos) o indirecta (servicios ecológicos).
  
¿CUALES SON LOS TIPOS DE RECURSOS NATURALES?
 
De acuerdo a la disponibilidad en el tiempo, tasa de generación o regeneración y ritmo de uso o consumo podemos clasificar los recursos naturales en dos grandes grupos: renovables y no renovables.

Recursos renovables
Los recursos naturales renovables hacen referencia a recursos bióticos, recursos con ciclos de regeneración por encima de su extracción, el uso excesivo del mismo lo puede convertir en un recurso extinto (bosques, pesquerías, entre otras) o no limitados (luz solar, mareas, vientos, entre otros);
Ciertos recursos renovables pueden dejar de serlo si su tasa de utilización es tan alta que evite su renovación. Dentro de esta categoría de recursos renovables encontramos al agua y a la biomasa.

Algunos de los recursos renovables son: el bosque, el agua, los vientos, los peces, radiación solar, energía hidráulica, madera, energía eólica y productos de agricultura.


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


</div>


  <div class="col-xs-3"><b>El Aire</b>
  <img src="img/aire.png" class="img-resposive imglogo">
  En esta seccion se mostrara los diferentes factores e indicadores de contaminacion, indicadores 
  de contaminacion, la importancia de este recurso para nosotros.
  es vital para el funcionamiento del Planeta, ya que gracias a la composición del aire, se 
  mantienen unas condiciones adecuadas de humedad y temperatura por medio del efecto invernadero.
   Además, el aire en la atmósfera, en concreto la capa de ozono, protege de las radiaciones
    solares. Por otra parte, el vapor de agua que contiene el aire, genera las precipitaciones
   a través de la condensación y la formación de las nubes.
  </div>


  <div class="col-xs-3"><b>Suelo</b>
  <img src="img/roca.png" class="img-resposive imglogo">
  el suelo es un recursos natural renovable. Es la capa superior de la tierra, en ella se 
  desarrolla la vegetación. Sirve como depósito para la reserva del agua, nutrientes,oxigeno 
  para la respiracion de las raices y como soporte mecánico.
Por estas razones los suelos son importantes porque constituyen fuentes productoras de
 alimentos o materias primas que el hombre necesita para satisfacer sus necesidades
  primordiales
  </div>


  <div class="col-xs-3"><b>Vegetacion</b>
  <img src="img/planta.png" class="img-resposive imglogo">
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