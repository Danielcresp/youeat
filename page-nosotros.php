<?php get_header(); ?>

    <?php  while(have_posts()): the_post();?> <!-- Recorrer informacio -->
        <div class="hero" style="background-image:url(<?php echo  get_the_post_thumbnail_url(); ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">
                <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
            
        <div class="principal contenedor">
             <main class="text-centrado contenido-paguinas">
                <?php the_content();?> <!-- Comentario -->
            </main>
        </div>    
        <div class="informacion-caja contenedor">
            <?php 
            $id_imagen = get_field('imagen_1');
            $imagen = wp_get_attachment_image_src($id_imagen,'nosotros');
            ?>
            <img src="<?php echo $imagen[0]; ?>" class="imagen-caja">

            <div class="contenido-caja">
                <?php the_field('descripción_1');?>
            </div>
        </div>
    <?php endwhile; ?>

<?php get_footer(); ?>