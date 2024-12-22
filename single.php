<?php get_header(); ?>

<?php
// Obtener los datos de la publicación actual
$year = get_the_date('Y'); // Año
$month = get_the_date('m'); // Mes
$day = get_the_date('d'); // Día

// Construir la URL del nivel anterior (listado)
$listado_url = home_url("/$year/$month/$day/");
?>
<a href="<?php echo esc_url($listado_url); ?>">Volver al listado</a>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p>No se encontró la publicación.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
