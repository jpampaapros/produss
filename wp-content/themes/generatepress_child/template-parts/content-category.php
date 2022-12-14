<?php
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$cat_name = $category->name;
$logo = get_field('logo_suscribete','option');
$texto = get_field('texto_suscribete','option');
$tituloForm = get_field('titulo_form_suscribete','option');
$form = get_field('form_suscribete','option');
$numPost = 0;
?>
<article class="page type-page status-publish" itemtype="https://schema.org/CreativeWork" itemscope="">
    <div class="inside-article">
        <div class="entry-content" itemprop="text">
            <?php
            $id = $block['id'];
            $titulo = get_field('titulo_produss_informa','option');
            $texto = get_field('texto_produss_informa','option');
            $linkActual = site_url()."/produss-informa/";
            ?>
            <?php
                $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4863.png";
                $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group.png";
            ?>
            <section class="<?= $id; ?> pro-listado-con-tabs-produss-informa pro-listado-con-tabs-produss-informa-category pro-listado-grilla pro-section-category">
                <div class="pro-text-center pro-color-white pro-bg-blue pro-banner-title pro-relative pro-o-hidden">
                    <div class="pro-section-content pro-relative">
                        <?php if($cat_name):?>
                            <div class="pro-mov-px-spacing">
                                <h2 class="pro-section__title pro-title pro-title-line-center pro-only-desk"><?= $cat_name;?></h2>
                                <div class="pro-section__title pro-title pro-title-line pro-text-left pro-only-mov"><?= $cat_name;?></div>
                            </div>
                        <?php endif;?>
                        <?php if($texto):?>
                            <div class="pro-mov-px-spacing pro-mov-text-left pro-section__text pro-text"><?= $texto;?></div>
                        <?php endif;?>
                        <?php
                        $terms = get_categories( array(
                            'hide_empty' => true,
                            'exclude' => array(1)
                        ));
                        ?>
                        <?php if($terms):?>
                            <div class="pro-group-btns pro-mov-o-y-auto pro-mov-flex pro-mov-px-spacing pro-mov-btn-spacing">
                                <a class="pro-btn pro-btn-white-outline pro-minw-initial" href="<?= $linkActual;?>">Todos</a>
                                <?php foreach ($terms as $term):?>
                                    <?php
                                        $categoryPostId = $term->term_id;
                                        $categoryPostSlug = get_term_link($categoryPostId);
                                    ?>
                                    <a class="pro-btn pro-minw-initial <?= ($term->term_id === $cat_id ? 'pro-bg-orange pro-color-blue' : 'pro-btn-white-outline');?>" href="<?= $categoryPostSlug;?>"><?= $term->name;?></a>
                                <?php endforeach;?>
                            </div>
                            <?php if(empty($tab)) $tab = $terms[0]->slug; ?>
                        <?php endif;?>
                    </div>
                    <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-desk" src="<?= $imageShadow;?>" alt="Imagen Sombra">
                    <img class="pro-event-none pro-absolute pro-image-shadow pro-contain pro-only-mov" src="<?= $imageShadowMov;?>" alt="Imagen Sombra">
                </div>
                <div class="pro-section-content pro-listado-con-tabs-produss-informa__posts">
                    <div class="pro-grid-post pro-grid-post-latest">
                        <div class="pro-mov-px-spacing">
                            <h3 class="pro-section__title pro-title-line pro-title-small3 pro-color-blue"><?= $cat_name;?></h3>
                        </div>
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 12,
                            'orderby' => 'post_date',
                            'order' => 'desc',
                            'category__in' => array($cat_id),
                        );
                        $the_query = new WP_Query( $args );
                        $numPost = $the_query->max_num_pages;
                        ?>
                        <?php if($the_query->have_posts() ):?>
                            <div class="pro-cards pro-mov-o-y-auto pro-mov-px-spacing" id="cards-grilla">
                                <?php while ($the_query->have_posts() ) : $the_query->the_post();
                                    $idPost = get_the_ID();
                                    $titlePost = get_the_title($idPost);
                                    $textoCortoPost = get_the_excerpt($idPost);
                                    $nroClientePost = get_field('nro_clientes',$idPost);
                                    $linkPost = get_the_permalink($idPost);
                                    $featuredImgPost = get_the_post_thumbnail_url( $idPost );
                                    $categoriesPost = get_the_category($idPost);
                                    $isVideo = false;
                                    $firstCategory = $categoriesPost ? $categoriesPost[0] : "";
                                    foreach ($categoriesPost as $categoryPost):
                                        if($categoryPost->slug == "videos"):
                                            $isVideo = true;
                                            break;
                                        endif;
                                    endforeach;
                                    ?>
                                    <div class="pro-card">
                                        <?php if($featuredImgPost):?>
                                            <div class="pro-card__image-container pro-relative">
                                                <img src="<?= $featuredImgPost;?>" alt="" class="pro-card__image pro-cover">
                                                <?php if($isVideo):?>
                                                    <svg class="pro-icon-svg1 pro-absolute" width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="40.5" cy="40.5" r="40.5" fill="white" fill-opacity="0.3"/>
                                                        <circle cx="40.5" cy="40.5" r="32.5" fill="url(#paint0_linear_171_18188)"/>
                                                        <circle cx="40.5" cy="40.5" r="32.5" fill="#002F87"/>
                                                        <path d="M54 41L33 53.1244V28.8756L54 41Z" fill="white"/>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_171_18188" x1="73" y1="25" x2="40.5" y2="95" gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#002F87"/>
                                                                <stop offset="1" stop-color="#0D99FF" stop-opacity="0.79"/>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                <?php endif;?>
                                            </div>
                                        <?php endif;?>
                                        <?php if($categoriesPost):?>
                                            <div class="pro-categories__btns">
                                                <?php foreach ($categoriesPost as $categoryPost):?>
                                                    <a class="pro-btn2 pro-color-blue" href="<?= site_url()."/categorias/".$categoryPost->slug;?>"><?= $categoryPost->name;?></a>
                                                <?php endforeach;?>
                                            </div>
                                        <?php endif;?>
                                        <?php if($titlePost):?>
                                            <div class="pro-text"><?= $titlePost;?></div>
                                        <?php endif;?>
                                        <?php if($linkPost):?>
                                            <a class="pro-btn pro-btn-small pro-btn-orange" href="<?= $linkPost;?>">
                                                M??s informaci??n
                                                <svg class="pro-btn-icon" width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.95564 2.07152C2.75568 1.26759 1.94185 0.77798 1.13792 0.977949C0.333993 1.17792 -0.155614 1.99174 0.0443555 2.79567L2.95564 2.07152ZM9.5 10.7039L10.1263 12.0669C10.6962 11.805 11.0431 11.2161 10.9957 10.5907C10.9484 9.96522 10.5169 9.43526 9.91401 9.26213L9.5 10.7039ZM0 19.4336C0 20.262 0.671573 20.9336 1.5 20.9336C2.32843 20.9336 3 20.262 3 19.4336H0ZM0.0443555 2.79567C0.651472 5.23644 3.26228 10.4732 9.08599 12.1456L9.91401 9.26213C5.49772 7.99394 3.41519 3.91903 2.95564 2.07152L0.0443555 2.79567ZM8.87375 9.34085C7.43104 10.0037 5.29231 11.2551 3.48782 12.905C1.73137 14.5109 0 16.7636 0 19.4336H3C3 18.0603 3.9353 16.5608 5.51218 15.119C7.04102 13.7211 8.90229 12.6292 10.1263 12.0669L8.87375 9.34085Z" fill="#000957"/>
                                                </svg>
                                            </a>
                                        <?php endif;?>
                                    </div>
                                <?php endwhile;?>
                            </div>
                            <?php if($numPost > 12):?>
                                <div class="pro-text-center">
                                    <a class="pro-btn pro-btn-small pro-btn-blue pro-btn-more" id="btn-more" href="<?= $linkPost;?>">
                                        Ver m??s art??culos
                                        <svg class="pro-btn-icon" width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.9793 3.80574C16.7832 3.60577 17.2728 2.79195 17.0728 1.98802C16.8729 1.18409 16.059 0.694484 15.2551 0.894453L15.9793 3.80574ZM8.80638 8.93833L7.44336 9.56458C7.70524 10.1345 8.2941 10.4814 8.91956 10.4341C9.54502 10.3867 10.075 9.95523 10.2481 9.35234L8.80638 8.93833ZM1.61719 0.850097C0.78876 0.850097 0.117188 1.52167 0.117188 2.3501C0.117187 3.17852 0.78876 3.8501 1.61719 3.8501L1.61719 0.850097ZM15.2551 0.894453C13.1927 1.40745 8.77753 3.60415 7.36464 8.52432L10.2481 9.35234C11.2568 5.83958 14.5101 4.17117 15.9793 3.80574L15.2551 0.894453ZM10.1694 8.31208C9.61463 7.10467 8.57005 5.31888 7.18907 3.80851C5.85202 2.34617 3.93038 0.850097 1.61719 0.850097L1.61719 3.8501C2.63373 3.8501 3.80217 4.5501 4.97503 5.83286C6.10397 7.06759 6.98911 8.57592 7.44336 9.56458L10.1694 8.31208Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                            <?php endif;?>
                        <?php endif;?>
                        <?php wp_reset_query();?>
                    </div>
                </div>
            </section>

            <?php
                $imageShadowMov = site_url()."/wp-content/uploads/2022/09/Group-4522.png";
                $imageShadow = site_url()."/wp-content/uploads/2022/09/Group-4520.png";
            ?>

            <section class="pro-suscribete pro-o-hidden pro-bg-blue2 pro-color-white pro-relative pro-mov-px-spacing">
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


        </div>
    </div>
</article>

<script>
    jQuery(document).ready(function ($){
        var $btn = $("#btn-more");
        var $content = $("#cards-grilla");

        var page = 2;
        $btn.click(function(e){
            e.preventDefault();
            var data = {
                'action': 'load_posts_cat_by_ajax',
                'page': page,
                'cat_id': <?= $cat_id?>,
                'security': ajaxAdmin.security
            };
            $.ajax({
                url: ajaxAdmin.ajaxurl,
                type: 'post',
                dataType: 'html',
                data,
                success: function(res){
                    if(res){
                        $content.append(res);
                        page++;
                    }else{
                        $btn.hide();
                    }
                },
                failure: function(res){
                    console.log(res);
                }
            });
        });


    });
</script>