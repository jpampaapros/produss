<?php
$id = $block['id'];
$titulo = get_field('titulo');
$texto = get_field('texto');
$cards = get_field('cards');
$estilo = get_field('estilo');
?>

<?php if(!is_admin()):?>
    <?php
        $imageShadow = site_url()."/wp-content/uploads/2022/09/desde-shadow2.png";
        $imageShadow2 = site_url()."/wp-content/uploads/2022/09/Group-45131.png";
        $imageShadow2Mov = site_url()."/wp-content/uploads/2022/10/shadow.png";
    ?>
    <section class="<?= $id; ?> pro-o-hidden pro-escuela-produss pro-relative <?= ($estilo == 'estilo2' ? 'pro-estilo2 pro-bg-blue4' : '');?>">
        <?php if($estilo == 'estilo2'):?>
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain" src="<?= $imageShadow;?>" alt="Imagen Sombra">
            <img class="pro-event-none pro-absolute pro-image-shadow2 pro-contain pro-only-desk" src="<?= $imageShadow2;?>" alt="Imagen Sombra">
            <img class="pro-event-none pro-absolute pro-image-shadow2 pro-contain pro-only-mov" src="<?= $imageShadow2Mov;?>" alt="Imagen Sombra">
        <?php endif;?>
            <svg class="pro-absolute pro-icon" width="76" height="151" viewBox="0 0 76 151" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="0.494164" cy="75.6709" r="74.7725" fill="#F1F6FF"/>
            </svg>
        <div class="pro-section-content pro-relative">
            <?php if($titulo):?>
                <h2 class="pro-mov-px-spacing pro-text-center pro-title-line-center pro-color-blue pro-title"><?= $titulo; ?></h2>
            <?php endif;?>
            <?php if($texto):?>
                <div class="pro-section__text pro-mb-large pro-mov-px-spacing pro-text pro-text-center"><?= $texto;?></div>
            <?php endif;?>
            <?php if($cards):?>
                <div class="pro-flex pro-flex-wrap pro-cards pro-mov-px-spacing pro-mov-o-x-visible pro-mov-o-y-auto pro-relative">
                    <?php foreach ($cards as $item):?>
                        <?php
                            $imagenItem = $item["imagen"];
                            $textoItem = $item["texto"];
                            $tituloItem = $item["titulo"];
                            $urlItem = $item["url"];
                        ?>
                        <div class="pro-card">
                            <div class="pro-card__content pro-text-center">
                                <?php if($imagenItem):?>
                                    <?php $image = wp_get_attachment_image($imagenItem["id"],"full",false,["class"=>"pro-cover pro-card__image pro-w-full"]); ?>
                                    <?= $image;?>
                                <?php endif;?>
                                <?php if($tituloItem):?>
                                    <h3 class="pro-color-blue pro-title-small"><?= $tituloItem;?></h3>
                                <?php endif;?>
                                <?php if($textoItem):?>
                                    <div class="pro-text"><?= $textoItem;?></div>
                                <?php endif;?>
                                <?php if($urlItem):?>
                                    <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= $urlItem;?>">
                                        Más información
                                        <svg class="pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"/>
                                        </svg>
                                    </a>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </section>
<?php else:?>
    <h3>Escuela produss</h3>
<?php endif;?>
