<?php
require_once 'comun/class.dbDriver.php';
$db = new DBDriver(PDOConfig::getInstance());
session_start();
if(isset($_SESSION['id'])){
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Index2</title>
	  <link href="style/css/bootstrap.css" rel="stylesheet">
    <link href="style/css/general.css" rel="stylesheet">
    <link href="style/css/carrusel.css" rel="stylesheet"
  
</head>
<body>
<div class="only_menu">
  <?php 
    require_once 'comun/menu.php';
  ?>
</div> 

<img src="img/left.png" id="left">

<img src="img/rigth.png"  id="right">




<div class="recorrido">
    <div class="page" id="1" style="display:block;background:yellow;">
      div 1
      <img src="img/background.png" class="img-responsive" width="500">
      asdsadas
      asdasdas
      asfsfds
      <hr>
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      <img src="img/background.png"  class="img-responsive" width="500">
      asdsadas
      asdasdas
      asfsfds
      <hr>
    </div>
     <div class="page" style="background:blue" id="2">
      div 2asdasd
    </div>
     <div class="page"  style="background:red" id="3">
      <hr>
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      fsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdffsdfsdfsdf
      <img src="img/background.png" width="500">
    </div>

     <div class="page"  style="background:gray" id="4">
      div 4
    </div>
</div>
<?php require_once 'comun/footer.php';?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/menu_reduccion.js"></script>
     <script src="js/recorrido.js"></script>



</body>
</html>
<?php
}else{
  header('Location: index.html');
}

?>
