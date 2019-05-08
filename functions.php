<?php

function youeat_styles(){
     //rigistrar stylos css
    
      //Registrar 
    wp_register_style('normalize',get_template_directory_uri().'/css/normalize.css',array() ,'8.0');
    wp_register_style('style',get_template_directory_uri().'style.css',array() ,'1.0'); //css registrar en wordpress
    wp_enqueue_style('index',get_stylesheet_directory_uri().'/css/index.css');
    //Obtener 
    wp_enqueue_style('style');  
    wp_enqueue_style('normalize');   
    wp_enqueue_script('jquery'); 
    wp_enqueue_style('index'); 
    wp_enqueue_style('normalize',get_stylesheet_directory_uri().'/css/normalize.css');
    wp_enqueue_script('jquery');
    wp_enqueue_style('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_script('bootstrapjs',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",array('jquery'));
    wp_enqueue_style('style',get_stylesheet_uri());
}

//Menu
function youeat_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu','youeat'),
        'social-menu' => __('Social Menu','youeat'),
    ));
}



add_action('wp_enqueue_scripts','youeat_styles');
add_action('init','youeat_menus');


