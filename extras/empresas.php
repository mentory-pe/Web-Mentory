<div class="hero">
<?php
get_header(); // Carga el encabezado del tema (header.php)
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/empresas-styles.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/empresas-mediaqueries.css" type="text/css">
</div>

<section id="about">
    <div class="about-container">
        <div class="about-details">
            <div class="about-title">
                <h2>¿Qué es Mentory <br><span>para Empresas?</span></h2>
            </div>
            <div class="about-text">
                <p>En Mentory para Empresas, transformamos la capacitación en un motor de crecimiento para tu organización. Diseñamos planes de formación a medida, alineados con tus objetivos y necesidades, para que tu equipo desarrolle las habilidades clave que impulsan el éxito.</p>
                <p>¡Haz crecer tu empresa con Mentory para Empresas! </p>
            </div>
            <div class="about-button">

            </div>
        </div>
        <div class="about-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/about-img.png"
            alt="">
        </div>
    </div>
</section>

<section id="benefits">
    <div class="benefits-container">
        <h2>
            Beneficios
        </h2>
        <p>Cada programa está diseñado para brindarte habilidades prácticas y aplicables de inmediato en tu profesión. Especialízate en temas clave como Construcción, Management, Mantenimiento, Minería, Proyectos y Energía & Electricidad
        </p>
        <div class="benefits-details">
            <div class="benefits-card">
                <div class="benefits-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/cap.png"
                    alt="">
                </div>
                <div class="benefits-card-title">
                    <h3>Capacitación</h3>
                </div>
                <div class="benefits-card-text">
                    <p>Capacitación a medida online sincrónica o inhouse.</p>
                </div>
            </div>
            <div class="benefits-card">
                <div class="benefits-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/talento.png"
                    alt="">
                </div>
                <div class="benefits-card-title">
                    <h3>Talento</h3>
                </div>
                <div class="benefits-card-text">
                    <p>Mejora el talento de tu equipo con perfiles más competitivos.</p>
                </div>
            </div>
            <div class="benefits-card">
                <div class="benefits-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/productvidad.png"
                    alt="">
                </div>
                <div class="benefits-card-title">
                    <h3>Productividad</h3>
                </div>
                <div class="benefits-card-text">
                    <p>Aumenta la productividad y calidad de trabajo.
                    </p>
                </div>
            </div>
            <div class="benefits-card">
                <div class="benefits-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/seguimiento.png"
                    alt="">
                </div>
                <div class="benefits-card-title">
                    <h3>Seguimiento</h3>
                </div>
                <div class="benefits-card-text">
                    <p>Supervisa el progreso de las capacitaciones de tu equipo en tiempo real con nuestra plataforma.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reviews">
    <div class="reviews-container">
        <div class="reviews-details">
            <div class="reviews-title">
                <h2>No solo tomes <br><span>Nuestra Palabra...</span></h2>
            </div>
            <div class="reviews-text">
                <p>En Mentory, nos enorgullecemos de ayudar a nuestros socios a alcanzar sus metas. Aquí tienes lo que algunos de ellos tienen que decir sobre su
                experiencia con nosotros.</p>
            </div>
        </div>
        <div class="reviews-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/review-img.png"
            alt="">
        </div>
    </div>
</section>

<section id="sponsors">
    <div class="sponsors-container">
        <div class="sponsors-title">
            <h2>Empresas que <br><span>Confían en Nosotros</span></h2>
        </div>
        <div class="sponsors-details">
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/Minera Andalucita.png"
                alt="">
            </div>
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/Minera Poderosa.jpg"
                alt="Minera Poderosa">
            </div>
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/Minera Saucito.png"
                alt="">
            </div>
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/Minera Triton.png"
                alt="">
            </div>
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/1-300x180.png"
                alt="">
            </div>
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/2-300x180.png"
                alt="">
            </div>
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/3-300x180.png"
                alt="">
            </div>
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/4-300x180.png"
                alt="">
            </div>
            <div class="sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/5-300x180.png"
                alt="">
            </div>
        </div>
    </div>
</section>

<section id="form">
    <div class="form-container">
        <div class="form-title">
        <h2>El éxito es un trabajo en equipo, ¿No? <br><span>Trabajemos juntos</span></h2>
        </div>
        <form action="" class="form">
            <div class="form-container-1">
                <label for="input-1">
                    <p>Nombre de la Empresa</p>
                    <input type="text" placeholder="Ingresa el nombre de la empresa" class="form-input" id="input-1">
                </label>
                <label for="input-2">
                    <p>Nombre de Contacto</p>
                    <input type="text" placeholder="Ingresa tu nombre" class="form-input" id="input-2">
                </label>
            </div>
            <div class="form-container-3">
                <label for="input-3">
                    <p>Correo Electrónico</p>
                    <input type="text" placeholder="Ingresa tu correo electrónico" class="form-input" id="input-3">
                </label>
                <label for="input-4">
                    <p>Número de Contacto</p>
                    <input type="text" placeholder="Celular" class="form-input" id="input-4">
                </label>
            </div>
            <div class="form-container-3">
                <label for="input-5">
                    <p>Déjanos un Mensaje</p>
                    <textarea class="textarea" id="input-5" rows="3" placeholder="Escríbenos tu mensaje ..."></textarea>
                </label>
            </div>
            <div class="submit-button">
                <input type="submit" value="ENVIAR" class="send">
            </div>
        </form>
    </div>
</section>


<?php
get_footer(); // Carga el pie de página del tema (footer.php)
?>