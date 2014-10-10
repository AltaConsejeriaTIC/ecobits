 //$('.dropdown-toggle').dropdown();

    var w = $(window).width();
    var tam_fijo = 1200;

    if(w<tam_fijo){
       $('#logo').fadeOut();
     }else{
       $('#logo').fadeIn();
     }

    $(window).resize(function() {
        var nw = $(window).width();
        if(nw<tam_fijo){
           $('#logo').fadeOut();
         }else{
           $('#logo').fadeIn();
         }

       
    });

             
$('#menu_principal').animate({top: 20, opacity: 1}, 'slow');
$("#menu_secundario").animate({margin:0, opacity: 1}, 'slow');


var num = 250; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('#menu_secundario').addClass('fixed');
    } else {
        $('#menu_secundario').removeClass('fixed');
    }
});




          
           