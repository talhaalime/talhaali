<?php
$fc_sub_title   = get_sub_field('fc_sub_title');
$terms = get_sub_field('add_hardware');
$fc_title   = get_sub_field('fc_title');
?>
<div class="auto-container">
    <div class="head-sec">
        <?php if ($fc_sub_title): ?>
            <div class="sub-heading">
                <h5><?php echo $fc_sub_title; ?></h5>
            </div>
        <?php endif; ?>
        <?php if ($fc_title): ?>
            <h2><?php echo $fc_title; ?></h2>
        <?php endif; ?>
    </div>
    <div class="hardware-slider same-nav owl-carousel owl-theme">
    <?php if( have_rows('add_hardware') ): ?>
        <?php while( have_rows('add_hardware') ): the_row(); 
            $fc_title     = get_sub_field('fc_title');
            $fc_content   = get_sub_field('fc_content');
            $fc_image     = get_sub_field('fc_image');
            $fc_link      = get_sub_field('fc_link');
        ?>
            <div class="item">
                <div class="box--hardware">
                    <div class="row--hard">
                        <!-- Left Content -->
                        <div class="col-h-content">
                            <?php if ($fc_title): ?>
                                <a href="<?php echo $fc_link; ?>"><h4><?php echo esc_html($fc_title); ?></h4></a>
                            <?php endif; ?>
                            
                            <?php if ($fc_content): ?>
                                <p><?php echo esc_html($fc_content); ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Right Image -->
                        <div class="col-h-bi">
                            <div class="h--img">
                                <?php if ($fc_image): ?>
                                    <img src="<?php echo esc_url($fc_image['url']); ?>" alt="<?php echo esc_attr($fc_title); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="btn--hard">
                            <?php if ($fc_link): ?>
                                <a href="<?php echo esc_url($fc_link); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="">
                                </a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

</div>