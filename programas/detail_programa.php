<?php
get_header(); // Carga el encabezado del tema (header.php)
?>

<!-- Si es solo para pruebas, puedes dejar el CSS aquí -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/general-styles.css" type="text/css">

<?php
// Verificar si el área y el programa están disponibles
global $wpdb;
$program_slug = get_query_var('program_slug'); // Asegúrate de que el nombre coincide con el del plugin
$area_slug = get_query_var('area_slug');       // Asegúrate de que el nombre coincide con el del plugin

// Verificar si $area_slug y $program_slug contienen valores
if ($area_slug && $program_slug) {
    // Obtener el área
    $area = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}areas WHERE slug = %s", $area_slug));
    
    // Si se encuentra el área, buscar el programa dentro de esa área
    if ($area) {
        $programa = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}programs WHERE slug = %s AND area_id = %d", $program_slug, $area->id));
    }
}

if (isset($programa) && $programa) : ?>
    <h1><?php echo esc_html($programa->name); ?></h1>
    <p><strong>Área:</strong> <?php echo esc_html($area->name); ?></p>
    <p><?php echo esc_html($programa->description); // Asumiendo que tienes una descripción ?></p>

    <?php if (!empty($programa->image_url)) : ?>
        <div class="program-image">
            <img src="<?php echo esc_url($programa->image_url); ?>" alt="<?php echo esc_attr($programa->name); ?>" />
        </div>
    <?php endif; ?>
<?php else : ?>
    <p>Programa no encontrado o no existe en esta área.</p>
<?php endif; ?>

<?php
// Obtener los docentes asociados al programa
$docentes = mentory_get_docentes_by_program($programa->id);
if (!empty($docentes)) : ?>
    <h3>Docentes</h3>
    <ul>
        <?php foreach ($docentes as $docente) : ?>
            <li><?php echo esc_html($docente->nombre . ' ' . $docente->apellidos); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php
get_footer();
?>
