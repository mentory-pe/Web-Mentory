<footer>
        <div class="container">
            <!-- Información de copyright -->
            <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>

            <!-- Menú de pie de página opcional -->
            <nav class="footer-navigation">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer', // Ubicación del menú definida en functions.php
                        'menu_class' => 'footer-menu', // Clase CSS para el menú
                        'container' => 'ul'            // Usar un <ul> para el menú
                    ));
                ?>
            </nav>

            <!-- Enlaces a redes sociales (personalizables) -->
            <div class="social-media">
                <a href="https://facebook.com" target="_blank">Facebook</a> |
                <a href="https://twitter.com" target="_blank">Twitter</a> |
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?> <!-- Llama al pie de página de WordPress (necesario para scripts y plugins) -->

</body>
</html>