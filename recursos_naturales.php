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
  


<a href="#" class="btn btn-lg btn-success"
   data-toggle="modal"
   data-target="#basicModal">Click to open Modal</a>

   <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <h3>Modal Body</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
        </div>
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
        <script src="js/bootstrap.min.js"></script>   
    <script src="js/bootstrap.js"></script>

    <script src="js/menu_reduccion.js"></script>

  
</body>
</html>
<?php
}else{
  header('Location: index.html');
}

?>