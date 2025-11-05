<?php
$fc_title = get_sub_field('fc_title');
$fc_text  = get_sub_field('fc_text');
?>

<div class="auto-container">
    <?php if ($fc_title) : ?>
        <h2><?php echo $fc_title; ?></h2>
    <?php endif; ?>

    <?php if ($fc_text) : ?>
        <p><?php echo $fc_text; ?></p>
    <?php endif; ?>

    <?php if (have_rows('brand_details_bd')) : ?>
        <div class="logo-slider owl-carousel owl-theme">
            <?php while (have_rows('brand_details_bd')) : the_row(); 
                $fc_images_slider = get_sub_field('fc_images_slider');
                if ($fc_images_slider) :
            ?>
                <div class="item">
                    <img src="<?php echo esc_url($fc_images_slider['url']); ?>" alt="<?php echo esc_attr($fc_images_slider['alt']); ?>">
                </div>
            <?php 
                endif;
            endwhile; 
            ?>
        </div>
    <?php endif; ?>
</div>
