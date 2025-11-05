<?php
$fc_title   = get_sub_field('fc_title');
$fc_link    = get_sub_field('fc_link');

// Get properties from relationship field

?>

<div class="inner">
    <div class="auto-container">
        <div class="head-dream">
            <?php if ($fc_title): ?>
                <h2><?php echo $fc_title; ?></h2>
            <?php endif; ?>
        </div>
        <div class="tabs-defaut">
 <div class="tab-group">

    <div class="tab list--row">
        <?php 
        // Get selected taxonomy terms (from ACF taxonomy field)
        $terms = get_sub_field('add_properties_listings');
       
        ?>
        <ul>
            <?php
            if ($terms && is_array($terms)) {
                foreach ($terms as $term_id):
                    // Convert term ID to full term object
                    $term = get_term($term_id, 'selling-category');
                    if (!$term || is_wp_error($term)) continue;

                    $term_name = $term->name;
                    $term_slug = $term->slug;
                    ?>
                    <li class="tablinks"
                        onclick="openCity(event, '<?php echo esc_attr($term_slug); ?>', this)"
                        id="defaultOpen1">
                        <?php echo esc_html($term_name); ?>
                    </li>
                    <?php
                endforeach;
            }
            ?>
        </ul>
    </div>

    <div class="tab-ss">
        <?php
        if ($terms && is_array($terms)):
            foreach ($terms as $term_id):
                $term = get_term($term_id, 'selling-category');
                if (!$term || is_wp_error($term)) continue;

                $term_name = $term->name;
                $term_slug = $term->slug;
                ?>
                <div id="<?php echo esc_attr($term_slug); ?>" class="tabcontent">
                    <div class="dream-slider owl-carousel owl-theme">
                        <?php
                        // Query properties related to this taxonomy term
                        $args = array(
                            'post_type' => 'property',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'selling-category',
                                    'field'    => 'term_id',
                                    'terms'    => $term->term_id,
                                    'operator' => 'IN',
                                ),
                            ),
                            'posts_per_page' => -1,
                        );

                        $project_query = new WP_Query($args);
                        if ($project_query->have_posts()):
                            while ($project_query->have_posts()): $project_query->the_post();
                                ?>
                                <div class="item">
                                    <div class="box-property">
                                        <div class="inner-dream">
                                            <div class="for-sale">
                                                <span class="sale">For Rent</span>
                                                <span class="new-market">New to market!</span>
                                            </div>

                                            <div class="property-img-slider">
                                                <div class="dream-img-slider owl-carousel owl-theme">
                                                    <div class="item">
                                                        <div class="dream-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/overlap.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="dream-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/overlap.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content-property">
                                                <div class="dream-title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </div>
                                                <div class="location-dream">
                                                    <a href="#">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loaction.svg" alt="">
                                                        <?php echo esc_html(get_field('location_pr')); ?>
                                                    </a>
                                                </div>

                                                <div class="property-detail">
                                                    <div class="detail-box">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bed.svg" alt="">
                                                        <span><?php echo esc_html(get_field('beds_pr')); ?> Beds</span>
                                                    </div>
                                                    <div class="detail-box">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bath.svg" alt="">
                                                        <span><?php echo esc_html(get_field('bathrooms_pr')); ?> Bath</span>
                                                    </div>
                                                    <div class="detail-box">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-alt.svg" alt="">
                                                        <span><?php echo esc_html(get_field('garage_pr')); ?> Garage</span>
                                                    </div>
                                                </div>

                                                <div class="room-price">
                                                    <p>Per Week</p>
                                                    <span><?php echo esc_html(get_field('price_pr')); ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="blue-btn style-btn">
                                            <a href="<?php the_permalink(); ?>">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                        else:
                            echo '<p>No properties found in this category.</p>';
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php
            endforeach;
        endif;
        ?>
    </div>
</div>

        </div>


    </div>
</div>
<?php if ($fc_link): ?>
<div class="dream-btn">
    <div class="blue-btn style-btn">
        <a href="<?php echo $fc_link['url']; ?>" target="<?php echo $fc_link['target']; ?>"><?php echo $fc_link['title']; ?></a>
    </div>
</div>
<?php endif; ?>