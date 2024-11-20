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

// Regla de reescritura para cargar archivos desde la carpeta 'extras' sin mostrarlo en la URL
function mentory_theme_rewrite_rules() {
    // Permitir URLs amigables para archivos en la carpeta 'extras'
    add_rewrite_rule(
        '^([^/]+)?/?$',  // Ruta amigable para cualquier archivo
        'index.php?archivo_extras=$matches[1]',  // Guardar el nombre del archivo en una variable
        'top'
    );
}
add_action('init', 'mentory_theme_rewrite_rules');

// Cargar el archivo desde 'extras' si existe
function cargar_template_personalizado($template) {
    $archivo_extras = get_query_var('archivo_extras');

    // Verificar si el archivo existe en 'extras' y es un archivo PHP
    if ($archivo_extras && file_exists(get_template_directory() . "/extras/$archivo_extras.php")) {
        return get_template_directory() . "/extras/$archivo_extras.php";  // Cargar el archivo desde 'extras'
    }

    // Verificar si el archivo existe en 'extras' y es un archivo PHP
    if ($archivo_extras && file_exists(get_template_directory() . "/$archivo_extras.php")) {
        return get_template_directory() . "/$archivo_extras.php";  // Cargar el archivo desde 'extras'
    }

    return $template;  // Retornar el template predeterminado si no hay coincidencias
}
add_filter('template_include', 'cargar_template_personalizado');

// Agregar la variable de consulta 'archivo_extras'
function mentory_add_query_vars($vars) {
    $vars[] = 'archivo_extras';  // Agregar 'archivo_extras' como variable de consulta
    return $vars;
}
add_filter('query_vars', 'mentory_add_query_vars');
