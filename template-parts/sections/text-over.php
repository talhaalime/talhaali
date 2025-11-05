<?php
$fc_title    = get_sub_field('fc_title');
$fc_text     = get_sub_field('fc_text');
$fc_button   = get_sub_field('fc_button');
$fc_image_cg = get_sub_field('fc_image_cg');
?>

<div class="auto-container">
    <div class="inner bg" style="background-image: url('<?php echo $fc_image_cg['url']; ?>');">
        <div class="text-contain">
            <?php if (!empty($fc_title)): ?>
                <h3><?php echo esc_html($fc_title); ?></h3>
            <?php endif; ?>
            <?php if (!empty($fc_text)): ?>
                <h5> <?php echo $fc_text; ?> </h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="blue-btn style-btn">
        <a href="#">Read more</a>
    </div>
    <?php if( !empty($fc_button) ): ?>
        <div class="blue-btn style-btn">
            <a href="<?php echo $fc_button['url'];?>" target="<?php echo $fc_button['target'];?>">
                <?php echo $fc_button['title'];?>
            </a>
        </div>
    <?php endif; ?>
</div>