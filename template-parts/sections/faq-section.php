<?php
$fc_title = get_sub_field('fc_title');
$fc_image = get_sub_field('fc_image');
$fc_link  = get_sub_field('fc_link');
?>

<div class="auto-container">
    <div class="row-gap dy-flex">
        <div class="col-two-colum">
            <?php if ($fc_title) : ?>
                <h2><?php echo $fc_title; ?></h2>
            <?php endif; ?>

            <?php if (have_rows('accordion_content')) : ?>
                <div class="accordian-box">
                    <div class="accordion-container">
                        <?php while (have_rows('accordion_content')) : the_row(); 
                            $fc_title1 = get_sub_field('fc_title1');
                            $fc_text1  = get_sub_field('fc_text1');
                        ?>
                            <div class="main-acc">
                                <?php if ($fc_title1) : ?>
                                    <div class="accordions">
                                        <?php echo esc_html($fc_title1); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($fc_text1) : ?>
                                    <div class="panel">
                                        <div class="inner">
                                            <p><?php echo esc_html($fc_text1); ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-two-colum">
            <div class="acc-two-img">
                <?php if (!empty($fc_image)) : ?>
                    <img src="<?php echo esc_url($fc_image['url']); ?>" alt="<?php echo esc_attr($fc_image['alt']); ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/overlap.png" alt="">
                <?php endif; ?>

                <?php if ($fc_link) : ?>
                    <div class="blue-btn style-btn">
                        <a href="<?php echo esc_url($fc_link['url']); ?>" target="<?php echo esc_attr($fc_link['target']); ?>">
                            <?php echo esc_html($fc_link['title']); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
