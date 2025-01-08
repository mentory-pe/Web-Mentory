<?php

get_header();



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
<section>

    <div class="encabezado_zone">
        <div class="encabezado_zone_container">
            <div class="encabezado_zone_subcontainer">
                <div class="encabezado_zone_subtitle">
                    MASTERCLASS
                </div>

                <div class="encabezado_zone_title">
                    <?php echo esc_html($masterclass->nombreMasterclass); ?>
                </div>
                <div class="encabezado_zone_items">
                    <div class="encabezado_zone_img">
                        <img src="<?php echo esc_url($masterclass->img_masterclass); ?>"
                            alt="<?php echo esc_attr($masterclass->nombreMasterclass); ?>">
                    </div>
                    <div class="encabezado_zone_form">
                        <form action="">
                            <div class="encabezado_zone_form_maincontainer">
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
                        </form>
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
                        <div class="datos_masterclass_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail-masterclass/teacher.png"
                                alt="">
                        </div>
                        <div class="datos_masterclass_perfil">
                            <div class="datos_masterclass_perfil_datos">
                                <div class="datos_masterclass_perfil_subtitle">
                                    PERFIL DEL MENTOR

                                </div>
                                <div class="datos_masterclass_perfil_title">
                                    CARLOS DE LA TORRE VIVAR

                                </div>
                                <div class="datos_masterclass_perfil_cargo">
                                    Ingeniero de procesos

                                </div>

                            </div>
                            <div class="datos_masterclass_perfil_imgs">
                                imagenes
                            </div>
                        </div>
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
                                    Cuando termines el Masterclass tendrás acceso al certificado digital para compartirlo con tu familia, amigos, empleadores y la comunidad.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="datos_card">
                    <div class="datos_container">
                        <div class="datos_card_detalles">
                            <div class="datos">
                                Detalles del Masterclass
                            </div>
                            <div class="datos">
                                INICIO: 7 Noviembre
                            </div>
                            <div class="datos">
                                HORA: 10pm
                            </div>
                            <div class="datos">
                                DURACIÓN: 2 horas
                            </div>
                            <div class="datos">
                                MODALIDAD: Online
                            </div>
                        </div>
                        <div class="datos_card_btn">
                            <button>Más Información</button>
                        </div>
                        <div class="datos">
                            Corparte este Masterclass
                        </div>
                        <div class="datos">
                            Imagenes
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section>

    <div>
        <div>
            <div></div>
            <div></div>
        </div>
    </div>

</section>











<div class="masterclass-detail">
    <h1>
        <?php echo esc_html($masterclass->nombreMasterclass); ?>
    </h1>
    <p><strong>Área:</strong>
        <?php echo esc_html($area ? $area->name : 'Área no asignada'); ?>
    </p>
    <p><strong>Hora de Inicio:</strong>
        <?php echo esc_html($masterclass->hora_inicio); ?>
    </p>
    <p><strong>Fecha de Inicio:</strong>
        <?php echo esc_html($masterclass->fecha_inicio); ?>
    </p>
    <p><strong>Link de Inscripción:</strong> <a href="<?php echo esc_url($masterclass->link_inscripcion); ?>"
            target="_blank">Inscribirse aquí</a></p>
    <p><strong>Imagen:</strong></p>


    <!-- Información adicional -->
    <h2>Docentes:</h2>
    <?php
            // Obtener los docentes relacionados
            $docentes = $wpdb->get_results(
                $wpdb->prepare(
                    "SELECT d.nombre, d.apellidos, d.cargo 
                     FROM {$wpdb->prefix}docentes d
                     INNER JOIN {$wpdb->prefix}program_docente pd ON d.id = pd.docente_id
                     WHERE pd.program_id = %d",
                    $masterclass->id
                )
            );

            if ($docentes) : ?>
    <ul>
        <?php foreach ($docentes as $docente) : ?>
        <li>
            <strong>
                <?php echo esc_html($docente->nombre . ' ' . $docente->apellidos); ?>
            </strong> -
            <?php echo esc_html($docente->cargo); ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php else : ?>
    <p>No hay docentes asignados para esta masterclass.</p>
    <?php endif; ?>
</div>
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

























<?php
get_footer();
?>