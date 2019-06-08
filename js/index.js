var map;
function initMap() { 
  var latLng={  //Objeto con las latitudes del local 
    lat: 14.043103,
    lng:-88.939278
  } 
  map = new google.maps.Map(document.getElementById('mapa'), {
    center: latLng,
    zoom: 16
  });
  var marker = new google.maps.Marker({ //añadir el puntero para ubicar el local
      position: latLng,
      map: map,
      title: 'La Pizzeria de Don Paco'
  });
}
$ = jQuery.noConflict();
//ajustar mapa
var breakpoint = 768;
var mapa = $('#mapa');
if(mapa.length > 0){
    if($(document).width() >= breakpoint){ //redimencionar mapa para un tamaño completo
        ajustarMapa(0);
    }else{
        ajustarMapa(300); //en pantallas de moviles 
    }
}

function ajustarMapa(altura){ //funcion para el tamaño del mapa
    if(altura == 0){
        var ubicacionSection = $('.ubicacion-resevacion');
        var ubicacionAltura = ubicacionSection.height();
        $('#mapa').css({'height':ubicacionAltura});
    }else{
        $('#mapa').css({'height':altura});
    }
    
}
$(window).resize(function(){
    if(altura == 0){
        var ubicacionSection = $('.ubicacion-resevacion');
        var ubicacionAltura = ubicacionSection.height();
        $('#mapa').css({'height':ubicacionAltura});
    }else{
        $('#mapa').css({'height':altura});
    }
});


//OCultar y mostrar menu
$(document).ready(function(){
    $('.mobile-menu a').on('click', function(){
        $('nav .menu-sitio').toggle();
    });
    //Reacciones a Resize en la pantalla
    var breakpoint = 768;
    $(window).resize(function(){
        if($(document).width() >= breakpoint){
            $('nav .menu-sitio').show();
        }else{
            $('nav .menu-sitio').hide();
        }
    });
    //Flue Box 
    jQuery('.wp-block-gallery li figure img').each(function(){
        jQuery(this).attr({'data-fluidbox' : ''});
    });

    if(jQuery('[data-fluidbox]').length > 0){
        jQuery('[data-fluidbox]').fluidbox();
    }
});