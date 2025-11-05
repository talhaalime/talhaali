<?php
$fc_sub_title = get_sub_field('fc_sub_title');
$fc_title = get_sub_field('fc_title');
?>
<div class="auto-container">
    <?php if(!empty($fc_sub_title)):?>
        <?php if( !empty($fc_sub_title) ) printf('<h5 class="fl-h2 fl-title p-b">%s</h5>', esc_html($fc_sub_title)); ?>
    <?php endif; ?>
	<?php if(!empty($fc_title)):?>
    	<blockquote><?php echo $fc_title ; ?></blockquote>
	<?php endif; ?>
</div>