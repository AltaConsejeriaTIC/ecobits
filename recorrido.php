<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Index2</title>
	  <link href="style/css/bootstrap.css" rel="stylesheet">
    <link href="style/css/general.css" rel="stylesheet">
    <link href="style/css/carrusel.css" rel="stylesheet">
    <style>
    .only_menu{
    margin-top: 20px;
    z-index: 10;
  }
  .page{
    background: repeat;
    display: none;
    width: 100%;
    overflow: auto;
    min-height: 100%;
    position: absolute;
    z-index: 1;
    top: 0;
    bottom: 0;
  }
  #left{
    top:45%; 
    left: 0;
    z-index: 21;
    position: fixed;
    bottom: 50%;
    padding: 5px;
    cursor: pointer;
  }
  #right{
    top:45%; 
    right: 0;
    z-index: 21;
    position: fixed;
    bottom: 50%;
    padding: 5px;
    cursor: pointer;
  }
    </style>
  
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
     <script>
        var contador = 1;
        var anterior;
        var limite = 4;
        document.onkeyup =function TelcaPulsada( e ) {  
           if ( window.event != null)              
              tecla = window.event.keyCode;  
           else if ( e != null )               
              tecla = e.which;  
           else  
              return;
           if (tecla == 39) {
              desplazamiento("derecha");
           }else if (tecla == 37){
              desplazamiento("izquierda");
           }
        }

        $('body').on('DOMMouseScroll mousewheel',function(event){
          if(event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0){
             desplazamiento("derecha");
           }else{
             desplazamiento("izquierda");
           }
           return false;
        });

        $('#left').click( function(){ desplazamiento("izquierda");});
        $('#right').click( function(){ desplazamiento("derecha");});

        function desplazamiento(direccion){
         anterior = contador;
          for(var i=1;i<=limite;i++){
                if(i!=anterior)
                  document.getElementById(i).style.display='none';
          }

         
          switch(direccion){
            case "derecha":
                 contador = (contador>=limite)?contador:contador+1;
            break;
            case "izquierda":
                contador = (contador==1)?contador:contador-1;
            break;
          }
           
              if($('#'+contador)){
                if(anterior!=contador){
                 $('#'+anterior).fadeOut(500);
                 $('#'+contador).fadeIn(500);
                  }                  
                }
          }

     </script>



</body>
</html>