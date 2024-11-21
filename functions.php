<?php
get_header(); // Carga el encabezado del tema (header.php)
?>

<header>
    <h1>Bienvenidos a la Presentación de Prueba</h1>
</header>

<div class="container">
    <section id="intro">
        <h2>Introducción</h2>
        <p>Esta es una página de presentación de prueba que sirve como estructura básica para una web de presentación personal o de proyecto.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, iste facere? Blanditiis a praesentium sequi, nostrum ipsam dolorem, eveniet alias, saepe doloremque velit reprehenderit cumque nihil. Non exercitationem dicta praesentium.</p>
    </section>

    <section id="gallery">
        <h2>Galería</h2>
        <div class="gallery">
            <img src="imagen1.jpg" alt="Descripción de la imagen 1">
            <img src="imagen2.jpg" alt="Descripción de la imagen 2">
        </div>
    </section>

    <section id="programs">
        <h2>Programas</h2>
        <div class="program-list">
            <?php
            global $wpdb;
            $programs = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}programs");

            if ($programs) :
                foreach ($programs as $program) :
                    // Obtener el área asociada al programa
                    $area = $wpdb->get_row($wpdb->prepare("SELECT name, slug FROM {$wpdb->prefix}areas WHERE id = %d", $program->area_id));
                    $program_url = home_url("/{$area->slug}/{$program->slug}/");
                    ?>
                    <div class="program-item">
                        <h3><a href="<?php echo esc_url($program_url); ?>"><?php echo esc_html($program->name); ?></a></h3>
                        <?php if (!empty($program->image_url)) : ?>
                            <div class="program-image">
                                <img src="<?php echo esc_url($program->image_url); ?>" alt="<?php echo esc_attr($program->name); ?>" />
                            </div>
                        <?php endif; ?>
                        <p><strong>Área:</strong> <?php echo esc_html($area->name); ?></p>
                    </div>
                <?php endforeach;
            else : ?>
                <p>No hay programas disponibles.</p>
            <?php endif; ?>
        </div>
    </section>

    <section id="contact">
        <h2>Contacto</h2>
        <div class="contact">
            <p>Para más información, contacta con nosotros:</p>
            <ul>
                <li>Email: contacto@ejemplo.com</li>
                <li>Teléfono: +123 456 7890</li>
            </ul>
        </div>
    </section>
</div>

<?php
get_footer(); // Carga el pie de página del tema (footer.php)
?>