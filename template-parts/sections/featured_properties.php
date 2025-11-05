<?php
$fc_title   = get_sub_field('fc_title');
$fc_content = get_sub_field('fc_content');
$fc_link    = get_sub_field('fc_link');

// Get properties from relationship field
$properties = get_sub_field('add_featured_properties'); // Relationship field
?>

<div class="inner">
    <div class="auto-container">
        <div class="head-dream">
            <?php if ($fc_title): ?>
                <h2><?php echo esc_html($fc_title); ?></h2>
            <?php endif; ?>
            <?php if ($fc_content): ?>
                <p><?php echo esc_html($fc_content); ?></p>
            <?php endif; ?>
        </div>

        <?php if( $properties ): ?>
        <div class="row-featured dy-flex">
            <?php foreach( $properties as $property ):
                $property_id = is_object($property) ? $property->ID : $property;
                
                $title          = get_the_title($property_id);
                $permalink      = get_permalink($property_id);
                $pricing_pr     = get_field('pricing_pr', $property_id);
                $pricing_select = get_field('pricing_select', $property_id);
                $location       = get_field('location_pr', $property_id);
                $beds           = get_field('beds_pr', $property_id);
                $baths          = get_field('bath_pr', $property_id);
                $garage         = get_field('garage_pr', $property_id);
			    $parking         = get_field('parking_pr', $property_id);
            ?>
            <div class="col-feattured">
                <div class="box-property">
                    <div class="inner-dream">
                        <div class="for-sale">
                            <?php if ($pricing_select): ?>
                                <span class="sale"><?php echo esc_html($pricing_select); ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="row-property-dream">
                            <div class="property-img-slider">
                                <div class="dream-img-slider owl-carousel owl-theme">
                                    <?php 
                                    $has_images = false;

                                    // ✅ ACF repeater images
                                    if (have_rows('image_slider', $property_id)):
                                        while (have_rows('image_slider', $property_id)): the_row();
                                            $add_image = get_sub_field('add_image');
                                            if ($add_image):
                                                $has_images = true; ?>
                                                <div class="item">
                                                    <div class="dream-img">
                                                        <img src="<?php echo esc_url($add_image['url']); ?>" alt="<?php echo esc_attr($title); ?>">
                                                    </div>
                                                </div>
                                            <?php endif;
                                        endwhile;
                                    endif;

                                    // ✅ Featured image
                                    if (has_post_thumbnail($property_id)):
                                        $featured_url = get_the_post_thumbnail_url($property_id, 'full'); ?>
                                        <div class="item">
                                            <div class="dream-img">
                                                <img src="<?php echo esc_url($featured_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="content-property">
                                <div class="dream-title">
                                    <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                                </div>

                                <?php if ($location): ?>
                                <div class="location-dream">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loaction.svg" alt="">
                                        <?php echo esc_html($location); ?>
                                    </a>
                                </div>
                                <?php endif; ?>

                                <div class="property-detail">
                                    <?php if ($beds): ?>
                                    <div class="detail-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bed.svg" alt="">
                                        <span><?php echo esc_html($beds); ?> Beds</span>
                                    </div>
                                    <?php endif; ?>

                                    <?php if ($baths): ?>
                                    <div class="detail-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bath.svg" alt="">
                                        <span><?php echo esc_html($baths); ?> Bath</span>
                                    </div>
                                    <?php endif; ?>

                                    <?php if ($garage): ?>
                                    <div class="detail-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-alt.svg" alt="">
                                        <span><?php echo esc_html($garage); ?> Garage</span>
                                    </div>
                                    <?php endif; ?>
									
									<?php if ($parking): ?>
                                    <div class="detail-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-alt.svg" alt="">
                                        <span><?php echo esc_html($parking); ?> Parking</span>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="description-dream">
                                    <?php echo apply_filters('the_content', get_post_field('post_content', $property_id)); ?>
                                </div>
                                <?php if ($pricing_pr && $pricing_select): ?>
                                <div class="room-price">
                                    <?php 
                                    if ($pricing_select == 'For Rent') {
                                        echo '<p>Per Week</p>';
                                        echo '<span>$' . number_format($pricing_pr) . '</span>';
                                    } elseif ($pricing_select == 'Under Offer') {
                                        echo '<p class="offers-from">Offers From</p>';
                                        echo '<span>$' . number_format($pricing_pr) . '</span>';
                                    } elseif ($pricing_select == 'For Sale') {
                                        echo '<p></p><span>$' . number_format($pricing_pr) . '+</span>';
                                    }
                                    ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="blue-btn style-btn">
                        <a href="<?php echo esc_url($permalink); ?>">View Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <p>No properties found.</p>
        <?php endif; ?>
    </div>
</div>

<?php if ($fc_link): ?>
<div class="dream-btn btn-over-lap">
    <div class="blue-btn style-btn">
        <a href="<?php echo esc_url($fc_link['url']); ?>" target="<?php echo esc_attr($fc_link['target']); ?>">
            <?php echo esc_html($fc_link['title']); ?>
        </a>
    </div>
</div>
<?php endif; ?>
