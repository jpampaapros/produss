<?php
$linkWsp = get_field("link_whatsapp_otros", "option");
$menu1Footer = get_field("menu_1_footer", "option");
$menu2Footer = get_field("menu_2_footer", "option");
$telefonoFooter = get_field("telefono_footer", "option");
$correoFooter = get_field("correo_footer", "option");
$direccionFooter = get_field("direccion_footer", "option");
$youtubeFooter = get_field("youtube_menu", "option");
$terminosFooter = get_field("terminos_y_condiciones_footer", "option");
$politicaFooter = get_field("politica_de_privacidad_footer", "option");
$anioFooter = date("Y");
?>

<footer class="site footer-widgets pro-relative">
    <div class="footer-widgets-container">
        <div class="inside-footer-widgets">
            <div class="footer-widget-1">
                <aside id="nav_menu-3" class="widget inner-padding widget_nav_menu">
                    <h2 class="widget-title pro-accordion">
                        <span>Páginas</span>
                        <svg class="pro-icon pro-only-mov pro-event-none pro-card__icon--toggle" width="50" height="51"
                             viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle r="25" transform="matrix(-1 8.74228e-08 8.74228e-08 1 25 25.6621)" fill="#002F87"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13.6214 21.2038C13.3929 22.0912 13.9524 22.9895 14.8712 23.2103C16.9826 23.7175 21.6395 26.0164 23.0889 30.8913C23.2867 31.5568 23.8924 32.0331 24.6072 32.0854C25.322 32.1376 25.995 31.7548 26.2942 31.1256C26.9369 29.7745 28.1848 27.7199 29.7823 26.0323C31.43 24.2917 33.1437 23.2592 34.7132 23.2592C35.66 23.2592 36.4275 22.5179 36.4275 21.6034C36.4275 20.689 35.66 19.9477 34.7132 19.9477C31.6619 19.9477 29.0874 21.8588 27.252 23.7977C26.369 24.7306 25.5858 25.7444 24.9248 26.7223C22.3381 22.5444 17.9644 20.5409 15.6988 19.9966C14.78 19.7759 13.8499 20.3163 13.6214 21.2038Z"
                                  fill="white"/>
                        </svg>
                    </h2>
                    <div class="pro-panel">
                        <?php
                        wp_nav_menu(
                            array(
                                "menu" => $menu1Footer,
                                'container' => 'div',
                                'container_class' => 'menu-menu-paginas-container',
                                'menu_class' => '',
                                'fallback_cb' => 'generate_menu_fallback',
                                'items_wrap' => '<ul id="%1$s" class="%2$s ' . join(' ', generate_get_element_classes('menu')) . '">%3$s</ul>',
                            )
                        );
                        ?>
                    </div>
                </aside>
            </div>
            <div class="footer-widget-2">
                <aside id="nav_menu-4" class="widget inner-padding widget_nav_menu">
                    <h2 class="widget-title pro-accordion">
                        <span>Productos</span>
                        <svg class="pro-icon pro-only-mov pro-event-none pro-card__icon--toggle" width="50" height="51"
                             viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle r="25" transform="matrix(-1 8.74228e-08 8.74228e-08 1 25 25.6621)" fill="#002F87"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13.6214 21.2038C13.3929 22.0912 13.9524 22.9895 14.8712 23.2103C16.9826 23.7175 21.6395 26.0164 23.0889 30.8913C23.2867 31.5568 23.8924 32.0331 24.6072 32.0854C25.322 32.1376 25.995 31.7548 26.2942 31.1256C26.9369 29.7745 28.1848 27.7199 29.7823 26.0323C31.43 24.2917 33.1437 23.2592 34.7132 23.2592C35.66 23.2592 36.4275 22.5179 36.4275 21.6034C36.4275 20.689 35.66 19.9477 34.7132 19.9477C31.6619 19.9477 29.0874 21.8588 27.252 23.7977C26.369 24.7306 25.5858 25.7444 24.9248 26.7223C22.3381 22.5444 17.9644 20.5409 15.6988 19.9966C14.78 19.7759 13.8499 20.3163 13.6214 21.2038Z"
                                  fill="white"/>
                        </svg>
                    </h2>
                    <div class="pro-panel">
                        <?php
                        wp_nav_menu(
                            array(
                                "menu" => $menu2Footer,
                                'container' => 'menu-menu-productos-container',
                                'container_class' => 'menu-menu-paginas-container',
                                'menu_class' => '',
                                'fallback_cb' => 'generate_menu_fallback',
                                'items_wrap' => '<ul id="%1$s" class="%2$s ' . join(' ', generate_get_element_classes('menu')) . '">%3$s</ul>',
                            )
                        );
                        ?>
                    </div>
                </aside>
            </div>
            <div class="footer-widget-3">
                <aside id="block-9" class="widget inner-padding widget_block">
                    <div>
                        <h2 class="widget-title pro-accordion">
                            <span>Contáctanos</span>
                            <svg class="pro-icon pro-only-mov pro-event-none pro-card__icon--toggle" width="50"
                                 height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle r="25" transform="matrix(-1 8.74228e-08 8.74228e-08 1 25 25.6621)"
                                        fill="#002F87"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.6214 21.2038C13.3929 22.0912 13.9524 22.9895 14.8712 23.2103C16.9826 23.7175 21.6395 26.0164 23.0889 30.8913C23.2867 31.5568 23.8924 32.0331 24.6072 32.0854C25.322 32.1376 25.995 31.7548 26.2942 31.1256C26.9369 29.7745 28.1848 27.7199 29.7823 26.0323C31.43 24.2917 33.1437 23.2592 34.7132 23.2592C35.66 23.2592 36.4275 22.5179 36.4275 21.6034C36.4275 20.689 35.66 19.9477 34.7132 19.9477C31.6619 19.9477 29.0874 21.8588 27.252 23.7977C26.369 24.7306 25.5858 25.7444 24.9248 26.7223C22.3381 22.5444 17.9644 20.5409 15.6988 19.9966C14.78 19.7759 13.8499 20.3163 13.6214 21.2038Z"
                                      fill="white"/>
                            </svg>
                        </h2>
                        <div class="widget-group-items pro-panel">
                            <div class="widget-item">
                                <?php if ($telefonoFooter): ?>
                                    <h3 class="widget-item-title">Llámanos</h3>
                                    <div class="widget-item-text">
                                        <?= $telefonoFooter; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="widget-item">
                                <?php if ($correoFooter): ?>
                                    <h3 class="widget-item-title">Escríbenos</h3>
                                    <a class="widget-item-text"
                                       href="mailto:<?= $correoFooter; ?>"><?= $correoFooter; ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="widget-item">
                                <?php if ($direccionFooter): ?>
                                    <h3 class="widget-item-title">Dirección</h3>
                                    <div class="widget-item-text">
                                        <?= $direccionFooter; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="footer-widget-4">
                <aside id="block-8" class="widget inner-padding widget_block">
                    <div>
                        <h2 class="widget-title pro-accordion">
                            <span>Síguenos</span>
                            <svg class="pro-only-mov pro-event-none pro-icon pro-card__icon--toggle" width="50"
                                 height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle r="25" transform="matrix(-1 8.74228e-08 8.74228e-08 1 25 25.6621)"
                                        fill="#002F87"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.6214 21.2038C13.3929 22.0912 13.9524 22.9895 14.8712 23.2103C16.9826 23.7175 21.6395 26.0164 23.0889 30.8913C23.2867 31.5568 23.8924 32.0331 24.6072 32.0854C25.322 32.1376 25.995 31.7548 26.2942 31.1256C26.9369 29.7745 28.1848 27.7199 29.7823 26.0323C31.43 24.2917 33.1437 23.2592 34.7132 23.2592C35.66 23.2592 36.4275 22.5179 36.4275 21.6034C36.4275 20.689 35.66 19.9477 34.7132 19.9477C31.6619 19.9477 29.0874 21.8588 27.252 23.7977C26.369 24.7306 25.5858 25.7444 24.9248 26.7223C22.3381 22.5444 17.9644 20.5409 15.6988 19.9966C14.78 19.7759 13.8499 20.3163 13.6214 21.2038Z"
                                      fill="white"/>
                            </svg>
                        </h2>
                        <div class="widget-group-items pro-panel">
                            <?php if ($youtubeFooter): ?>
                                <div class="widget-item widget-red-social">
                                    <a href="<?= $youtubeFooter; ?>" target="_blank" rel="noopener"
                                       class="widget-item-link pro-flex pro-items-center">
                                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect width="41.6533" height="41.6533" rx="20.8267" fill="white"></rect>
                                            <path d="M31.9991 18.7095C32.0485 17.2781 31.7355 15.8575 31.0891 14.5795C30.6505 14.0551 30.0418 13.7012 29.3691 13.5795C26.5866 13.327 23.7926 13.2235 20.9991 13.2695C18.2157 13.2215 15.4318 13.3216 12.6591 13.5695C12.1109 13.6692 11.6036 13.9263 11.1991 14.3095C10.2991 15.1395 10.1991 16.5595 10.0991 17.7595C9.95396 19.9171 9.95396 22.0819 10.0991 24.2395C10.128 24.9149 10.2285 25.5853 10.3991 26.2395C10.5196 26.7446 10.7636 27.2118 11.1091 27.5995C11.5163 28.003 12.0354 28.2747 12.5991 28.3795C14.755 28.6456 16.9273 28.7559 19.0991 28.7095C22.5991 28.7595 25.669 28.7095 29.299 28.4295C29.8765 28.3311 30.4102 28.059 30.8291 27.6495C31.109 27.3694 31.3181 27.0266 31.4391 26.6495C31.7967 25.5521 31.9723 24.4036 31.959 23.2495C31.9991 22.6895 31.9991 19.3095 31.9991 18.7095ZM18.739 23.8495V17.6595L24.659 20.7695C22.9991 21.6895 20.809 22.7295 18.739 23.8495Z"
                                                  fill="#000957"></path>
                                        </svg>
                                        <span>/produss</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="site-info" aria-label="Sitio">
        <div class="copyright-bar pro-w-full">
            <div class="pro-copyright pro-flex pro-justify-betwwen">
                <div class="pro-copyright__text">Copyright <?= $anioFooter; ?></div>
                <div class="pro-copyright__links">
                    <?php if($terminosFooter):?>
                        <?php
                        $urlTerminos = site_url()."/".$terminosFooter->post_name."/";
                        ?>
                        <a class="pro-copyright__link" href="<?= $urlTerminos;?>">Términos
                            y condiciones</a>
                    <?php endif;?>
                    <?php if($politicaFooter):?>
                        <?php
                        $urlPolitica = site_url()."/".$politicaFooter->post_name."/";
                        ?>
                        <a class="pro-copyright__link" href="<?= $urlPolitica;?>">Política
                            de privacidad</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <div class="pro-flex pro-items-center pro-justify-betwwen pro-red-footer pro-only-mov">
        <a href="<?= $linkWsp;?>" target="_blank" rel="noopener" class="pro-btn pro-bg-green">
            <span>Escríbenos</span>
            <svg class="pro-card__icon--wsp" width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_635_10473)">
                    <path d="M7.23687 18.0759L7.91422 18.4717C9.05651 19.1379 10.3557 19.4876 11.6781 19.4849C13.1584 19.4849 14.6054 19.046 15.8363 18.2235C17.0671 17.4011 18.0264 16.2322 18.5929 14.8645C19.1594 13.4969 19.3077 11.992 19.0189 10.5401C18.7301 9.08826 18.0172 7.75462 16.9705 6.70788C15.9237 5.66114 14.5901 4.9483 13.1382 4.6595C11.6864 4.37071 10.1814 4.51893 8.81381 5.08542C7.44618 5.65191 6.27724 6.61123 5.45482 7.84207C4.6324 9.07291 4.19343 10.52 4.19343 12.0003C4.19343 13.3438 4.54615 14.6321 5.2076 15.7651L5.60241 16.4424L4.99148 18.6887L7.23687 18.0759ZM2.32602 21.3561L3.59092 16.7081C2.75745 15.2794 2.31956 13.6544 2.32228 12.0003C2.32228 6.83311 6.51086 2.64453 11.6781 2.64453C16.8452 2.64453 21.0338 6.83311 21.0338 12.0003C21.0338 17.1675 16.8452 21.3561 11.6781 21.3561C10.0247 21.3587 8.4004 20.9212 6.9721 20.0884L2.32602 21.3561ZM8.30155 7.61058C8.42692 7.60122 8.55322 7.60122 8.67859 7.60683C8.72911 7.61058 8.77963 7.61619 8.83016 7.6218C8.97891 7.63864 9.14264 7.72939 9.19784 7.85476C9.47664 8.48721 9.74796 9.12434 10.0099 9.76334C10.0679 9.90555 10.0333 10.088 9.92291 10.2657C9.84698 10.3859 9.76485 10.5021 9.67685 10.6138C9.57113 10.7494 9.34379 10.9983 9.34379 10.9983C9.34379 10.9983 9.25116 11.1087 9.28672 11.2462C9.29981 11.2986 9.34285 11.3744 9.38215 11.438L9.43734 11.5269C9.67685 11.9264 9.99869 12.3315 10.3916 12.7132C10.5039 12.8217 10.6134 12.9331 10.7312 13.0369C11.1691 13.4233 11.665 13.7386 12.2001 13.9725L12.2048 13.9744C12.2843 14.009 12.3245 14.0277 12.4405 14.0773C12.4986 14.1016 12.5584 14.1231 12.6192 14.139C12.6821 14.155 12.7483 14.152 12.8094 14.1304C12.8705 14.1087 12.9238 14.0694 12.9626 14.0174C13.64 13.1969 13.7017 13.1436 13.7073 13.1436V13.1455C13.7544 13.1016 13.8103 13.0683 13.8713 13.0478C13.9323 13.0273 13.997 13.0201 14.061 13.0266C14.1171 13.0304 14.1742 13.0407 14.2266 13.0641C14.7234 13.2914 15.5364 13.646 15.5364 13.646L16.0809 13.8902C16.1726 13.9341 16.2558 14.038 16.2586 14.1381C16.2624 14.2008 16.268 14.3018 16.2465 14.4871C16.2165 14.7294 16.1436 15.0203 16.0706 15.1728C16.0206 15.2769 15.9543 15.3723 15.8741 15.4554C15.7797 15.5545 15.6764 15.6447 15.5654 15.7248C15.527 15.7537 15.488 15.7818 15.4484 15.809C15.3321 15.8829 15.2125 15.9515 15.0901 16.0149C14.8492 16.1428 14.5832 16.2163 14.3108 16.2301C14.1377 16.2394 13.9646 16.2525 13.7906 16.2431C13.7831 16.2431 13.2592 16.1618 13.2592 16.1618C11.929 15.8119 10.6989 15.1564 9.66656 14.2476C9.45512 14.0614 9.25959 13.8612 9.05937 13.6619C8.22671 12.8339 7.598 11.9404 7.21628 11.0965C7.02091 10.6823 6.91537 10.2315 6.90661 9.77363C6.90275 9.2056 7.08843 8.6525 7.43427 8.20186C7.50257 8.11392 7.56713 8.02223 7.67846 7.91651C7.79728 7.80424 7.87212 7.74436 7.95352 7.7032C8.06174 7.64896 8.1798 7.61714 8.30062 7.60964L8.30155 7.61058Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_635_10473">
                        <rect width="22.4539" height="22.4539" fill="white" transform="translate(0.451172 0.773438)"/>
                    </clipPath>
                </defs>
            </svg>
        </a>
        <a href="<?= $youtubeFooter;?>" target="_blank" rel="noopener">
            <svg class="pro-card__icon--youtube" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M41.8502 18.238C41.938 15.6951 41.3819 13.1713 40.2335 10.9008C39.4543 9.96916 38.3729 9.34045 37.1778 9.12423C32.2345 8.67569 27.2708 8.49185 22.3079 8.57349C17.3631 8.48814 12.4172 8.66605 7.49133 9.10646C6.51745 9.28361 5.6162 9.74042 4.89754 10.4211C3.29863 11.8957 3.12098 14.4184 2.94332 16.5503C2.68556 20.3833 2.68556 24.2294 2.94332 28.0624C2.99472 29.2623 3.17337 30.4534 3.47629 31.6156C3.6905 32.5129 4.12389 33.343 4.73765 34.0317C5.46119 34.7485 6.38344 35.2313 7.38474 35.4174C11.2149 35.8902 15.0741 36.0861 18.9324 36.0037C25.1504 36.0925 30.6045 36.0037 37.0534 35.5063C38.0793 35.3315 39.0275 34.8481 39.7716 34.1205C40.269 33.623 40.6405 33.0139 40.8553 32.344C41.4906 30.3944 41.8027 28.354 41.7791 26.3036C41.8502 25.3088 41.8502 19.304 41.8502 18.238ZM18.2929 27.3696V16.3726L28.8102 21.8978C25.8611 23.5322 21.9704 25.3798 18.2929 27.3696Z" fill="white"/>
            </svg>
        </a>
    </div>
</footer>


<a href="<?= $linkWsp; ?>" class="pro-btn-float-whatsapp" data-fancybox data-src="#modal-whatsapp">
    <svg class="pro-icon" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="45" cy="45" r="45" fill="#31BF42"/>
        <g clip-path="url(#clip0_526_29030)">
            <path d="M36.8395 55.1588L38.1784 55.9411C40.4363 57.258 43.0043 57.9493 45.6182 57.9439C48.5443 57.9439 51.4046 57.0762 53.8376 55.4506C56.2705 53.8249 58.1668 51.5144 59.2865 48.811C60.4063 46.1077 60.6993 43.133 60.1284 40.2631C59.5576 37.3933 58.1485 34.7571 56.0795 32.6881C54.0104 30.619 51.3743 29.21 48.5044 28.6392C45.6346 28.0683 42.6599 28.3613 39.9566 29.481C37.2532 30.6008 34.9426 32.4971 33.317 34.93C31.6913 37.363 30.8237 40.2233 30.8237 43.1494C30.8237 45.805 31.5208 48.3515 32.8283 50.591L33.6087 51.9299L32.4011 56.3702L36.8395 55.1588ZM27.1324 61.6425L29.6327 52.4552C27.9852 49.631 27.1197 46.419 27.125 43.1494C27.125 32.9356 35.4044 24.6562 45.6182 24.6562C55.8319 24.6562 64.1113 32.9356 64.1113 43.1494C64.1113 53.3632 55.8319 61.6425 45.6182 61.6425C42.35 61.6478 39.1394 60.7829 36.3161 59.1367L27.1324 61.6425ZM38.944 34.4724C39.1918 34.4539 39.4415 34.4539 39.6893 34.465C39.7891 34.4724 39.889 34.4835 39.9889 34.4946C40.2829 34.5279 40.6065 34.7073 40.7156 34.9551C41.2667 36.2052 41.803 37.4646 42.3208 38.7277C42.4355 39.0088 42.3671 39.3694 42.1489 39.7208C41.9988 39.9584 41.8364 40.188 41.6625 40.4087C41.4535 40.6769 41.0041 41.1688 41.0041 41.1688C41.0041 41.1688 40.8211 41.387 40.8913 41.6589C40.9172 41.7624 41.0023 41.9122 41.08 42.038L41.1891 42.2136C41.6625 43.0033 42.2987 43.8041 43.0754 44.5586C43.2973 44.7731 43.5137 44.9932 43.7467 45.1984C44.6121 45.9622 45.5923 46.5854 46.6501 47.0478L46.6593 47.0515C46.8165 47.1199 46.896 47.1569 47.1254 47.2549C47.24 47.303 47.3584 47.3455 47.4786 47.3769C47.6028 47.4086 47.7336 47.4026 47.8544 47.3598C47.9753 47.317 48.0807 47.2393 48.1573 47.1365C49.4962 45.5147 49.6182 45.4093 49.6293 45.4093V45.413C49.7224 45.3262 49.8329 45.2604 49.9534 45.2198C50.074 45.1793 50.2018 45.1651 50.3284 45.1781C50.4393 45.1855 50.5521 45.2058 50.6557 45.2521C51.6377 45.7015 53.2447 46.4023 53.2447 46.4023L54.321 46.885C54.5023 46.9719 54.6669 47.1772 54.6724 47.3751C54.6798 47.499 54.6909 47.6987 54.6484 48.0649C54.5892 48.5439 54.445 49.119 54.3007 49.4204C54.2019 49.6261 54.0708 49.8147 53.9124 49.9789C53.7257 50.1748 53.5215 50.3531 53.3021 50.5115C53.2262 50.5686 53.1491 50.6241 53.0709 50.678C52.8409 50.8239 52.6046 50.9596 52.3626 51.0848C51.8865 51.3377 51.3606 51.4829 50.8221 51.5102C50.48 51.5286 50.1379 51.5545 49.7939 51.536C49.7791 51.536 48.7435 51.3752 48.7435 51.3752C46.1143 50.6836 43.6827 49.388 41.6421 47.5915C41.2242 47.2234 40.8377 46.8277 40.4419 46.4338C38.7961 44.7971 37.5533 43.031 36.7988 41.363C36.4126 40.5442 36.204 39.6531 36.1867 38.748C36.179 37.6252 36.5461 36.5319 37.2297 35.6412C37.3647 35.4673 37.4923 35.2861 37.7124 35.0771C37.9472 34.8552 38.0952 34.7369 38.2561 34.6555C38.47 34.5483 38.7033 34.4854 38.9421 34.4706L38.944 34.4724Z"
                  fill="white"/>
        </g>
        <defs>
            <clipPath id="clip0_526_29030">
                <rect width="44.3836" height="44.3836" fill="white" transform="translate(23.4258 20.957)"/>
            </clipPath>
        </defs>
    </svg>
</a>

<?php
    $nrosWsp = get_field("numeros_whatsapp", "option");
?>
<div style="display: none" id="modal-whatsapp" class="pro-modal pro-modal-whatsapp">
    <div class="pro-bg-white pro-modal-whatsapp__content">
        <h2 class="pro-section__title pro-title-small pro-mb-normal pro-color-blue pro-weight-500">Deseo información de:</h2>
        <?php if($nrosWsp):?>
            <div class="pro-modal-whatsapp__list">
                <?php foreach ($nrosWsp as $key=>$nro):?>
                    <?php
                        $texto = $nro["texto"];
                        $link = $nro["link"];
                        $slugLink = sanitize_title($texto);
                    ?>
                    <a href="<?= $link;?>" target="_blank" rel="noopener noreferrer"  class="pro-link-<?= $key;?> pro-link-<?= $slugLink;?> pro-title-small2 pro-weight-500 pro-color-blue pro-modal-whatsapp__link pro-flex pro-items-center">
                        <img class="pro-icon" src="<?= site_url();?>/wp-content/uploads/2022/10/icon-wsp.png" alt="Icon whatsapp">
                        <?= $texto;?>
                    </a>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
</div>