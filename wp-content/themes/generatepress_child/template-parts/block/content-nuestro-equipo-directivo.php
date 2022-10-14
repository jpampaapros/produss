<?php
$id = $block['id'];
$titulo = get_field('titulo');
$texto = get_field('texto');
$cards = get_field('cards');
?>

<?php if(!is_admin()):?>
    <section class="<?= $id; ?> pro-nuestro-equipo-directivo pro-o-hidden pro-mov-px-spacing">
        <div class="pro-section-content2">
            <?php if($titulo):?>
                <h2 class="pro-title-line-center pro-color-blue pro-text-center pro-title"><?= $titulo;?></h2>
            <?php endif;?>
            <?php if($texto):?>
                <div class="pro-text pro-text-center"><?= $texto;?></div>
            <?php endif;?>
            <?php if($cards):?>
                <div class="pro-cards pro-slick-nuestro-equipo-directivo pro-slick-opacity pro-slick-list-visible">
                    <?php foreach ($cards as $card):?>
                        <?php
                            $foto = $card["foto"];
                            $bandera = $card["bandera"];
                            $nombre = $card["nombre"];
                            $cargo = $card["cargo"];
                            $descripcion = $card["descripcion"];
                            $texto = $card["texto"];
                        ?>
                        <div>
                            <div class="pro-card pro-w-full pro-relative">
                                <img class="pro-card__icon-svg3 pro-card__icon--sheet pro-only-mov" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4668.png" alt="">
                                <div class="pro-card__text pro-radius pro-relative">
                                    <img class="pro-card__icon-svg2 pro-card__icon--sheet pro-only-desk" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                                    <svg class="pro-card__icon-svg" width="31" height="25" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28.25 0.59375L30.7776 2.82401C29.1586 4.24477 27.837 5.61597 26.8127 6.9376C25.8215 8.2262 25.1937 9.2009 24.9294 9.86172C24.665 10.5225 24.4172 11.3155 24.1859 12.2407L24.3842 12.538C26.5979 12.538 28.2169 13.0171 29.2412 13.9753C30.2655 14.9335 30.7776 16.4203 30.7776 18.4358C30.7776 19.9888 30.2159 21.393 29.0925 22.6486C28.0022 23.9041 26.631 24.5319 24.9789 24.5319C23.0956 24.5319 21.5261 24.0032 20.2706 22.9459C19.015 21.8886 18.3873 20.187 18.3873 17.8411C18.3873 14.7353 19.3454 11.5303 21.2618 8.2262C23.2112 4.88907 25.5406 2.34492 28.25 0.59375ZM9.86271 0.59375L12.3903 2.82401C10.7713 4.24477 9.46622 5.59945 8.47499 6.88804C7.48376 8.17664 6.83947 9.16786 6.5421 9.86172C6.27777 10.5556 6.02996 11.3486 5.79868 12.2407L5.99692 12.538C8.21066 12.538 9.82967 13.0171 10.8539 13.9753C11.8782 14.9335 12.3903 16.4203 12.3903 18.4358C12.3903 19.9888 11.8286 21.393 10.7053 22.6486C9.6149 23.9041 8.2437 24.5319 6.59166 24.5319C4.70833 24.5319 3.13889 24.0032 1.88333 22.9459C0.627777 21.8886 0 20.187 0 17.8411C0 14.7353 0.958186 11.5303 2.87456 8.2262C4.82397 4.88907 7.15335 2.34492 9.86271 0.59375Z" fill="#FFB740"/>
                                    </svg>
                                    <?php if($texto):?>
                                        <div class="pro-color-blue pro-text-big pro-p-mb-0 pro-mov-text-center"><?= $texto;?></div>
                                    <?php endif;?>
                                    <div class="pro-carousel-arrows">
                                        <button class="pro-carousel-arrows-btn pro-arrow-btn-left">
                                            <svg class="pro-icon pro-event-none" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle r="25" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 25 25)" fill="#000957"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.4583 13.6214C28.5709 13.3929 27.6726 13.9524 27.4518 14.8712C26.9446 16.9826 24.6458 21.6395 19.7708 23.0889C19.1053 23.2867 18.629 23.8924 18.5767 24.6072C18.5245 25.322 18.9073 25.995 19.5365 26.2942C20.8876 26.9369 22.9422 28.1848 24.6298 29.7823C26.3704 31.43 27.4029 33.1437 27.4029 34.7132C27.4029 35.66 28.1442 36.4275 29.0587 36.4275C29.9731 36.4275 30.7145 35.66 30.7145 34.7132C30.7145 31.6619 28.8033 29.0874 26.8644 27.252C25.9315 26.369 24.9177 25.5858 23.9398 24.9248C28.1177 22.3381 30.1212 17.9644 30.6655 15.6988C30.8862 14.78 30.3458 13.8499 29.4583 13.6214Z" fill="white"/>
                                            </svg>
                                        </button>
                                        <button class="pro-carousel-arrows-btn pro-arrow-btn-right">
                                            <svg class="pro-icon pro-event-none" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="25" cy="25" r="25" transform="rotate(-90 25 25)" fill="#000957"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5417 13.6214C21.4291 13.3929 22.3274 13.9524 22.5482 14.8712C23.0554 16.9826 25.3542 21.6395 30.2292 23.0889C30.8947 23.2867 31.371 23.8924 31.4233 24.6072C31.4755 25.322 31.0927 25.995 30.4635 26.2942C29.1124 26.9369 27.0578 28.1848 25.3702 29.7823C23.6296 31.43 22.5971 33.1437 22.5971 34.7132C22.5971 35.66 21.8558 36.4275 20.9413 36.4275C20.0269 36.4275 19.2855 35.66 19.2855 34.7132C19.2855 31.6619 21.1967 29.0874 23.1356 27.252C24.0685 26.369 25.0823 25.5858 26.0602 24.9248C21.8823 22.3381 19.8788 17.9644 19.3345 15.6988C19.1138 14.78 19.6542 13.8499 20.5417 13.6214Z" fill="white"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="pro-card-float pro-bg-white pro-card-shadow pro-flex-center pro-relative pro-description-person">
                                    <?php if($foto):?>
                                        <div class="pro-card__icon pro-flex-center">
                                            <?php $image = wp_get_attachment_image($foto["id"],"full",false,["class"=>"pro-w-full"]); ?>
                                            <?= $image;?>
                                        </div>
                                    <?php endif;?>
                                    <?php if($nombre):?>
                                        <h3 class="pro-title-line pro-color-blue pro-card__name pro-text-left pro-w-full pro-mb-0"><?= $nombre;?></h3>
                                    <?php endif;?>
                                    <?php if($cards):?>
                                        <div class="pro-card__position pro-mb-0 pro-text-left pro-w-full"><?= $cargo;?></div>
                                    <?php endif;?>
                                    <div class="pro-flex pro-items-center">
                                        <?php if($descripcion):?>
                                            <div class="pro-p-mb-0 pro-card__text-small pro-p-mb-0">
                                                <?= $descripcion;?>
                                            </div>
                                        <?php endif;?>
                                        <?php if($bandera):?>
                                            <?php $image = wp_get_attachment_image($bandera["id"],"full",false,["class"=>"pro-icon-svg"]); ?>
                                            <?= $image;?>
                                        <?php endif;?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="pro-slick-nav-image pro-only-desk">
                    <?php foreach ($cards as $card):?>
                        <?php
                            $foto = $card["foto"];
                        ?>
                        <div>
                            <div class="pro-card__container-image">
                                <?php $image = wp_get_attachment_image($foto["id"],"full",false,["class"=>"pro-slick-image"]); ?>
                                <?= $image;?>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </section>
<?php else:?>
    <h3>Nuestro equipo directivo</h3>
<?php endif;?>
