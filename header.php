<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Eat</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="encabezado_sitio">
        <div class="contenedor">
            <div class="logo">
                 <a href="<?php echo esc_url(home_url('/')); ?>"> <!--//sanitizacion para seguridad -->
                   <img class='logo_img' src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
                </a>
            </div><!-- .logo -->
            <div class="informacion-encabezado">
                <div class="redes-sociales">
                    <?php
                    $args = array(
                        'theme_location' => 'social-menu',
                        'container' => 'nav',
                        'container_class' => 'sociales',
                        'container_id' => 'sociales',
                        'link_before' => '<span class="sr-text">',
                        'link_after' => '</span>'
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="direcciones">
                    <p>6345 Avenida de la Pizza CA 543435</p>
                    <p>Telefono: +1-342-533-5343</p>
                </div>
            </div> <!-- .redes -->
        </div><!-- .contenedor -->
    </header>
    <div class="menu-pricipal">
        <div class="mobile-menu">
            <a href="#" class="movile">Menu</a>
        </div>
        <nav class="menu-sitio">
            <div class="contenedor navegacion">
                <?php 
                    $args = array(
                        'theme_location' => 'header-menu',
                        'container' => 'nav',
                        'container_class' => 'menu-sitio'
                    );
                    wp_nav_menu( $args);
                    //menu
                ?>
            </div>
        </nav>
    </div>

