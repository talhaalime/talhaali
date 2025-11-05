<?php
$fc_title   = get_sub_field('fc_title');   // Main section heading (optional)
$fc_content = get_sub_field('fc_content'); // Section description (optional)
$fc_link    = get_sub_field('fc_link');    // View All Reviews button (optional)
?>

<div class="inner">
    <div class="auto-container">
        <div class="head-dream">
            <?php if ($fc_title) : ?>
                <h2><?php echo $fc_title; ?></h2>
            <?php endif; ?>

            <?php if ($fc_content) : ?>
                <p><?php echo $fc_content; ?></p>
            <?php endif; ?>
        </div>

        <?php if (have_rows('add_reviews')) : ?>
            <div class="testimonial-slider owl-carousel owl-theme">
                <?php while (have_rows('add_reviews')) : the_row();
                    $review_content = get_sub_field('fc_content');
                    $review_title   = get_sub_field('fc_title');
                ?>
                    <div class="item">
                        <div class="testimonial-box">
                            <div class="inner-testimonial">
                                <?php if ($review_content) : ?>
                                    <p><?php echo $review_content; ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if ($review_title) : ?>
                                <h6><?php echo $review_title; ?></h6>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if ($fc_link) : ?>
            <div class="testimonial-btn">
                <div class="blue-btn style-btn">
                    <a href="<?php echo esc_url($fc_link['url']); ?>" target="<?php echo esc_attr($fc_link['target']); ?>">
                        <?php echo esc_html($fc_link['title']); ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
