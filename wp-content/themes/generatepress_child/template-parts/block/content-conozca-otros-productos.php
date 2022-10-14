<?php
$id = $block['id'];
$titulo = get_field('titulo_otros_productos','option');
$productos = get_field('productos_otros_productos','option');
$estilo = get_field('estilo');
$idPost = get_the_ID();
$categoriesPosts = get_the_terms( $idPost, 'categoria_producto' );
$categoriesPost = $categoriesPosts[1];
while ( $categoriesPost->parent != 0 ){
    $categoriesPost  = get_term_by("id",$categoriesPost->parent, "categoria_producto" );
}
$categoriesPostId = $categoriesPost->term_id;
$categoriesPostSlug = $categoriesPost->slug;

$args = array(
    'post_type' => 'producto',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'order' => 'desc',
    'post__not_in' => array($idPost),
    'tax_query' => array(
        array(
            'taxonomy' => 'categoria_producto',
            'field'    => 'slug',
            'terms'    => $categoriesPostSlug
        ),
    ),
);

$the_query = new WP_Query( $args );
$totalPost = $the_query->post_count;
$totalShow = 3;

if(!is_null($totalPost) && $totalPost < $totalShow){
    $categoriesPostSlug2 = null;
    $totalQuery =  $totalShow - $totalPost;
    if($categoriesPostSlug == "linea-pollos"){
        $categoriesPostSlug2 = "linea-pavos";
    }else{
        $categoriesPostSlug2 = "linea-pollos";
    }

    $args = array(
        'post_type' => 'producto',
        'post_status' => 'publish',
        'posts_per_page' => $totalQuery,
        'orderby' => 'rand',
        'order' => 'desc',
        'post__not_in' => array($idPost),
        'tax_query' => array(
            array(
                'taxonomy' => 'categoria_producto',
                'field'    => 'slug',
                'terms'    => $categoriesPostSlug2
            ),
        ),
    );

    $the_query2 = new WP_Query( $args );
}
?>

<?php if(!is_admin()):?>
    <?php
        $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4558-1.png";
    ?>
    <section class="<?= $id; ?> pro-conozca-otros-productos pro-relative pro-<?= $estilo;?> <?= ($estilo == 'estilo2') ? '': 'pro-bg-blue4'?>">
        <?php if($estilo != "estilo2"):?>
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain" src="<?= $imageShadow;?>" alt="Imagen Sombra">
        <?php endif;?>
        <img class="pro-icon-svg1 pro-card__icon--sheet pro-only-desk" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
        <img class="pro-icon-svg2 pro-card__icon--sheet" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
        <div class="pro-section-content pro-card-shadow2 pro-relative pro-bg-white">
            <?php if($titulo):?>
                <h2 class="pro-mov-px-spacing pro-text-center pro-title-small3 pro-color-blue pro-title-line-center"><?= $titulo;?></h2>
            <?php endif;?>
            <?php if($the_query->have_posts() ):?>
                <div class="pro-cards pro-mov-o-y-auto pro-mov-px-spacing">
                    <?php while ($the_query->have_posts() ) : $the_query->the_post();?>
                        <?php
                        $idPost = get_the_ID();
                        $titlePost = get_the_title($idPost);
                        $textoCortoPost = get_field('texto_corto',$idPost);
                        $linkPost = get_the_permalink($idPost);
                        $featuredImgPost = get_the_post_thumbnail_url($idPost);
                        ?>
                        <div class="pro-card">
                            <?php if($featuredImgPost):?>
                                <img src="<?= $featuredImgPost;?>" alt="" class="pro-cover pro-w-full pro-radius pro-card__image">
                            <?php endif;?>
                            <?php if($titlePost):?>
                                <h3 class="pro-card__title pro-title-small pro-color-blue"><?= $titlePost;?></h3>
                            <?php endif;?>
                            <?php if($textoCortoPost):?>
                                <div class="pro-card__text pro-text pro-mov-px-spacing"><?= $textoCortoPost;?></div>
                            <?php endif;?>
                            <?php if($linkPost):?>
                                <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= $linkPost;?>">
                                    Más información
                                    <svg class="pro-btn-icon-small pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"/>
                                    </svg>
                                </a>
                            <?php endif;?>
                        </div>
                    <?php endwhile;?>
                    
                    <?php if($the_query2 && $the_query2->have_posts()):?>
                        <?php while ($the_query2->have_posts() ) : $the_query2->the_post();?>
                            <?php
                            $idPost = get_the_ID();
                            $titlePost = get_the_title($idPost);
                            $textoCortoPost = get_field('texto_corto',$idPost);
                            $linkPost = get_the_permalink($idPost);
                            $featuredImgPost = get_the_post_thumbnail_url($idPost);
                            ?>
                            <div class="pro-card">
                                <?php if($featuredImgPost):?>
                                    <img src="<?= $featuredImgPost;?>" alt="" class="pro-cover pro-w-full pro-radius pro-card__image">
                                <?php endif;?>
                                <?php if($titlePost):?>
                                    <h3 class="pro-card__title pro-title-small pro-color-blue"><?= $titlePost;?></h3>
                                <?php endif;?>
                                <?php if($textoCortoPost):?>
                                    <div class="pro-card__text pro-text pro-mov-px-spacing"><?= $textoCortoPost;?></div>
                                <?php endif;?>
                                <?php if($linkPost):?>
                                    <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= $linkPost;?>">
                                        Más información
                                        <svg class="pro-btn-icon-small pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"/>
                                        </svg>
                                    </a>
                                <?php endif;?>
                            </div>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
            <?php endif;?>
            <?php wp_reset_query();?>
        </div>
    </section>
<?php else:?>
    <h3>Conozca nuestros otros productos</h3>
<?php endif;?>