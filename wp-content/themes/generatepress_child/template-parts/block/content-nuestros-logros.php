<?php
$id = $block['id'];
$titulo = get_field('titulo');
$texto = get_field('texto');
$cards = get_field('cards');
$tituloClientes = get_field('titulo_clientes');
$textoClientes = get_field('texto_clientes');
$cardsClientes = get_field('cards_clientes');
?>

<?php if(!is_admin()):?>
    <section class="<?= $id; ?> pro-nustros-logros">
        <div class="pro-section-content">
            <?php if($titulo):?>
                <h2 class="pro-mov-px-spacing pro-color-blue pro-title pro-title-line-center pro-text-center pro-p-mb-0"><?= $titulo;?></h2>
            <?php endif;?>
            <?php if($texto):?>
                <div class="pro-mov-px-spacing pro-section__text pro-text pro-text-center"><?= $texto;?></div>
            <?php endif;?>
            <?php if($cards):?>
                <div class="pro-only-desk">
                    <div class="pro-cards">
                        <?php foreach ($cards as $card):?>
                            <?php
                                $textoCard = $card["texto"];
                            ?>
                            <div class="pro-relative pro-card pro-radius pro-color-white pro-bg-blue">
                                <svg class="pro-card__icon-svg" width="108" height="108" viewBox="0 0 108 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="54" cy="54" r="54" fill="#FFB740"/>
                                    <path d="M78.3109 57.4183C78.1088 58.7025 77.3358 59.6776 76.5748 60.6765C74.6484 63.2332 72.7339 65.7898 70.8194 68.3464C68.6908 71.1885 65.8488 72.6154 62.3051 72.6154C57.0016 72.6154 51.7099 72.6154 46.4064 72.6154C46.2161 72.6154 46.0378 72.6154 45.8237 72.6154C45.7999 73.8165 45.467 74.8867 44.6108 75.6953C44.2184 76.0758 43.7546 76.3969 43.279 76.6585C42.3633 77.1579 41.4239 77.5979 40.4845 78.0617C39.5213 78.5373 38.7959 78.2995 38.3203 77.3601C35.5139 71.7711 32.7194 66.1703 29.925 60.5814C29.4612 59.6657 29.7228 58.9166 30.6384 58.4528C31.6135 57.9534 32.5886 57.4777 33.5637 56.9902C34.7766 56.3837 36.0252 56.3243 37.2738 56.8832C37.5354 57.0021 37.6662 56.9069 37.8565 56.7524C39.0813 55.7178 40.2348 54.6 41.5428 53.6963C44.9319 51.3775 49.7716 51.6272 52.9942 54.1838C54.6828 55.5157 54.6828 55.5157 56.847 55.5157C58.6545 55.5157 60.4501 55.5276 62.2576 55.5157C64.3623 55.4919 65.8725 56.3837 66.6812 58.3577C66.6931 58.3815 66.7168 58.4053 66.8476 58.5598C66.9547 58.3934 67.026 58.2388 67.133 58.1199C68.3578 56.7999 69.5708 55.4681 70.8194 54.16C72.4841 52.412 74.7197 52.198 76.6342 53.5655C77.4666 54.16 77.9661 54.9805 78.2039 55.9675C78.2396 56.0983 78.2871 56.2291 78.3228 56.3718C78.3109 56.7286 78.3109 57.0734 78.3109 57.4183ZM39.4499 58.9998C39.5807 59.2614 39.6521 59.416 39.7234 59.5706C41.3407 62.8051 42.9698 66.0395 44.5632 69.2859C44.7416 69.6426 44.92 69.7853 45.3362 69.7853C50.9846 69.7734 56.633 69.7615 62.2814 69.7734C64.9093 69.7853 66.9903 68.7507 68.5481 66.6341C69.5827 65.2309 70.6291 63.8515 71.6755 62.4602C72.8171 60.9381 73.9587 59.4279 75.0884 57.9058C75.7899 56.9664 75.3975 55.7892 74.3035 55.5632C73.6733 55.4324 73.2095 55.7297 72.8052 56.1697C70.8431 58.2863 68.8811 60.3911 66.919 62.4959C66.2887 63.1737 65.5753 63.7088 64.6715 63.911C64.2672 63.9942 63.8629 64.0655 63.4586 64.0655C60.8187 64.0774 58.1788 64.0774 55.5271 64.0774C54.7422 64.0774 54.1833 63.685 54.005 63.0429C53.7434 62.0797 54.4212 61.2354 55.4914 61.2235C57.8221 61.2116 60.1409 61.2235 62.4716 61.2235C62.9354 61.2235 63.3516 61.1165 63.6726 60.7716C64.0651 60.3317 64.184 59.8203 63.958 59.2733C63.7083 58.6788 63.2208 58.3815 62.5786 58.3815C60.4144 58.3815 58.2383 58.322 56.0741 58.3934C54.4331 58.4528 53.018 58.0247 51.817 56.9069C51.6624 56.7643 51.4959 56.6453 51.3294 56.5264C49.1057 54.7427 45.9783 54.3622 43.5525 55.8367C42.0898 56.7048 40.8056 57.9296 39.4499 58.9998ZM40.3061 74.9699C40.8769 74.6845 41.3763 74.4348 41.8877 74.1851C43.0055 73.6262 43.2314 72.9484 42.6725 71.8306C41.6261 69.7377 40.5796 67.6567 39.5332 65.5639C38.6532 63.8039 37.7733 62.0321 36.8814 60.2722C36.5009 59.5112 35.8469 59.1663 35.1334 59.4398C34.4199 59.7133 33.7421 60.0938 33.0167 60.4387C35.4663 65.3022 37.8684 70.1064 40.3061 74.9699Z" fill="white"/>
                                    <path d="M56.1814 29.6997C56.7403 29.8781 57.3111 29.9851 57.8343 30.2229C61.2947 31.8164 62.2817 36.1924 59.8677 39.1414C59.7964 39.2247 59.7369 39.3079 59.6537 39.415C60.0104 39.6647 60.3553 39.8787 60.6764 40.1284C62.9476 41.9478 64.0416 44.338 64.0535 47.2276C64.0535 47.5724 64.0535 47.9292 64.0535 48.274C64.0416 49.2372 63.4708 49.8199 62.5195 49.8199C60.8309 49.8318 59.1305 49.8199 57.4419 49.8199C54.481 49.8199 51.52 49.8199 48.571 49.8199C47.4175 49.8199 46.8824 49.2848 46.8824 48.1432C46.8705 46.7638 46.9181 45.3963 47.4056 44.0764C48.0953 42.2332 49.2488 40.7825 50.9017 39.7241C51.0206 39.6528 51.1395 39.5695 51.2584 39.4863C51.2822 39.4744 51.2941 39.4387 51.3297 39.4031C50.5211 38.5231 49.986 37.5123 49.8077 36.3113C49.3558 33.3028 51.5081 30.3181 54.5047 29.7948C54.6237 29.7711 54.7426 29.7354 54.8615 29.6997C55.3015 29.6997 55.7414 29.6997 56.1814 29.6997ZM49.7482 46.9422C53.5891 46.9422 57.3824 46.9422 61.1877 46.9422C61.2947 43.8742 58.6192 41.1868 55.5155 41.1868C52.4119 41.1868 49.6531 43.9337 49.7482 46.9422ZM58.3694 35.4908C58.3694 33.933 57.0733 32.5655 55.5512 32.5536C54.0053 32.5299 52.6021 33.9211 52.5902 35.4789C52.5783 37.0129 53.9458 38.3447 55.5393 38.3447C57.0733 38.3328 58.3694 37.0486 58.3694 35.4908Z" fill="white"/>
                                </svg>
                                <?php if($textoCard):?>
                                    <div class="pro-text"><?= $textoCard;?></div>
                                <?php endif;?>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="pro-only-mov">
                    <div class="pro-carousel-nuestros-logros">
                        <?php foreach ($cards as $card):?>
                            <?php
                                $textoCard = $card["texto"];
                            ?>
                            <div class="pro-mov-px-spacing">
                                <div class="pro-relative pro-card pro-radius pro-color-white pro-bg-blue">
                                    <svg class="pro-card__icon-svg" width="108" height="108" viewBox="0 0 108 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="54" cy="54" r="54" fill="#FFB740"/>
                                        <path d="M78.3109 57.4183C78.1088 58.7025 77.3358 59.6776 76.5748 60.6765C74.6484 63.2332 72.7339 65.7898 70.8194 68.3464C68.6908 71.1885 65.8488 72.6154 62.3051 72.6154C57.0016 72.6154 51.7099 72.6154 46.4064 72.6154C46.2161 72.6154 46.0378 72.6154 45.8237 72.6154C45.7999 73.8165 45.467 74.8867 44.6108 75.6953C44.2184 76.0758 43.7546 76.3969 43.279 76.6585C42.3633 77.1579 41.4239 77.5979 40.4845 78.0617C39.5213 78.5373 38.7959 78.2995 38.3203 77.3601C35.5139 71.7711 32.7194 66.1703 29.925 60.5814C29.4612 59.6657 29.7228 58.9166 30.6384 58.4528C31.6135 57.9534 32.5886 57.4777 33.5637 56.9902C34.7766 56.3837 36.0252 56.3243 37.2738 56.8832C37.5354 57.0021 37.6662 56.9069 37.8565 56.7524C39.0813 55.7178 40.2348 54.6 41.5428 53.6963C44.9319 51.3775 49.7716 51.6272 52.9942 54.1838C54.6828 55.5157 54.6828 55.5157 56.847 55.5157C58.6545 55.5157 60.4501 55.5276 62.2576 55.5157C64.3623 55.4919 65.8725 56.3837 66.6812 58.3577C66.6931 58.3815 66.7168 58.4053 66.8476 58.5598C66.9547 58.3934 67.026 58.2388 67.133 58.1199C68.3578 56.7999 69.5708 55.4681 70.8194 54.16C72.4841 52.412 74.7197 52.198 76.6342 53.5655C77.4666 54.16 77.9661 54.9805 78.2039 55.9675C78.2396 56.0983 78.2871 56.2291 78.3228 56.3718C78.3109 56.7286 78.3109 57.0734 78.3109 57.4183ZM39.4499 58.9998C39.5807 59.2614 39.6521 59.416 39.7234 59.5706C41.3407 62.8051 42.9698 66.0395 44.5632 69.2859C44.7416 69.6426 44.92 69.7853 45.3362 69.7853C50.9846 69.7734 56.633 69.7615 62.2814 69.7734C64.9093 69.7853 66.9903 68.7507 68.5481 66.6341C69.5827 65.2309 70.6291 63.8515 71.6755 62.4602C72.8171 60.9381 73.9587 59.4279 75.0884 57.9058C75.7899 56.9664 75.3975 55.7892 74.3035 55.5632C73.6733 55.4324 73.2095 55.7297 72.8052 56.1697C70.8431 58.2863 68.8811 60.3911 66.919 62.4959C66.2887 63.1737 65.5753 63.7088 64.6715 63.911C64.2672 63.9942 63.8629 64.0655 63.4586 64.0655C60.8187 64.0774 58.1788 64.0774 55.5271 64.0774C54.7422 64.0774 54.1833 63.685 54.005 63.0429C53.7434 62.0797 54.4212 61.2354 55.4914 61.2235C57.8221 61.2116 60.1409 61.2235 62.4716 61.2235C62.9354 61.2235 63.3516 61.1165 63.6726 60.7716C64.0651 60.3317 64.184 59.8203 63.958 59.2733C63.7083 58.6788 63.2208 58.3815 62.5786 58.3815C60.4144 58.3815 58.2383 58.322 56.0741 58.3934C54.4331 58.4528 53.018 58.0247 51.817 56.9069C51.6624 56.7643 51.4959 56.6453 51.3294 56.5264C49.1057 54.7427 45.9783 54.3622 43.5525 55.8367C42.0898 56.7048 40.8056 57.9296 39.4499 58.9998ZM40.3061 74.9699C40.8769 74.6845 41.3763 74.4348 41.8877 74.1851C43.0055 73.6262 43.2314 72.9484 42.6725 71.8306C41.6261 69.7377 40.5796 67.6567 39.5332 65.5639C38.6532 63.8039 37.7733 62.0321 36.8814 60.2722C36.5009 59.5112 35.8469 59.1663 35.1334 59.4398C34.4199 59.7133 33.7421 60.0938 33.0167 60.4387C35.4663 65.3022 37.8684 70.1064 40.3061 74.9699Z" fill="white"/>
                                        <path d="M56.1814 29.6997C56.7403 29.8781 57.3111 29.9851 57.8343 30.2229C61.2947 31.8164 62.2817 36.1924 59.8677 39.1414C59.7964 39.2247 59.7369 39.3079 59.6537 39.415C60.0104 39.6647 60.3553 39.8787 60.6764 40.1284C62.9476 41.9478 64.0416 44.338 64.0535 47.2276C64.0535 47.5724 64.0535 47.9292 64.0535 48.274C64.0416 49.2372 63.4708 49.8199 62.5195 49.8199C60.8309 49.8318 59.1305 49.8199 57.4419 49.8199C54.481 49.8199 51.52 49.8199 48.571 49.8199C47.4175 49.8199 46.8824 49.2848 46.8824 48.1432C46.8705 46.7638 46.9181 45.3963 47.4056 44.0764C48.0953 42.2332 49.2488 40.7825 50.9017 39.7241C51.0206 39.6528 51.1395 39.5695 51.2584 39.4863C51.2822 39.4744 51.2941 39.4387 51.3297 39.4031C50.5211 38.5231 49.986 37.5123 49.8077 36.3113C49.3558 33.3028 51.5081 30.3181 54.5047 29.7948C54.6237 29.7711 54.7426 29.7354 54.8615 29.6997C55.3015 29.6997 55.7414 29.6997 56.1814 29.6997ZM49.7482 46.9422C53.5891 46.9422 57.3824 46.9422 61.1877 46.9422C61.2947 43.8742 58.6192 41.1868 55.5155 41.1868C52.4119 41.1868 49.6531 43.9337 49.7482 46.9422ZM58.3694 35.4908C58.3694 33.933 57.0733 32.5655 55.5512 32.5536C54.0053 32.5299 52.6021 33.9211 52.5902 35.4789C52.5783 37.0129 53.9458 38.3447 55.5393 38.3447C57.0733 38.3328 58.3694 37.0486 58.3694 35.4908Z" fill="white"/>
                                    </svg>
                                    <?php if($textoCard):?>
                                        <div class="pro-text"><?= $textoCard;?></div>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="pro-carousel-arrows">
                        <button class="pro-carousel-arrows-btn pro-nuestros-logros-arrow-btn-left">
                            <svg class="pro-icon pro-event-none" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle r="25" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 25 25)" fill="#000957"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.4583 13.6214C28.5709 13.3929 27.6726 13.9524 27.4518 14.8712C26.9446 16.9826 24.6458 21.6395 19.7708 23.0889C19.1053 23.2867 18.629 23.8924 18.5767 24.6072C18.5245 25.322 18.9073 25.995 19.5365 26.2942C20.8876 26.9369 22.9422 28.1848 24.6298 29.7823C26.3704 31.43 27.4029 33.1437 27.4029 34.7132C27.4029 35.66 28.1442 36.4275 29.0587 36.4275C29.9731 36.4275 30.7145 35.66 30.7145 34.7132C30.7145 31.6619 28.8033 29.0874 26.8644 27.252C25.9315 26.369 24.9177 25.5858 23.9398 24.9248C28.1177 22.3381 30.1212 17.9644 30.6655 15.6988C30.8862 14.78 30.3458 13.8499 29.4583 13.6214Z" fill="white"/>
                            </svg>
                        </button>
                        <button class="pro-carousel-arrows-btn pro-nuestros-logros-arrow-btn-right">
                            <svg class="pro-icon pro-event-none" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" transform="rotate(-90 25 25)" fill="#000957"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5417 13.6214C21.4291 13.3929 22.3274 13.9524 22.5482 14.8712C23.0554 16.9826 25.3542 21.6395 30.2292 23.0889C30.8947 23.2867 31.371 23.8924 31.4233 24.6072C31.4755 25.322 31.0927 25.995 30.4635 26.2942C29.1124 26.9369 27.0578 28.1848 25.3702 29.7823C23.6296 31.43 22.5971 33.1437 22.5971 34.7132C22.5971 35.66 21.8558 36.4275 20.9413 36.4275C20.0269 36.4275 19.2855 35.66 19.2855 34.7132C19.2855 31.6619 21.1967 29.0874 23.1356 27.252C24.0685 26.369 25.0823 25.5858 26.0602 24.9248C21.8823 22.3381 19.8788 17.9644 19.3345 15.6988C19.1138 14.78 19.6542 13.8499 20.5417 13.6214Z" fill="white"/>
                            </svg>
                        </button>
                    </div>
                </div>
            <?php endif;?>
            <div class="pro-section-clientes">
                <?php if($tituloClientes):?>
                    <h3 class="pro-only-desk pro-title pro-title-line pro-color-blue pro-p-mb-0"><?= $tituloClientes;?></h3>
                    <h3 class="pro-only-mov pro-text-center pro-title pro-title-line-center pro-color-blue pro-p-mb-0"><?= $tituloClientes;?></h3>
                <?php endif;?>
                <?php if($textoClientes):?>
                    <div class="pro-mov-text-center pro-text-big pro-color-blue pro-p-mb-0"><?= $textoClientes;?></div>
                <?php endif;?>
                <img class="pro-icon pro-relative pro-card__icon--sheet" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                <?php if($cardsClientes):?>
                    <div class="pro-cards2 pro-mov-o-y-hidden">
                        <?php foreach ($cardsClientes as $card):?>
                            <?php
                                $iconoCard = $card["icono"];
                                $tituloCard = $card["titulo"];
                                $textoCard = $card["texto"];
                            ?>
                            <div class="pro-shrink-0 pro-text-center">
                                <div class="pro-card__content pro-card-shadow pro-w-full pro-flex-center pro-relative">
                                    <?php if($iconoCard):?>
                                        <div class="pro-card__icon pro-bg-orange pro-flex-center">
                                            <?php $image = wp_get_attachment_image($iconoCard["id"],"full",false,["class"=>"pro-w-full pro-img-icon"]); ?>
                                            <?= $image;?>
                                        </div>
                                    <?php endif;?>
                                    <?php if($tituloCard):?>
                                        <h3 class="pro-card__title pro-mb-0 pro-color-blue"><?= $tituloCard;?></h3>
                                    <?php endif;?>
                                    <?php if($textoCard):?>
                                        <div class="pro-card__text pro-mb-0 pro-p-mb-0 pro-text"><?= $textoCard;?></div>
                                    <?php endif;?>
                                </div>
                            </div>

                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>
<?php else:?>
    <h3>Nuestros logros</h3>
<?php endif;?>