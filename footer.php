<footer>
    <?php 
        $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'after' => '<span class="separador"> | </span>'
        );
        wp_nav_menu( $args );
    ?>
    <div class="ubicacion">
                    <p>6345 Avenida de la Pizza CA 543435</p>
                    <p>Telefono: +1-342-533-5343</p>
    </div>
    <p class="copyright"> Todos los derechos reservados <?php echo date('Y') ?></p>
</footer>
    <?php wp_footer(); ?>
</body>
</html>