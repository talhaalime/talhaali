<?php
$fc_title = get_sub_field('fc_title');

// Get selected terms from ACF taxonomy field
$terms = get_sub_field('add_properties_areas'); // ACF taxonomy field

?>

<div class="auto-container">
    <?php if ($fc_title): ?>
        <h2><?php echo $fc_title; ?></h2>
    <?php endif; ?>

    <div class="agency-row dy-flex">
        <?php if (!empty($terms)): ?>
            <?php foreach ($terms as $term): 
                // Get ACF image field from taxonomy term
                $image_area = get_field('image_area', $term);
                $term_link  = get_term_link($term);
            ?>
                <div class="col-agency">
                    <div class="inner">
                        <?php if (!empty($image_area)): ?>
                            <img src="<?php echo esc_url($image_area['url']); ?>" alt="<?php echo esc_attr($term->name); ?>">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/overlap.png" alt="<?php echo esc_attr($term->name); ?>">
                        <?php endif; ?>

                        <div class="blue-btn style-btn">
                            <a href="<?php echo esc_url($term_link); ?>">
                                <?php echo esc_html($term->name); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No areas selected.</p>
        <?php endif; ?>
    </div>
</div>
