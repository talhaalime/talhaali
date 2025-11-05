<?php
$fc_title = get_sub_field('fc_title'); // Parent field title (optional)
?>

<div class="auto-container">
    <div class="inner">
        <?php if ($fc_title) : ?>
            <h2><?php echo esc_html($fc_title); ?></h2>
        <?php endif; ?>

        <?php if (have_rows('icon_boxes')) : ?>
            <div class="row-help dy-flex">
                <?php while (have_rows('icon_boxes')) : the_row(); 
                    $fc_image   = get_sub_field('fc_image');
                    $fc_title   = get_sub_field('fc_title');
                    $fc_content = get_sub_field('fc_content');
                ?>
                    <div class="col-help">
                        <div class="img-help">
                            <?php if ($fc_image) : ?>
                                <img src="<?php echo esc_url($fc_image['url']); ?>" alt="<?php echo esc_attr($fc_image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <?php if ($fc_title) : ?>
                            <h5><?php echo $fc_title; ?></h5>
                        <?php endif; ?>
                        <?php if ($fc_content) : ?>
                            <p><?php echo $fc_content; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
