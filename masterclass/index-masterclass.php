<?php
get_header();

global $wpdb;
$table_masterclass = $wpdb->prefix . 'masterclass';
$table_docentes = $wpdb->prefix . 'docentes';
$table_masterclass_docente = $wpdb->prefix . 'masterclass_docente';

$filtro = isset($_GET['filtro']) ? sanitize_text_field($_GET['filtro']) : 'todos';
$where_clause = '';
$current_date = date('Y-m-d');

switch ($filtro) {
    case 'hoy':
        $where_clause = "WHERE m.fecha_inicio = '$current_date'";
        break;
    case 'proximos':
        $where_clause = "WHERE m.fecha_inicio > '$current_date'";
        break;
    case 'populares':
        $where_clause = "";
        break;
    default:
        $where_clause = "";
}

$query = "
    SELECT 
        m.*, 
        GROUP_CONCAT(CONCAT(d.nombre, ' ', d.apellidos) SEPARATOR ', ') AS docentes_nombres,
        GROUP_CONCAT(d.foto_url SEPARATOR ', ') AS docentes_fotos
    FROM $table_masterclass AS m
    LEFT JOIN $table_masterclass_docente AS md ON m.id = md.masterclass_id
    LEFT JOIN $table_docentes AS d ON md.docente_id = d.id
    $where_clause
    GROUP BY m.id
";
$masterclasses = $wpdb->get_results($query);
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index-masterclass.css" type="text/css">


<section class="main_portada_masterclass">
    <div class="portada_masterclass">
    </div>

    <div class="portada_masterclass_movil">
        <div class="portada_masterclass_movil_txt">
            MASTERCLASS
        </div>
    </div>
</section>


<section>
<div>
    
    <!-- <div class="masterclass-filters">
        <button class="filter-btn <?php echo $filtro === 'hoy' ? 'active' : ''; ?>"  onclick="window.location.href='?filtro=hoy'">Hoy</button>
        <button class="filter-btn <?php echo $filtro === 'proximos' ? 'active' : ''; ?>"  onclick="window.location.href='?filtro=proximos'">Próximos Masterclass</button>
        <button class="filter-btn <?php echo $filtro === 'populares' ? 'active' : ''; ?>"  onclick="window.location.href='?filtro=populares'">Masterclass Populares</button>
    </div> -->

    <div class="masterclass-filters">
        <button class="filter-btn <?php echo $filtro === 'hoy' ? 'active' : ''; ?>" data-filtro="hoy">Hoy</button>
        <button class="filter-btn <?php echo $filtro === 'proximos' ? 'active' : ''; ?>" data-filtro="proximos">Próximos Masterclass</button>
        <button class="filter-btn <?php echo $filtro === 'populares' ? 'active' : ''; ?>" data-filtro="populares">Masterclass Populares</button>
    </div>







<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Seleccionar todos los botones de filtro
        const buttons = document.querySelectorAll(".filter-btn");

        // Agregar evento de clic a cada botón
        buttons.forEach(button => {
            button.addEventListener("click", function () {
                // Remover la clase 'active' de todos los botones
                buttons.forEach(btn => btn.classList.remove("active"));

                // Agregar la clase 'active' al botón que se selecciona
                this.classList.add("active");

                // Cambiar la URL sin recargar la página
                const filtro = this.getAttribute("data-filtro");
                window.location.href = `?filtro=${filtro}`;
            });
        });
    });
</script>
    <div class="masterclass-grid">
        <?php if ($masterclasses && !empty($masterclasses)) : 
            foreach ($masterclasses as $masterclass) :
                $docentes_nombres = explode(',', $masterclass->docentes_nombres);
                $docentes_fotos = explode(',', $masterclass->docentes_fotos);
                ?>
                <div class="masterclass_card">
                                <div class="masterclass_card_img_content">
                                    <img src="<?php echo esc_url($masterclass->img_masterclass); ?>" alt="">
                                </div>
                                <div class="masterclass_card_information">
                                    <div class="masterclass_card_inf_title">
                                        <?php echo esc_html($masterclass->nombreMasterclass); ?>
                                    </div>
                                    <div class="masterclass_card_subcont">
                                        <div class="masterclass_card_item">
                                            <div><img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/index/teacher_item1.png"
                                                    alt=""></div>
                                            <div>
                                                <?php echo esc_html($masterclass->fecha_inicio); ?>
                                            </div>
                                        </div>
                                        <div class="masterclass_card_item">
                                            <div><img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/index/teacher_item2.png"
                                                    alt=""></div>
                                            <div>Hora :
                                                <?php echo esc_html($masterclass->hora_inicio); ?>
                                            </div>
                                        </div>
                                        <div id="iten_no" class="masterclass_card_item">
                                            <div><img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/index/teacher_item3.png"
                                                    alt=""></div>
                                            <div>Online</div>
                                        </div>
                                    </div>
                                    <div class="masterclass_card_teacher">
                                        <div class="master_teacher_content1">


                                                <?php foreach ($docentes_nombres as $index => $nombre) : ?>
                                                        <?php if (!empty($docentes_fotos[$index])) : ?>
                                                        
                                                            <div class="master_teacher_imgcont">
                                                                <img style="border-radius: 50%;" src="<?php echo esc_url(trim($docentes_fotos[$index])); ?>" alt="<?php echo esc_attr($nombre); ?>"
                                                                alt="<?php echo esc_attr($nombre); ?>">
                                                            </div>
                                                        <?php endif; ?>
                                                        
                                                        
                                                        <div class="master_teacher_txtinfo">
                                                            <div class="master_teacher_name"><?php echo esc_html($nombre); ?></div>
                                                            <div class="master_teacher_cargo">Expositor</div>
                                                        </div>
                                                <?php endforeach; ?>



                                            
                                        </div>
                                        <div class="master_teacher_content2">
                                            <a href="<?php echo home_url('/masterclass/'. $masterclass->slugMasterclass); ?>">
                                                <button class="master_teacher_content2_btn">
                                                    ASISTIR
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/arrow.png"
                                                        alt="">
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <?php endforeach;
        else : ?>
            <p>No hay masterclasses disponibles según el filtro seleccionado.</p>
        <?php endif; ?>
    </div>
</div>
</section>








<?php
get_footer();
?>
