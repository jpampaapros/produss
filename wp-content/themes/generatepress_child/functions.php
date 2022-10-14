<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

add_action( 'wp_enqueue_scripts', 'theme_scritps' );

function theme_scritps(){
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/slick/slick.css', array() );
    wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css', array() );
    wp_enqueue_style( 'fancybox-css', get_stylesheet_directory_uri() . '/assets/jquery.fancybox/fancybox/jquery.fancybox-1.3.4.css', array() );
//    wp_enqueue_script( 'jquery-script', get_stylesheet_directory_uri() . '/assets/jquery/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri() . '/assets/slick/slick.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'fancybox-js', get_stylesheet_directory_uri() . '/assets/jquery.fancybox/fancybox/jquery.fancybox-1.3.4.js', array( 'jquery' ), '1.0.0', true );
    wp_register_script( 'scripts-js', get_stylesheet_directory_uri() . '/scripts.js', array( 'jquery' ), '1.0.19', true );
    $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'consult_ajax' ),
    );
    wp_localize_script( 'scripts-js', 'ajaxAdmin', $script_data_array );
    wp_enqueue_script( 'scripts-js' );
}

// Definir bloques

function bloque_render_callback($block){
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
        include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
    }
}

function get_title_block_name ($name){
    $name = str_replace('-', ' ', $name);
    return ucfirst($name);
}

add_action('acf/init', function (){
    if (function_exists('acf_register_block')) {
        $blocksWp = [
            'suscribete', // GLOBAL
            'banner-principal',
            'nuestras-variedades','banner-informativo',
            'experiencia','linea-de-tiempo',
            'servicio-tecnico','testimonios',
            'produss-informa','escuela-produss', // Home
            'banner-nosotros', 'nuestro-equipo-directivo',
            'historia', 'nuestros-logros', // nosotros
            'listado-con-tabs-productos', // Productos
            'detalle-producto', 'conozca-otros-productos', // Producto interno
            'listado-con-tabs-produss-informa', 'asistencia-tecnica', // Produss informa
            'contenido-post', // Blog
            'contenido-escuela', 'contenido-escuela-post', // Escuela
            'contenido-contacto', // Contacto
            'gracias', // Gracias
            'libro-de-reclamaciones', // Libro de reclamaciones
            'actualiza-tus-datos', // Actualiza tus datos
            'politica-de-privacidad', // Actualiza tus datos
            'contenido-soporte' // Actualiza tus datos
        ];
        foreach ($blocksWp as $blockWp) {
            $titleBlock = get_title_block_name($blockWp);
            acf_register_block(array(
                'name' => $blockWp,
                'title' => __($titleBlock),
                'description' => __("Bloque ".$titleBlock),
                'render_callback' => 'bloque_render_callback',
                'category' => 'formatting',
                'icon' => 'wordpress',
                'keywords' => array($titleBlock),
            ));
        }
    }
});


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Configuración del tema',
        'menu_title'	=> 'Configuración del tema',
        'menu_slug' 	=> 'conguracion-tema',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}

// Función para contar visualizaciones de un post.
function set_post_views() {
    if ( is_single() ) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );

        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );

// Función para obtener el número de visualizaciones de un post
function get_post_views( $post_ID ){
    $count = get_post_meta($post_ID, 'post_views', true);
    if ( $count == '' ){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}

//BOTÓN MAS

add_action('wp_ajax_load_posts_cat_by_ajax', 'load_posts_cat_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_cat_by_ajax', 'load_posts_cat_by_ajax_callback');

function load_posts_cat_by_ajax_callback() {
    check_ajax_referer('consult_ajax', 'security');
    $catId = $_POST['cat_id'];
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 12,
        'orderby' => 'post_date',
        'order' => 'desc',
        'paged' => $paged,
        'category__in' => array($catId),
    );
    $the_query = new WP_Query( $args );

    if($the_query->have_posts()):
        while ($the_query->have_posts()) : $the_query->the_post();
            $idPost = get_the_ID();
            $titlePost = get_the_title($idPost);
            $textoCortoPost = get_the_excerpt($idPost);
            $nroClientePost = get_field('nro_clientes',$idPost);
            $linkPost = get_the_permalink($idPost);
            $featuredImgPost = get_the_post_thumbnail_url( $idPost );
            $categoriesPost = get_the_category($idPost);
            $isVideo = false;
            $firstCategory = $categoriesPost ? $categoriesPost[0] : "";
            foreach ($categoriesPost as $categoryPost):
                if($categoryPost->slug == "videos"):
                    $isVideo = true;
                    break;
                endif;
            endforeach;
            ?>
            <div class="pro-card">
                <?php if($featuredImgPost):?>
                    <div class="pro-card__image-container pro-relative">
                        <?php if($firstCategory):?>
                            <div class="pro-absolute pro-card__title-float pro-bg-white"><?= $firstCategory->name;?></div>
                        <?php endif;?>
                        <img src="<?= $featuredImgPost;?>" alt="" class="pro-card__image pro-cover">
                        <?php if($isVideo):?>
                            <svg class="pro-icon-svg1 pro-absolute" width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40.5" cy="40.5" r="40.5" fill="white" fill-opacity="0.3"/>
                                <circle cx="40.5" cy="40.5" r="32.5" fill="url(#paint0_linear_171_18188)"/>
                                <circle cx="40.5" cy="40.5" r="32.5" fill="#002F87"/>
                                <path d="M54 41L33 53.1244V28.8756L54 41Z" fill="white"/>
                                <defs>
                                    <linearGradient id="paint0_linear_171_18188" x1="73" y1="25" x2="40.5" y2="95" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#002F87"/>
                                        <stop offset="1" stop-color="#0D99FF" stop-opacity="0.79"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        <?php endif;?>
                    </div>
                <?php endif;?>
                <?php if($categoriesPost):?>
                    <div class="pro-categories__btns">
                        <?php foreach ($categoriesPost as $categoryPost):?>
                            <a class="pro-btn2 pro-color-blue" href="<?= site_url()."/categorias/".$categoryPost->slug;?>"><?= $categoryPost->name;?></a>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                <?php if($textoCortoPost):?>
                    <div class="pro-text"><?= $textoCortoPost;?></div>
                <?php endif;?>
                <?php if($linkPost):?>
                    <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= $linkPost;?>">
                        Más información
                        <svg class="pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"/>
                        </svg>
                    </a>
                <?php endif;?>
            </div>
        <?php endwhile;
    endif;
    wp_die();
}
