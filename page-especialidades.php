<?php 
/*
* Template Name: Especialidades
*/

get_header(); ?>
<h1>Especialidades</h1>
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
    <?php endwhile; ?>
    <div class="nuetras-espicialedades contenedor">
        <h3>Pizza</h3>
        <div class="contenedor-grid">
            <?php  
            $args = array(  //consulta a la base de datos de Wordpress
                'post_type' => 'especialidades',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                'category_name' => 'pizza'
            );
            $pizzas = new WP_Query($args);
            while ($pizzas->have_posts()): $pizzas->the_post();  ?>

            <div class="columnas2-4">
                <?php the_post_thumbnail('especialidades') ?>
                <div class="texto-especialidad">
                    <h4><?php the_title(); ?> <span>$<?php the_field('precio'); ?></span> </h4>
                    <?php the_content(); ?>
                </div>
            </div>

            <?php  endwhile; wp_reset_postdata();?>  <!--siempre que se finalize una consulta a la base de datos usar -->
       </div> <!-- .contenedor-grid -->
       <h3>Otros</h3>
        <div class="contenedor-grid">
            <?php  
            $args = array(  //consulta a la base de datos de Wordpress
                'post_type' => 'especialidades',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                'category_name' => 'otros'
            );
            $otros = new WP_Query($args);
            while ($otros->have_posts()): $otros->the_post();  ?>

            <div class="columnas2-4">
                <?php the_post_thumbnail('especialidades') ?>
                <div class="texto-especialidad">
                    <h4><?php the_title(); ?> <span>$<?php the_field('precio'); ?></span> </h4>
                    <?php the_content(); ?>
                </div>
            </div>

            <?php  endwhile; wp_reset_postdata();?>  <!--siempre que se finalize una consulta a la base de datos usar -->
       </div><!-- .contenedor-grid -->
    </div>

<?php get_footer(); ?>