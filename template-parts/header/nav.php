
      <?php if ( function_exists('acf_add_options_page') ):    
        $website_logo = get_field('website_logo', 'option');  
        $header_button = get_field('header_button', 'option');  
        $address = get_field('address', 'option');  
        $email_link = get_field('email_link', 'option');  
        $menu_text_1 = get_field('menu_text_1', 'option');  
        $menu_text_2 = get_field('menu_text_2', 'option');  
        $menu_text_3 = get_field('menu_text_3', 'option');  
        $linkedin_link = get_field('linkedin_link', 'option');  
        $instagram_link = get_field('instagram_link', 'option');  
        $twitter_link = get_field('twitter_link', 'option');  
        $dribble_link = get_field('dribble_link', 'option');  
        $behance_link = get_field('behance_link', 'option');  
        $facebook_link = get_field('facebook_link', 'option');  
      ?>
      <div class="container-auto">
        <div class="header__container">
          <?php if($website_logo): ?>
          <div class="header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo esc_url($website_logo['url']); ?>" alt="<?php echo esc_attr($website_logo['alt']); ?>"></a>
          </div>
          <?php endif; ?>
          <nav class="header__nav header__nav-hidden">
            <div class="header__close">
              <i class="fa-solid fa-xmark"></i>
            </div>
           
              <?php
              	wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_class'     => 'header__list',
                'container'      => false,
                'walker'         => new Custom_Nav_Walker(),
              )); 
              ?>
            
          </nav>
          <div class="header__btn">
              <?php 
              $header_button = get_field('header_button', 'option');
              if( $header_button ): 
                  $header_button_url = $header_button['url'];
                  $header_button_title = $header_button['title'];
                  $header_button_target = $header_button['target'] ? $header_button['target'] : '_self';
                  ?>
            <a href="<?php echo esc_url( $header_button_url ); ?>" target="<?php echo esc_attr( $header_button_target ); ?>"  class="btn btn--primary"><?php echo esc_html( $header_button_title ); ?></a>
            <?php endif; ?>
            <div class="header__menu bg-gradient-hvr">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>