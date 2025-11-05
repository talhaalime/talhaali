<?php
$fc_title   = get_sub_field('fc_title');
$fc_text    = get_sub_field('fc_text');
$fc_button    = get_sub_field('fc_button');
$fc_image = get_sub_field('fc_image');
?>

<div class="auto-container">
    <div class="row-img-text">
        <div class="col-img-left">
            <?php if($fc_image): ?>
            <img src="<?php echo esc_url($fc_image['url']); ?>" alt="<?php echo esc_attr($fc_image['alt']); ?>">
            <?php endif; ?>
        </div>
        <div class="col-text-right">
            <div class="inner">
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
</div>