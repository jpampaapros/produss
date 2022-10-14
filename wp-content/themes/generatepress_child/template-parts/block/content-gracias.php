<?php
$id = $block['id'];
$titulo = get_field('titulo');
$texto = get_field('texto');
?>

<?php if(!is_admin()):?>
    <section class="<?= $id; ?> pro-bg-blue4 pro-o-hidden pro-gracias pro-relative pro-mov-px-spacing">
        <img class="pro-absolute pro-card__icon--sheet pro-icon" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
        <img class="pro-absolute pro-card__icon--sheet pro-icon2" src="<?= site_url();?>/wp-content/uploads/2022/09/Group-4781.png" alt="">
        <div class="pro-section-content pro-text-center">
            <svg class="pro-icon3" width="100" height="163" viewBox="0 0 100 163" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="14.5" y1="159.494" x2="85.5" y2="159.494" stroke="#FFB740" stroke-width="6"/>
                <path d="M35.1621 50.3564L45.0535 60.2478L64.8364 40.465" stroke="#000957" stroke-width="9.89143" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M91.1229 67.3902C93.3598 61.9898 94.5112 56.2017 94.5112 50.3564C94.5111 38.5512 89.8216 27.2296 81.4741 18.8821C73.1265 10.5346 61.8049 5.84497 49.9997 5.84497C38.1945 5.84497 26.8729 10.5346 18.5254 18.8821C10.1779 27.2296 5.48828 38.5512 5.48828 50.3564C5.48828 56.2017 6.6396 61.9898 8.87651 67.3902C11.1134 72.7906 14.3921 77.6975 18.5254 81.8307C22.6586 85.964 27.5656 89.2427 32.9659 91.4796C38.3663 93.7165 44.1544 94.8678 49.9997 94.8678C55.845 94.8678 61.6331 93.7165 67.0335 91.4796C72.4339 89.2427 77.3408 85.964 81.4741 81.8307C85.6073 77.6975 88.886 72.7906 91.1229 67.3902Z" stroke="#FFB740" stroke-width="9.89143" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <?php if($titulo):?>
                <h2 class="pro-title pro-color-blue pro-mb-small"><?= $titulo;?></h2>
            <?php endif;?>
            <?php if($texto):?>
                <div class="pro-text pro-mb-0"><?= $texto;?></div>
            <?php endif;?>
        </div>
    </section>
<?php else:?>
    <h3>No hay data</h3>
<?php endif;?>