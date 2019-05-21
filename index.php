<?php get_header(); ?>
<?php  $pagina_blog = get_option('page_for_posts');
        $imagen = get_post_thumbnail_id($pagina_blog); //id de la imagen
        $imagen = wp_get_attachment_image_src($imagen,'full');
?> 

        <div class="hero" style="background-image:url(<?php echo  $imagen[0]; ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">
                <h1><?php echo get_the_title($pagina_blog); ?></h1> <!-- Imprimir Titulo -->
                </div>
            </div>
        </div>
            
        <div class="principal contenedor">
             <main class="columnas2-3 contenido-paguinas">
                <?php  while(have_posts()): the_post();?> <!-- Recorrer informacio -->
                    <article class="entrada-blog">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('especialidades');?>
                        </a>
                        <header class="informacion-entrada clear">
                            <div class="fecha">
                                <time>
                                    <?php echo the_time('d'); ?>
                                    <span><?php the_time('M'); ?></span>
                                </time>
                            </div>
                            <div class="titulo-entrada">
                                <?php the_title('<h1>','</h1>'); ?>
                                <p class="autor">
                                    <i class="fad fa-user" aria-hidden='true'></i>
                                    <?php the_author();?>
                                </p>
                            </div>
                        </header>
                        <div class="contenido-entrada">
                            <?php the_excerpt();?>
                            <a href="<?php the_permalink();?>" class="button rojo">Leer Más</a>
                        </div>
                    </article>
                     <?php the_title();?>
                <?php endwhile; ?>
            </main>
            <?php  get_sidebar()?>
        </div>    


<?php get_footer(); ?>