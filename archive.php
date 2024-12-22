<?php get_header(); ?>

<h1>Listado de Blogs</h1>
<div class="blog-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; else : ?>
        <p>No hay entradas disponibles.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>