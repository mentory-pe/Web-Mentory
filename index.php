<?php
get_header(); // Carga el encabezado del tema (header.php)
?>

    <header>
        <h1>Bienvenidos a la Presentación de Prueba</h1>
    </header>

    <div class="container">
        <section id="intro">
            <h2>Introducción</h2>
            <p>Esta es una página de presentación de prueba que sirve como estructura básica para una web de presentación personal o de proyecto.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, iste facere? Blanditiis a praesentium sequi, nostrum ipsam dolorem, eveniet alias, saepe doloremque velit reprehenderit cumque nihil. Non exercitationem dicta praesentium.</p>

        </section>

        <section id="gallery">
            <h2>Galería</h2>
            <div class="gallery">
                <img src="imagen1.jpg" alt="Descripción de la imagen 1">
                <img src="imagen2.jpg" alt="Descripción de la imagen 2">
            </div>
        </section>

        <section id="contact">
            <h2>Contacto</h2>
            <div class="contact">
                <p>Para más información, contacta con nosotros:</p>
                <ul>
                    <li>Email: contacto@ejemplo.com</li>
                    <li>Teléfono: +123 456 7890</li>
                </ul>
            </div>
        </section>
    </div>



<?php
get_footer(); // Carga el pie de página del tema (footer.php)
?>