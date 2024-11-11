<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?> <!-- Llama a la cabecera de WordPress (necesario para plugins y funciones) -->

    <!-- Llamar al CSS directamente en la plantilla -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/general-styles.css" type="text/css">

</head>
<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <!-- Logo o título del sitio -->
            <div class="site-logo">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                <?php endif; ?>
            </div>

            <!-- Menú de navegación principal -->
            <nav class="main-navigation">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary', // Ubicación del menú definida en functions.php
                        'menu_class' => 'nav-menu',    // Clase CSS para el menú
                        'container' => 'ul'           // Usar un <ul> para el menú
                    ));
                ?>
            </nav>
        </div>
    </header>