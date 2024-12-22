<?php
get_header(); 

// Obtener el título de la página actual
$page_title = is_search() ? 'Resultados de búsqueda: ' . get_search_query() : get_the_title();

?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index-program.css" type="text/css">


<section>
    <div class="program_portada">
    </div>

    <div class="program_portada_movil">
        <div class="program_portada_movil_title">
            PROGRAMAS
        </div>
    </div>
</section>


<section>
    <div class="allprograms_cards">
        <div class="allprograms_cards_container">
            <form class="search_programs" method="get" action="">

                <div>
                    <input class="input_search" placeholder="Buscar por título del programa" type="text" id="name" name="name" value="<?php echo isset($_GET['name']) ? esc_attr($_GET['name']) : ''; ?>">
                </div>

                <div>
                    <select class="input_search" name="area" id="area">
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
                    <button class="btn_search" type="submit">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/program-index/fi_search.png" alt="">
                        Buscar
                    </button>
                </div>
            </form>
        </div>

        <div class="subcontainer_allcards" style="max-width: 1600px; margin: 0 auto;">
            <?php
            // Filtros de búsqueda
            $area_filter = isset($_GET['area']) ? intval($_GET['area']) : '';
            $name_filter = isset($_GET['name']) ? sanitize_text_field($_GET['name']) : '';

            // Configuración de paginación
            $programs_per_page = 6;
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
                    $program_url = home_url("/{$area->slug}/{$program->slug}/");
                    if ($area) :
                        ?>
                        <div class="card_program">
                            <div class="card_program_imgcont">
                                <img src="<?php echo esc_url($program->image_url); ?>" alt="<?php echo esc_attr($program->name); ?>">
                            </div>
                            <div class="card_program_txtcont">
                                <div class="card_program_datos">
                                    <div class="card_program_datos_item">
                                        <div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/card_program1.png" alt="">
                                        </div>
                                        <div>6 Modulos</div>
                                    </div>
                                    <div class="card_program_datos_item">
                                        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/card_program2.png" alt=""></div>
                                        <div>40 horas</div>
                                    </div>
                                    <div class="card_program_datos_item">
                                        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/card_program3.png" alt=""></div>
                                        <div>Online en vivo</div>
                                    </div>
                                </div>
                                <div class="card_program_txt_title">
                                    <?php echo esc_html($program->name); ?>
                                </div>
                                <div class="card_program_txt_desc">
                                    Este programa internacional de alta especialización te brindará conocimientos y habilidades en el diagnóstico y mantenimiento de transformadores.
                                </div>
                                <div class="card_program_btn_cont">
                                    <a href="<?php echo esc_url($program_url); ?>">
                                        <button class="card_program_btn">Más Información</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    endif;
                endforeach;
                echo '</div>';
            else :
                echo '<p>No hay programas disponibles para los filtros seleccionados.</p>';
            endif;

            // Paginación mejorada
            if ($total_pages > 1) :
                echo '<div class="pagination">';

                // Mostrar enlace a la primera página si no estamos en ella
                if ($paged > 1) :
                    $first_page_url = add_query_arg([
                        'paged' => 1,
                        'area' => $area_filter,
                        'name' => $name_filter,
                    ]);
                    echo '<a href="' . esc_url($first_page_url) . '" class="first-page">Primera</a>';
                endif;

                // Rango de páginas visibles
                $range = 2;
                $start_page = max(1, $paged - $range);
                $end_page = min($total_pages, $paged + $range);

                if ($start_page > 1) {
                    echo '<span class="dots">...</span>';
                }

                for ($i = $start_page; $i <= $end_page; $i++) :
                    $url = add_query_arg([
                        'paged' => $i,
                        'area' => $area_filter,
                        'name' => $name_filter,
                    ]);
                    $class = ($paged == $i) ? 'current disabled' : '';
                    $aria_disabled = ($paged == $i) ? 'aria-disabled="true"' : '';
                    echo '<a href="' . esc_url($url) . '" class="' . esc_attr($class) . '" ' . $aria_disabled . '>' . esc_html($i) . '</a>';
                endfor;

                if ($end_page < $total_pages) {
                    echo '<span class="dots">...</span>';
                }

                if ($paged < $total_pages) :
                    $last_page_url = add_query_arg([
                        'paged' => $total_pages,
                        'area' => $area_filter,
                        'name' => $name_filter,
                    ]);
                    echo '<a href="' . esc_url($last_page_url) . '" class="last-page">Última</a>';
                endif;

                echo '</div>';
            endif;
            ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>
