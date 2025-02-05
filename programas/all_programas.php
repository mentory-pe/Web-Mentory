<?php
global $page_title;
$page_title = 'Programas';
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index-program.css" type="text/css">


<section class="main_program_portada">
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
                <!-- Input para búsqueda por título -->
                <div>
                    <input class="input_search" placeholder="Buscar por título del programa" type="text" id="name" name="name" 
                        value="<?php echo isset($_GET['name']) ? esc_attr($_GET['name']) : ''; ?>">
                </div>

                <!-- Lista de checkboxes para las áreas -->



                <div class="main_class_accordion">
                    <a class="accordion">ÁREAS</a>
                    <div class="accordion-content">
                        <div class="accordioncontenido">
                            <?php
                                global $wpdb;
                                $areas = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}areas");

                                // Obtener las áreas seleccionadas en la URL
                                $selected_areas = isset($_GET['area']) ? (array) $_GET['area'] : [];

                                foreach ($areas as $area) :
                                    $checked = in_array($area->id, $selected_areas) ? 'checked' : '';
                                ?>
                                    <label class="item_checkbox">
                                        <input type="checkbox" name="area[]" value="<?php echo esc_attr($area->id); ?>" <?php echo $checked; ?>>
                                        <?php echo esc_html($area->name); ?>
                                    </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>




                <!-- Botón de búsqueda -->
                <div>
                    <button class="btn_search" type="submit">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/program-index/fi_search.png" alt="">
                        Buscar
                    </button>
                </div>
            </form>
        </div>

        <div class="subcontainer_allcards">
        <?php
            // Obtener filtros de búsqueda
            $name_filter = isset($_GET['name']) ? sanitize_text_field($_GET['name']) : '';
            $selected_areas = isset($_GET['area']) ? (array) $_GET['area'] : [];

            // Configuración de paginación
            $programs_per_page = 6;
            $paged = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
            $offset = ($paged - 1) * $programs_per_page;

            // Construir consulta SQL dinámicamente
            $query = "SELECT * FROM {$wpdb->prefix}programs WHERE 1=1";
            $query_params = [];

            if (!empty($selected_areas)) {
                $placeholders = implode(',', array_fill(0, count($selected_areas), '%d'));
                $query .= " AND area_id IN ($placeholders)";
                $query_params = array_merge($query_params, $selected_areas);
            }

            if (!empty($name_filter)) {
                $query .= " AND name LIKE %s";
                $query_params[] = '%' . $wpdb->esc_like($name_filter) . '%';
            }

            // Agregar paginación
            $query .= " LIMIT %d OFFSET %d";
            $query_params[] = $programs_per_page;
            $query_params[] = $offset;

            $programs = $wpdb->get_results($wpdb->prepare($query, ...$query_params));

            // Total de programas
            $total_query = "SELECT COUNT(*) FROM {$wpdb->prefix}programs WHERE 1=1";
            $total_query_params = array_slice($query_params, 0, -2); // Excluir límite y offset
            $total_programs = $wpdb->get_var($wpdb->prepare($total_query, ...$total_query_params));
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
                                        <div><?php echo esc_html($program->nro_modulos); ?> Modulos</div>
                                    </div>
                                    <div class="card_program_datos_item">
                                        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/card_program2.png" alt=""></div>
                                        <div><?php echo esc_html($program->nro_horas); ?></div>
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
                                <?php echo esc_html($program->descripcion); ?>
                                </div>

                                <div class="card_program_movil_dates">
                                    <div class="card_program_movil_dates_item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/program-index/clock.png" alt="">
                                        <?php echo esc_html($program->nro_horas); ?>
                                    </div>

                                    <div class="card_program_movil_dates_item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/program-index/modulos.png" alt="">
                                        <?php echo esc_html($program->nro_modulos); ?> Modulos
                                    </div>
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

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index-program.js"></script>

<?php
get_footer();
?>
