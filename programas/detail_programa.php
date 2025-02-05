<!-- Si es solo para pruebas, puedes dejar el CSS aquí -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/detail-program.css" type="text/css">

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


// Configurar el idioma a español
setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain.1252'); 

$fecha_inicio = $programa->fecha_inicio; // Formato YYYY-MM-DD
$timestamp = strtotime($fecha_inicio);

// Formatear la fecha
$fecha_formateada = strftime("%d de %B", $timestamp);

// Mostrar la fecha formateada con la primera letra en mayúscula
// echo htmlspecialchars_decode(ucfirst($fecha_formateada));


if (isset($programa) && $programa) : ?>
<?php
global $page_title;
$page_title = ($programa->name);
get_header();
?>

<section>
    <div class="zona_portada_detail">
        <div class="zona_portada_detail_container">
            <div class="zona_portada_detail_items">
                <div class="zona_portada_detail_subtitle">
                    <?php echo esc_html($programa->tipo_especializacion); ?>
                </div>
                <div class="zona_portada_detail_title">
                    <?php echo esc_html($programa->name); ?>
                </div>

                <!-- zona exclusiva de version movil 
                  -->
                <div class="zona_portada_detail_price">
                    <div>
                        <?php echo htmlspecialchars_decode($programa->precio); ?>
                    </div>
                    <div class="zona_portada_detail_price_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa1.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa2.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa3.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa4.png" alt="">

                    </div>
                </div>



                <div class="zona_portada_detail_cards_detail">
                    <div class="zona_portada_detail_cards_detail_item">
                        <div class="zona_portada_detail_cards_detail_item_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/yellow.png"
                                alt="">
                            <img style="position: absolute; transform: translate(-43px, 12px);"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/calendar1.png"
                                alt="">
                        </div>
                        <div class="zona_portada_detail_cards_detail_item_txt">
                            <div class="zona_portada_detail_cards_detail_item_title">INICIO</div>
                            <div class="zona_portada_detail_cards_detail_item_fecha">
                                <?php echo htmlspecialchars_decode($fecha_formateada); ?>
                            </div>
                        </div>
                    </div>
                    <div class="zona_portada_detail_cards_detail_item">
                        <div class="zona_portada_detail_cards_detail_item_image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/bluecard.png"
                                alt="">
                            <img style="position: absolute; transform: translate(-43px, 12px);"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/live.png"
                                alt="">
                        </div>
                        <div class="zona_portada_detail_cards_detail_item_txt">
                            <div class="zona_portada_detail_cards_detail_item_title">MODALIDAD</div>
                            <div class="zona_portada_detail_cards_detail_item_fecha">Online en vivo</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zona_portada_detail_items_imgzone">
                <?php if (!empty($programa->link_video)) : ?>
                    <img src="<?php echo esc_url($programa->image_url); ?>" alt="<?php echo esc_attr($programa->name); ?>">
                    <div class="play-icon"></div>
                <?php else : ?>
                    <!-- Opcional: Mostrar un marcador de posición si no hay imagen -->
                     <style>
                        .zona_portada_detail_items_imgzone::after{
                            background-color: transparent !important;
                        }
                     </style>
                    <img src="<?php echo esc_url($programa->image_url); ?>" alt="<?php echo esc_attr($programa->name); ?>">
                <?php endif; ?>
            </div>

            <div class="zona_portada_detail_items_imgzone_condicional">
                
            </div>

        </div>
    </div>
</section>






<section>
    <div class="section_detail">

        <div class="section_detail_container">

            <div class="section_detail_buttons_container">
                <div class="tab-buttons">
                    <button class="tab-button active" data-target="content1">Descripción general</button>
                    <button class="tab-button" data-target="content2">Malla Curricular </button>
                    <button class="tab-button" data-target="content3">Instructor</button>
                </div>
            </div>

            <div class="section_detail_txt_container">

                <div class="section_detail_txt_container_tabitems">
                    <!-- Contenedor de los tabs -->
                    <div class="tabs">
                        <div id="content1" class="tab-content active">


                            <div id="idtab1" class="section_detail_lateral_items">
                                <div class="detallesprogram">
                                    <div class="detallesprogram_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle1.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        <?php echo htmlspecialchars_decode($programa->tipo_certificacion); ?>
                                    </div>
                                </div>

                                <div class="detallesprogram">
                                    <div class="detallesprogram_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle2.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        2 veces por semana
                                    </div>
                                </div>

                                <div class="detallesprogram">
                                    <div class="detallesprogram_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle3.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        <?php echo htmlspecialchars_decode($programa->hora_inicio); ?> a
                                        <?php echo htmlspecialchars_decode($programa->hora_fin); ?>
                                    </div>
                                </div>

                                <div class="detallesprogram">
                                    <div class="detallesprogram_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle4.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        <?php echo htmlspecialchars_decode($programa->nro_horas); ?>
                                    </div>
                                </div>


                                <!-- <div class="detallesprogram_precio">
                                        <?php echo htmlspecialchars_decode($programa->precio); ?>
                                    </div> -->
                            </div>



                            <div class="contenttab1">
                                <div class="contenttab1_title">
                                    Descripción
                                </div>
                                <div class="contenttab1_desc">

                                    <?php echo htmlspecialchars_decode($programa->descripcion); ?>

                                </div>
                            </div>


                            <div class="contenttab1_aprenderas">
                                <div class="contenttab1_aprenderas_title">¿Qué aprenderás? </div>
                                <div class="contenttab1_aprenderas_txtdetail">
                                    <?php echo htmlspecialchars_decode($programa->que_aprenderas); ?>
                                </div>
                            </div>


                            <div class="contenttab1_cert">
                                <div class="contenttab1_cert_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/certificado.webp"
                                        alt="">
                                </div>
                                <div class="contenttab1_cert_txtcont">
                                    <div class="contenttab1_cert_txtcont_title">
                                        ¡Comparte tus logros con un certificado!
                                    </div>
                                    <div class="contenttab1_cert_txtcont_txt">
                                        Cuando termines el curso tendrás acceso al certificado digital para compartirlo
                                        con tu familia, amigos, empleadores y la comunidad.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="content2" class="tab-content">
                            <div class="tap2content">
                                <div class="tap2content_subcontainer">
                                    <div class="tap2content_title">
                                        Malla Curricular del Programa
                                    </div>
                                    <div class="tap2content_card_container">
                                        <div class="tap2content_card_title">
                                            <div>• <img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/detailicon1.png"
                                                    alt="">
                                                <?php echo htmlspecialchars_decode($programa->nro_modulos); ?> Modulos
                                            </div>
                                            <div>• <img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/detailicon2.png"
                                                    alt="">
                                                <?php echo htmlspecialchars_decode($programa->nro_horas); ?>
                                            </div>
                                        </div>
                                        <div class="tap2content_card_accordion">


                                        <?php echo htmlspecialchars_decode($programa->malla_curricular); ?>


                                        </div>
                                    </div>

                                    <div id="tab2Container" class="section_detail_lateral_items">
                                        <div class="detallesprogram">
                                            <div class="detallesprogram_img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle1.png"
                                                    alt="">
                                            </div>
                                            <div class="detallesprogram_txt">
                                                <?php echo htmlspecialchars_decode($programa->tipo_certificacion); ?>
                                            </div>
                                        </div>

                                        <div class="detallesprogram">
                                            <div class="detallesprogram_img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle2.png"
                                                    alt="">
                                            </div>
                                            <div class="detallesprogram_txt">
                                                2 veces por semana
                                            </div>
                                        </div>

                                        <div class="detallesprogram">
                                            <div class="detallesprogram_img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle3.png"
                                                    alt="">
                                            </div>
                                            <div class="detallesprogram_txt">
                                                <?php echo htmlspecialchars_decode($programa->hora_inicio); ?> a
                                                <?php echo htmlspecialchars_decode($programa->hora_fin); ?>
                                            </div>
                                        </div>

                                        <div class="detallesprogram">
                                            <div class="detallesprogram_img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle4.png"
                                                    alt="">
                                            </div>
                                            <div class="detallesprogram_txt">
                                                <?php echo htmlspecialchars_decode($programa->nro_horas); ?>
                                            </div>
                                        </div>


                                        <!-- <div class="detallesprogram_precio">
                                        <?php echo htmlspecialchars_decode($programa->precio); ?>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div id="content3" class="tab-content">
                            <?php
                                // Obtener los docentes asociados al programa
                                $docentes = mentory_get_docentes_by_program($programa->id);
                                if (!empty($docentes)) : ?>
                            <?php foreach ($docentes as $docente) : ?>
                            <div class="teacher_container">
                                <div class="teacher_imginfo">
                                    <div class="teacher_img">
                                        <img src="<?php echo esc_html($docente->foto_url); ?>"
                                            alt="<?php echo esc_html($docente->nombre); ?>">
                                    </div>
                                    <div class="teacher_descdoc_container">
                                        <div class="teacher_descdoc_item">
                                            <div class="teacher_descdoc_item_subtitle">PERFIL DEL MENTOR</div>
                                            <div class="teacher_descdoc_item_title">
                                                <?php echo esc_html($docente->nombre . ' ' . $docente->apellidos); ?>
                                            </div>
                                            <div class="teacher_descdoc_item_cargo">
                                                <?php echo esc_html($docente->cargo); ?>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/linkedin.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher_txtdesc">
                                    <?php echo esc_html($docente->descripcion); ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="section_detail_txt_container_tabitem">
                        <div class="section_detail_lateral">
                            <div class="section_detail_lateral_items">
                                <div class="detallesprogram_title">Detalles del Programa</div>
                                <div class="detallesprogram">
                                    <div class="detallesprogram_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle1.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        <?php echo htmlspecialchars_decode($programa->tipo_certificacion); ?>
                                    </div>
                                </div>

                                <div class="detallesprogram">
                                    <div class="detallesprogram_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle2.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        2 veces por semana
                                    </div>
                                </div>

                                <div class="detallesprogram">
                                    <div class="detallesprogram_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle3.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        <?php echo htmlspecialchars_decode($programa->hora_inicio); ?> a
                                        <?php echo htmlspecialchars_decode($programa->hora_fin); ?>
                                    </div>
                                </div>

                                <div class="detallesprogram">
                                    <div class="detallesprogram_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icodetalle4.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        <?php echo htmlspecialchars_decode($programa->nro_horas); ?>
                                    </div>
                                </div>


                                <div class="detallesprogram_precio">
                                    <?php echo htmlspecialchars_decode($programa->precio); ?>
                                </div>
                            </div>

                            <div class="section_detail_lateral_items_part2">
                                <a href="">
                                    <button class="section_detail_lateral_btn">Más Información </button>
                                </a>

                                <div class="section_detail_lateral_txt">
                                    Comparte este Programa
                                </div>

                                <div class="section_detail_lateral_img_items">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa1.png"
                                        alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa2.png"
                                        alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa3.png"
                                        alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa4.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>





            </div>

        </div>
    </div>
</section>






<?php else : ?>

programa no encontrado
<?php endif; ?>








<script src="<?php echo get_template_directory_uri(); ?>/assets/js/detail-programs.js"></script>

<?php
get_footer();
?>