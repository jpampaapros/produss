<?php
$id = $block['id'];
$titulo = get_field('titulo');
$descripcion = get_field('descripcion');
$contenido = get_field('contenido');
?>

<?php if(!is_admin()):?>
    <?php
        $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4863.png";
        $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group.png";
    ?>
    <section class="<?= $id; ?> pro-politica-privacidad">
        <div class="pro-color-white pro-bg-blue pro-banner-title2 pro-relative pro-o-hidden">
            <div class="pro-section-content pro-relative">
                <?php if($titulo):?>
                    <div class="pro-mov-px-spacing">
                        <h2 class="pro-section__title pro-title pro-title-line-center pro-text-center pro-p-mb-0 pro-only-desk"><?= $titulo;?></h2>
                        <div class="pro-section__title pro-title pro-title-line pro-text-left pro-p-mb-0 pro-only-mov pro-mov-br-none"><?= $titulo;?></div>
                    </div>
                <?php endif;?>
            </div>
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-desk" src="<?= $imageShadow;?>" alt="Imagen Sombra">
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        </div>
    </section>
    <section class="pro-politica-privacidad__content pro-mov-px-spacing">
        <div class="pro-section-content">
            <?php if($descripcion):?>
                <div class="pro-section__text pro-text pro-mb-0"><?= $descripcion;?></div>
            <?php endif;?>
            <?php if($contenido):?>
                <div class="pro-text pro-politica-privacidad__contenido pro-list-check"><?= $contenido;?></div>
            <?php endif;?>
        </div>
    </section>
<?php else:?>
    <h3>Política de privacidad</h3>
<?php endif;?>