<?php
$fc_title = get_sub_field('fc_title');
?>
<div class="auto-container">
    <?php if(!empty($fc_title)):?>
        <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 fl-title p-b">%s</h2>', esc_html($fc_title)); ?>
    <?php endif; ?>
</div>