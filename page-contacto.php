<?php get_header(); ?>

    <?php  while(have_posts()): the_post();?> <!-- Recorrer informacio -->
        <div class="hero" style="background-image:url(<?php echo  get_the_post_thumbnail_url(); ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">
                <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
            
        <div class="principal contenedor contacto">
             <main class="text-centrado contenido-paguinas">
                
                <form class="reserva-contacto" method="post">
                <h2>Realiza tu reservación</h2>
                    <div class="campo">
                        <input type="text" name="nombre" placeholder="nombre" require>
                    </div>
                    <div class="campo">
                        <input type="datetime-local" name="fecha" placeholder="fecha" require>
                    </div>
                    <div class="campo">
                        <input type="email" name="email" placeholder="email" require>
                    </div>
                    <div class="campo">
                        <input type="tel" name="telefono" placeholder="telefono" require>
                    </div>
                    <div class="campo">
                        <textarea name="mensaje" placeholder="mensaje" require></textarea>
                    </div>
                    <input type="submit" value="Enviar" name="Enviar" class="button rojo">
                </form>
            </main>
        </div>    
    <?php endwhile; ?>

<?php get_footer(); ?>