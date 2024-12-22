<?php
get_header(); ?>

<main>
    <h1>Blog Todos</h1>
    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p><?php the_excerpt(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>

        <?php the_posts_pagination(); // Opcional: Para la paginación ?>
        
    <?php else : ?>
        <p>No hay entradas en el blog.</p>
    <?php endif; ?>
</main>

<?php
get_footer();