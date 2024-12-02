<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' | '; } ?>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?> <!-- Llama a la cabecera de WordPress (necesario para plugins y funciones) -->

    <!-- Llamar al CSS directamente en la plantilla -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css"
        type="text/css">

</head>

<body <?php body_class(); ?>>

    <header style="background-color: #ffffff">
        <div style="" class="header_main">
            <div class="header_submain">
                <div class="header_items">
                    <div class="header_btn_item_img">
                        <a class="">
                            <img loading="lazy" id="megaMenu-logo"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logomentory.png"
                                alt="menu_logo">
                        </a>
                    </div>
                    <div class="header_btn_items" id="">
                        <a href="">
                            <button class="item__menu">
                                <span>Inicio</span>
                            </button>
                        </a>
                        <a href="">
                            <button class="item__menu">
                                <span>Nosotros</span>
                            </button>
                        </a>
                        <a href="<?php echo home_url('/programas/'); ?>">
                            <button class="item__menu">
                                <span>Programas</span>
                            </button>
                        </a>
                        <a href="">
                            <button class="item__menu">
                                <span>Masterclass</span>
                            </button>
                        </a>
                        <a href="">
                            <button class="item__menu">
                                <span>Mentory in house</span>
                            </button>
                        </a>
                    </div>
                    <div class="header_subtns" id="">
                        <a id="">
                                <img loading="lazy" id="megaMenu-logo"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png"
                                alt="menu_logo">
                        </a>
                        <a id="" class="" target="_blank" href="">
                            <button class="item__aulavirtual">
                                <span>Aula Virtual</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>