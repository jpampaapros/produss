<?php
$id = $block['id'];
$titulo = get_field('titulo');
$texto = get_field('texto');
$porDefecto = null;
$terms = get_terms( 'categoria_producto', array(
    'hide_empty' => false,
    'parent' => 0,
    'orderby'  => 'post_title',
    'order'    => 'DESC'
));

$porDefecto = $terms[0];
$postId = $porDefecto->term_taxonomy_id;
$postName = $porDefecto->name;
$postDescription = $porDefecto->description;
?>

<?php if(!is_admin()):?>
    <?php
        $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4863.png";
        $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group.png";
        $imageShadow2 = site_url() . "/wp-content/uploads/2022/09/desde-shadow2.png";
        $imageShadow3 = site_url() . "/wp-content/uploads/2022/09/Group-4513.png";
    ?>
    <section class="<?= $id; ?> pro-listado-con-tabs-productos">
        <div class="pro-text-center pro-color-white pro-bg-blue pro-banner-title pro-relative pro-o-hidden pro-mov-px-spacing">
            <div class="pro-section-content pro-relative">
                <img class="pro-card__icon--sheet pro-card__icon11 pro-only-desk" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                <img class="pro-card__icon--sheet pro-card__icon12 pro-only-desk" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                <?php if($postName):?>
                    <h2 class="pro-section__title pro-title pro-title-line-center pro-only-desk"><?= $postName;?></h2>
                    <div class="pro-section__title pro-title pro-mov-text-left pro-title-line pro-only-mov"><?= $postName;?></div>
                <?php endif;?>
                <?php if($postDescription):?>
                    <div class="pro-section__text pro-text pro-mov-text-left"><?= $postDescription;?></div>
                <?php endif;?>
                <?php if($terms):?>
                    <div class="pro-group-btns">
                        <a class="pro-btn pro-minw-initial pro-bg-orange pro-color-blue" href="">Todos</a>
                        <?php foreach ($terms as $term):?>
                            <?php
                                $categoryPostId = $term->term_id;
                                $categoryPostSlug = get_term_link($categoryPostId);
                            ?>
                            <a class="pro-btn pro-minw-initial pro-btn-white-outline" href="<?= $categoryPostSlug;?>"><?= $term->name;?></a>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-desk" src="<?= $imageShadow;?>" alt="Imagen Sombra">
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        </div>
        <div class="pro-section__listado">
            <?php
                $args = array(
                    'post_type' => 'producto',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'post_title',
//                    'tax_query' => array(
//                        array(
//                            'taxonomy' => 'categoria_producto',
//                            'field'    => 'slug',
//                            'terms'    => $porDefecto->slug
//                        ),
//                    ),
                );
                $the_query = new WP_Query( $args );
            ?>
            <?php if($the_query->have_posts() ):?>
                <?php $counter = 1;?>
                <?php while ($the_query->have_posts() ) : $the_query->the_post();
                    $idPost = get_the_ID();
                    $titlePost = get_the_title($idPost);
                    $textoCortoPost = get_field('texto_corto',$idPost);
                    $textoLargoPost = get_field('texto_largo',$idPost);
                    $nroClientePost = get_field('nro_clientes',$idPost);
                    $linkPost = get_the_permalink($idPost);
                    $featuredImgPost = get_the_post_thumbnail_url( $idPost );
                ?>
                    <div class="pro-card pro-relative pro-o-hidden pro-mov-px-spacing">
                        <div class="pro-card__content pro-section-content pro-flex">
                            <div class="pro-card__image-container pro-shrink-0 pro-relative">
                                <svg class="pro-absolute pro-card__icon-svg2" width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="55.6827" cy="55.4916" r="55.3155" fill="#F1F6FF"/>
                                </svg>
                                <img class="pro-relative pro-w-full pro-card__image pro-radius pro-o-hidden" src="<?= $featuredImgPost;?>" alt="<?= $titlePost?>">
                                <div class="pro-relative pro-card-shadow pro-text-center pro-bg-orange pro-color-blue">
                                    <svg class="pro-card__icon-svg" width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="40" cy="40.6521" r="40" fill="white"/>
                                        <g clip-path="url(#clip0_361_1975)">
                                            <path d="M42.6723 8C44.4418 8.4812 45.7457 9.6454 46.9565 10.9493C47.3446 11.3529 47.7482 11.7409 48.1362 12.1601C48.8503 12.9362 49.7506 13.2311 50.7906 13.2466C52.2187 13.2622 53.6623 13.2466 55.0748 13.3708C57.5429 13.6037 59.2194 15.3732 59.3901 17.8258C59.4832 19.2849 59.4832 20.7596 59.4988 22.2342C59.5143 23.0724 59.7626 23.7865 60.3525 24.3919C61.2839 25.3387 62.2463 26.2856 63.1466 27.2635C63.8917 28.0707 64.435 29.0021 64.6367 30.1042C64.9006 31.5478 64.497 32.8517 63.5967 33.9538C62.6964 35.0404 61.6875 36.0338 60.694 37.0273C59.8868 37.8189 59.4522 38.7192 59.5143 39.8679C59.5453 40.5975 59.5609 41.3425 59.5143 42.0721C59.4832 42.8948 59.4522 43.733 59.297 44.5557C58.8779 46.7755 57.3722 48.1414 55.1214 48.4364C54.9506 48.4519 54.7799 48.4985 54.5471 48.5295C54.5471 48.7624 54.5471 48.9952 54.5471 49.2125C54.5471 54.5988 54.5471 59.9852 54.5471 65.356C54.5471 67.1411 53.3829 67.9017 51.7375 67.2032C48.6329 65.8838 45.5129 64.5644 42.4084 63.2294C42.0358 63.0742 41.7409 63.0742 41.3684 63.2294C38.2483 64.5799 35.1128 65.8993 31.9927 67.2187C30.4094 67.8862 29.2297 67.1256 29.2297 65.4026C29.2297 60.0162 29.2297 54.6299 29.2297 49.2591C29.2297 49.0262 29.2297 48.7934 29.2297 48.5295C28.8416 48.4519 28.4846 48.3898 28.1431 48.3122C25.9234 47.7999 24.5263 46.2477 24.3711 43.9659C24.278 42.5533 24.2625 41.1408 24.2625 39.7282C24.2625 38.6882 23.921 37.85 23.1914 37.1359C22.3221 36.2822 21.4374 35.4284 20.6302 34.5281C18.5036 32.1532 18.5191 29.5764 20.6457 27.2015C21.4063 26.3477 22.229 25.5561 23.0517 24.7644C23.8899 23.9728 24.278 23.0414 24.2625 21.8772C24.2625 20.3094 24.2469 18.7261 24.4798 17.1894C24.7747 15.0162 26.3735 13.5881 28.5777 13.3708C29.9282 13.2311 31.2787 13.2311 32.6291 13.2466C33.8865 13.2622 34.9265 12.8896 35.7802 11.9583C36.5874 11.0735 37.4101 10.1732 38.357 9.45912C39.1642 8.83822 40.1421 8.46568 41.0424 8C41.5857 8 42.129 8 42.6723 8ZM27.8016 41.4823H27.7861C27.7861 42.1342 27.755 42.8017 27.7861 43.4536C27.8482 44.4936 28.1897 44.8817 29.2452 44.9593C30.5026 45.0369 31.7599 45.068 33.0172 45.0524C35.0351 45.0369 36.7116 45.7665 38.1086 47.1946C38.8537 47.9552 39.5833 48.7313 40.3749 49.4453C41.5546 50.5474 42.16 50.5474 43.3553 49.4453C44.1314 48.7158 44.861 47.9397 45.606 47.1946C46.9876 45.782 48.6485 45.0524 50.6354 45.068C51.8927 45.068 53.15 45.0524 54.4074 44.9748C55.556 44.8972 55.882 44.5247 55.9286 43.345C55.9596 42.2894 55.9596 41.2184 55.9441 40.1473C55.913 37.881 56.6426 35.9407 58.3501 34.4039C58.8934 33.9072 59.4212 33.395 59.9334 32.8672C60.2904 32.4947 60.6164 32.0756 60.9268 31.6564C61.2839 31.1597 61.2839 30.632 60.9268 30.1508C60.6009 29.7161 60.2594 29.297 59.8868 28.9089C59.3746 28.3657 58.8313 27.8379 58.2725 27.3256C56.6271 25.8044 55.9286 23.9262 55.9596 21.722C55.9751 20.6044 55.9751 19.4712 55.9286 18.3536C55.882 17.3136 55.5095 16.9255 54.4694 16.8479C53.4605 16.7703 52.4515 16.7082 51.4581 16.7703C48.9124 16.91 46.8013 16.0562 45.1248 14.1314C44.5971 13.5416 44.0227 12.9828 43.4484 12.4395C42.16 11.2442 41.5702 11.2442 40.2973 12.4395C39.4591 13.2311 38.6674 14.0849 37.8292 14.892C36.5564 16.1183 35.0351 16.7237 33.2656 16.7392C31.9462 16.7547 30.6267 16.7547 29.3228 16.8479C28.2052 16.91 27.8482 17.298 27.8016 18.4157C27.755 19.4246 27.755 20.4336 27.7861 21.427C27.8637 23.8796 27.0721 25.9286 25.2249 27.574C24.5108 28.2104 23.8278 28.9089 23.1914 29.6385C22.3221 30.632 22.3221 31.1752 23.1914 32.1687C23.8744 32.9448 24.6195 33.6433 25.349 34.3574C26.4977 35.4905 27.4446 36.7479 27.6464 38.4088C27.7395 39.4333 27.755 40.4578 27.8016 41.4823ZM50.9769 48.5606C49.9058 48.514 48.99 48.7779 48.2138 49.5385C47.1893 50.563 46.1959 51.634 45.0783 52.5499C43.0603 54.2108 40.794 54.1953 38.6985 52.612C38.2483 52.2705 37.8447 51.8824 37.4412 51.4943C36.7426 50.8269 36.0752 50.1283 35.3922 49.4453C34.6626 48.7158 33.7623 48.514 32.7378 48.5761C32.7378 53.4191 32.7378 58.2001 32.7378 63.0587C32.9551 62.9811 33.1414 62.919 33.3121 62.8413C35.8113 61.7703 38.3259 60.7303 40.8251 59.6282C41.5391 59.3177 42.1755 59.3022 42.8896 59.6126C45.3732 60.6837 47.8568 61.7392 50.3404 62.7948C50.5422 62.8879 50.7595 62.95 50.9924 63.0431C50.9769 58.2001 50.9769 53.4036 50.9769 48.5606Z" fill="#FFB740"/>
                                            <path d="M40.685 30.6785C41.8026 29.5453 42.8115 28.5208 43.836 27.5274C44.7984 26.596 46.2265 26.8133 46.7232 27.9775C47.0182 28.645 46.9561 29.328 46.4283 29.8713C44.9381 31.3925 43.4325 32.8982 41.9112 34.3884C41.2438 35.0403 40.2814 35.0403 39.5984 34.4039C38.7912 33.6588 37.9995 32.8827 37.2545 32.0755C36.6336 31.408 36.6956 30.337 37.3321 29.7005C37.9685 29.0486 38.993 28.9865 39.6915 29.6074C40.033 29.8868 40.3124 30.2749 40.685 30.6785Z" fill="#FFB740"/>
                                            <path d="M41.8198 43.3141C34.9278 43.2985 29.2931 37.6173 29.3086 30.7097C29.3241 23.8177 34.9589 18.1985 41.8509 18.1985C48.774 18.1985 54.3931 23.8332 54.3931 30.7563C54.3931 37.6794 48.7274 43.3296 41.8198 43.3141ZM50.8695 30.7563C50.8695 25.758 46.8336 21.7066 41.8354 21.7066C36.8681 21.7066 32.8167 25.8046 32.8478 30.7873C32.8788 35.7701 36.8992 39.8059 41.8509 39.8059C46.8026 39.8215 50.8695 35.739 50.8695 30.7563Z" fill="#FFB740"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_361_1975">
                                                <rect width="45.6985" height="59.4826" fill="white" transform="translate(19 8)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <?php if($nroClientePost):?>
                                        <h3 class="pro-title2 pro-mb-0 pro-weight-800"><?= $nroClientePost;?></h3>
                                    <?php endif;?>
                                    <?php if($textoLargoPost):?>
                                        <div class="pro-mb-0 pro-text pro-p-mb-0"><?= $textoLargoPost;?></div>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="pro-card__right pro-relative">
                                <?php if($counter == 2):?>
                                    <img class="pro-card__icon-svg3 pro-card__icon--sheet" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                                <?php endif;?>
                                <?php if($titlePost):?>
                                    <h3 class="pro-color-blue pro-title-line pro-title-small3"><?= $titlePost;?></h3>
                                <?php endif;?>
                                <?php if($textoCortoPost):?>
                                    <div class="pro-text"><?= $textoCortoPost;?></div>
                                <?php endif;?>
                                <?php if($linkPost):?>
                                    <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= $linkPost;?>">
                                        Más información
                                        <svg class="pro-btn-icon-small pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"></path>
                                        </svg>
                                    </a>
                                <?php endif;?>
                                <?php if($counter == 1):?>
                                    <img class="pro-card__icon pro-absolute pro-card__icon--sheet" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                                <?php endif;?>
                            </div>
                        </div>
                        <?php if($counter % 2 == 0):?>
                            <img class="pro-event-none pro-absolute pro-image-shadow2 pro-contain" src="<?= $imageShadow2;?>" alt="Imagen Sombra">
                            <img class="pro-event-none pro-absolute pro-image-shadow3 pro-contain" src="<?= $imageShadow3;?>" alt="Imagen Sombra">
                        <?php endif;?>
                    </div>
                    <?php $counter++;?>
                <?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_query();?>
        </div>
    </section>

<?php else:?>
    <h3>Listado con tabs productos</h3>
<?php endif;?>