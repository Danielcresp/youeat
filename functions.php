<?php
//Función de imagen destacada
function youeat_setup(){
    add_theme_support('post-thumbnails');
}


//Funcion para añadir JS y CSS
function youeat_styles(){
    https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900

    //rigistrar stylos css
    wp_register_style('google_fonts',"https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900",array() ,'1.0');
    wp_register_style('normalize',get_template_directory_uri().'/css/normalize.css',array() ,'8.0');
    wp_register_style('style',get_template_directory_uri().'style.css',array() ,'1.0'); //css registrar en wordpress
    wp_register_style('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_register_style('bootstrapjs',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",array('jquery'));
    wp_register_style('index',get_stylesheet_directory_uri().'/css/index.css');
    wp_register_style('fontawesome',get_stylesheet_directory_uri().'/css/font_awesome.css');


    // regitrar JS
    wp_enqueue_script('scripts',get_template_directory_uri().'/js/index.js',array('jquery'),'1.0.0',true);

    //Obtener 
    wp_enqueue_style('google_fonts');  
    wp_enqueue_style('style');  
    wp_enqueue_style('normalize');  
    wp_enqueue_style('fontawesome');  
    wp_enqueue_script('jquery'); 
    wp_enqueue_style('index'); 
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('bootstrapjs');
    wp_enqueue_style('style',get_stylesheet_uri());
}

//Menu
function youeat_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu','youeat'),
        'social-menu' => __('Social Menu','youeat'),
        'footer-menu' => __('Header Menu','youeat'),
    ));
}


add_action('after_setup_theme','youeat_setup');
add_action('wp_enqueue_scripts','youeat_styles');
add_action('init','youeat_menus');


