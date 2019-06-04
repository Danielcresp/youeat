<?php get_header(); ?>

    <?php  while(have_posts()): the_post();?> <!-- Recorrer informacio -->
        <div class="hero" style="background-image:url(<?php echo  get_the_post_thumbnail_url(); ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">
                    <h1>  <?php echo esc_html(get_option('blogdescription')); ?></h1>
                <?php the_content();?> <!-- Comentario -->
                <?php $url =get_page_by_title('Sobre Nosotros')?>
                <a class="button naranja" href="<?php echo get_permalink($url->ID) ?>">Leer mas</a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
            
        <div class="principal contenedor">
             <main class="contenedor-grid">
                 <h2 class="text-rojo text-center">Nuestras Especialidades</h2>
                 <?php $args = array(
                    'posts_per_page' => 3,
                    'orderby' => 'rand',
                    'post_type' => 'especialidades',
                    'category_name' => 'pizza'
                 );
                 $especialidades = new WP_Query($args);
                 while($especialidades->have_posts()): $especialidades->the_post();
                 ?>
                 <div class="especialidad columnas2-4">
                     <div class="contenido-especialidad">
                         <?php the_post_thumbnail('especialidades_portrait'); ?> <!-- Imagen con su tamaño -->
                         <div class="informacion-platillo">
                            <?php the_title('<h3>','</h3>'); ?> <!-- Titulo de Pizza -->
                            <?php the_content();?> <!-- Descripsion de la pizza -->
                            <p class="precio">$<?php the_field('precio') ?></p> <!-- Precio de la pizza -->
                            <a href="<?php the_permalink(); ?>" class="button rojo">Leer Mas</a>
                         </div>
                     </div>
                 </div>

                <?php endwhile; wp_reset_postdata(); ?>
            </main>
        </div>    


<?php get_footer(); ?>