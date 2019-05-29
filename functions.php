<?php
//Tablas Personalizadas
require get_template_directory().'/inc/database.php';
//Funciones para las reservaciones
require get_template_directory().'/inc/reservaciones.php';
//Crear opciones para los templates
require get_template_directory().'/inc/opciones.php';

//Función de imagen destacada
function youeat_setup(){
    add_theme_support('post-thumbnails');

    add_image_size('nosotros',437,291,true); //Agregar un nuevo tamaño de imagen 
    add_image_size('especialidades',765,515,true); //Agregar un nuevo tamaño de imagen 

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
    wp_register_style('fluidboxcss',get_stylesheet_directory_uri().'/css/fluidbox.css');


    // regitrar JS
    wp_enqueue_script('fluidbox',get_template_directory_uri().'/js/jquery.fluidbox.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('scripts',get_template_directory_uri().'/js/index.js',array('jquery','fluidbox'),'1.0.0',true);

    //Obtener 
    wp_enqueue_style('fluidboxcss');  
    wp_enqueue_style('fluidbox');  
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

//Custom Post Type
add_action( 'init', 'lapizzeria_especialidades' );
function lapizzeria_especialidades() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizzas', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
		'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
		'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
		'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
		'not_found'          => __( 'No Pizzases found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Pizzases found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'especialidades' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'especialidades', $args );
}

// WidGets
function youeat_widgets(){
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id'   => 'blog_sidebar',
        'after_widget' => '<div class="widget">',
        'before_widget' => '</div>',
        'after_title' => '<h3>',
        'before_title' => '</h3>'
    ));
}


add_action('after_setup_theme','youeat_setup');
add_action('wp_enqueue_scripts','youeat_styles');
add_action('init','youeat_menus');
add_action('widgets_init','youeat_widgets');


