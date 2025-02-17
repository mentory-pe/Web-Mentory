<div class="hero">
<?php
global $page_title;
$page_title = 'Nosotros';
get_header(); // Carga el encabezado del tema (header.php)
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nosotros-styles.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nosotros-mediaqueries.css" type="text/css">
</div>

<section id="about">
    <div class="about-container">
        <div class="about-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/nosotros_portada.webp"
            alt="">
        </div>
        <div class="about-details-container">
            <div class="about-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/quienes-somos.webp"
                alt="">
            </div>
            <div class="about-text-container">
                <p>Somos una institución peruana comprometida con la especialización y el crecimiento de quienes buscan destacar en sectores de alta demanda como Energía & Electricidad, Construcción, Minería, Mantenimiento, Seguridad, Operaciones & Logística, Proyectos y Management.</p>
                <br>
                <p>Nos enfocamos en brindar capacitación de alto nivel, combinando expertise técnico, metodologías innovadoras y una visión estratégica, para que nuestros alumnos adquieran las habilidades que realmente impulsan su desarrollo profesional. En Mentory, formamos a los profesionales que lideran el futuro.</p>
            </div>
        </div>
    </div>
</section>

<section id="mission-vision">
    <div class="mission-vision-container">
        <div class="mission-vision-card">
            <div class="mission-vision-card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 4@4x.webp"
                alt="">
            </div>
            <div class="mission-vision-card-details">
                <h2>MISIÓN</h2>
                <p>Potenciar el desarrollo profesional de nuestros estudiantes a través de programas de especialización de alta calidad que combinan la flexibilidad del aprendizaje online con clases en vivo y prácticas aplicadas.</p>
            </div>
        </div>
        <div class="mission-vision-card">
            <div class="mission-vision-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 5@4x.webp"
                    alt="">
                </div>
            <div class="mission-vision-card-details">
                <h2>VISIÓN</h2>
                <p>Ser reconocidos como la institución líder en educación técnica especializada en Perú y Latinoamérica, destacándonos por nuestra excelencia académica, docentes de clase mundial y alianzas estratégicas.</p>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 9@4x.webp"
                    alt="">
                </div>
                <div class="pillars-card-text">
                    <h3>Compromiso</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas veniam beatae dignissimos quos itaque nobis dicta ipsum ut in, id animi accusantium nemo a sit asperiores magnam ex aut fuga.</p>
                </div>
            </div>
            <div class="pillars-details-card">
                <div class="pillars-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 8@4x.webp"
                    alt="">
                </div>
                <div class="pillars-card-text">
                    <h3>Innovación</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas veniam beatae dignissimos quos itaque nobis dicta ipsum ut in, id animi accusantium nemo a sit asperiores magnam ex aut fuga.</p>
                </div>
            </div>
            <div class="pillars-details-card">
                <div class="pillars-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 7@4x.webp"
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.webp"
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.webp"
                alt="">
            </div>
            <div class="services-card-details">
                <h3>Clases en <span>Vivo</span> y Experiencia <span>Interactiva</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt cum repellat iusto omnis enim saepe minus itaque. Aut corrupti facilis illum amet deleniti non libero tenetur beatae omnis asperiores?. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum odio optio adipisci consectetur, illum tenetur, ratione blanditiis tempore a similique, nihil quidem non deleniti molestiae. Quo, porro illo. Nostrum, cum.</p>
            </div>
        </div>
        <div class="services-card">
            <div class="services-card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.webp"
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 10@4x.webp"
                                    alt="">
                            </div>
                            <div class="service-card-details">
                                <div class="area_section_card_title">
                                    Programa de <span>Especialización <br>Diseñados</span> para tu Éxito
                                </div>
                                <div class="service-card-text">
                                <p>Cada programa está diseñado para brindarte habilidades prácticas y aplicables de inmediato en tu profesión. Especialízate en temas clave como Construcción, Management, Mantenimiento, Minería, Proyectos y Energía & Electricidad </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 11@4x.webp"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Clases en <span>Vivo</span> y Experiencia <span>Interactiva</span>
                            </div>
                            <div class="service-card-text">
                                <p>Conéctate desde cualquier lugar y disfruta de clases dinámicas y accesibles. Interactúa en tiempo real, resuelve tus dudas, participa en debates y comparte experiencias con estudiantes e instructores de todo el mundo. ¡Tu aprendizaje no tiene fronteras! 
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 12@4x.webp"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Talleres <span>Prácticos</span> y Evaluaciones <span>Personalizadas</span>
                            </div>
                            <div class="service-card-text">
                                <p>Pon en práctica lo aprendido con dinámicas grupales y simulaciones guiadas por expertos. Recibe retroalimentación personalizada que te permitirá identificar y mejorar tus fortalezas. </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 10@4x.webp"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Programa de <span>Especialización <br>Diseñados</span> para tu Éxito
                            </div>
                            <div class="service-card-text">
                                <p>Cada programa está diseñado para brindarte habilidades prácticas y aplicables de inmediato en tu profesión. Especialízate en temas clave como Construcción, Management, Mantenimiento, Minería, Proyectos y Energía & Electricidad</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 11@4x.webp"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Clases en <span>Vivo</span> y Experiencia <span>Interactiva</span>
                            </div>
                            <div class="service-card-text">
                                <p>Conéctate desde cualquier lugar y disfruta de clases dinámicas y accesibles. Interactúa en tiempo real, resuelve tus dudas, participa en debates y comparte experiencias con estudiantes e instructores de todo el mundo. ¡Tu aprendizaje no tiene fronteras! </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 12@4x.webp"
                                    alt="">
                            </div>
                            <div class="area_section_card_title">
                                Talleres <span>Prácticos</span> y Evaluaciones <span>Personalizadas</span>
                            </div>
                            <div class="service-card-text">
                                <p>Pon en práctica lo aprendido con dinámicas grupales y simulaciones guiadas por expertos.Recibe retroalimentación personalizada que te permitirá identificar y mejorar tus fortalezas. </p>
                            </div>
                        </div>
                    </div>

                    <!-- <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.webp"
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/service-img.webp"
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/nuestros-docentes.webp"
                alt="">
            </div>
            <div class="teachers-img-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.webp"
                alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.webp"
                alt="">
            </div>
        </div>
        <div class="teachers-details-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docente-ejemplo.webp"
            alt="">
        </div>
    </div>
</section> -->



<section id="teachers">
    <div class="area_container">
        <div class="area_section teachers-container">

            <div class="teachers-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/nuestros-docentes.webp"
                alt="">
            </div>

            <div class="area_section_slide">

                <div class="slider-areas">
                <div>
    <div class="area_section_card_v1">
        <div class="area_section_card_img">
            <a href="https://www.linkedin.com/in/ivan-turco-29299324/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Recurso 9Ivan Turco.webp" alt="Ivan Turco">
            </a>
        </div>
    </div>
</div>

<div>
    <div class="area_section_card_v2">
        <div class="area_section_card_img">
            <a href="https://www.linkedin.com/in/gonzalo-gomez-fabrifor/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Recurso 7Gonzalo Gomez.webp" alt="Gonzalo Gómez">
            </a>
        </div>
    </div>
</div>

<div>
    <div class="area_section_card_v1">
        <div class="area_section_card_img">
            <a href="https://www.linkedin.com/in/percy-franz-coca-mallma-39374973/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Recurso 6Percy coca.webp" alt="Percy coca">
            </a>
        </div>
    </div>
</div>

<div>
    <div class="area_section_card_v2">
        <div class="area_section_card_img">
            <a href="https://www.linkedin.com/in/ivandavilasalas/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Recurso 5Ivan davila.webp" alt="Ivan davila">
            </a>
        </div>
    </div>
</div>
<!--
                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Gonzalo-Laura.webp"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Carlos Torres.jfif"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Danilo Espinoza.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Diego Arias.jfif"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Evandro Quadros.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Jose Salazar.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Maria Teresa Romero.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Maryury Garcia.jfif"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Mg. Aníbal Montoya.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. Richard Mera.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ing. van Turco.webp"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Iván Dávila.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Ivan Ruiz Flores.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Jorge Noé.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Jose Contreras.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Jose Miguel Diaz Galinos.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Luis Pacheco.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Marco Villalobos.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Paola Ramirez.webp"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/percy coca.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v1">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Silvia Rosas.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="area_section_card_v2">
                            <div class="area_section_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/docentes/Victor Turco.jpeg "
                                    alt="">
                            </div>
                        </div>
                    </div>
                     -->
                </div>
            </div>
        </div>
    </div>
</section>




<section id="partners">
<div class="partners-container">
    <h2><span>SOCIOS</span> ESTRATÉGICOS</h2>
    <div class="partners-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 17@4x.webp"
        alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 16@4x.webp"
        alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/Recurso 15@4x.webp"
        alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nosotros/logo-ccl.jpg"
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