<?php
$fc_title = get_sub_field('fc_title');
$fc_text = get_sub_field('fc_text');
$fc_button = get_sub_field('fc_button');
$fc_select_color = get_sub_field('fc_select_color');
?>

    <div class="auto-container">
        <?php if( !empty($fc_title) ) printf('<h3 class="fl-h2 fl-title p-b">%s</h3>', $fc_title); ?>
        <?php if( !empty($fc_text) ): ?>
        <div class="fl-text">
        <?php echo wpautop($fc_text); ?>
        </div>
        <?php endif; ?>
        <?php if (!empty($fc_button)): ?>
        <div class="btn-about">
            <div class="s-btn <?php echo $fc_select_color ;  ?>">
                <a href="<?php echo esc_url($fc_button['url']); ?>" target="<?php echo esc_attr($fc_button['target'] ? $fc_button['target'] : '_self'); ?>">
                    <?php echo esc_html($fc_button['title']); ?>
                </a>
            </div>
        </div>
        <?php endif; ?>
    </div>