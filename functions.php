<?php

function youeat_styles(){
     //rigistrar stylos css
    wp_enqueue_style('normalize',get_stylesheet_directory_uri().'/css/normalize.css');
    wp_enqueue_script('jquery');
    wp_enqueue_style('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_script('bootstrapjs',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",array('jquery'));
    wp_enqueue_style('style',get_stylesheet_uri());

}

add_action('wp_enqueue_scripts','youeat_styles');