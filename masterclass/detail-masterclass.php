<?php



// Obtener el slug de la masterclass desde la URL
$masterclass_slug = get_query_var('masterclass_slug');

// Verificar si se encontró el slug de la masterclass
if ($masterclass_slug) {
    // Obtener la masterclass de la base de datos
    $masterclass = mentory_get_masterclass_by_slug($masterclass_slug);

    if ($masterclass) {
        // Obtener el área relacionada
        global $wpdb;
        $area = $wpdb->get_row(
            $wpdb->prepare(
                "SELECT name FROM {$wpdb->prefix}areas WHERE id = %d",
                $masterclass->area_id
            )
        );

        // Mostrar los detalles de la masterclass
        ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/detail-masterclas.css"
    type="text/css">

    <?php
    global $page_title;
    $page_title = ($masterclass->nombreMasterclass);
    get_header();
    ?>
<section>

    <div class="encabezado_zone">
        <div class="encabezado_zone_container">
            <div class="encabezado_zone_subcontainer">
            <!-- item exclusivo de movil  -->
                <div class="encabezado_zone_img_movil">
                    <img src="<?php echo esc_url($masterclass->img_masterclass); ?>"
                    alt="<?php echo esc_attr($masterclass->nombreMasterclass); ?>">
                </div>


                <div class="encabezado_zone_subtitle">
                    MASTERCLASS
                </div>

                <div class="encabezado_zone_title">
                    <?php echo esc_html($masterclass->nombreMasterclass); ?>
                </div>

                <!-- item exclusivo de movil  -->
                <div class="encabezado_zone_movil_detalles" >
                    <div class="datos_card_detalles">
                        <div class="datoscard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/imgcard1.png"
                                alt="">
                            INICIO: <?php echo esc_attr($masterclass->fecha_inicio); ?>
                        </div>
                        <div class="datoscard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/imgcard2.png"
                                alt="">
                            HORA: <?php echo esc_attr($masterclass->hora_inicio); ?>
                        </div>
                        <div class="datoscard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/imgcard3.png"
                                alt="">
                            DURACIÓN: 2 horas
                        </div>
                        <div class="datoscard">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/imgcard4.png"
                                alt="">
                            MODALIDAD: Online
                        </div>
                    </div>
                </div>

                <div class="encabezado_zone_items">
                    <div class="encabezado_zone_img">
                        <img src="<?php echo esc_url($masterclass->img_masterclass); ?>"
                            alt="<?php echo esc_attr($masterclass->nombreMasterclass); ?>">
                    </div>
                    <div class="encabezado_zone_form">
                        <!-- <form action="">
                            <div class="encabezado_zone_form_maincontainer">
                                <div class="title_registro">
                                    Registro
                                </div>
                                <div class="encabezado_zone_form_container">
                                    <div class="encabezado_zone_form_lado">
                                        <div>
                                            <label for="nombre">Nombre</label> <br>
                                            <input type="text" id="nombre" name="nombre">
                                        </div>

                                        <div>
                                            <label for="correo">Correo</label> <br>
                                            <input type="text" id="correo" name="correo">
                                        </div>

                                        <div>
                                            <label for="industria">Industria</label> <br>
                                            <input type="text" id="industria" name="industria">
                                        </div>

                                    </div>

                                    <div class="encabezado_zone_form_lado">
                                        <div>
                                            <label for="apellido">Apellido</label> <br>
                                            <input type="text" id="apellido" name="apellido">
                                        </div>

                                        <div>
                                            <label for="telefono">Telefono</label> <br>
                                            <input type="text" id="telefono" name="telefono">
                                        </div>

                                        <div>
                                            <label for="puesto">Puesto de trabajo</label> <br>
                                            <input type="text" id="puesto" name="puesto">
                                        </div>

                                    </div>
                                </div>

                                <button class="btn_send">Asistir</button>
                            </div>
                        </form> -->

                        <p>
                            <?php 
                            // Obtener la fecha actual
                            $fecha_actual = date('Y-m-d'); 
                            
                            // Obtener la fecha de inicio de la masterclass
                            $fecha_inicio = esc_attr($masterclass->fecha_inicio); 

                            if ($fecha_inicio > $fecha_actual || $fecha_inicio == $fecha_actual ): ?>
                                <!-- Mensaje de bienvenida -->
                                <div class="message_container">
                                    <div class="message_ingreso_title">
                                        Ingreso
                                    </div>

                                    <div class="message_ingreso_text">
                                        Puedes ingresar al enlace de la reunión
                                    </div>

                                    <div class="message_ingreso_subtext">
                                        Haciendo Clic <a href="<?php echo esc_url($masterclass->link_inscripcion); ?>" style="text-decoration: none;" target="_blank"><span class="message_ingreso_link"> AQUÍ</span></a> 
                                    </div>
                                </div>
                            <?php else: ?>
                                <!-- Mensaje cuando la clase ya concluyó -->
                                🔴 <strong>La clase ya ha concluido.</strong>
                            <?php endif; ?>
                        </p>



                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




<section>
    <div class="datos">
        <div class="datos_container">
            <div class="datos_title">
                Expositor
            </div>
            <div class="datos_sections">
                <div class="datos_masterclass">
                    <div class="datos_masterclass_master_section_one">


                        <!-- Información adicional -->
                        <?php
                                // Obtener los docentes relacionados
                                $docentes = $wpdb->get_results(
                                    $wpdb->prepare(
                                        "SELECT d.* 
                            FROM {$wpdb->prefix}docentes d
                            INNER JOIN {$wpdb->prefix}masterclass_docente md ON d.id = md.docente_id
                            WHERE md.masterclass_id = %d",
                                        $masterclass->id
                                    )
                                );

                                if ($docentes) : ?>

                        <?php foreach ($docentes as $docente) : ?>

                        <div class="datos_masterclass_img">
                            <img src="<?php echo esc_html($docente->foto_url); ?>" alt="">
                        </div>
                        <div class="datos_masterclass_perfil">
                            <div class="datos_masterclass_perfil_datos">
                                <div class="datos_masterclass_perfil_subtitle">
                                    PERFIL DEL MENTOR

                                </div>
                                <div class="datos_masterclass_perfil_title">
                                    <?php echo esc_html($docente->nombre . ' ' . $docente->apellidos); ?>

                                </div>
                                <div class="datos_masterclass_perfil_cargo">
                                    <?php echo esc_html($docente->cargo); ?>
                                </div>

                            </div>
                            <div class="datos_masterclass_perfil_imgs">
                                <a href="<?php echo esc_html($docente->url_perfil); ?>" target="_blank"> 
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-programas/linkedin.png"
                                            alt="">
                                    </div>
                                </a>
                            </div>
                        </div>




                        <?php endforeach; ?>

                        <?php else : ?>
                        <p>No hay docentes asignados para esta masterclass.</p>
                        <?php endif; ?>




                    </div>

                    <div class="datos_masterclass_master_section_two">
                        <div class="datos_masterclass_master_section_two_subcontainer">
                            <div class="datos_masterclass_master_section_two_imgcontainer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/certificado.webp"
                                    alt="">
                            </div>
                            <div class="datos_masterclass_master_section_two_txtsection">
                                <div class="datos_masterclass_master_section_two_titlesection">
                                    ¡Comparte tus logros con un certificado!
                                </div>

                                <div class="datos_masterclass_master_section_two_textsection">
                                    Cuando termines el Masterclass tendrás acceso al certificado digital para
                                    compartirlo con tu familia, amigos, empleadores y la comunidad.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="datos_card">
                    <div class="datos_card_container">
                        <div class="datos_card_detalles">
                            <div class="datoscard_title">
                                Detalles del Masterclass
                            </div>
                            <div class="datoscard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/imgcard1.png"
                                    alt="">
                                INICIO: <?php echo esc_attr($masterclass->fecha_inicio); ?>
                            </div>
                            <div class="datoscard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/imgcard2.png"
                                    alt="">
                                HORA: <?php echo esc_attr($masterclass->hora_inicio); ?>
                            </div>
                            <div class="datoscard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/imgcard3.png"
                                    alt="">
                                DURACIÓN: 2 horas
                            </div>
                            <div class="datoscard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/imgcard4.png"
                                    alt="">
                                MODALIDAD: Online
                            </div>
                        </div>
                        <div class="datos_card_btn">
                            <button>Más Información</button>
                        </div>
                        <div class="datoscard_msg">
                            Corparte este Masterclass
                        </div>
                        <div class="datoscard_icons">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/ico1.png"
                                    alt="">
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/ico2.png"
                                    alt="">
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/ico3.png"
                                    alt="">
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/ico4.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php
    } else {
        // Si no se encuentra la masterclass en la base de datos
        echo '<p>Masterclass no encontrada.</p>';
    }
} else {
    // Si no se pasó un slug válido
    echo '<p>Por favor, seleccione una masterclass válida.</p>';
}
?>



<section>

    <div class="proximos">
        <div class="proximos_container">
            <div class="proximos_title">Proximos Masterclass</div>
            <div class="proximos_slide">
                <div class="proximos_slide_container">
                    <div class="my-slider-masterclass">

                        <?php
                            // Obtener la fecha actual
                            $current_date = date('Y-m-d');

                            // Consultar las masterclasses que no han sucedido
                            $upcoming_masterclasses = $wpdb->get_results(
                                $wpdb->prepare(
                                    "SELECT * FROM {$wpdb->prefix}masterclass WHERE fecha_inicio >= %s ORDER BY fecha_inicio ASC",
                                    $current_date
                                )
                            );

                            if ($upcoming_masterclasses) : ?>

                            <?php foreach ($upcoming_masterclasses as $masterclass) : ?>



                            <!-- <p><strong>Área:</strong>
                                <?php
                                                // Obtener el área relacionada
                                                $area = $wpdb->get_row(
                                                    $wpdb->prepare(
                                                        "SELECT name FROM {$wpdb->prefix}areas WHERE id = %d",
                                                        $masterclass->area_id
                                                    )
                                                );
                                                echo esc_html($area ? $area->name : 'Área no asignada');
                                                ?>
                            </p> -->


                            <div class="masterclass_card_container_main">
                                <div class="masterclass_card_container_item">
                                    <div class="masterclass_card">
                                        <div class="masterclass_card_img_content">
                                            <img src="<?php echo esc_html($masterclass->img_masterclass); ?>" alt="">
                                        </div>
                                        <div class="masterclass_card_information">
                                            <div class="masterclass_card_inf_title">
                                            <?php echo esc_html($masterclass->nombreMasterclass); ?>
                                            </div>
                                            <div class="masterclass_card_subcont">
                                                <div class="masterclass_card_item">
                                                    <div><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/index/teacher_item1.png"
                                                            alt=""></div>
                                                    <div>
                                                    <?php echo esc_html($masterclass->fecha_inicio); ?>
                                                    </div>
                                                </div>
                                                <div class="masterclass_card_item">
                                                    <div><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/index/teacher_item2.png"
                                                            alt=""></div>
                                                    <div>Hora :
                                                    <?php echo esc_html($masterclass->hora_inicio); ?>
                                                    </div>
                                                </div>
                                                <div id="masterclass_card_item_online" class="masterclass_card_item">
                                                    <div><img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/index/teacher_item3.png"
                                                            alt=""></div>
                                                    <div>Online</div>
                                                </div>
                                            </div>
                                            <div class="masterclass_card_teacher">


                                                <!-- Obtener y mostrar los docentes asociados -->
                                                <?php
                                                $docentes = $wpdb->get_results(
                                                    $wpdb->prepare(
                                                        "SELECT d.nombre, d.apellidos, d.cargo, d.foto_url 
                                                        FROM {$wpdb->prefix}docentes d
                                                        INNER JOIN {$wpdb->prefix}masterclass_docente md 
                                                        ON d.id = md.docente_id
                                                        WHERE md.masterclass_id = %d",
                                                        $masterclass->id
                                                    )
                                                );

                                                if ($docentes) : ?>
                                                    <?php foreach ($docentes as $docente) : ?>
                                                    
                                                        <div class="master_teacher_content1">
                                                            <div class="master_teacher_imgcont">
                                                                <img style="border-radius: 50%;" src="<?php echo esc_url($docente->foto_url); ?>" alt="">
                                                            </div>
                                                            <div class="master_teacher_txtinfo">
                                                                <div class="master_teacher_name">
                                                                <?php echo esc_html($docente->nombre . ' ' . $docente->apellidos); ?>
                                                                </div>
                                                                <div class="master_teacher_cargo">
                                                                <?php echo esc_html($docente->cargo); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    <?php endforeach; ?>

                                                <?php else : ?>
                                                    <p><em>No hay docentes asignados.</em></p>
                                                <?php endif; ?>


                                                <div class="master_teacher_content2">
                                                    <a href="ssssss">
                                                        <button class="master_teacher_content2_btn">
                                                            ASISTIR
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/arrow.png"
                                                                alt="">
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>

                            <?php else : ?>
                            <p>No hay masterclasses próximas disponibles.</p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>





















<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('.my-slider-masterclass').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            speed: 300,
            infinite: true,
            autoplaySpeed: 5000,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>











<?php
get_footer();
?>