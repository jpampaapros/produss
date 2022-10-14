<?php
$id = $block['id'];
$pageEscuela = get_page_by_path('escuela-produss');
$pageEscuelaId = $pageEscuela->ID;
$linkTodos = get_the_permalink($pageEscuelaId);
$isTax = is_tax("categoria_escuela");
if($isTax):
    $queried_object = get_queried_object();
    $linkActual = $queried_object->slug;
    $titulo = $queried_object->name;
    $titulo2 = strtolower($titulo);
    $texto = $queried_object->description;
else:
    $titulo = get_field('titulo_escuela','option');
    $titulo2 = "innovación y capacitación continua";
    $texto = get_field('texto_escuela','option');
    $linkActual = null;
endif;
$postDestacado = get_field("post_destacado_escuela","option");
?>
<?php if($titulo):?>
    <?php
    $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4863.png";
    $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group.png";
    ?>
    <section class="<?= $id; ?> pro-listado-con-tabs-produss-informa pro-listado-grilla2">
        <div class="pro-text-center pro-color-white pro-bg-blue pro-banner-title pro-relative pro-o-hidden">
            <div class="pro-section-content pro-relative">
                <?php if($titulo):?>
                    <div class="pro-mov-px-spacing">
                        <h2 class="pro-section__title pro-title pro-title-line-center pro-only-desk"><?= $titulo;?></h2>
                        <div class="pro-section__title pro-title pro-title-line pro-text-left pro-only-mov"><?= $titulo;?></div>
                    </div>
                <?php endif;?>
                <?php if($texto):?>
                    <div class="pro-mov-text-left pro-section__text pro-text pro-mov-px-spacing"><?= $texto;?></div>
                <?php endif;?>
                <?php
                    $terms = get_terms( 'categoria_escuela', array(
                        'hide_empty' => false,
                        'parent' => 0,
                        'exclude' => array(22)
                    ));
                ?>
                <?php if($terms):?>
                    <div class="pro-group-btns pro-mov-flex pro-mov-px-spacing pro-mov-btn-spacing pro-mov-o-y-auto pro-mov-no-scroll">
                        <a class="pro-btn <?= (is_null($linkActual)) ? 'pro-bg-orange pro-color-blue': 'pro-btn-white-outline';?> pro-minw-initial" href="<?= $linkTodos;?>">Todos</a>
                        <?php foreach ($terms as $term):?>
                            <?php
                                $termId = $term->term_id;
                                $termSlug = get_term_link($termId);
                                $termName = $term->name;
                            ?>
                            <a class="pro-btn <?= ($linkActual == $term->slug) ? 'pro-bg-orange pro-color-blue': 'pro-btn-white-outline';?> pro-minw-initial" href="<?= $termSlug;?>"><?= $termName;?></a>
                        <?php endforeach;?>
                    </div>
                    <?php if(empty($tab)) $tab = $terms[0]->slug; ?>
                <?php endif;?>
            </div>
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-desk" src="<?= $imageShadow;?>" alt="Imagen Sombra">
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        </div>
        <div class="pro-section-content pro-listado-con-tabs-produss-informa__posts2 pro-relative">
            <img src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="" class="pro-icon pro-absolute pro-card__icon--sheet pro-only-desk">
            <img src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="" class="pro-icon2 pro-absolute pro-card__icon--sheet pro-only-desk">
            <div class="pro-grid-post pro-grid-post-latest">
                <div class="pro-mov-px-spacing">
                    <h3 class="pro-section__title pro-title-line pro-title-small3 pro-color-blue">Últimas publicaciones de <?= $titulo2;?></h3>
                </div>
                <?php

                if($isTax):
                    $args = array(
                        'post_type' => 'escuelas-produss',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'post_date',
                        'order' => 'desc',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categoria_escuela',
                                'field'    => 'slug',
                                'terms'    => $linkActual
                            ),
                        ),
                    );
                else:
                    $args = array(
                        'post_type' => 'escuelas-produss',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'post_date',
                        'order' => 'desc',
//                        'tax_query' => array(
//                            array(
//                                'taxonomy' => 'categoria_escuela',
//                                'field'    => 'slug',
//                                'terms'    => 'todos'
//                            ),
//                        ),
                    );
                endif;
                $the_query = new WP_Query( $args );
                ?>
                <?php if($the_query->have_posts() ):?>
                    <div class="pro-cards pro-mov-o-y-auto pro-mov-px-spacing pro-mov-no-scroll">
                        <?php while ($the_query->have_posts() ) : $the_query->the_post();
                            $idPost = get_the_ID();
                            $titlePost = get_the_title($idPost);
                            $textoCortoPost = get_the_excerpt($idPost);
                            $nroClientePost = get_field('nro_clientes',$idPost);
                            $linkPost = get_the_permalink($idPost);
                            $featuredImgPost = get_the_post_thumbnail_url( $idPost );
                            $categoriesPost = get_the_terms( $idPost, 'categoria_escuela' );
                            $isVideo = false;
                            $firstCategory = $categoriesPost ? $categoriesPost[0] : "";
                            $dateNow = get_the_modified_date('d F, Y');
                            $datePublication = get_field('fecha_de_publicacion', $idPost);
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
                                        <a href="<?= $linkPost;?>">
                                            <img src="<?= $featuredImgPost;?>" alt="" class="pro-card__image pro-cover pro-w-full">
                                        </a>
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
                                <div class="pro-categories pro-flex pro-items-center pro-mov-flex-column pro-mov-items-start">
                                    <?php if($categoriesPost):?>
                                        <div class="pro-categories__date pro-uppercase pro-shrink-0"><?= $datePublication ? $datePublication : $dateNow;?></div>
                                        <div class="pro-categories__btns">
                                            <?php foreach ($categoriesPost as $categoryPost):?>
                                                <?php
                                                    if($categoryPost->term_id == 22) continue;
                                                    $categoryPostId = $categoryPost->term_id;
                                                    $categoryPostUrl = get_term_link($categoryPostId);
                                                    $categoryPostName = $categoryPost->name;
                                                ?>
                                                <a class="pro-btn2 pro-color-blue" href="<?= $categoryPostUrl;?>"><?= $categoryPostName;?></a>
                                            <?php endforeach;?>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <?php if($titlePost):?>
                                    <div class="pro-text"><?= $titlePost;?></div>
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
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
                <?php wp_reset_query();?>
            </div>

            <?php if($postDestacado):?>
                <?php
                    $postTitle = $postDestacado->post_title;
                    $postId = $postDestacado->ID;
                    $postImage = get_the_post_thumbnail($postId,'full', ["class"=>"pro-item__image pro-w-ful"]);
                    $postLink = get_the_permalink($postId);
                    $dateNow = get_the_modified_date('d F, Y', $postId);
                    $textAdditional = get_field('texto_adicional', $postId);
                    $postDatePublication = get_field('fecha_de_publicacion', $postId);
                ?>
                <div class="pro-post-main-container pro-relative pro-mov-px-spacing">
                    <svg class="pro-icon pro-absolute pro-only-desk" width="306" height="306" viewBox="0 0 306 306" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="153" cy="153" r="153" fill="#F1F6FF"/>
                    </svg>
                    <div class="pro-bg-blue pro-color-white pro-post-main pro-relative">
                        <div class="pro-item__left">
                            <h3 class="pro-item__subtitle pro-title-line pro-title-small3">Seminario especial</h3>
                            <div class="pro-flex pro-title-small4 pro-justify-betwwen pro-post-main__text-aditional pro-weight-800 pro-mov-flex-column">
                                <?php if($dateNow):?>
                                    <div class="pro-flex pro-p-mb-0">
                                        <svg class="pro-item__icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 5.5V1.5M14 5.5V1.5M5 9.5H15M3 19.5H17C17.5304 19.5 18.0391 19.2893 18.4142 18.9142C18.7893 18.5391 19 18.0304 19 17.5V5.5C19 4.96957 18.7893 4.46086 18.4142 4.08579C18.0391 3.71071 17.5304 3.5 17 3.5H3C2.46957 3.5 1.96086 3.71071 1.58579 4.08579C1.21071 4.46086 1 4.96957 1 5.5V17.5C1 18.0304 1.21071 18.5391 1.58579 18.9142C1.96086 19.2893 2.46957 19.5 3 19.5Z" stroke="#FFB740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <?= $postDatePublication ? $postDatePublication : $dateNow;?>
                                    </div>
                                <?php endif;?>
                                <?php if($textAdditional):?>
                                    <div class="pro-flex pro-p-mb-0">
                                        <svg class="pro-item__icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2.5C9.87827 2.5 7.84344 3.34285 6.34315 4.84315C4.84285 6.34344 4 8.37827 4 10.5C4 15.9 11.05 22 11.35 22.26C11.5311 22.4149 11.7616 22.5001 12 22.5001C12.2384 22.5001 12.4689 22.4149 12.65 22.26C13 22 20 15.9 20 10.5C20 8.37827 19.1571 6.34344 17.6569 4.84315C16.1566 3.34285 14.1217 2.5 12 2.5ZM12 20.15C9.87 18.15 6 13.84 6 10.5C6 8.9087 6.63214 7.38258 7.75736 6.25736C8.88258 5.13214 10.4087 4.5 12 4.5C13.5913 4.5 15.1174 5.13214 16.2426 6.25736C17.3679 7.38258 18 8.9087 18 10.5C18 13.84 14.13 18.16 12 20.15ZM12 6.5C11.2089 6.5 10.4355 6.7346 9.77772 7.17412C9.11992 7.61365 8.60723 8.23836 8.30448 8.96927C8.00173 9.70017 7.92252 10.5044 8.07686 11.2804C8.2312 12.0563 8.61216 12.769 9.17157 13.3284C9.73098 13.8878 10.4437 14.2688 11.2196 14.4231C11.9956 14.5775 12.7998 14.4983 13.5307 14.1955C14.2616 13.8928 14.8864 13.3801 15.3259 12.7223C15.7654 12.0645 16 11.2911 16 10.5C16 9.43913 15.5786 8.42172 14.8284 7.67157C14.0783 6.92143 13.0609 6.5 12 6.5ZM12 12.5C11.6044 12.5 11.2178 12.3827 10.8889 12.1629C10.56 11.9432 10.3036 11.6308 10.1522 11.2654C10.0009 10.8999 9.96126 10.4978 10.0384 10.1098C10.1156 9.72186 10.3061 9.36549 10.5858 9.08579C10.8655 8.80608 11.2219 8.6156 11.6098 8.53843C11.9978 8.46126 12.3999 8.50087 12.7654 8.65224C13.1308 8.80362 13.4432 9.05996 13.6629 9.38886C13.8827 9.71776 14 10.1044 14 10.5C14 11.0304 13.7893 11.5391 13.4142 11.9142C13.0391 12.2893 12.5304 12.5 12 12.5Z" fill="#FFB740"/>
                                        </svg>
                                        <?= $textAdditional;?>
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="pro-post-main__image-container pro-only-mov">
                                <?= $postImage;?>
                            </div>
                            <?php if($postTitle):?>
                                <div class="pro-item__title pro-title-small">
                                    <?= $postTitle;?>
                                </div>
                            <?php endif;?>
                            <?php if($postLink):?>
                                <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= $postLink;?>">
                                    Más información
                                    <svg class="pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"/>
                                    </svg>
                                </a>
                            <?php endif;?>
                        </div>
                        <div class="pro-item__right pro-only-desk">
                            <div class="pro-post-main__image-container">
                                <?= $postImage;?>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endif;?>


        </div>
    </section>
<?php else:?>
    <h3>Contenido escuela</h3>
<?php endif;?>