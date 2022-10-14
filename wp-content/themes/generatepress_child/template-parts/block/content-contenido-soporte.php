<?php
$id = $block['id'];
$tituloBanner = get_field("titulo_banner");
$textoBanner = get_field("texto_banner");
$archivos = get_field("archivos");
$tituloBase = get_field("titulo_base");
$textoBase = get_field("texto_base");
$cardsBase = get_field("cards_base");
$formulario = get_field("formulario");
$carouselBanner = get_field('carousel_banner');
$tituloCategoriasBanner = get_field('titulo_categorias_banner');
?>

<?php if(!is_admin()):?>
    <?php
        $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4863.png";
        $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group.png";
    ?>
    <section class="<?= $id; ?> pro-soporte-banner pro-listado-con-tabs-produss-informa pro-listado-grilla">
        <div class="pro-color-white pro-bg-blue pro-banner-title pro-relative pro-o-hidden">
            <div class="pro-section-content pro-relative">
                <div class="pro-section__box pro-mb-normal">
                    <div class="pro-section__left">
						<?php if($tituloBanner):?>
							<div class="pro-mov-px-spacing">
								<h2 class="pro-section__title pro-title pro-title-line"><?= $tituloBanner;?></h2>
							</div>
						<?php endif;?>
                        <?php if($textoBanner):?>
                            <div class="pro-mov-px-spacing pro-section__text pro-text pro-mb-0"><?= $textoBanner;?></div>
                        <?php endif;?>
                    </div>
                    <div class="pro-section__right pro-flex pro-items-center pro-mov-px-spacing">
                        <?php if($carouselBanner):?>
                            <div class="pro-carousel-soporte pro-w-full">
                                <?php foreach ($carouselBanner as $carousel):?>
                                    <div>
                                        <?php $image = wp_get_attachment_image($carousel["id"],"full",false,["class"=>"pro-cover pro-w-full pro-radius pro-card__image"]); ?>
                                        <?= $image;?>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
                <?php if($tituloCategoriasBanner):?>
                    <h3 class="pro-text-center pro-title-small3 pro-mb-normal"><?= $tituloCategoriasBanner;?></h3>
                <?php endif;?>
                <h3></h3>
                <?php if($archivos):?>
                    <div class="pro-group-btns pro-mov-no-scroll pro-text-center pro-mov-btn-spacing pro-tab-list pro-tab-list-2 pro-mov-flex pro-mov-o-y-auto">
                        <?php foreach ($archivos as $key=>$card):?>
                            <?php
                                $categoriaCard = $card["categoria"];
                            ?>
                            <a class="pro-tab <?= ($key == 0) ? 'pro-active': '';?> pro-mov-nowrap pro-btn-white-outline pro-btn pro-minw-initial" href="#tab-<?= $key;?>"><?= $categoriaCard;?></a>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-desk" src="<?= $imageShadow;?>" alt="Imagen Sombra">
            <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        </div>
    </section>
    <section class="pro-soporte-files pro-mov-px-spacing">
        <div class="pro-section-content">
            <?php if($archivos):?>
                    <?php foreach ($archivos as $key=>$card):?>
                    <?php
                        $documentos = $card["documentos"];
                    ?>
                    <div id="tab-<?= $key;?>" class="pro-tab-content <?= ($key == 0 ) ? 'pro-show': '';?>">
                        <?php if($documentos):?>
                            <div class="pro-group-files pro-group-files-full">
                                <?php foreach ($documentos as $group):?>
                                    <?php
                                        $texto = $group["texto"];
                                        $archivo = $group["doc"];
                                    ?>
                                        <div class="pro-files">
                                            <?php if($archivo):?>
                                                <div class="pro-mov-flex-column pro-flex pro-radius pro-card pro-justify-betwwen pro-items-center pro-text pro-bg-white">
                                                    <?php if($texto):?>
                                                        <div class="pro-card__text pro-flex pro-items-center pro-mov-flex-column pro-mov-items-start">
                                                            <svg class="pro-card_icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.998 2.03369C14.6003 2.03378 14.2188 2.19186 13.9375 2.47317L4.93755 11.4727C4.65622 11.7539 4.49813 12.1354 4.49805 12.5332V30.5323C4.49805 31.7257 4.97215 32.8702 5.81607 33.7141C6.65998 34.558 7.80457 35.032 8.99805 35.032H10.498C10.8959 35.032 11.2774 34.874 11.5587 34.5927C11.84 34.3114 11.998 33.9299 11.998 33.5321C11.998 33.1343 11.84 32.7528 11.5587 32.4715C11.2774 32.1902 10.8959 32.0322 10.498 32.0322H8.99805C8.60022 32.0322 8.21869 31.8742 7.93739 31.5929C7.65608 31.3116 7.49805 30.9301 7.49805 30.5323V14.0331H14.998C15.3959 14.0331 15.7774 13.8751 16.0587 13.5938C16.34 13.3125 16.498 12.931 16.498 12.5332V5.03354H26.998C27.3959 5.03354 27.7774 5.19157 28.0587 5.47286C28.34 5.75415 28.498 6.13566 28.498 6.53347V17.0329C28.498 17.4307 28.6561 17.8123 28.9374 18.0936C29.2187 18.3748 29.6002 18.5329 29.998 18.5329C30.3959 18.5329 30.7774 18.3748 31.0587 18.0936C31.34 17.8123 31.498 17.4307 31.498 17.0329V6.53347C31.498 5.34005 31.0239 4.19552 30.18 3.35165C29.3361 2.50777 28.1915 2.03369 26.998 2.03369H14.998ZM13.498 11.0332H9.61905L13.498 7.15444V11.0332ZM15.46 35.8765C15.697 36.169 16.0405 36.4075 16.4755 36.496C16.8805 36.58 17.236 36.5035 17.482 36.4135C17.935 36.2485 18.292 35.938 18.523 35.7085C18.889 35.3485 19.273 34.8596 19.6525 34.3076C21.3175 33.7331 23.6545 33.2051 25.9285 32.8722C27.193 32.6877 28.3735 32.5722 29.3665 32.5332C29.7595 32.9981 30.118 33.3956 30.4165 33.6971C30.6025 33.8861 30.8095 34.0826 31.0135 34.2326C31.1035 34.3001 31.276 34.4201 31.4965 34.5056C31.612 34.5506 32.3665 34.8386 33.061 34.2776C33.472 33.9476 33.85 33.5771 34.114 33.1616C34.3795 32.7417 34.63 32.1027 34.4215 31.3767C34.2175 30.6643 33.6865 30.2668 33.295 30.0598C32.898 29.8631 32.473 29.7285 32.035 29.6608C31.6207 29.5916 31.2023 29.549 30.7825 29.5333C29.726 28.208 28.7105 26.8504 27.7375 25.4625C26.8885 24.2641 26.0868 23.0327 25.3345 21.7712C25.402 21.4817 25.4575 21.2057 25.5025 20.9417C25.5775 20.4918 25.6225 20.0388 25.612 19.6143C25.6119 19.147 25.5116 18.6852 25.318 18.2599C25.1871 17.9804 24.9969 17.7328 24.7607 17.5341C24.5245 17.3355 24.2479 17.1905 23.95 17.1094C23.347 16.9474 22.7725 17.0689 22.3315 17.2324C21.652 17.4829 21.2785 18.0424 21.1495 18.5869C21.0656 18.9918 21.0723 19.4103 21.169 19.8123C21.31 20.4693 21.6385 21.2267 22.018 21.9662C22.051 22.0322 22.0855 22.0997 22.1215 22.1657C21.763 23.3431 21.235 24.7306 20.6065 26.1675C19.687 28.2719 18.6055 30.3583 17.6755 31.8492C17.041 32.1147 16.4545 32.4192 16.0105 32.7702C15.7075 33.0086 15.301 33.3956 15.106 33.9626C14.8675 34.6586 15.037 35.3545 15.46 35.8765ZM17.812 35.1745L17.821 35.164C17.8183 35.1678 17.8153 35.1713 17.812 35.1745ZM25.4935 29.9038C24.2725 30.0838 23.0155 30.3178 21.823 30.5908C22.354 29.5603 22.8775 28.4624 23.356 27.3689C23.626 26.7495 23.8885 26.1195 24.1315 25.497C24.502 26.058 24.889 26.6265 25.282 27.1844C25.8773 28.033 26.4874 28.8711 27.112 29.6983C26.5765 29.7553 26.032 29.8258 25.4935 29.9038ZM24.0895 19.1088V19.1058V19.1088Z" fill="#FFB740"/>
                                                            </svg>
                                                            <?= $texto;?>
                                                        </div>
                                                    <?php endif;?>
                                                    <?php if($archivo):?>
                                                        <a class="pro-btn pro-btn-orange pro-card__button" download href="<?= $archivo["url"];?>">
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
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </section>
    <section class="pro-bg-blue4 pro-listado-grilla pro-base-conocimiento pro-relative pro-o-hidden">
        <?php
            $imageShadow = site_url()."/wp-content/uploads/2022/09/desde-shadow2.png";
            $imageShadowMov = site_url()."/wp-content/uploads/2022/09/shadow2.png";
            $imageShadow2 = site_url()."/wp-content/uploads/2022/09/Group-4513.png";
            $imageShadow2Mov = site_url()."/wp-content/uploads/2022/09/shadow3-3.png";
        ?>
        <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-desk" src="<?= $imageShadow;?>" alt="Imagen Sombra">
        <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
        <div class="pro-section-content">
            <?php if($tituloBase):?>
                <h3 class="pro-section__title pro-color-blue pro-text-center pro-title-small3 pro-title-line-center"><?= $tituloBase;?></h3>
            <?php endif;?>
            <?php if($textoBase):?>
                <div class="pro-section__text pro-text pro-text-center"><?= $textoBase;?></div>
            <?php endif;?>
            <?php if($cardsBase):?>
                <div class="pro-cards pro-mov-o-y-hidden pro-mov-px-spacing pro-mov-no-scroll">
                    <?php foreach ($cardsBase as $card):?>
                        <?php
                            $imagenCard = $card["imagen"];
                            $tituloCard = $card["titulo"];
                            $textoCard = $card["texto"];
                        ?>
                        <div class="pro-card">
                            <div class="pro-card__image-container pro-relative">
                                <?php if($imagenCard):?>
                                    <?php $image = wp_get_attachment_image($imagenCard["id"],"full",false,["class"=>"pro-section-item__imagen pro-card__image pro-cover"]); ?>
                                    <?= $image;?>
                                <?php endif;?>
                            </div>
                            <?php if($tituloCard):?>
                                <h3 class="pro-color-blue pro-weight-700 pro-title-small7 pro-text-center "><?= $tituloCard;?></h3>
                            <?php endif;?>
                            <?php if($textoCard):?>
                                <div class="pro-text pro-text-center"><?= $textoCard;?></div>
                            <?php endif;?>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
        <img class="pro-event-none pro-absolute pro-image-shadow2 pro-contain pro-only-desk" src="<?= $imageShadow2;?>" alt="Imagen Sombra">
        <img class="pro-event-none pro-absolute pro-image-shadow2 pro-contain pro-only-mov" src="<?= $imageShadow2Mov;?>" alt="Imagen Sombra">
    </section>
    <section class="pro-sorporte-formulario">
        <div class="pro-section-content pro-mov-px-spacing">
            <?php if($formulario):?>
                <?= do_shortcode($formulario)?>
            <?php endif;?>
        </div>
    </section>
    <script>
        jQuery(document).ready(function ($){
            $("[name=Linea]").change(function (e){
                var $selectValue = $(this).val();
                if($selectValue === "Línea Pollos"){
                    $(".pro-form-correo-linea").val("cchumpitaz@san-fernando.com.pe");
                }else{
                    $(".pro-form-correo-linea").val("phuamullo@san-fernando.com.pe");
                }
            });

        });
    </script>
<?php else:?>
    <h3>Contenido soporte</h3>
<?php endif;?>