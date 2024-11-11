<?php
/* Template Name: Página Personalizada */
get_header();

// Obtén el nombre de la página de la URL
$page_slug = get_query_var('pagename');

?>
<main id="main-content" class="site-main">
    <section class="content-area">
        <div class="container">
            <?php if ($page_slug === 'detail'): ?>
                <h1>Página de Detalle</h1>
                <p>Este es el contenido de la página detail.</p>

            <?php elseif ($page_slug === 'about'): ?>
                <h1>Acerca de Nosotros</h1>
                <p>Este es el contenido de la página about.</p>

            <?php else: ?>
                <h1>Página Personalizada</h1>
                <p>Contenido personalizado para la página: <?php echo esc_html($page_slug); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>