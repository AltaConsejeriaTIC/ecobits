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