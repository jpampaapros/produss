<?php
$id = $block['id'];
$tituloGrande = get_field('titulo_grande');
$tituloNormal = get_field('titulo_normal');
$texto = get_field('texto');
$cards = get_field('cards');
?>

<?php if($tituloGrande || $tituloNormal || $texto || $cards):?>
    <section class="<?= $id; ?> pro-experiencia pro-o-hidden">
        <div class="pro-section-content pro-flex pro-relative">
            <img class="pro-card__icon--sheet pro-card__icon-svg" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
            <div class="pro-section__left pro-shrink-0 pro-only-desk">
                <?php if($cards):?>
                    <div class="pro-experiencia__cards">
                        <?php foreach ($cards as $item):?>
                            <?php
                                $iconoItem = $item["icon"];
                                $tituloItem = $item["titulo"];
                                $textoItem = $item["texto"];
                            ?>
                            <div class="pro-card pro-shrink-0 pro-text-center">
                                <div class="pro-card__content pro-card-shadow pro-w-full pro-flex-center pro-relative">
                                    <?php if($iconoItem):?>
                                        <div class="pro-card__icon pro-bg-orange pro-flex-center">
                                            <?php $image = wp_get_attachment_image($iconoItem["id"],"full",false,["class"=>"pro-w-full pro-img-icon"]); ?>
                                            <?= $image;?>
                                        </div>
                                    <?php endif;?>
                                    <?php if($tituloItem):?>
                                        <h3 class="pro-card__title pro-mb-0 pro-color-blue"><?= $tituloItem;?></h3>
                                    <?php endif;?>
                                    <?php if($textoItem):?>
                                        <div class="pro-card__text pro-mb-0 pro-p-mb-0 pro-text"><?= $textoItem;?></div>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
            <div class="pro-section__right pro-flex-center pro-w-full">
                <img class="pro-card__icon--sheet pro-card__icon-svg2" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                <h2 class="pro-experiencia__group-title pro-text-center pro-color-blue pro-title-line-center">
                    <?php if($tituloGrande):?>
                        <span class="pro-experiencia-title-big pro-color-blue"><?= $tituloGrande; ?></span>
                    <?php endif;?>
                    <?php if($tituloNormal):?>
                        <span class="pro-experiencia-title pro-block pro-color-blue"><?= $tituloNormal; ?></span>
                    <?php endif;?>
                </h2>
                <?php if($texto):?>
                    <div class="pro-text pro-text-center pro-mb-0"><?= $texto;?></div>
                <?php endif;?>
            </div>
        </div>
        <div class="pro-only-mov pro-experiencia-container-mov">
            <?php if($cards):?>
                <div class="pro-carousel-experiencia">
                    <?php foreach ($cards as $item):?>
                        <?php
                            $iconoItem = $item["icon"];
                            $tituloItem = $item["titulo"];
                            $textoItem = $item["texto"];
                        ?>
                        <div class="pro-card">
                            <div class="pro-card__content pro-card-shadow pro-w-full pro-flex-center pro-relative">
                                <?php if($iconoItem):?>
                                    <div class="pro-card__icon pro-bg-orange pro-flex-center">
                                        <?php $image = wp_get_attachment_image($iconoItem["id"],"full",false,["class"=>"pro-w-full pro-img-icon"]); ?>
                                        <?= $image;?>
                                    </div>
                                <?php endif;?>
                                <?php if($tituloItem):?>
                                    <h3 class="pro-card__title pro-mb-0 pro-color-blue"><?= $tituloItem;?></h3>
                                <?php endif;?>
                                <?php if($textoItem):?>
                                    <div class="pro-card__text pro-text-center pro-mb-0 pro-p-mb-0 pro-text"><?= $textoItem;?></div>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </section>

<?php else:?>
    <h3>No hay data</h3>
<?php endif;?>
