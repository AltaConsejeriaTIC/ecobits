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
  <div class="row">
    <div class="col-xs-6">
        <?php echo $_SESSION['usuario'];?> te invitamos a que dejes un comentario u opinion sobre el medio ambiente en la ciudad, eincluso ideas que quieras aportar.
      <div class="row">
  <div class="col-xs-6">
    <div class="row">
        <div class="col-xs-12">
          <input type="text" class="form-control" id="nombres" placeholder="Ingresa tu nombre" value="<?php echo $_SESSION['usuario']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
          <input type="text" class="form-control" id="email" placeholder="Ingresa tu email">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
          <textarea class="form-control" id="mensaje" style="max-height:100px; max-width:100%;" placeholder="Tu mensaje va aqui"></textarea>
        </div>
    </div>
     <div class="row">
        <div class="col-xs-12">
          <button class="btn btn-info" id="enviar" style="width:100%">Enviar</button>
        </div>
    </div>
  </div>
  <div class="col-xs-6">
    <img src="img/girl4.png" class="img-responsive girl4">
  </div>
  </div>
    </div>
    <div class="col-xs-6">
    <div  id="caja_comentarios" style="height:300px;overflow:auto;padding:15px;box-shadow: inset 3px 3px 10px;border-radius:10px;">
    </div>

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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu_reduccion.js"></script>
    <script src="js/comentarios.js"></script>
    

  
</body>
</html>
<?php
}else{
  header('Location: index.html');
}

?>

