<?php
function mentory_theme() {
    // Soporte para menús
    register_nav_menus(array(
        'menu-principal' => 'Menú Principal'
    ));

    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mentory_theme');

// Cargar estilos y scripts
function mentory_theme_enqueue_scripts() {
    wp_enqueue_style('mi-tema-estilos', get_stylesheet_uri());
    wp_enqueue_script('mi-tema-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mentory_theme_enqueue_scripts');

// Añadir rutas personalizadas para archivos PHP en subdirectorios
function agregar_rutas_personalizadas() {
    add_rewrite_rule('^programas/([^/]+)/?$', 'index.php?programa_slug=$matches[1]', 'top');
}
add_action('init', 'agregar_rutas_personalizadas');

// Filtrar las variables de la consulta
function agregar_var_query($query_vars) {
    $query_vars[] = 'programa_slug';
    return $query_vars;
}
add_filter('query_vars', 'agregar_var_query');

// Cargar plantilla personalizada o redirigir a la página principal si no existe
function cargar_template_personalizado($template) {
    $programa_slug = get_query_var('programa_slug');

    // Verificar si la URL coincide con un archivo PHP en el directorio "programas"
    if ($programa_slug && file_exists(get_template_directory() . "/programas/{$programa_slug}.php")) {
        return get_template_directory() . "/programas/{$programa_slug}.php";
    }
    
    // Si el archivo no existe, redirige a la página principal (index.php)
    if ($programa_slug) {
        // Redirige a la página principal
        wp_redirect(home_url());
        exit;
    }

    // Si no existe el archivo y no se cumple ninguna de las anteriores, carga la plantilla por defecto
    return $template;
}
add_filter('template_include', 'cargar_template_personalizado');



function cargar_estilos_tema() {
    // Encolar el archivo style.css
    wp_enqueue_style('general-styles', get_stylesheet_uri());

    // Si tienes más archivos CSS, puedes registrarlos aquí
    wp_enqueue_style('general-styles', get_template_directory_uri() . '/css/general-styles.css');
}
add_action('wp_enqueue_scripts', 'cargar_estilos_tema');