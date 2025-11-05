<?php
$fc_title   = get_sub_field('fc_title');
$fc_content = get_sub_field('fc_text');
$fc_image    = get_sub_field('fc_image');
?>

<div class="auto-container">
	<div class="row-gap dy-flex">
		<div class="col-two-colum">
			<?php if ($fc_title): ?>
			<h2><?php echo $fc_title; ?></h2>
			<?php endif; ?>
		</div>
		<div class="col-two-colum">
			<?php if ($fc_content): ?>
			<h5><?php echo $fc_content; ?></h5>
			<?php endif; ?>
		</div>
	</div>
	<img src="<?php echo $fc_image['url']; ?>" alt="<?php echo $fc_image['alt']; ?>">
</div>