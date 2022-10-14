<?php
$id = $block['id'];
$textoBanner = get_field('texto_banner');
$imagenBanner = get_field('imagen_banner');
$desc1Detalle = get_field('descripcion_1_detalle');
$desc2Detalle = get_field('descripcion_2_detalle');
$desc3Detalle = get_field('descripcion_3_detalle');
$videoDetalle = get_field('video_detalle');
$fraseDetalle = get_field('frase_detalle');
$desc4Detalle = get_field('descripcion_4_detalle');
$archivosDescargas = get_field('archivos_descargas');
$contactoUrl = get_field('contacto_barra_lareral');
$queried_object = get_queried_object();
$postId = $queried_object->ID;
$categoriesPost = get_the_terms( $postId, 'categoria_escuela' );
$fecha = get_field("fecha_detalle");
$modalidad = get_field("modalidad_detalle");
$plataforma = get_field("plataforma_detalle");
$direccion = get_field("direccion_detalle");
$galeria = get_field('galeria_detalle');
$formulario = get_field("formulario_escuela","option");
$tipoVideo = get_field("tipo_de_video");
$tipoVideo = is_null($tipoVideo) ? "archivo": $tipoVideo;
$youtubeDetalle = get_field('youtube');
$mostrarFormulario = get_field('mostrar_formulario_formulario');
?>
<?php if(!is_admin()):?>
    <?php
        $imageShadow = site_url()."/wp-content/uploads/2022/10/shadow21.png";
        $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group.png";
    ?>
    <section class="<?= $id; ?> pro-contenido-post pro-relative <?= $mostrarFormulario ? '': 'pro-no-mostrar-formulario';?>">
        <div class="pro-bg-blue2 pro-bg-bar-float pro-absolute">
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-desk" src="<?= $imageShadow;?>" alt="Imagen Sombra">
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        </div>
        <div class="pro-section-content pro-flex pro-relative pro-template-post pro-mov-flex-column pro-mov-px-spacing">
            <div class="pro-section__left pro-shrink-0">
                <a class="pro-pointer pro-back-history pro-color-white pro-flex pro-items-center pro-btn-back2">
                    <svg class="pro-svg" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.79474 13.2899C1.60727 13.1024 1.50195 12.8481 1.50195 12.5829C1.50195 12.3178 1.60727 12.0635 1.79474 11.8759L7.79474 5.87593C7.98334 5.69377 8.23594 5.59297 8.49814 5.59525C8.76034 5.59753 9.01115 5.7027 9.19656 5.88811C9.38197 6.07352 9.48713 6.32433 9.48941 6.58653C9.49169 6.84872 9.3909 7.10132 9.20874 7.28993L4.91574 11.5829H22.5017C22.767 11.5829 23.0213 11.6883 23.2088 11.8758C23.3964 12.0634 23.5017 12.3177 23.5017 12.5829C23.5017 12.8481 23.3964 13.1025 23.2088 13.29C23.0213 13.4776 22.767 13.5829 22.5017 13.5829H4.91574L9.20874 17.8759C9.3909 18.0645 9.49169 18.3171 9.48941 18.5793C9.48713 18.8415 9.38197 19.0923 9.19656 19.2777C9.01115 19.4632 8.76034 19.5683 8.49814 19.5706C8.23594 19.5729 7.98334 19.4721 7.79474 19.2899L1.79474 13.2899Z" fill="white"/>
                    </svg>
                    Volver
                </a>
                <?php if($categoriesPost):?>
                    <div class="pro-contenido-post__categories pro-btns-categories pro-flex pro-only-desk">
                        <?php foreach ($categoriesPost as $categoryPost):?>
                            <div class="pro-btn-category pro-bg-white"><?= $categoryPost->name;?></div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                <?php if($textoBanner):?>
                    <div class="pro-section__title2 pro-title-line pro-title-small3 pro-color-white"><?= $textoBanner;?></div>
                <?php endif;?>
                <div class="pro-contenido-post__detail pro-title-small4 pro-list">
                    <?php if($fecha):?>
                        <div class="pro-flex pro-items-center pro-list__item pro-weight-500">
                            <svg class="pro-size-icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 7.14941V3.14941M16 7.14941V3.14941M7 11.1494H17M5 21.1494H19C19.5304 21.1494 20.0391 20.9387 20.4142 20.5636C20.7893 20.1886 21 19.6798 21 19.1494V7.14941C21 6.61898 20.7893 6.11027 20.4142 5.7352C20.0391 5.36013 19.5304 5.14941 19 5.14941H5C4.46957 5.14941 3.96086 5.36013 3.58579 5.7352C3.21071 6.11027 3 6.61898 3 7.14941V19.1494C3 19.6798 3.21071 20.1886 3.58579 20.5636C3.96086 20.9387 4.46957 21.1494 5 21.1494Z" stroke="#FFB740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Fechas: <?= $fecha;?>
                        </div>
                    <?php endif;?>
                    <?php if($modalidad):?>
                        <div class="pro-flex pro-items-center pro-list__item pro-weight-500">
                            <svg class="pro-size-icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 14.0625H20V7.0625C20 6.26685 19.6839 5.50379 19.1213 4.94118C18.5587 4.37857 17.7956 4.0625 17 4.0625H7C6.20435 4.0625 5.44129 4.37857 4.87868 4.94118C4.31607 5.50379 4 6.26685 4 7.0625V14.0625H3C2.73478 14.0625 2.48043 14.1679 2.29289 14.3554C2.10536 14.5429 2 14.7973 2 15.0625V17.0625C2 17.8581 2.31607 18.6212 2.87868 19.1838C3.44129 19.7464 4.20435 20.0625 5 20.0625H19C19.7956 20.0625 20.5587 19.7464 21.1213 19.1838C21.6839 18.6212 22 17.8581 22 17.0625V15.0625C22 14.7973 21.8946 14.5429 21.7071 14.3554C21.5196 14.1679 21.2652 14.0625 21 14.0625ZM6 7.0625C6 6.79728 6.10536 6.54293 6.29289 6.35539C6.48043 6.16786 6.73478 6.0625 7 6.0625H17C17.2652 6.0625 17.5196 6.16786 17.7071 6.35539C17.8946 6.54293 18 6.79728 18 7.0625V14.0625H6V7.0625ZM20 17.0625C20 17.3277 19.8946 17.5821 19.7071 17.7696C19.5196 17.9571 19.2652 18.0625 19 18.0625H5C4.73478 18.0625 4.48043 17.9571 4.29289 17.7696C4.10536 17.5821 4 17.3277 4 17.0625V16.0625H20V17.0625Z" fill="#FFB740"/>
                            </svg>
                            Modalidad: <?= $modalidad;?>
                        </div>
                    <?php endif;?>
                    <?php if($plataforma):?>
                        <div class="pro-flex pro-items-center pro-list__item pro-weight-500">
                            <svg class="pro-size-icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 14.0625H20V7.0625C20 6.26685 19.6839 5.50379 19.1213 4.94118C18.5587 4.37857 17.7956 4.0625 17 4.0625H7C6.20435 4.0625 5.44129 4.37857 4.87868 4.94118C4.31607 5.50379 4 6.26685 4 7.0625V14.0625H3C2.73478 14.0625 2.48043 14.1679 2.29289 14.3554C2.10536 14.5429 2 14.7973 2 15.0625V17.0625C2 17.8581 2.31607 18.6212 2.87868 19.1838C3.44129 19.7464 4.20435 20.0625 5 20.0625H19C19.7956 20.0625 20.5587 19.7464 21.1213 19.1838C21.6839 18.6212 22 17.8581 22 17.0625V15.0625C22 14.7973 21.8946 14.5429 21.7071 14.3554C21.5196 14.1679 21.2652 14.0625 21 14.0625ZM6 7.0625C6 6.79728 6.10536 6.54293 6.29289 6.35539C6.48043 6.16786 6.73478 6.0625 7 6.0625H17C17.2652 6.0625 17.5196 6.16786 17.7071 6.35539C17.8946 6.54293 18 6.79728 18 7.0625V14.0625H6V7.0625ZM20 17.0625C20 17.3277 19.8946 17.5821 19.7071 17.7696C19.5196 17.9571 19.2652 18.0625 19 18.0625H5C4.73478 18.0625 4.48043 17.9571 4.29289 17.7696C4.10536 17.5821 4 17.3277 4 17.0625V16.0625H20V17.0625Z" fill="#FFB740"/>
                            </svg>
                            Plataforma: <?= $plataforma;?>
                        </div>
                    <?php endif;?>
                    <?php if($direccion):?>
                        <div class="pro-flex pro-items-center pro-list__item pro-weight-500">
                            <svg class="pro-size-icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.88867C9.87827 2.88867 7.84344 3.73153 6.34315 5.23182C4.84285 6.73211 4 8.76694 4 10.8887C4 16.2887 11.05 22.3887 11.35 22.6487C11.5311 22.8036 11.7616 22.8887 12 22.8887C12.2384 22.8887 12.4689 22.8036 12.65 22.6487C13 22.3887 20 16.2887 20 10.8887C20 8.76694 19.1571 6.73211 17.6569 5.23182C16.1566 3.73153 14.1217 2.88867 12 2.88867ZM12 20.5387C9.87 18.5387 6 14.2287 6 10.8887C6 9.29737 6.63214 7.77125 7.75736 6.64603C8.88258 5.52081 10.4087 4.88867 12 4.88867C13.5913 4.88867 15.1174 5.52081 16.2426 6.64603C17.3679 7.77125 18 9.29737 18 10.8887C18 14.2287 14.13 18.5487 12 20.5387ZM12 6.88867C11.2089 6.88867 10.4355 7.12327 9.77772 7.56279C9.11992 8.00232 8.60723 8.62703 8.30448 9.35794C8.00173 10.0888 7.92252 10.8931 8.07686 11.669C8.2312 12.445 8.61216 13.1577 9.17157 13.7171C9.73098 14.2765 10.4437 14.6575 11.2196 14.8118C11.9956 14.9662 12.7998 14.8869 13.5307 14.5842C14.2616 14.2814 14.8864 13.7687 15.3259 13.111C15.7654 12.4532 16 11.6798 16 10.8887C16 9.82781 15.5786 8.81039 14.8284 8.06024C14.0783 7.3101 13.0609 6.88867 12 6.88867ZM12 12.8887C11.6044 12.8887 11.2178 12.7714 10.8889 12.5516C10.56 12.3318 10.3036 12.0195 10.1522 11.654C10.0009 11.2886 9.96126 10.8865 10.0384 10.4985C10.1156 10.1105 10.3061 9.75416 10.5858 9.47446C10.8655 9.19475 11.2219 9.00427 11.6098 8.9271C11.9978 8.84993 12.3999 8.88954 12.7654 9.04091C13.1308 9.19229 13.4432 9.44863 13.6629 9.77753C13.8827 10.1064 14 10.4931 14 10.8887C14 11.4191 13.7893 11.9278 13.4142 12.3029C13.0391 12.678 12.5304 12.8887 12 12.8887Z" fill="#FFB740"/>
                            </svg>
                            Dirección: <?= $direccion;?>
                        </div>
                    <?php endif;?>
                </div>
                <?php if($tipoVideo == "archivo"):?>
                    <?php if($videoDetalle):?>
                        <video src="<?= $videoDetalle['url'];?>" controls class="pro-video pro-w-full pro-mb-small"></video>
                    <?php endif;?>
                <?php endif;?>
                <?php if($tipoVideo == "youtube"):?>
                    <?php if($youtubeDetalle):?>
                        <?php
                            parse_str( parse_url( $youtubeDetalle, PHP_URL_QUERY ), $array_vars );
                            $idUrl = $array_vars['v'];
                        ?>
                        <iframe class="pro-w-full pro-mb-small pro-video" width="560" height="315" src="https://www.youtube.com/embed/<?= $idUrl;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php endif;?>
                <?php endif;?>
                <?php if($fraseDetalle):?>
                    <div class="pro-phrase2 pro-title-small5 pro-radius2 pro-bg-yellow pro-p-mb-0 pro-mb-large"><?= $fraseDetalle;?></div>
                <?php endif;?>
                <?php if($desc1Detalle):?>
                    <div class="pro-title-small4 pro-p-mb-large"><?= $desc1Detalle;?></div>
                <?php endif;?>
                <?php if($desc2Detalle):?>
                    <div class="pro-title-small4 pro-phrase pro-color-blue pro-weight-700 pro-p-mb-0"><?= $desc2Detalle;?></div>
                <?php endif;?>
                <?php if($desc3Detalle):?>
                    <div class="pro-title-small4 pro-p-mb-big"><?= $desc3Detalle;?></div>
                <?php endif;?>
                <?php if($archivosDescargas):?>
                    <h3 class="pro-color-blue pro-weight-800 pro-subtitle">Descargas</h3>
                    <?php foreach ($archivosDescargas as $group):?>
                        <?php
                        $texto = $group["texto"];
                        $archivo = $group["archivo"];
                        ?>
                        <div class="pro-files">
                            <div class="pro-group-files pro-group-files-full">
                                <?php if($archivo):?>
                                    <div class="pro-flex pro-mov-flex-column pro-radius pro-card pro-justify-betwwen pro-items-center pro-text pro-bg-white">
                                        <?php if($texto):?>
                                            <div class="pro-card__text pro-flex pro-items-center pro-mov-flex-column pro-mov-items-start">
                                                <svg class="pro-card_icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.998 2.03369C14.6003 2.03378 14.2188 2.19186 13.9375 2.47317L4.93755 11.4727C4.65622 11.7539 4.49813 12.1354 4.49805 12.5332V30.5323C4.49805 31.7257 4.97215 32.8702 5.81607 33.7141C6.65998 34.558 7.80457 35.032 8.99805 35.032H10.498C10.8959 35.032 11.2774 34.874 11.5587 34.5927C11.84 34.3114 11.998 33.9299 11.998 33.5321C11.998 33.1343 11.84 32.7528 11.5587 32.4715C11.2774 32.1902 10.8959 32.0322 10.498 32.0322H8.99805C8.60022 32.0322 8.21869 31.8742 7.93739 31.5929C7.65608 31.3116 7.49805 30.9301 7.49805 30.5323V14.0331H14.998C15.3959 14.0331 15.7774 13.8751 16.0587 13.5938C16.34 13.3125 16.498 12.931 16.498 12.5332V5.03354H26.998C27.3959 5.03354 27.7774 5.19157 28.0587 5.47286C28.34 5.75415 28.498 6.13566 28.498 6.53347V17.0329C28.498 17.4307 28.6561 17.8123 28.9374 18.0936C29.2187 18.3748 29.6002 18.5329 29.998 18.5329C30.3959 18.5329 30.7774 18.3748 31.0587 18.0936C31.34 17.8123 31.498 17.4307 31.498 17.0329V6.53347C31.498 5.34005 31.0239 4.19552 30.18 3.35165C29.3361 2.50777 28.1915 2.03369 26.998 2.03369H14.998ZM13.498 11.0332H9.61905L13.498 7.15444V11.0332ZM15.46 35.8765C15.697 36.169 16.0405 36.4075 16.4755 36.496C16.8805 36.58 17.236 36.5035 17.482 36.4135C17.935 36.2485 18.292 35.938 18.523 35.7085C18.889 35.3485 19.273 34.8596 19.6525 34.3076C21.3175 33.7331 23.6545 33.2051 25.9285 32.8722C27.193 32.6877 28.3735 32.5722 29.3665 32.5332C29.7595 32.9981 30.118 33.3956 30.4165 33.6971C30.6025 33.8861 30.8095 34.0826 31.0135 34.2326C31.1035 34.3001 31.276 34.4201 31.4965 34.5056C31.612 34.5506 32.3665 34.8386 33.061 34.2776C33.472 33.9476 33.85 33.5771 34.114 33.1616C34.3795 32.7417 34.63 32.1027 34.4215 31.3767C34.2175 30.6643 33.6865 30.2668 33.295 30.0598C32.898 29.8631 32.473 29.7285 32.035 29.6608C31.6207 29.5916 31.2023 29.549 30.7825 29.5333C29.726 28.208 28.7105 26.8504 27.7375 25.4625C26.8885 24.2641 26.0868 23.0327 25.3345 21.7712C25.402 21.4817 25.4575 21.2057 25.5025 20.9417C25.5775 20.4918 25.6225 20.0388 25.612 19.6143C25.6119 19.147 25.5116 18.6852 25.318 18.2599C25.1871 17.9804 24.9969 17.7328 24.7607 17.5341C24.5245 17.3355 24.2479 17.1905 23.95 17.1094C23.347 16.9474 22.7725 17.0689 22.3315 17.2324C21.652 17.4829 21.2785 18.0424 21.1495 18.5869C21.0656 18.9918 21.0723 19.4103 21.169 19.8123C21.31 20.4693 21.6385 21.2267 22.018 21.9662C22.051 22.0322 22.0855 22.0997 22.1215 22.1657C21.763 23.3431 21.235 24.7306 20.6065 26.1675C19.687 28.2719 18.6055 30.3583 17.6755 31.8492C17.041 32.1147 16.4545 32.4192 16.0105 32.7702C15.7075 33.0086 15.301 33.3956 15.106 33.9626C14.8675 34.6586 15.037 35.3545 15.46 35.8765ZM17.812 35.1745L17.821 35.164C17.8183 35.1678 17.8153 35.1713 17.812 35.1745ZM25.4935 29.9038C24.2725 30.0838 23.0155 30.3178 21.823 30.5908C22.354 29.5603 22.8775 28.4624 23.356 27.3689C23.626 26.7495 23.8885 26.1195 24.1315 25.497C24.502 26.058 24.889 26.6265 25.282 27.1844C25.8773 28.033 26.4874 28.8711 27.112 29.6983C26.5765 29.7553 26.032 29.8258 25.4935 29.9038ZM24.0895 19.1088V19.1058V19.1088Z" fill="#FFB740"/>
                                                </svg>
                                                <?= $texto;?>
                                            </div>
                                        <?php endif;?>
                                        <?php if($archivo):?>
                                            <a class="pro-btn pro-btn-orange pro-card__button pro-mov-minw-initial" download href="<?= $archivo["url"];?>">
                                                Descargar
                                                <svg class="pro-btn-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.2426 8.77353C14.725 8.65355 15.0188 8.16526 14.8988 7.6829C14.7788 7.20054 14.2905 6.90678 13.8081 7.02676L14.2426 8.77353ZM9.13538 12.6303L8.31758 13.0061C8.4747 13.3481 8.82802 13.5562 9.20329 13.5278C9.57857 13.4994 9.89655 13.2405 10.0004 12.8788L9.13538 12.6303ZM3.97371 7.00015C3.47666 7.00015 3.07371 7.40309 3.07371 7.90015C3.07371 8.3972 3.47665 8.80015 3.97371 8.80015L3.97371 7.00015ZM13.8081 7.02676C12.3624 7.38638 9.26093 8.93239 8.27034 12.3819L10.0004 12.8788C10.7485 10.2736 13.1528 9.04461 14.2426 8.77353L13.8081 7.02676ZM9.95319 12.2546C9.56082 11.4006 8.82023 10.1348 7.8436 9.06667C6.89331 8.02733 5.55804 7.00015 3.97371 7.00015L3.97371 8.80015C4.78005 8.80015 5.6634 9.34969 6.51517 10.2813C7.34059 11.184 7.9855 12.2834 8.31758 13.0061L9.95319 12.2546Z" fill="#000957"/>
                                                    <line x1="9.08242" y1="11.2736" x2="9.08242" y2="1.33595" stroke="#000957" stroke-width="1.8" stroke-linecap="round"/>
                                                    <path d="M1 12.6304V13.6304C1 14.426 1.31607 15.1891 1.87868 15.7517C2.44129 16.3143 3.20435 16.6304 4 16.6304H14C14.7956 16.6304 15.5587 16.3143 16.1213 15.7517C16.6839 15.1891 17 14.426 17 13.6304V12.6304" stroke="#000957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        <?php endif;?>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
                <?php if($galeria):?>
                    <h3 class="pro-color-blue pro-weight-800 pro-subtitle">Fotos</h3>
                    <div class="pro-galeria-producto-container2">
                        <div class="pro-galeria-producto">
                            <?php foreach ($galeria as $item):?>
                                <?php
                                $idItem = $item["ID"];
                                ?>
                                <div>
                                    <?php if($idItem):?>
                                        <?php $image = wp_get_attachment_image($idItem,"full",false,["class"=>"pro-card__image pro-radius pro-cover"]); ?>
                                        <?= $image;?>
                                    <?php endif;?>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                <?php endif;?>
            </div>
            <?php if($mostrarFormulario):?>
                <div class="pro-section__right pro-relative">
                    <?php if($formulario):?>
                        <?= do_shortcode($formulario);?>
                    <?php endif;?>
                    <img class="pro-absolute pro-card__icon--sheet pro-icon pro-only-desk" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
                </div>
            <?php endif;?>
        </div>
    </section>
<?php else:?>
    <h3>Contenido escuela post</h3>
<?php endif;?>