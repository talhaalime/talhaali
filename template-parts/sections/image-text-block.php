<?php
$fc_title   = get_sub_field('fc_title');
$fc_text    = get_sub_field('fc_text');
$fc_button    = get_sub_field('fc_button');
$select_color    = get_sub_field('select_color');
$fc_image = get_sub_field('fc_image');
$btn_class = ($select_color === 'Blue') ? 'blue-btn' : 'orange-btn';
?>

<div class="row-full">
    <div class="col-img-full bg" style="background-image: url('<?php echo esc_url($fc_image['url']); ?>');">
    </div>
    <div class="col-text-full">
        <div class="inner">
            <?php if (!empty($fc_title)): ?>
                <h3><?php echo esc_html($fc_title); ?></h3>
            <?php endif; ?>
            <?php if (!empty($fc_text)): ?>
                <?php echo $fc_text; ?>
            <?php endif; ?>
            <?php if( !empty($fc_button) ): ?>
                <div class="<?php echo $btn_class; ?> style-btn">
                    <a href="<?php echo $fc_button['url'];?>" target="<?php echo $fc_button['target'];?>">
                        <?php echo $fc_button['title'];?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>