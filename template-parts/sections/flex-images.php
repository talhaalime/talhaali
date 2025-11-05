<?php
$fc_image_one   = get_sub_field('fc_image_one');
$fc_image_two   = get_sub_field('fc_image_two');
?>
<div class="two-img-city bg-light-grey padd-client ">
    <div class="auto-container">
        <div class="two-img-city-row wow fadeInUp" data-wow-duration="2s">
            <?php if($fc_image_one): ?>
            <img src="<?php echo esc_url($fc_image_one['url']);?>" alt="<?php esc_attr($fc_image_one['alt']); ?>">
            <?php endif; ?>
			<?php if($fc_image_two): ?>
            <img src="<?php echo esc_url($fc_image_two['url']);?>" alt="<?php esc_attr($fc_image_two['alt']); ?>">
            <?php endif; ?>
		</div>
    </div>
</div>
