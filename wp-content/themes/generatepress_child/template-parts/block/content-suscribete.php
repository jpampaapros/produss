<?php
$id = $block['id'];
$logo = get_field('logo_suscribete','option');
$texto = get_field('texto_suscribete','option');
$tituloForm = get_field('titulo_form_suscribete','option');
$estilo = get_field('estilo');
$form = get_field('form_suscribete','option');
?>

<?php if(!is_admin()):?>
    <?php
        if ($estilo == "estilo2"):
            $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4598.png";
            $imageShadowMov = site_url()."/wp-content/uploads/2022/10/shadow13.png";
        elseif ($estilo == "estilo3"):
            $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4598.png";
            $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group-4522.png";
        else:
            $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4520.png";
            $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group-4522.png";
        endif;
    ?>
    <section class="<?= $id; ?> pro-suscribete pro-o-hidden pro-bg-blue2 pro-color-white pro-relative pro-mov-px-spacing">
        <img class="pro-event-none pro-absolute pro-image-shadow2 pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        <div class="pro-section-content pro-flex pro-mov-text-center">
            <div class="pro-section__left">
                <?php if($logo):?>
                    <?php $image = wp_get_attachment_image($logo["id"],"full",false,["class"=>"pro-section__logo "]); ?>
                    <?= $image;?>
                <?php endif;?>
                <?php if($texto):?>
                    <div class="pro-uppercase pro-text"><?= $texto;?></div>
                <?php endif;?>
            </div>
            <div class="pro-section__rigth">
                <?php if($tituloForm):?>
                    <h3 class="pro-suscribete__text1 pro-only-desk"><?= $tituloForm;?></h3>
                <?php endif;?>
                <?php if($form):?>
                    <?= do_shortcode($form);?>
                <?php endif;?>
            </div>
        </div>
        <img class="pro-event-none pro-absolute pro-image-shadow pro-contain" src="<?= $imageShadow;?>" alt="Imagen Sombra">
    </section>
<?php else:?>
    <h3>Suscribete</h3>
<?php endif;?>
