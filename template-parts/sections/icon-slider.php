<?php
$fc_title   = get_sub_field('fc_title');
?>

<div class="auto-container">
    <div class="head-sec">
        <?php if (!empty($fc_title)): ?>
            <h3><?php echo esc_html($fc_title); ?></h3>
        <?php endif; ?>
    </div>
    <?php if (have_rows('icon_boxes')):?>
    <div class="icon-slider same-nav owl-carousel owl-theme">
        <?php while (have_rows('icon_boxes')): the_row();
            $image = get_sub_field('fc_image');
            $fc_title = get_sub_field('fc_title');
            $fc_content = get_sub_field('fc_content'); 
        ?>
        <div class="item">
            <div class="col-box-i">
                <?php if(!empty($image)):?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <?php endif; ?>
                <?php if (!empty($fc_title)): ?>
                    <h6><?php echo esc_html($fc_title); ?></h6>
                <?php endif; ?>
                <?php if (!empty($fc_content)): ?>
                    <p><?php echo esc_html($fc_content); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div>