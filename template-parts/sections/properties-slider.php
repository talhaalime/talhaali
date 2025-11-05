<?php
$fc_title   = get_sub_field('fc_title');
$fc_content = get_sub_field('fc_content');
$fc_link    = get_sub_field('fc_link');

// Get properties from relationship field
$properties = get_sub_field('add_properties_slider'); // Post Object format
?>

<div class="inner">
    <div class="auto-container">
        <div class="head-dream">
            <?php if ($fc_title): ?>
                <h2><?php echo $fc_title; ?></h2>
            <?php endif; ?>
            <?php if ($fc_content): ?>
                <p><?php echo $fc_content; ?></p>
            <?php endif; ?>
        </div>

        <?php if ($properties): ?>
        <div class="dream-slider owl-carousel owl-theme">
            <?php foreach ($properties as $property):
                $property_id   = is_object($property) ? $property->ID : $property;

                $pricing_pr     = get_field('pricing_pr', $property_id);
                $pricing_select = get_field('pricing_select', $property_id);
                $address        = get_field('location_pr', $property_id);
                $bedrooms       = get_field('beds_pr', $property_id);
                $bathrooms      = get_field('bath_pr', $property_id);
                $garage         = get_field('garage_pr', $property_id);
				$parking         = get_field('parking_pr', $property_id);
                $market_field   = get_field('market_field', $property_id);

                $images = array();

                // ✅ Repeater images
                if (have_rows('image_slider', $property_id)):
                    while (have_rows('image_slider', $property_id)): the_row();
                        $add_image = get_sub_field('add_image');
                        if ($add_image) $images[] = $add_image;
                    endwhile;
                endif;

                // ✅ Featured image
                if (has_post_thumbnail($property_id)):
                    $images[] = array('url' => get_the_post_thumbnail_url($property_id, 'full'));
                endif;
            ?>
            <div class="item">
                <div class="box-property">
                    <div class="inner-dream">
                        <?php if($pricing_select || ($market_field && $market_field != 'None')): ?>
                        <div class="for-sale">
                            <?php if ($pricing_select): ?>
                                <span class="sale"><?php echo esc_html($pricing_select); ?></span>
                            <?php endif; ?>
                            <?php if ($market_field && $market_field != 'None'): ?>
                                <span class="new-market"><?php echo esc_html($market_field); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <?php if($images): ?>
                        <div class="property-img-slider">
                            <div class="dream-img-slider owl-carousel owl-theme">
                                <?php foreach($images as $img): ?>
                                <div class="item">
                                    <div class="dream-img">
                                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr(get_the_title($property_id)); ?>">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php else: ?>
                            <div class="dream-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/overlap.png" alt="<?php echo esc_attr(get_the_title($property_id)); ?>">
                            </div>
                        <?php endif; ?>

                        <div class="content-property">
                            <div class="dream-title">
                                <a href="<?php echo get_permalink($property_id); ?>"><?php echo get_the_title($property_id); ?></a>
                            </div>

                            <?php if ($address): ?>
                            <div class="location-dream">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/loaction.svg" alt=""><?php echo esc_html($address); ?></a>
                            </div>
                            <?php endif; ?>

                            <div class="property-detail">
                                <?php if ($bedrooms): ?>
                                <div class="detail-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bed.svg" alt=""><span><?php echo esc_html($bedrooms); ?> Beds</span>
                                </div>
                                <?php endif; ?>
                                <?php if ($bathrooms): ?>
                                <div class="detail-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bath.svg" alt=""><span><?php echo esc_html($bathrooms); ?> Bath</span>
                                </div>
                                <?php endif; ?>
                                <?php if ($garage): ?>
                                <div class="detail-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-alt.svg" alt=""><span><?php echo esc_html($garage); ?> Garage</span>
                                </div>
                                <?php endif; ?>
								
								<?php if ($parking): ?>
                                <div class="detail-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-alt.svg" alt=""><span><?php echo esc_html($parking); ?> Parking</span>
                                </div>
                                <?php endif; ?>
                            </div>

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
                        </div>
                    </div>

                    <div class="blue-btn style-btn">
                        <a href="<?php echo get_permalink($property_id); ?>">View Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <?php else: ?>
            <p>No properties found.</p>
        <?php endif; ?>
    </div>
</div>

<?php if ($fc_link): ?>
<div class="dream-btn">
    <div class="blue-btn style-btn">
        <a href="<?php echo $fc_link['url']; ?>" target="<?php echo $fc_link['target']; ?>"><?php echo $fc_link['title']; ?></a>
    </div>
</div>
<?php endif; ?>
