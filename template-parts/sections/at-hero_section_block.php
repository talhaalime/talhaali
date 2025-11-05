

    <section class="section--hero">
      <div class="hero">
        <div class="container-auto">
          <div class="hero__container">
            <div class="hero__content">
              <div class="heading--tertiary">
                <h3>Your Vision, My Design Expertise</h3>
              </div>
              <div class="heading--primary mt-18">
                <h1>
                  <span class="cl-gradient">I'm james,</span> product design
                  based in USA
                </h1>
              </div>
              <div class="hero__text mt-16">
                <p>
                  Hi, I’m James, a passionate Product Designer based in the USA.
                  I specialize in crafting intuitive, user-centered designs that
                  merge functionality with aesthetics, With a focus on creating
                  seamless digital experiences.
                </p>
              </div>
              <div class="hero__btns mt-24">
                <a href="#" class="btn btn--primary">get started </a>
              </div>
            </div>
            <div class="hero__imges">
              <div class="hero__img">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/hero-img.png.png" alt="hero imges" />
              </div>
              <div class="hero__bg-img">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/hero-img-bg-shape.png" alt="" />
              </div>
              <div class="hero__box hero__count">
                <span id="counter" min="0" max="8">5+</span>
                <p>years experiences</p>
              </div>
              <div class="hero__box hero__users">
                <p>real coustomer</p>
                <div class="hero__users-images">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-1.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-2.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-3.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-4.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-5.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<div class="banner-slider owl-carousel owl-theme">
    <?php if (have_rows('slider_bs')): ?>
        <?php while (have_rows('slider_bs')): the_row(); 
            $image = get_sub_field('images_bs');
            $title = get_sub_field('fc_title');
        ?> 
        
        <?php if (!empty($image)): ?>
            <div class="item bg" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                <div class="banner-container">
                    <div class="auto-container">
                        <?php if (!empty($title)): ?>
                            <h1><?php echo $title; ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php
    $fc_button   = get_sub_field('fc_button');
?>
<div class="banner-table">
    <div class="rent-sale-form">
        <form method="get" action="<?php echo esc_url(home_url('/our-properties')); ?>" id="propertyFilterForm">
            <div class="select-option-container">
                <!-- Property Type -->
                <div class="select-option" data-name="property_type">
                    <a href="#" class="select-option-toggle">Property Type</a>
                    <ul class="select-option-menu">
                        <?php
                        $property_types = get_terms(array(
                            'taxonomy'   => 'property-type',
                            'hide_empty' => false,
                        ));

                        if (!empty($property_types) && !is_wp_error($property_types)) :
                            foreach ($property_types as $type) :
                                $active_class = (isset($_GET['property_type']) && $_GET['property_type'] === $type->slug) ? 'active' : '';
                                ?>
                                <li>
                                    <a href="#" data-value="<?php echo esc_attr($type->slug); ?>" class="<?php echo esc_attr($active_class); ?>">
                                        <?php echo esc_html($type->name); ?>
                                    </a>
                                </li>
                            <?php
                            endforeach;
                        else :
                            echo '<li><span>No property types found</span></li>';
                        endif;
                        ?>
                    </ul>
                </div>

                <!-- Location -->
                <div class="select-option" data-name="location">
                    <a href="#" class="select-option-toggle">Location</a>
                    <ul class="select-option-menu">
                        <li><a href="#" data-value="yanchep">Yanchep</a></li>
                        <li><a href="#" data-value="guilderton">Guilderton</a></li>
                    </ul>
                </div>

                <!-- Min Price -->
                <div class="select-option" data-name="min_price">
                    <a href="#" class="select-option-toggle">Min Price</a>
                    <ul class="select-option-menu">
                        <li><a href="#" data-value="1000">$1,000</a></li>
                        <li><a href="#" data-value="3000">$3,000</a></li>
                    </ul>
                </div>

                <!-- Max Price -->
                <div class="select-option" data-name="max_price">
                    <a href="#" class="select-option-toggle">Max Price</a>
                    <ul class="select-option-menu">
                        <li><a href="#" data-value="1100000">$1,100,000</a></li>
                        <li><a href="#" data-value="1200000">$1,200,000</a></li>
                    </ul>
                </div>

                <div class="btn-search">
                    <button type="submit">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt="">
                    </button>
                </div>
                <!-- Hidden Inputs for GET -->
                <input type="hidden" name="property_type" id="property_type">
                <input type="hidden" name="location" id="location">
                <input type="hidden" name="min_price" id="min_price">
                <input type="hidden" name="max_price" id="max_price">
            </div>
        </form>

    </div>
    <div class="btn-recipt-banner">
        <?php if( !empty($fc_button) ): ?>
            <div class="recepion-btn phone-btn">
                <a href="<?php echo $fc_button['url'];?>" target="<?php echo $fc_button['target'];?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dollar-b.svg" alt="">
                    <?php echo $fc_button['title'];?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>