<?php
get_header(); // Carga el encabezado del tema (header.php)
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contacto-styles.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contacto-mediaqueries.css" type="text/css">
<div class="hero">

</div>

<section id="information">
    <div class="information-container">
        <div class="information-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto/Recurso 2@4x.png"
            alt="">
        </div>
        <div class="information-form-container">
            <div class="information-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto/mas-informacion.png"
                alt="Registrate aquí para más información">
            </div>
            <form action="post" class="information-form">
                <div class="form-container-1">
                    <input type="text" placeholder="Nombres" class="form-input">
                    <input type="text" placeholder="Apellidos" class="form-input">
                </div>
                <div class="form-container-2">
                    <input type="text" placeholder="DNI" class="form-input">
                    <input type="text" placeholder="Celular" class="form-input">
                </div>
                <div class="form-container-3">
                    <input type="email" placeholder="Correo electrónico" class="form-input">
                </div>
              
                <div class="submit-button">
                    <input type="submit" value="ENVIAR" class="send">
                </div>
            </form>
        </div>
    </div>
</section>

<section id="get-there">
    <div class="get-there-container">
        <div class="get-there-details">
            <div class="get-there-card">
                <div class="get-there-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto/Recurso 3@4x.png"
                    alt="">
                </div>
                <div class="get-there-card-details">
                    <div class="get-there-card-title">
                        Horario de atención:
                    </div>
                    <div class="get-there-card-text">
                        <p>Lunes a Viernes</p>
                        <p>9:00 am - 7:00 pm</p>
                        <p>Sábado:</p>
                        <p>9:00 am - 2:00 pm</p>
                    </div>
                </div>
            </div>
            <div class="get-there-card">
                <div class="get-there-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto/Recurso 4@4x.png"
                    alt="">
                </div>
                <div class="get-there-card-details">
                    <div class="get-there-card-title">
                        Central telefónica:
                    </div>
                    <div class="get-there-card-text">
                        <p>+51 952 111 289</p>
                    </div>
                </div>
            </div>
            <div class="get-there-card">
                <div class="get-there-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto/Recurso 5@4x.png"
                    alt="">
                </div>
                <div class="get-there-card-details">
                    <div class="get-there-card-title">
                        Ubicación:
                    </div>
                    <div class="get-there-card-text">
                        <p>Av. San Felipe 1023</p>
                        <p>Surquillo - Lima</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="get-there-map">
            <div class="get-there-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto/como-llegar.png"
                alt="¿Cómo llegar?">
            </div>
            <div class="get-there-img">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacto/mapa.png"
                alt=""> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.0201165263293!2d-77.0164437!3d-12.1107753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c80c748c729f%3A0xd0485cd3bf350293!2sAv.%20San%20Felipe%201023%2C%20Surquillo%2015048!5e0!3m2!1ses-419!2spe!4v1738341429425!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); // Carga el pie de página del tema (footer.php)
?>