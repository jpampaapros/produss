<?php
$id = $block['id'];
$cards = get_field('cards_certificaciones',"option");
$sinTitulo = get_field('sin_titulo');
$titulo = get_field('titulo_interna_productos_certificaciones',"option");
$estilo = get_field('estilo');
?>

<?php if(!is_admin()):?>
    <?php
        $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4558-1.png";
    ?>
    <section class="<?= $id; ?> pro-o-hidden pro-relative pro-linea-tiempo pro-only-desk <?= ($estilo == 'estilo2') ? 'pro-bg-blue4': ''?>">
        <?php if($estilo == "estilo2"):?>
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain" src="<?= $imageShadow;?>" alt="Imagen Sombra">
        <?php endif;?>
        <div class="pro-section-content">
            <?php if($titulo && !$sinTitulo):?>
                <h2 class="pro-section__title pro-title-small3 pro-title-line-center pro-text-center pro-color-blue"><?= $titulo;?></h2>
            <?php endif;?>
            <?php if($cards):?>
                <div class="pro-flex pro-linea-tiempo__line">
                <?php foreach ($cards as $key => $item):?>
                    <?php
                        $tituloItem = $item["titulo"];
                        $imagenItem = $item["imagen"];
                        $textoItem = $item["texto"];
                    ?>
                    <div class="pro-item pro-text-center" style="--zindex: <?= ($key);?>;">
                        <div class="pro-item__button pro-flex-center pro-color-white" style="--color: green;--zindex: <?= ($key);?>;">
                            <?php if($tituloItem):?>
                                <h3 class="pro-mb-0 pro-item__title"><?= $tituloItem;?></h3>
                            <?php endif;?>
                        </div>
                        <?php if($imagenItem):?>
                            <?php $image = wp_get_attachment_image($imagenItem["id"],"full",false,["class"=>"pro-card__image"]); ?>
                            <?= $image;?>
                        <?php endif;?>
                        <div class="pro-text-center pro-flex-center pro-flex-column">
                            <a href="#" data-next="2" data-panel="panel-<?= $key;?>" class="pro-color-orange pro-js-is-button-tab pro-item__button-view pro-item__button-view--1 pro-hover-orange">
                                Ver más
                                <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.45564 1.13792C3.25568 0.333993 2.44185 -0.155614 1.63792 0.0443555C0.833993 0.244325 0.344386 1.05815 0.544356 1.86208L3.45564 1.13792ZM8.58824 8.31081L9.21449 9.67383C9.78445 9.41195 10.1313 8.82309 10.084 8.19763C10.0366 7.57217 9.60513 7.0422 9.00225 6.86908L8.58824 8.31081ZM0.5 15.5C0.5 16.3284 1.17157 17 2 17C2.82843 17 3.5 16.3284 3.5 15.5H0.5ZM0.544356 1.86208C1.05735 3.92447 3.25405 8.33966 8.17422 9.75254L9.00225 6.86908C5.48948 5.86034 3.82108 2.60706 3.45564 1.13792L0.544356 1.86208ZM7.96199 6.9478C6.75457 7.50255 4.96878 8.54714 3.45841 9.92811C1.99607 11.2652 0.5 13.1868 0.5 15.5H3.5C3.5 14.4835 4.2 13.315 5.48277 12.1422C6.71749 11.0132 8.22582 10.1281 9.21449 9.67383L7.96199 6.9478Z" fill="#FFB740"/>
                                </svg>
                            </a>
                            <a href="#" data-next="1" data-panel="panel-<?= $key;?>" class="pro-color-blue pro-item__button-view pro-js-is-button-tab pro-item__button-view--2" style="display: none">
                                Cerrar
                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.93089 7.33732C1.12696 7.53729 0.637355 8.35111 0.837324 9.15505C1.03729 9.95898 1.85111 10.4486 2.65505 10.2486L1.93089 7.33732ZM9.10378 2.20473L10.4668 1.57848C10.2049 1.00852 9.61605 0.66168 8.9906 0.709009C8.36514 0.756338 7.83517 1.18784 7.66205 1.79072L9.10378 2.20473ZM16.293 10.293C17.1214 10.293 17.793 9.6214 17.793 8.79297C17.793 7.96454 17.1214 7.29297 16.293 7.29297L16.293 10.293ZM2.65505 10.2486C4.71744 9.73561 9.13263 7.53892 10.5455 2.61874L7.66205 1.79072C6.65331 5.30349 3.40003 6.97189 1.93089 7.33732L2.65505 10.2486ZM7.74076 2.83098C8.29552 4.0384 9.34011 5.82418 10.7211 7.33456C12.0581 8.79689 13.9798 10.293 16.293 10.293L16.293 7.29297C15.2764 7.29297 14.108 6.59296 12.9351 5.3102C11.8062 4.07548 10.921 2.56714 10.4668 1.57848L7.74076 2.83098Z" fill="#002F87"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            <?php endif;?>
            <div class="pro-linea-tiempo__content">
                <?php foreach ($cards as $key=>$item):?>
                    <?php
                        $tituloItem = $item["titulo"];
                        $imagenItem = $item["imagen"];
                        $textoItem = $item["texto"];
                    ?>
                    <div class="pro-linea-tiempo__panel pro-relative" id="panel-<?= $key;?>" style="display: none">
                        <?php if($tituloItem):?>
                            <h3 class="pro-title-line pro-title pro-color-blue pro-linea-tiempo__panel-title"><?= $tituloItem;?></h3>
                            <?php if($textoItem):?>
                                <div class="pro-text pro-linea-tiempo__panel-text"><?= $textoItem;?></div>
                            <?php endif;?>
                        <?php endif;?>
                        <a href="" class="pro-linea-tiempo__panel-close pro-js-is-panel-close pro-bg-orange pro-flex-center">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.4514 2.78471L10.2375 7.99862L15.4514 13.2125C15.6026 13.3586 15.7232 13.5333 15.8062 13.7265C15.8892 13.9197 15.9329 14.1274 15.9347 14.3377C15.9365 14.5479 15.8965 14.7564 15.8168 14.951C15.7372 15.1456 15.6197 15.3223 15.471 15.471C15.3223 15.6197 15.1456 15.7372 14.951 15.8168C14.7564 15.8965 14.5479 15.9365 14.3377 15.9347C14.1274 15.9329 13.9197 15.8892 13.7265 15.8062C13.5333 15.7232 13.3586 15.6026 13.2125 15.4514L7.99862 10.2375L2.78471 15.4514C2.63865 15.6026 2.46394 15.7232 2.27076 15.8062C2.07759 15.8892 1.86983 15.9329 1.65959 15.9347C1.44936 15.9365 1.24086 15.8965 1.04628 15.8168C0.851693 15.7372 0.674911 15.6197 0.526247 15.471C0.377584 15.3223 0.260016 15.1456 0.180405 14.951C0.100794 14.7564 0.0607329 14.5479 0.0625598 14.3377C0.0643867 14.1274 0.108065 13.9197 0.191046 13.7265C0.274027 13.5333 0.394649 13.3586 0.545873 13.2125L5.75979 7.99862L0.545873 2.78471C0.394649 2.63865 0.274027 2.46394 0.191046 2.27076C0.108065 2.07759 0.0643867 1.86983 0.0625598 1.65959C0.0607329 1.44936 0.100794 1.24086 0.180405 1.04628C0.260016 0.851693 0.377584 0.674911 0.526247 0.526247C0.674911 0.377584 0.851693 0.260016 1.04628 0.180405C1.24086 0.100794 1.44936 0.0607329 1.65959 0.0625598C1.86983 0.0643867 2.07759 0.108065 2.27076 0.191046C2.46394 0.274027 2.63865 0.394649 2.78471 0.545873L7.99862 5.75979L13.2125 0.545873C13.3586 0.394649 13.5333 0.274027 13.7265 0.191046C13.9197 0.108065 14.1274 0.0643867 14.3377 0.0625598C14.5479 0.0607329 14.7564 0.100794 14.951 0.180405C15.1456 0.260016 15.3223 0.377584 15.471 0.526247C15.6197 0.674911 15.7372 0.851693 15.8168 1.04628C15.8965 1.24086 15.9365 1.44936 15.9347 1.65959C15.9329 1.86983 15.8892 2.07759 15.8062 2.27076C15.7232 2.46394 15.6026 2.63865 15.4514 2.78471Z" fill="#000957"/>
                            </svg>
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    <section class="pro-linea-tiempo pro-only-mov pro-mov-px-spacing pro-linea-tiempo-mov">
        <?php if($titulo):?>
            <h2 class="pro-section__title pro-title-small3 pro-title-line-center pro-text-center pro-color-blue"><?= $titulo;?></h2>
        <?php endif;?>
        <?php if($cards):?>
            <div>
               <?php foreach ($cards as $key => $item):?>
                <?php
                    $tituloItem = $item["titulo"];
                    $imagenItem = $item["imagen"];
                    $textoItem = $item["texto"];
                    $key = $key + 1;
                    $isPair = $key % 2 == 0;
                ?>
                <div class="pro-card">
                    <a class="pro-accordion pro-btn pro-color-white <?= $isPair ? 'pro-bg-blue': 'pro-bg-blue2';?>  pro-w-full pro-relative pro-mov-btn-h-large">
                        <?= $tituloItem;?>
                        <svg class="pro-section__icon pro-absolute pro-card__icon--toggle" width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle r="25" transform="matrix(-1 8.74228e-08 8.74228e-08 1 25 25.4102)" fill="<?= $isPair ? 'var(--blue2)': 'var(--blue)';?>"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6214 20.9518C13.3929 21.8392 13.9524 22.7376 14.8712 22.9583C16.9826 23.4656 21.6395 25.7644 23.0889 30.6394C23.2867 31.3049 23.8924 31.7812 24.6072 31.8334C25.322 31.8857 25.995 31.5028 26.2942 30.8736C26.9369 29.5226 28.1848 27.468 29.7823 25.7804C31.43 24.0397 33.1437 23.0073 34.7132 23.0073C35.66 23.0073 36.4275 22.266 36.4275 21.3515C36.4275 20.437 35.66 19.6957 34.7132 19.6957C31.6619 19.6957 29.0874 21.6069 27.252 23.5458C26.369 24.4786 25.5858 25.4924 24.9248 26.4703C22.3381 22.2925 17.9644 20.289 15.6988 19.7447C14.78 19.5239 13.8499 20.0644 13.6214 20.9518Z" fill="white"/>
                        </svg>
                    </a>
                    <div class="pro-panel pro-bg-blue4 pro-rounded pro-linea-tiempo__panel">
                        <?php if($imagenItem):?>
                            <?php $image = wp_get_attachment_image($imagenItem["id"],"full",false,["class"=>"pro-card__image pro-block pro-mx-auto"]); ?>
                            <?= $image;?>
                        <?php endif;?>
                        <?php if($tituloItem):?>
                            <h3 class="pro-section__title pro-title pro-title-line pro-color-blue"><?= $tituloItem;?></h3>
                        <?php endif;?>
                        <?php if($textoItem):?>
                            <div class="pro-text"><?= $textoItem;?></div>
                        <?php endif;?>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </section>
<?php else:?>
    <h3>Linea de tiempo</h3>
<?php endif;?>