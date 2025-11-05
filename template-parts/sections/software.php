<?php
$fc_sub_title   = get_sub_field('fc_sub_title');
$featured_posts   = get_sub_field('add_softwares');
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
    <?php 
    if( $featured_posts ): ?>
        <div class="software-slider same-nav white-nav owl-carousel owl-theme">
            <?php foreach( $featured_posts as $post ): 
                setup_postdata($post);
                $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'full');
            ?>
            <div class="item">
                <div class="box--software">
                    <div class="box--software-img">
                        <?php if ($thumbnail_url): ?>
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="content--box-soft">
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                        <div class="btn-soft">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php endif; ?>

</div>