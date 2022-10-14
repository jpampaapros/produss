<?php
$id = $block['id'];
$titulo = get_field('titulo');
$texto = get_field('texto');
$imagen = get_field('imagen');
$tituloCard = get_field('titulo_card');
$textoCard = get_field('texto_card');
?>

<?php if(!is_admin()):?>
    <?php
    $imageShadow = site_url()."/wp-content/uploads/2022/09/banner-shadow.png";
    ?>
    <section class="<?= $id; ?> pro-o-hidden pro-relative pro-bg-blue pro-color-white pro-banner-nosotros pro-mov-px-spacing">
        <div class="pro-section-content pro-flex pro-flex-wrap">
            <?php if($titulo):?>
                <h2 class="pro-title pro-title-line pro-w-full pro-relative">
                    <?= $titulo;?>
                    <img class="pro-card__icon--sheet pro-card__icon" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                </h2>
            <?php endif;?>
            <div class="pro-section__left pro-w-medium">
                <?php if($texto):?>
                    <div class="pro-text pro-mb-0"><?= $texto;?></div>
                <?php endif;?>
            </div>
            <div class="pro-section__right pro-w-medium pro-lh-0 pro-relative pro-only-desk">
                <?php $image = wp_get_attachment_image($imagen["id"],"full",false,["class"=>"pro-w-full pro-radius"]); ?>
                <?= $image;?>
                <img class="pro-card__icon--sheet pro-card__icon2" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
            </div>
            <div class="pro-relative pro-z-1 pro-radius pro-text-center pro-section__bottom pro-w-full pro-bg-orange pro-color-blue">
                <?php if($tituloCard):?>
                    <h3 class="pro-title-small3"><?= $tituloCard;?></h3>
                <?php endif;?>
                <?php if($textoCard):?>
                    <div class="pro-p-mb-0 pro-text pro-mov-br-none"><?= $textoCard;?></div>
                <?php endif;?>
            </div>
        </div>
        <img class="pro-event-none pro-absolute pro-image-shadow pro-contain" src="<?= $imageShadow;?>" alt="Imagen Sombra">
    </section>
<?php else:?>
    <h3>Banner nosotros</h3>
<?php endif;?>