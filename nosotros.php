<div class="hero">
<?php
get_header(); // Carga el encabezado del tema (header.php)
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nosotros-styles.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nosotros-mediaqueries.css" type="text/css">
</div>

<section id="about">
    <div class="about-container">
        <div class="about-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 3@4x.png"
            alt="">
        </div>
        <div class="about-details-container">
            <div class="about-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/quienes-somos.png"
                alt="">
            </div>
            <div class="about-text-container">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis minus culpa sequi nostrum? Nihil enim veritatis iusto suscipit corrupti dolores deleniti adipisci vitae dolorum corporis animi magni, ipsa unde perspiciatis!</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit modi repudiandae, commodi cupiditate incidunt ipsam vitae recusandae. Molestias, repellendus ratione deleniti dolores ullam necessitatibus consequuntur repellat, aperiam tenetur ad ea?</p>
            </div>
        </div>
    </div>
</section>

<section id="mission-vision">
    <div class="mission-vision-container">
        <div class="mission-vision-card">
            <div class="mission-vision-card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 4@4x.png"
                alt="">
            </div>
            <div class="mission-vision-card-details">
                <h2>MISIÓN</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nesciunt autem ratione? Distinctio veniam quod error omnis, dolore quibusdam repellendus tempora magni, cumque molestias suscipit expedita, voluptatum neque reprehenderit blanditiis!</p>
            </div>
        </div>
        <div class="mission-vision-card">
            <div class="mission-vision-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 5@4x.png"
                    alt="">
                </div>
            <div class="mission-vision-card-details">
                <h2>VISIÓN</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nesciunt autem ratione? Distinctio veniam quod error omnis, dolore quibusdam repellendus tempora magni, cumque molestias suscipit expedita, voluptatum neque reprehenderit blanditiis!</p>
            </div>
        </div>
    </div>
</section>

<section id="pillars">
    <div class="pillars-container">
        <h2>NUESTROS <span>PILARES</span></h2>
        <div class="pillars-details">
            <div class="pillars-details-card">
                <div class="pillars-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 9@4x.png"
                    alt="">
                </div>
                <div class="pillars-card-text">
                    <h3>Compromiso</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas veniam beatae dignissimos quos itaque nobis dicta ipsum ut in, id animi accusantium nemo a sit asperiores magnam ex aut fuga.</p>
                </div>
            </div>
            <div class="pillars-details-card">
                <div class="pillars-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 8@4x.png"
                    alt="">
                </div>
                <div class="pillars-card-text">
                    <h3>Innovación</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas veniam beatae dignissimos quos itaque nobis dicta ipsum ut in, id animi accusantium nemo a sit asperiores magnam ex aut fuga.</p>
                </div>
            </div>
            <div class="pillars-details-card">
                <div class="pillars-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 7@4x.png"
                    alt="">
                </div>
                <div class="pillars-card-text">
                    <h3>Mejora continua</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas veniam beatae dignissimos quos itaque nobis dicta ipsum ut in, id animi accusantium nemo a sit asperiores magnam ex aut fuga.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 
<section id="services">
    <div class="services-container">
        <div class="services-card">
            <div class="services-card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.png"
                alt="">
            </div>
            <div class="services-card-details">
                <h3>Programa de <span>Especialización <br>Diseñados</span> para tu Éxito</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt cum repellat iusto omnis enim saepe minus itaque. Aut corrupti facilis illum amet deleniti non libero tenetur beatae omnis asperiores?</p>
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum odio optio adipisci consectetur, illum tenetur, ratione blanditiis tempore a similique, nihil quidem non deleniti molestiae. Quo, porro illo. Nostrum, cum.</p>
            </div>
        </div>
        <div class="services-card">
            <div class="services-card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.png"
                alt="">
            </div>
            <div class="services-card-details">
                <h3>Clases en <span>Vivo</span> y Experiencia <span>Interactiva</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt cum repellat iusto omnis enim saepe minus itaque. Aut corrupti facilis illum amet deleniti non libero tenetur beatae omnis asperiores?. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum odio optio adipisci consectetur, illum tenetur, ratione blanditiis tempore a similique, nihil quidem non deleniti molestiae. Quo, porro illo. Nostrum, cum.</p>
            </div>
        </div>
        <div class="services-card">
            <div class="services-card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.png"
                alt="">
            </div>
            <div class="services-card-details">
                <h3>Talleres <span>Prácticos</span> y Evaluaciones <span>Personalizadas</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt cum repellat iusto omnis enim saepe minus itaque. Aut corrupti facilis illum amet deleniti non libero tenetur beatae omnis asperiores?</p>
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum odio optio adipisci consectetur, illum tenetur, ratione blanditiis tempore a similique, nihil quidem non deleniti molestiae. Quo, porro illo. Nostrum, cum.</p>
            </div>
        </div>
    </div>
</section> -->


<section id="services">
    <div class="area_container">
        <div class="area_section">

            <div class="area_section_slide">

                <div class="slider-areas">
                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 10@4x.png"
                                    alt="">
                            </div>
                            <div class="service-card-details">
                                <div class="area_section_card_title">
                                    Programa de <span>Especialización <br>Diseñados</span> para tu Éxito
                                </div>
                                <div class="service-card-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus qui voluptatibus facilis exercitationem. Consequatur, nostrum laborum! Eos architecto, dolores, porro voluptates repellendus laboriosam excepturi culpa fugit quo qui veniam quos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 11@4x.png"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Clases en <span>Vivo</span> y Experiencia <span>Interactiva</span>
                            </div>
                            <div class="service-card-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus qui voluptatibus facilis exercitationem. Consequatur, nostrum laborum! Eos architecto, dolores, porro voluptates repellendus laboriosam excepturi culpa fugit quo qui veniam quos.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 12@4x.png"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Talleres <span>Prácticos</span> y Evaluaciones <span>Personalizadas</span>
                            </div>
                            <div class="service-card-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus qui voluptatibus facilis exercitationem. Consequatur, nostrum laborum! Eos architecto, dolores, porro voluptates repellendus laboriosam excepturi culpa fugit quo qui veniam quos.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 10@4x.png"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Programa de <span>Especialización <br>Diseñados</span> para tu Éxito
                            </div>
                            <div class="service-card-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus qui voluptatibus facilis exercitationem. Consequatur, nostrum laborum! Eos architecto, dolores, porro voluptates repellendus laboriosam excepturi culpa fugit quo qui veniam quos.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 11@4x.png"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Clases en <span>Vivo</span> y Experiencia <span>Interactiva</span>
                            </div>
                            <div class="service-card-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus qui voluptatibus facilis exercitationem. Consequatur, nostrum laborum! Eos architecto, dolores, porro voluptates repellendus laboriosam excepturi culpa fugit quo qui veniam quos.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 12@4x.png"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Talleres <span>Prácticos</span> y Evaluaciones <span>Personalizadas</span>
                            </div>
                            <div class="service-card-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus qui voluptatibus facilis exercitationem. Consequatur, nostrum laborum! Eos architecto, dolores, porro voluptates repellendus laboriosam excepturi culpa fugit quo qui veniam quos.</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.png"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Programa de <span>Especialización <br>Diseñados</span> para tu Éxito
                            </div>
                            <div class="service-card-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus qui voluptatibus facilis exercitationem. Consequatur, nostrum laborum! Eos architecto, dolores, porro voluptates repellendus laboriosam excepturi culpa fugit quo qui veniam quos.</p>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.png"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Clases en <span>Vivo</span> y Experiencia <span>Interactiva</span>
                            </div>
                            <div class="service-card-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus qui voluptatibus facilis exercitationem. Consequatur, nostrum laborum! Eos architecto, dolores, porro voluptates repellendus laboriosam excepturi culpa fugit quo qui veniam quos.</p>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</section>



<!-- <section id="teachers">
    <div class="teachers-container">
        <div class="teachers-details-1">
            <div class="teachers-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/nuestros-docentes.png"
                alt="">
            </div>
            <div class="teachers-img-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
                alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
                alt="">
            </div>
        </div>
        <div class="teachers-details-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
            alt="">
        </div>
    </div>
</section> -->



<section id="teachers">
    <div class="area_container">
        <div class="area_section">

            <div class="area_section_title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/nuestros-docentes.png"
                alt="">
            </div>

            <div class="area_section_slide">

                <div class="slider-areas">
                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="partners">
<div class="partners-container">
    <h2><span>SOCIOS</span> ESTRATÉGICOS</h2>
    <div class="partners-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 17@4x.png"
        alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 16@4x.png"
        alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 15@4x.png"
        alt="">
    </div>
</div>
</section>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('.slider-areas').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            speed: 300,
            infinite: true,
            autoplaySpeed: 5000,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
    });
</script>


<?php
get_footer(); // Carga el pie de página del tema (footer.php)
?>