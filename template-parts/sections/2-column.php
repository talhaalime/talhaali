<?php
$fc_title = get_sub_field('fc_title');
$fc_text1 = get_sub_field('fc_text1');
$fc_text2 = get_sub_field('fc_text2');
$fc_link = get_sub_field('fc_link');
?>
<div class="auto-container">
    <?php if( !empty($fc_title) ) printf('<h3 class="fl-h2 fl-title p-b">%s</h3>', esc_html($fc_title)); ?>
    <div class="row-gap dy-flex">

        <div class="col-two-colum">
            <?php if( !empty($fc_text1) ): ?>
                <div class="fl-text">
                    <?php echo wpautop($fc_text1); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-two-colum">
            <?php if( !empty($fc_text2) ): ?>
                <div class="fl-text">
                    <?php echo wpautop($fc_text2); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if( !empty($fc_link) ): ?>
        <div class="orange-btn style-btn">
            <a href="<?php echo $fc_link['url'];?>" target="<?php echo $fc_link['target'];?>">
                <?php echo $fc_link['title'];?>
            </a>
        </div>
    <?php endif; ?>
</div>
