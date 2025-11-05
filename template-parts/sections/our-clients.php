<?php
$fc_title   = get_sub_field('fc_title');
$fc_text   = get_sub_field('fc_text');
?>

<div class="auto-container">
    <div class="head-sec">
        <?php if (!empty($fc_title)): ?>
        <div class="sub-heading">
            <h5><?php echo esc_html($fc_title); ?></h5>
        </div>
        <?php endif; ?>
        <?php if (!empty($fc_text)): ?>
            <h2><?php echo esc_html($fc_text); ?></h2>
        <?php endif; ?>
    </div>
    <div class="client-slider same-nav owl-carousel owl-theme">
        <?php
        if (have_rows('brand_details_bd')) :
            while (have_rows('brand_details_bd')) : the_row();
                $image   = get_sub_field('fc_images_slider');
        ?>
        <div class="item">
            <div class="box-client-img">
            <?php if(!empty($image)):?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php endif; ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>