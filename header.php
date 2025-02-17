<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        global $page_title;
        if (!isset($page_title)) {
            $page_title = get_the_title(); // Si no está definido, usa el título normal
        }
    ?>

    <title><?php echo esc_html($page_title); ?></title>

    <?php wp_head(); ?> <!-- Llama a la cabecera de WordPress (necesario para plugins y funciones) -->

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

    <!-- Llamar al CSS directamente en la plantilla -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" type="text/css">

</head>

<body <?php body_class(); ?>>

    <header>
        <div style="" class="header_main">
            <div class="header_submain">
                <div class="header_items">
                    <div class="header_btn_item_img">
                        <a href="<?php echo home_url('/'); ?>" class="">
                            <img loading="lazy" id="megaMenu-logo"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logomentory.png"
                                alt="menu_logo">
                        </a>
                    </div>
                    <div class="header_btn_items" id="">
                        <a href="<?php echo home_url('/'); ?>">
                            <button class="item__menu">
                                <span>Inicio</span>
                            </button>
                        </a>
                        <a href="<?php echo home_url('/nosotros/'); ?>">
                            <button class="item__menu">
                                <span>Nosotros</span>
                            </button>
                        </a>
                        <a href="<?php echo home_url('/programas/'); ?>">
                            <button class="item__menu">
                                <span>Programas</span>
                            </button>
                        </a>
                        <a href="<?php echo home_url('/masterclass/'); ?>">
                            <button class="item__menu">
                                <span>Masterclass</span>
                            </button>
                        </a>
                        <a href="<?php echo home_url('/empresas/'); ?>">
                            <button class="item__menu">
                                <span>Para Empresas</span>
                            </button>
                        </a>
                    </div>
                    <div class="header_subtns" id="">
                        <a id="" class="" target="_blank" href="">
                            <button class="item__aulavirtual">
                                <span>Aula Virtual</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_main_movil">
            <div class="header_main_movil_parte1">
                <a href="<?php echo home_url('/'); ?>">
                    <img loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logomentory.png"
                        alt="menu_logo">
                </a>
            </div>
            <div class="header_main_movil_parte2">
                <button class="btn_movil_header_aula">Aula Virtual</button>
                <button id="open-dialog" class="btn_movil_header_burger">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-movil.png"
                        alt="menu_logo">
                </button>
            </div>



            <div class="dialog-overlay" id="dialog-overlay">
                <div class="dialog">
                    <div class="dialog_btnclose">
                        <button class="close-btn" id="close-dialog">✖</button>
                    </div>
                    <div class="dialog_container">

                        <a href="<?php echo home_url('/'); ?>">
                            <div class="dialog_container_item">
                                Inicio
                            </div>
                        </a>

                        <a href="<?php echo home_url('/nosotros/'); ?>">
                            <div class="dialog_container_item">
                                Nosotros
                            </div>
                        </a>

                        <a href="<?php echo home_url('/programas/'); ?>">
                            <div class="dialog_container_item">
                                Programas
                            </div>
                        </a>

                        <a href="<?php echo home_url('/masterclass/'); ?>">
                            <div class="dialog_container_item">
                                Masterclass
                            </div>
                        </a>

                        <a href="<?php echo home_url('/empresas/'); ?>">
                            <div class="dialog_container_item">
                                Para Empresas
                            </div>
                        </a>

                    </div>
                </div>
            </div>


        </div>
    </header>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main-index.js"></script>