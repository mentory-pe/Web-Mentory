<?php
get_header(); 

// Obtener el título de la página actual
$page_title = is_search() ? 'Resultados de búsqueda: ' . get_search_query() : get_the_title();

?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index-program.css" type="text/css">

<form method="get" action="">
    <div>
        <label for="area">Filtrar por área:</label>
        <select name="area" id="area">
            <option value="">Todas las áreas</option>
            <?php
            global $wpdb;
            $areas = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}areas");
            foreach ($areas as $area) :
                $selected = (isset($_GET['area']) && $_GET['area'] == $area->id) ? 'selected' : '';
                echo '<option value="' . esc_attr($area->id) . '" ' . $selected . '>' . esc_html($area->name) . '</option>';
            endforeach;
            ?>
        </select>
    </div>
    <div>
        <label for="name">Buscar por nombre:</label>
        <input type="text" id="name" name="name" value="<?php echo isset($_GET['name']) ? esc_attr($_GET['name']) : ''; ?>">
    </div>
    <div>
        <button type="submit">Buscar</button>
    </div>
</form>

<div class="ednoc" style="max-width: 1600px; margin: 0 auto;">
<?php
// Filtros de búsqueda
$area_filter = isset($_GET['area']) ? intval($_GET['area']) : '';
$name_filter = isset($_GET['name']) ? sanitize_text_field($_GET['name']) : '';

// Configuración de paginación
$programs_per_page = 2;
$paged = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
$offset = ($paged - 1) * $programs_per_page;

// Construir consulta con filtros y paginación
$query = "SELECT * FROM {$wpdb->prefix}programs WHERE 1=1";
$query_params = [];

if (!empty($area_filter)) {
    $query .= " AND area_id = %d";
    $query_params[] = $area_filter;
}

if (!empty($name_filter)) {
    $query .= " AND name LIKE %s";
    $query_params[] = '%' . $wpdb->esc_like($name_filter) . '%';
}

$query .= " LIMIT %d OFFSET %d";
$query_params[] = $programs_per_page;
$query_params[] = $offset;

$programs = $wpdb->get_results($wpdb->prepare($query, ...$query_params));

// Total de programas
$total_programs_query = "SELECT COUNT(*) FROM {$wpdb->prefix}programs WHERE 1=1";
$total_query_params = $query_params;
$total_query_params = array_slice($total_query_params, 0, -2); // Excluir límite y offset
$total_programs = $wpdb->get_var($wpdb->prepare($total_programs_query, ...$total_query_params));
$total_pages = ceil($total_programs / $programs_per_page);

// Mostrar programas
if ($programs) :
    echo '<div class="programs-grid">';
    foreach ($programs as $program) :
        $area = $wpdb->get_row($wpdb->prepare("SELECT name, slug FROM {$wpdb->prefix}areas WHERE id = %d", $program->area_id));
        if ($area) :
            $url = home_url('/' . $area->slug . '/' . $program->slug . '/');
            ?>
            <div class="program-item">
                <h3>
                    <a href="<?php echo esc_url($url); ?>">
                        <?php echo esc_html($program->name); ?>
                    </a>
                </h3>
                <?php if (!empty($program->image_url)) : ?>
                    <div class="program-image">
                        <img src="<?php echo esc_url($program->image_url); ?>" alt="<?php echo esc_attr($program->name); ?>">
                    </div>
                <?php endif; ?>
                <p><strong>Área:</strong> <?php echo esc_html($area->name); ?></p>
            </div>
            <?php
        endif;
    endforeach;
    echo '</div>';
else :
    echo '<p>No hay programas disponibles para los filtros seleccionados.</p>';
endif;

// Paginación
if ($total_pages > 1) :
    echo '<div class="pagination">';
    for ($i = 1; $i <= $total_pages; $i++) :
        $url = add_query_arg([
            'paged' => $i,
            'area' => $area_filter,
            'name' => $name_filter,
        ]);
        $class = ($paged == $i) ? 'current disabled' : ''; // Agregar la clase "disabled" y "current" a la página actual
        $aria_disabled = ($paged == $i) ? 'aria-disabled="true"' : ''; // Deshabilitar el enlace para accesibilidad
        echo '<a href="' . esc_url($url) . '" class="' . esc_attr($class) . '" ' . $aria_disabled . '>' . esc_html($i) . '</a>';
    endfor;
    echo '</div>';
endif;
?>
</div>

<?php
get_footer();
?>
