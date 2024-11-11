<?php
get_header(); // Carga el encabezado del tema (header.php)
?>


<!-- Llamar al CSS directamente en la plantilla -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets//css/general-styles.css" type="text/css">

<main id="main-content" class="site-main">
    <section class="content-area">
        <div class="container">
            <h1>Detalle de la Página</h1>
            <p>Este es el contenido de la página detail.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam ipsa natus, velit qui placeat debitis consectetur labore expedita excepturi tempore nobis sed, cumque dolorum veniam, eveniet praesentium impedit rem adipisci.</p>
        </div>
    </section>
</main>

<?php
get_footer();
?>