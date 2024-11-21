<?php
/* Template Name: Mi Página Personalizada */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Página Personalizada 1</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1>Mi Página Personalizada</h1>
    </header>
    <?php
    // Obtener todos los programas desde el plugin
    $programs = mentory_get_programs();

    if ($programs) {
        echo '<ul>';
        
        // Iterar sobre cada programa
        foreach ($programs as $program) {
            // Obtener el área del programa
            $area = mentory_get_area_by_id($program->area_id); // Usar la función para obtener el área según el ID

            // Si se encontró el área, construir el enlace con el slug del área
            if ($area) {
                echo '<li>';
                // Crear la URL dinámica usando el slug del área y del programa
                $url = home_url('/' . $area->slug . '/' . $program->slug . '/');
                echo '<a href="' . esc_url($url) . '">' . esc_html($program->name) . '</a>';
                echo '</li>';
            }
        }
        
        echo '</ul>';
    } else {
        echo '<p>No hay programas disponibles.</p>';
    }
    ?>

    <?php wp_footer(); ?>
</body>
</html>