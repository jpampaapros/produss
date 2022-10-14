<?php
$id = $block['id'];
$tituloPequeno = get_field('titulo_pequeno');
$titulo = get_field('titulo');
$texto = get_field('texto');
$items = get_field('items');
?>

<?php if(!is_admin()):?>
    <section class="<?= $id; ?> pro-asistencia-tecnica pro-relative pro-mov-px-spacing">
        <img class="pro-icon-svg1 pro-card__icon--sheet pro-only-desk" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
        <img class="pro-icon-svg2 pro-card__icon--sheet pro-only-desk" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
        <div class="pro-section-content pro-flex pro-mov-flex-column">
            <div class="pro-section__left pro-shrink-0">
                <?php if($tituloPequeno):?>
                    <h2 class="pro-title-line pro-title-small2 pro-color-blue3 pro-mb-0"><?= $tituloPequeno;?></h2>
                <?php endif;?>
                <?php if($titulo):?>
                    <div class="pro-color-blue pro-title pro-p-mb-0"><?= $titulo;?></div>
                <?php endif;?>
                <?php if($texto):?>
                    <div class="pro-text pro-mb-0 pro-p-mb-0"><?= $texto;?></div>
                <?php endif;?>
            </div>
            <div class="pro-section__right pro-w-full">
                <?php if($items):?>
                    <div class="pro-cards">
                        <?php foreach ($items as $item):?>
                            <?php
                                $imagenItem = $item["imagen"];
                                $tituloItem = $item["titulo"];
                            ?>
                            <div class="pro-flex pro-items-center pro-card pro-mov-flex-column">
                                <?php if($imagenItem):?>
                                    <?php $image = wp_get_attachment_image($imagenItem["id"],"full",false,["class"=>"pro-w-full pro-card__image"]); ?>
                                    <?= $image;?>
                                <?php endif;?>
                                <?php if($tituloItem):?>
                                    <h3 class="pro-mov-text-center pro-card__title pro-color-blue pro-weight-700"><?= $tituloItem;?></h3>
                                <?php endif;?>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>
<?php else:?>
    <h3>Asistencia tecnica</h3>
<?php endif;?>