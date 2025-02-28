<!-- Si es solo para pruebas, puedes dejar el CSS aquí -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/detail-program.css?29022025" type="text/css">

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
// Definir variables dinámicas para meta etiquetas
global $page_title;
$page_title = $programa->name ?? "Programa no encontrado";

// Obtener la URL actual
$url_actual = esc_url(home_url($_SERVER['REQUEST_URI']));


$descripcion = !empty($programa->descripcion) ? strip_tags($programa->descripcion) : "Descubre más sobre nuestros programas educativos.";
$imagen = !empty($programa->image_url) ? esc_url($programa->image_url) : get_template_directory_uri() . "/assets/images/default-image.jpg";


$meta_tags = "
    <meta name='description' content='" . esc_attr($descripcion) . "' />

    <!-- Open Graph (Facebook, LinkedIn) -->
    <meta property='og:title' content='" . esc_html($page_title) . "' />
    <meta property='og:description' content='" . esc_attr($descripcion) . "' />
    <meta property='og:image' content='" . esc_url($imagen) . "' />
    <meta property='og:url' content='" . esc_url($url_actual) . "' />
    <meta property='og:type' content='article' />

    <!-- Twitter Cards -->
    <meta name='twitter:card' content='summary_large_image' />
    <meta name='twitter:title' content='" . esc_html($page_title) . "' />
    <meta name='twitter:description' content='" . esc_attr($descripcion) . "' />
    <meta name='twitter:image' content='" . esc_url($imagen) . "' />
";

// Almacenar las meta etiquetas en la variable global para usarlas en header.php
$GLOBALS['extra_meta_tags'] = $meta_tags;

get_header();
?>


<section>
    <div class="zona_portada_detail" style="background-image: url(<?php echo esc_url($programa->image_url); ?>);">
        
    </div>

    <div class="zona_portada_movil">
        <img src="<?php echo esc_url($programa->image_url); ?>" alt="img_movil">
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
                                        <img src="https://mentory.pe/wp-content/uploads/2025/02/calendar-1.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                      
                                        <?php 
                                        // Obtener la fecha actual
                                        $fecha_actual = date('Y-m-d'); 
                                        
                                        // Obtener la fecha de inicio del programa
                                        $fecha_inicio = esc_attr($programa->fecha_inicio); 

                                        if ($fecha_inicio > $fecha_actual || $fecha_inicio == $fecha_actual ): ?>
                                            <!-- Mensaje de bienvenida -->
                                            Inicio: <?php echo htmlspecialchars_decode($programa->fecha_inicio); ?>
                                        <?php else: ?>
                                            <!-- Mensaje cuando la clase ya concluyó -->
                                            Proximamente
                                        <?php endif; ?>

                                    </div>
                                </div>

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


                                        <?php if (!empty($docente->url_perfil)) : ?>
                                            <a href="<?php echo esc_html($docente->url_perfil); ?>" target="_blank"> 
                                                <div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/linkedin.png"
                                                        alt="">
                                                </div>
                                            </a>
                                        <?php else : ?>
                                            
                                        <?php endif; ?>


                                        
                                        
                                    </div>
                                </div>
                                <div class="teacher_txtdesc">
                                    <?php echo esc_html(wp_unslash($docente->descripcion)); ?>
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
                                        <img src="https://mentory.pe/wp-content/uploads/2025/02/calendar-1.png"
                                            alt="">
                                    </div>
                                    <div class="detallesprogram_txt">
                                        <?php 
                                        // Obtener la fecha actual
                                        $fecha_actual = date('Y-m-d'); 
                                        
                                        // Obtener la fecha de inicio del programa
                                        $fecha_inicio = esc_attr($programa->fecha_inicio); 

                                        if ($fecha_inicio > $fecha_actual || $fecha_inicio == $fecha_actual ): ?>
                                            <!-- Mensaje de bienvenida -->
                                            Inicio: <?php echo htmlspecialchars_decode($programa->fecha_inicio); ?>
                                        <?php else: ?>
                                            <!-- Mensaje cuando la clase ya concluyó -->
                                            Proximamente
                                        <?php endif; ?>
                                    </div>
                                </div>

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

                            <div class="section_detail_lateral_items_part2">
                                <a href="https://wa.me/51952111289?text=Hola,%20quiero%20más%20información%20Sobre%20<?php echo esc_html($programa->name); ?>.">
                                    <button class="section_detail_lateral_btn">Más Información </button>
                                </a>

                                <div class="section_detail_lateral_txt">
                                    Comparte este Programa
                                </div>



                                <div class="section_detail_lateral_img_items">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo  $url_actual;?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa1.png" alt="">
                                    </a>
                                    <a href="https://www.instagram.com/mentory.pe" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa2.png" alt="">
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo  $url_actual;?>&text=Mira esta increíble página web! &via=Mentory&hashtags=web,desarrollo,tecnologia" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa3.png" alt="">
                                    </a>

                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo  $url_actual;?>&title=Mi Página Web Increíble&summary=Descubre información valiosa en esta página&source=MiSitioWeb" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/icoventa4.png" alt="">
                                    </a>



                                    
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


<section>
    <div class="certificado_portada">
        <div class="certificado_portada_container">
            <div class="certificado_portada_text">
                <div class="certificado_portada_item">
                    <span class="certificado_portada_txtsmll">
                        Comparte tus logros
                    </span> <br>
                    <span class="certificado_portada_txtsmll">
                        con tu </span> 
                        <span class="certificado_portada_txtbg">
                            Certificado
                        </span>
                    <img src="https://mentory.pe/wp-content/uploads/2025/02/vector-removed.png" alt="">
                </div>

                <div class="certificado_portada_item_texto">
                    Cuando termines el programa tendrás acceso al 
                    certificado digital para compartirlo con tu familia, 
                    amigos, empleadores y la comunidad.
                </div>
            </div>
        </div>
    </div>
</section>





<script src="<?php echo get_template_directory_uri(); ?>/assets/js/detail-programs.js"></script>

<?php
get_footer();
?>