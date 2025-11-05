<?php
$fc_title   = get_sub_field('fc_title');
$fc_text    = get_sub_field('fc_text');
$link       = get_sub_field('fc_button');
$image_dir  = get_sub_field('fc_select_image_postition');
$image      = get_sub_field('fc_image');

if ($image && is_array($image) && isset($image['url'])) :
    $image_url = esc_url($image['url']);
else:
    $image_url = ''; // Default fallback if no image is set
endif;

if ($image_dir === 'Left') :
?>

<div class="img-text-sec wo-box">
    <div class="auto-container">
        <div class="img-text--row dy-flex">
            <div class="img-text--col bg-img" style="background-image: url('<?php echo $image_url; ?>');"></div>
            <div class="img-text--col">
                <div class="inner">
                    <?php if (!empty($fc_title)): ?>
                        <h3><?php echo esc_html($fc_title); ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($fc_text)): ?>
                        <div class="text-b">
                            <?php echo $fc_text; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($link): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <div class="s-btn b-btn">
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<section class="img-text-sec row-rev wo-box">
    <div class="auto-container">
        <div class="img-text--row dy-flex">
            <div class="img-text--col bg-img" style="background-image: url('<?php echo $image_url; ?>');"></div>
            <div class="img-text--col">
                <div class="inner">
                    <?php if (!empty($fc_title)): ?>
                        <h3><?php echo esc_html($fc_title); ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($fc_text)): ?>
                        <div class="text-b">
                            <?php echo $fc_text; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($link): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <div class="s-btn b-btn">
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
