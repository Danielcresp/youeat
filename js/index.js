$ = jQuery.noConflict();
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
});