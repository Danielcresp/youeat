<?php get_header(); ?>

    <?php  while(have_posts()): the_post();?> <!-- Recorrer informacio -->
        <div class="hero" style="background-image:url(<?php echo  get_the_post_thumbnail_url(); ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">
                <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
            
        <div class="principal contenedor clear">
             <main class="text-centrado contenido-paguinas">
                <?php the_content();?> <!-- Comentario -->
            </main>
        </div>    
        <!-- cajas  -->
        <div class="info-cajas-main clear">
            <div class="informacion-caja cont">
                <?php 
                $id_imagen = get_field('imagen_1');
                $imagen = wp_get_attachment_image_src($id_imagen,'nosotros');
                ?>
                <img src="<?php echo $imagen[0]; ?>" class="imagen-caja">

                <div class="contenido-caja  pin1">
                    <?php the_field('descripción_1');?>
                </div>
            </div>
            <div class="informacion-caja cont">
            <div class="contenido-caja pin2">
                    <?php the_field('descripción_2');?>
                </div>
                <?php 
                $id_imagen = get_field('imagen_2');
                $imagen = wp_get_attachment_image_src($id_imagen,'nosotros');
                ?>
                <img src="<?php echo $imagen[0]; ?>" class="imagen-caja">
            </div>
            <div class="informacion-caja cont">
                <?php 
                $id_imagen = get_field('imagen_3');
                $imagen = wp_get_attachment_image_src($id_imagen,'nosotros');
                ?>
                <img src="<?php echo $imagen[0]; ?>" class="imagen-caja">

                <div class="contenido-caja pin3">
                    <?php the_field('descripción_3');?>
                </div>
            </div>  
        </div>
    <?php endwhile; ?>

<?php get_footer(); ?>

