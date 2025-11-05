<?php
    $fc_title        = get_sub_field('fc_title');
    $fc_button_1     = get_sub_field('fc_button_1');
    $fc_button_2     = get_sub_field('fc_button_2');
?>

<div class="auto-container">
    <div class="content-advice">
        <?php if(!empty($fc_title)): ?>
            <h2><?php echo $fc_title; ?></h2>
        <?php endif; ?>
    </div>
    <div class="advice-slider owl-carousel owl-theme">
<?php 
$posts = get_sub_field('hardware_slider'); // Relationship field
if ($posts):
    foreach ($posts as $post):
        setup_postdata($post);
        $image_url = get_the_post_thumbnail_url($post->ID, 'full');
        $categories = get_the_terms($post->ID, 'hardware_category');
        $specifications_hard = get_field('specifications_hard', $post->ID); // ✅ corrected field name
?>
    <div class="item">
        <div class="box--solar base">
            <div class="solar-img">
                <?php if ($image_url): ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                <?php endif; ?>
            </div>
            <div class="content-solar">
                <h6>
                    <?php 
                    if (!empty($categories) && !is_wp_error($categories)) {
                        echo esc_html($categories[0]->name); // Show first category
                    }
                    ?>
                </h6>
                <a href="<?php the_permalink(); ?>">
                    <h4><?php the_title(); ?></h4>
                </a>
                <p><?php echo esc_html($specifications_hard); ?></p> <!-- ✅ updated field -->
            </div>
        </div>
    </div>
<?php 
    endforeach; 
    wp_reset_postdata();
endif; 
?>

    </div>
    <div class="popt">
    <div class="popup--btn">
        <ul>
            <?php if(!empty($fc_button_1)):?>
            <li>
                <a href="<?php echo $fc_button_1['url']; ?>" target="<?php echo $fc_button_1['target']; ?>">
                    <?php echo $fc_button_1['title']; ?>
                </a>
            </li>
            <?php endif; ?>
            <?php if(!empty($fc_button_2)):?>
            <li>
                <a href="<?php echo $fc_button_2['url']; ?>" target="<?php echo $fc_button_2['target']; ?>">
                    <?php echo $fc_button_2['title']; ?>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    </div>
</div>