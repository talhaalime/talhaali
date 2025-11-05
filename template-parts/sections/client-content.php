<?php
$fc_title   = get_sub_field('fc_title');
$name   = get_sub_field('fc_client_name_et');
$category   = get_sub_field('fc_category_name');
$date   = get_sub_field('fc_date');
$text   = get_sub_field('fc_text');
?>

<div class="auto-container">
    <div class="main-row dy-flex">
        <div class="col-left">
            <div class="gallery-content wow fadeInUp" data-wow-duration="2s">
            <?php if (!empty($fc_title)): ?>
                <h3><?php echo esc_html($fc_title); ?></h3>
            <?php endif; ?>
            </div>
        </div>
        <div class="col-right home-client-box wow fadeInUp" data-wow-duration="2s">
            <div class="row-client-the">
            <?php if (!empty($name)): ?>
                <h4><?php echo esc_html($name); ?></h4>
            <?php endif; ?>
                <p><?php echo esc_html($date); ?></p>
            </div>
            <div class="pollw">
                <p><?php echo esc_html($category); ?></p>
            </div>
            <?php if (!empty($text)): ?>
                <p><?php echo $text; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>