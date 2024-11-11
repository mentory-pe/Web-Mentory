<?php
/* Template Name: Mi Página Personalizada */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Página Personalizada 1</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1>Mi Página Personalizada</h1>
    </header>

    <main>
        <p>Este es el contenido de mi página personalizada.</p>
    </main>

    <?php wp_footer(); ?>
</body>
</html>