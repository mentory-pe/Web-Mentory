<?php
function mentory_theme_setup() {
    register_nav_menus(array(
        'menu-principal' => 'Menú Principal'
    ));

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mentory_theme_setup');

function mentory_theme_enqueue_scripts() {
    wp_enqueue_style('mi-tema-estilos', get_stylesheet_uri());
    wp_enqueue_script('mi-tema-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mentory_theme_enqueue_scripts');

function cargar_estilos_tema() {
    wp_enqueue_style('general-styles', get_template_directory_uri() . '/assets/css/general-styles.css');
}
add_action('wp_enqueue_scripts', 'cargar_estilos_tema');

function cargar_template_personalizado($template) {
    $program_slug = get_query_var('program_slug');

    if ($program_slug && file_exists(get_template_directory() . "/programas/detail_programa.php")) {
        return get_template_directory() . "/programas/detail_programa.php";
    }

    return $template;
}
add_filter('template_include', 'cargar_template_personalizado');
