<?php

setlocale(LC_ALL,"es_ES");
$id = $block['id'];
$titulo = get_field('titulo');
$texto = get_field('texto');
$estilo = get_field('estilo');

$cat_argtos=array(
    'orderby' => 'date',
    'order' => 'ASC'
);
$categorias = get_categories($cat_argtos);
$imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4536.png";
$imageShadowMov = site_url()."/wp-content/uploads/2022/09/shadow6.png";
$imageShadow3Mov = site_url()."/wp-content/uploads/2022/09/Group-4536-1.png";


?>

<?php if(!is_admin()):?>
    <section class="<?= $id; ?> pro-produss-informa pro-relative pro-o-hidden pro-style-<?= $estilo;?>">
        <?php if($estilo !== "estilo2"):?>
            <img class="pro-event-none pro-absolute pro-only-mov pro-image-shadow2 pro-contain" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        <?php endif;?>
        <div class="pro-section-content">
            <?php if($titulo):?>
                <h2 class="pro-mov-px-spacing pro-section__title pro-text-center pro-title pro-title-line-center pro-color-blue"><?= $titulo; ?></h2>
            <?php endif;?>
            <?php if($texto):?>
                <div class="pro-mov-px-spacing pro-section__text pro-text pro-text-center"><?= $texto;?></div>
            <?php endif;?>
            <?php if($categorias):?>
                <div class="pro-tab-list pro-flex pro-justify-center pro-mov-justify-initial pro-mov-no-scroll">
                    <?php foreach ($categorias as $key => $categoria):?>
                        <a class="pro-tab <?= ($key == 0) ? 'pro-active': '';?>" href="#tab-<?= $key;?>"><?= $categoria->name;?></a>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <?php foreach ($categorias as $key => $categoria):?>
                <div id="tab-<?= $key;?>" class="pro-tab-content <?= ($key == 0 ) ? 'pro-show': '';?>">
                    <?php
                        $args = array(
                            'showposts' => 4,
                            'category__in' => array($categoria->term_id),
                            'caller_get_posts'=>1,
                        );
                        $entradas = get_posts($args);
                    ?>
                    <div class="pro-tab-content-container pro-mov-px-spacing">
                        <div>
                            <?php if($entradas):?>
                                <div class="pro-card-main pro-bg-white">
                                    <?php
                                        $primeraEntrada = $entradas[0];
                                    ?>
                                    <?php $image = wp_get_attachment_image(get_post_thumbnail_id( $primeraEntrada->ID ),"full",false,["class"=>"pro-w-full pro-card__image pro-cover"]); ?>
                                    <?= $image;?>
                                    <div class="pro-card__content">
                                        <?php
                                            $dateNow = $primeraEntrada->post_modified;
                                            $newDate = date_i18n("d\ F\,Y",strtotime($dateNow));
                                            $categoriesPost = get_the_category($primeraEntrada->ID);
                                        ?>
                                        <div class="pro-categories pro-flex pro-items-center">
                                            <div class="pro-categories__date pro-uppercase pro-shrink-0"><?= $newDate;?></div>
                                            <div class="pro-categories__btns">
                                                <?php if($categoriesPost):?>
                                                    <?php foreach ($categoriesPost as $categoryPost):?>
                                                        <?php
                                                            $categoryPostId = $categoryPost->term_id;
                                                            $categoryPostSlug = get_term_link($categoryPostId);
                                                        ?>
                                                        <a class="pro-btn2 pro-color-blue" href="<?= $categoryPostSlug;?>"><?= $categoryPost->name;?></a>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                        <h3 class="pro-card__title pro-color-blue pro-title-small"><?= $primeraEntrada->post_title;?></h3>
                                        <?php
                                            $primeraEntradaId = $primeraEntrada->ID;
                                            $primeraEntradaSlug = get_the_permalink($primeraEntradaId);
                                        ?>
                                        <a class="pro-color-blue pro-card__link pro-flex pro-items-center" href="<?= $primeraEntradaSlug;?>">
                                            Leer más
                                            <svg class="pro-card__icon" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="29" height="29" rx="14.5" fill="#FFB740"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2814 11.4853C11.2814 11.1008 11.5931 10.7891 11.9777 10.7891H17.5574C17.942 10.7891 18.2537 11.1008 18.2537 11.4853V17.0651C18.2537 17.4496 17.942 17.7614 17.5574 17.7614C17.1729 17.7614 16.8612 17.4496 16.8612 17.0651V13.1663L11.9777 18.0498C11.7058 18.3217 11.2649 18.3217 10.993 18.0498C10.7211 17.7779 10.7211 17.337 10.993 17.0651L15.8765 12.1816H11.9777C11.5931 12.1816 11.2814 11.8699 11.2814 11.4853Z" fill="#000957"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php endif;?>
                        </div>
                        <div>
                            <?php if($entradas):?>
                                <?php foreach ($entradas as $key2 => $entrada):?>
                                    <?php
                                        $entradaId = $entrada->ID;
                                        $entradaSlug = get_the_permalink($entradaId);
                                    ?>
                                    <?php if($key2 != 0):?>
                                        <div class="pro-card pro-bg-white pro-flex pro-mov-flex-column">
                                            <div class="pro-card__left pro-shrink-0">
                                                <?php $image = wp_get_attachment_image(get_post_thumbnail_id( $entrada->ID ),"full",false,["class"=>"pro-w-full pro-card__image pro-cover"]); ?>
                                                <?= $image;?>
                                            </div>
                                            <div class="pro-card__right">
                                                <?php
                                                $dateNow = $entrada->post_modified;
                                                $newDate = date_i18n("d\ F\,Y",strtotime($dateNow));
                                                $categoriesPost = get_the_category($entrada->ID);
                                                ?>
                                                <div class="pro-categories pro-flex pro-items-center">
                                                    <div class="pro-categories__date pro-uppercase pro-shrink-0"><?= $newDate;?></div>
                                                    <div class="pro-categories__btns">
                                                        <?php if($categoriesPost):?>
                                                            <?php foreach ($categoriesPost as $categoryPost):?>
                                                                <a class="pro-btn2 pro-color-blue" href="<?= site_url()."/categorias/".$categoryPost->slug;?>"><?= $categoryPost->name;?></a>
                                                            <?php endforeach;?>
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                                <h3 class="pro-color-blue pro-card__title pro-title-small2 pro-weight-800"><?= $entrada->post_title;?></h3>
                                                <a class="pro-color-blue pro-card__link pro-flex pro-items-center" href="<?= $entradaSlug;?>">
                                                    Leer más
                                                    <svg class="pro-card__icon" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="29" height="29" rx="14.5" fill="#FFB740"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2814 11.4853C11.2814 11.1008 11.5931 10.7891 11.9777 10.7891H17.5574C17.942 10.7891 18.2537 11.1008 18.2537 11.4853V17.0651C18.2537 17.4496 17.942 17.7614 17.5574 17.7614C17.1729 17.7614 16.8612 17.4496 16.8612 17.0651V13.1663L11.9777 18.0498C11.7058 18.3217 11.2649 18.3217 10.993 18.0498C10.7211 17.7779 10.7211 17.337 10.993 17.0651L15.8765 12.1816H11.9777C11.5931 12.1816 11.2814 11.8699 11.2814 11.4853Z" fill="#000957"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
        <?php if($estilo != "estilo2"):?>
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain" src="<?= $imageShadow;?>" alt="Imagen Sombra">
            <img class="pro-event-none pro-absolute pro-only-mov pro-image-shadow3 pro-contain pro-only-mov" src="<?= $imageShadow3Mov;?>" alt="Imagen Sombra">
        <?php endif;?>
    </section>
<?php else:?>
    <h3>Producss informa</h3>
<?php endif;?>
