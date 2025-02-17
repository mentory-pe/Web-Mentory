<?php
get_header(); // Carga el encabezado del tema (header.php)
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/politica.css" type="text/css">


<header class="privacy__header">
        <h1 class="privacy__title">Política de Privacidad</h1>
    </header>

    <div class="privacy__container">
        <div class="privacy__section-content">
            <h2 class="privacy__section-title">1. Introducción</h2>
            <p>En <?php echo sanitize_output($company_name); ?> (en adelante, "MENTORY") identificado con RUC: <?php echo sanitize_output($ruc); ?>, nos comprometemos a proteger la privacidad de nuestros usuarios. Esta Política de Privacidad explica cómo recopilamos, usamos y protegemos su información personal.</p>
        </div>

        <div class="privacy__section-content">
            <h2 class="privacy__section-title">2. Información Recopilada</h2>
            <p>Podemos recopilar información personal, incluyendo, pero no limitado a:</p>
            <ul class="privacy__list">
                <li class="privacy__list-item">Nombre y apellidos</li>
                <li class="privacy__list-item">Dirección de correo electrónico</li>
                <li class="privacy__list-item">Número de teléfono</li>
                <li class="privacy__list-item">Datos para facturación o entrega</li>
            </ul>
        </div>

        <div class="privacy__section-content">
            <h2 class="privacy__section-title">3. Uso de la Información</h2>
            <p>La información recopilada se utilizará para:</p>
            <ul class="privacy__list">
                <li class="privacy__list-item">Proporcionar y gestionar nuestros servicios</li>
                <li class="privacy__list-item">Responder a consultas y solicitudes</li>
                <li class="privacy__list-item">Enviar información publicitaría vía WhatsApp (al número que usted proporciono) que consideremos relevante para usted o le brinde algún beneficio</li>
                <li class="privacy__list-item">Mejorar la experiencia del usuario</li>
            </ul>
        </div>

        <div class="privacy__section-content">
            <h2 class="privacy__section-title">4. Protección de Datos</h2>
            <p>Implementamos medidas de seguridad adecuadas para proteger su información personal contra el acceso no autorizado, pérdida o alteración.</p>
        </div>

        <div class="privacy__section-content">
            <h2 class="privacy__section-title">5. Compartición de Información</h2>
            <p>No compartimos ni vendemos su información personal a terceros, salvo cuando sea requerido por ley.</p>
        </div>

        <div class="privacy__section-content">
            <h2 class="privacy__section-title">6. Cookies y Tecnologías Similares</h2>
            <p>Nuestro sitio web puede utilizar cookies para mejorar la experiencia del usuario. Usted puede gestionar sus preferencias de cookies en la configuración de su navegador.</p>
        </div>

        <div class="privacy__section-content">
            <p><strong>MENTORY se reserva el derecho de modificar esta Política de Privacidad en cualquier momento.</strong></p>
        </div>
    </div>
<?php
get_footer(); // Carga el pie de página del tema (footer.php)
?>