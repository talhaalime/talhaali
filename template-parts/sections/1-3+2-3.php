<?php
$fc_title = get_sub_field('fc_title');
$fc_text_1 = get_sub_field('fc_text1');
$fc_text_2 = get_sub_field('fc_text2');
$fc_link = get_sub_field('fc_link');
?>
<div class="auto-container">
    <?php if( !empty($fc_title) ) printf('<h3 class="fl-h2 fl-title p-b">%s</h3>', esc_html($fc_title)); ?>
    <div class="row-gap dy-flex">
        <?php if( !empty($fc_text_1) ): ?>
        <div class="col-half-colum fl-text ">
            <?php echo wpautop($fc_text_1); ?>
        </div>
        <?php endif; ?>             
        <?php if( !empty($fc_text_2) ): ?>
            <div class="col-half-second-colum fl-text ">
                <?php echo wpautop($fc_text_2); ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if( !empty($fc_link) ): ?>
        <div class="orange-btn style-btn">
            <a href="<?php echo $fc_link['url'];?>" target="<?php echo $fc_link['target'];?>">
                <?php echo $fc_link['title'];?>
            </a>
        </div>
    <?php endif; ?>
</div>