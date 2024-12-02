<?php
// Obtener todas las masterclass de la base de datos
global $wpdb;
$table_name = $wpdb->prefix . 'masterclass';
$masterclasses = $wpdb->get_results("SELECT * FROM $table_name");

if ($masterclasses) :
    foreach ($masterclasses as $masterclass) : ?>
        <h2><a href="<?php echo site_url('/masterclass/' . esc_attr($masterclass->slugMasterclass)); ?>">
            <?php echo esc_html($masterclass->nombreMasterclass); ?>
            <?php echo site_url('/masterclass/' . esc_attr($masterclass->slugMasterclass)); ?>
        </a></h2>
        <p><?php echo esc_html($masterclass->descripcion); ?></p>
    <?php endforeach;
else : ?>
    <p>No hay masterclass disponibles en este momento.</p>
<?php endif; ?>
