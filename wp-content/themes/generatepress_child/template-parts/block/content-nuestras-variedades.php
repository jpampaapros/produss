<?php
$id = $block['id'];
$titulo = get_field('titulo');
$texto = get_field('texto');
$variedades = get_field('variedades');
?>

<?php if(!is_admin()):?>
    <section class="<?= $id; ?> pro-nuestras-variedades pro-o-hidden">
        <?php if($titulo):?>
            <h2 class="pro-title-line-center pro-text-center pro-title pro-color-blue pro-mb-16 pro-weight-800"><?= $titulo; ?></h2>
        <?php endif;?>
        <?php if($texto):?>
            <div class="pro-nuestras-variedades__text pro-text pro-text-center"><?= $texto;?></div>
        <?php endif;?>
        <?php if($variedades):?>
            <div class="pro-flex pro-section__content pro-mx-auto pro-mov-flex-direction">
                <?php foreach ($variedades as $item):?>
                    <?php
                        $imagen = $item["imagen"];
                        $texto = $item["titulo"];
                        $url = $item["url"];
                    ?>
                    <div class="pro-card pro-text-center pro-item pro-w-medium pro-shrink-0 pro-relative">
                        <img class="pro-card__icon--sheet pro-card__icon" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                        <?php if($imagen):?>
                            <?php $image = wp_get_attachment_image($imagen["id"],"full",false,["class"=>"pro-mx-auto pro-w-full pro-item__image"]); ?>
                            <?= $image;?>
                        <?php endif;?>
                        <?php if($texto):?>
                            <div class="pro-title-small pro-color-blue"><?= $texto;?></div>
                        <?php endif;?>
                        <?php if($url):?>
                            <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= $url;?>">
                                Más información
                                <svg class="pro-btn-icon-small pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"/>
                                </svg>
                            </a>
                        <?php endif;?>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </section>
<?php else:?>
    <h3>Nuestras variedades</h3>
<?php endif;?>

