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
  aPara la nave de carga de la Agencia Espacial Europea, véase Julio Verne (nave).
Julio Verne
Félix Nadar 1820-1910 portraits Jules Verne.jpg
Retrato de Julio Verne por Félix Nadar (circa 1878).
Nacimiento  8 de febrero de 1828
Pavillon royal de France.svg Nantes, Reino de Francia
Defunción   24 de marzo de 1905 (77 años)
Bandera de Francia Amiens, Tercera República Francesa
Nacionalidad  Bandera de Francia Francés
Ocupación   Escritor
Género  Ciencia ficción, Aventuras
Influido por[mostrar]
Firma   Firma de Julio Verne.svg

Jules Gabriel Verne (Nantes, 8 de febrero de 1828-Amiens, 24 de marzo de 1905), conocido en los países de lengua española como Julio Verne, fue un escritor, poeta y dramaturgo francés célebre por sus novelas de aventuras y por su profunda influencia en el género literario de la ciencia ficción.

Nacido en el seno de una familia burguesa en la ciudad portuaria de Nantes, Verne recibió formación para continuar los pasos de su padre como abogado, pero muy joven decidió abandonar ese camino para dedicarse a escribir. Su colaboración con el editor Pierre-Jules Hetzel dio como fruto la creación de Viajes extraordinarios, una popular serie de novelas de aventuras escrupulosamente documentadas y visionarias entre las que se incluían las famosas Viaje al centro de la Tierra, Veinte mil leguas de viaje submarino y La vuelta al mundo en ochenta días.

Julio Verne es uno de los más importantes escritores de Francia y de toda Europa gracias a la evidente influencia de sus libros en la literatura vanguardista y el surrealismo,1 y desde 1979 es el segundo autor más traducido en el mundo, después de Agatha Christie.2 Es considerado, junto con H. G. Wells, «El padre de la ciencia ficción».3 Fue condecorado con la Legión de Honor por sus aportes a la educación y a la ciencia
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu_reduccion.js"></script>
    

  
</body>
</html>
<?php
}else{
  header('Location: index.html');
}

?>

