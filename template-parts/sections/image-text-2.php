<?php
$fc_title   = get_sub_field('fc_title');
$fc_text    = get_sub_field('fc_text');
$fc_button    = get_sub_field('fc_button');
$fc_image_1 = get_sub_field('fc_image_1');
$fc_image_2 = get_sub_field('fc_image_2');
?>

<div class="auto-container">
    <div class="row-two-img">
        <div class="col-two-img">
            <div class="row-img-two">
                <?php if($fc_image_1): ?>
                    <div class="col-left-img">
                        <img src="<?php echo esc_url($fc_image_1['url']); ?>" alt="<?php echo esc_attr($fc_image_1['alt']); ?>">
                    </div>
                <?php endif; ?>
                <?php if($fc_image_2): ?>
                    <div class="col-right-img">
                        <img src="<?php echo esc_url($fc_image_2['url']); ?>" alt="<?php echo esc_attr($fc_image_2['alt']); ?>">
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-two-img-text">
            <?php if (!empty($fc_title)): ?>
                <h3><?php echo esc_html($fc_title); ?></h3>
            <?php endif; ?>
            <?php if (!empty($fc_text)): ?>
                <?php echo $fc_text; ?>
            <?php endif; ?>
            <?php if( !empty($fc_button) ): ?>
                <div class="orange-btn style-btn">
                    <a href="<?php echo $fc_button['url'];?>" target="<?php echo $fc_button['target'];?>">
                        <?php echo $fc_button['title'];?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
