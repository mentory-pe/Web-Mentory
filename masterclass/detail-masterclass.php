<?php
// Obtener el slug de la masterclass desde la URL
$masterclass_slug = get_query_var('masterclass_slug');

// Verificar si se encontró el slug de la masterclass
if ($masterclass_slug) {
    // Obtener la masterclass de la base de datos
    $masterclass = mentory_get_masterclass_by_slug($masterclass_slug);

    if ($masterclass) {
        // Mostrar los detalles de la masterclass
        ?>
        <div class="masterclass-detail">
            <h1><?php echo esc_html($masterclass->name); ?></h1>
            <p><strong>Descripción:</strong> <?php echo esc_html($masterclass->description); ?></p>
            <p><strong>Fecha de Inicio:</strong> <?php echo esc_html($masterclass->start_date); ?></p>
            <p><strong>Fecha de Fin:</strong> <?php echo esc_html($masterclass->end_date); ?></p>
            <p><strong>Link de Inscripción:</strong> <a href="<?php echo esc_url($masterclass->registration_link); ?>" target="_blank">Inscribirse aquí</a></p>

            <!-- Si hay docentes asociados a la masterclass, muéstralos -->
            <?php if (!empty($masterclass->teachers)) : ?>
                <h2>Docentes:</h2>
                <ul>
                    <?php foreach ($masterclass->teachers as $teacher) : ?>
                        <li><?php echo esc_html($teacher->name); ?> - <?php echo esc_html($teacher->position); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <?php
    } else {
        // Si no se encuentra la masterclass en la base de datos
        echo '<p>Masterclass no encontrada.</p>';
    }
} else {
    // Si no se pasó un slug válido
    echo '<p>Por favor, seleccione una masterclass válida.</p>';
}
?>

