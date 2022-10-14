<?php
$id = $block['id'];
$titulo = get_field('titulo');
$subtitulo = get_field('subtitulo');
$texto = get_field('texto');
$cards = get_field('cards');
$estilo = get_field('estilo');
$imagenFondoDerecha = get_field('imagen_fondo_derecha');
?>

<?php if(!is_admin()):?>
    <?php
        $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4520.png";
        $imageShadowMov = site_url()."/wp-content/uploads/2022/09/shadow11.png";
        $imageShadowMov2 = site_url()."/wp-content/uploads/2022/09/Group-4521-3.png";
        if($estilo == "estilo2"){
            $imageShadow2 = site_url()."/wp-content/uploads/2022/09/Group-4521-1.png";
            $imageShadowMov3 = site_url()."/wp-content/uploads/2022/10/shadow10.png";
        }else{
            $imageShadow2 = site_url()."/wp-content/uploads/2022/09/Group-4521.png";
            $imageShadowMov3 = site_url()."/wp-content/uploads/2022/09/Group-4521-3.png";
        }
    ?>
    <section class="<?= $id; ?> pro-flex pro-servicio-tecnico pro-relative pro-o-hidden pro-mov-flex-column pro-style-<?= $estilo?>">
        <div class="pro-section__left pro-color-white pro-w-medium pro-shrink-0 pro-bg-blue">
            <?php if($subtitulo):?>
                <h3 class="pro-mb-0 pro-title-line pro-title-small2 pro-color-blue3"><?= $subtitulo;?></h3>
            <?php endif;?>
            <?php if($titulo):?>
                <h2 class="pro-title"><?= $titulo; ?></h2>
            <?php endif;?>
            <?php if($texto):?>
                <div class="pro-text pro-mb-0"><?= $texto;?></div>
            <?php endif;?>
            <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= site_url();?>/soporte-tecnico/">
                Más información
                <svg class="pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"/>
                </svg>
            </a>
        </div>
        <div class="pro-section__right pro-color-white pro-w-medium pro-shrink-0 pro-relative" <?= ($imagenFondoDerecha) ? 'style="background-image: url('.$imagenFondoDerecha['url'].')"':'';?>>
            <img class="pro-event-none pro-absolute pro-image-shadow3 pro-contain pro-only-mov" src="<?= $imageShadowMov2;?>" alt="Imagen Sombra">
            <?php if($cards):?>
                <div class="pro-servicio-tecnico__cards">
                    <?php foreach ($cards as $item):?>
                        <?php
                            $iconoItem = $item["icono"];
                            $tituloItem = $item["titulo"];
                        ?>
                        <div class="pro-card pro-flex pro-mov-text-center pro-items-center pro-mov-flex-column">
                            <?php if($iconoItem):?>
                                <?php $image = wp_get_attachment_image($iconoItem["id"],"full",false,["class"=>"pro-item__image pro-contain pro-shrink-0"]); ?>
                                <?= $image;?>
                            <?php endif;?>
                            <?php if($tituloItem):?>
                                <h3 class="pro-item__title pro-w-full pro-mb-0"><?= $tituloItem;?></h3>
                            <?php endif;?>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
        <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-desk" src="<?= $imageShadow;?>" alt="Imagen Sombra">
        <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        <img class="pro-event-none pro-absolute pro-image-shadow2 pro-contain" src="<?= $imageShadow2;?>" alt="Imagen Sombra">
        <img class="pro-event-none pro-absolute pro-image-shadow4 pro-contain pro-only-mov" src="<?= $imageShadowMov3;?>" alt="Imagen Sombra">
    </section>
<?php else:?>
    <h3>Servicio tecnico</h3>
<?php endif;?>
