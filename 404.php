<?php
get_header();
?>

<main id="main-content" class="site-main">
    <section class="content-area">
        <div class="container">
            <h1>404 - Página no encontrada</h1>
            <p>Lo sentimos, pero la página que estás buscando no existe.</p>
            <p><a href="<?php echo esc_url(home_url('/')); ?>">Volver a la página de inicio</a></p>
        </div>
    </section>
</main>

<?php
get_footer();
?>