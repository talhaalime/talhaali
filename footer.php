<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talha-ali
 */

 if ( function_exists('acf_add_options_page') ):    
 $fc_footer_logo = get_field('fc_footer_logo', 'option');  
  $fc_top_title_footer = get_field('fc_top_title_footer', 'option');  
  $fc_top_footer_content = get_field('fc_top_footer_content', 'option');  
  $fc_footer_description = get_field('fc_footer_description', 'option');  
  $menu_text_1 = get_field('menu_text_1', 'option');  
  $menu_text_2 = get_field('menu_text_2', 'option');  
  $menu_text_3 = get_field('menu_text_3', 'option');  
  $linkedin_link = get_field('linkedin_link', 'option');  
  $instagram_link = get_field('instagram_link', 'option');  
  $twitter_link = get_field('twitter_link', 'option');  
  $dribble_link = get_field('dribble_link', 'option');  
  $behance_link = get_field('behance_link', 'option');  
  $facebook_link = get_field('facebook_link', 'option');  

  endif;
?>
    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  FOOTER          : START      │
  └─────────────────────────────────────────────┘
  -->

    <footer class="footer bg-gradient">
      <div class="container-auto">
        <div class="footer__head">
          <div class="footer__text">
            <?php if($fc_top_title_footer): ?>
            <div class="footer__heading">
              <h2><?php echo esc_html($fc_top_title_footer); ?></h2>
            </div>
            <?php endif; ?>
            <?php if($fc_top_footer_content): ?>
            <div class="heading--secondary-sm">
              <h2>
                <?php echo esc_html($fc_top_footer_content); ?>
              </h2>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="footer__container">
          <div class="footer__item">
            <?php if($fc_footer_logo): ?>
            <div class="footer__logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url($fc_footer_logo['url']); ?>" alt="footer logo"></a>
            </div>
            <?php endif; ?>
            <?php if($fc_footer_description): ?>
            <div class="text mt-[2.2rem]">
              <p>
                <?php echo esc_html($fc_footer_description); ?>
              </p>
            </div>
              <?php endif; ?>
            <div class="footer__icons mt-[2.2rem]">
              <?php if($dribble_link): ?>
              <div class="footer__icon">
                <a href="<?php echo esc_url($dribble_link); ?>"> <i class="fa-light fa-basketball"></i></a>
              </div>
              <?php endif; ?>
              <?php if($facebook_link): ?>
              <div class="footer__icon">
                <a href="<?php echo esc_url($facebook_link); ?>"> <i class="fa-brands fa-facebook-f"></i></a>
              </div>
              <?php endif; ?>   
              <?php if($instagram_link): ?>
              <div class="footer__icon">
                <a href="<?php echo esc_url($instagram_link); ?>"> <i class="fa-brands fa-instagram"></i></a>
              </div>
              <?php endif; ?>
              <?php if($linkedin_link): ?>    
              <div class="footer__icon">
                <a href="<?php echo esc_url($linkedin_link); ?>"> <i class="fa-brands fa-linkedin-in"></i></a>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="footer__item">
            <?php if($menu_text_1): ?>
            <div class="heading--secondary-sm">
              <h2><?php echo esc_html($menu_text_1); ?></h2>
            </div>
            <?php endif; ?>
            <div class="footer__links f-sb text-cp">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-2',
                  'menu_class'     => '',
                  'container'      => false,
                )
              );
              ?>
            </div>
          </div>
          <div class="footer__item">
            <?php if($menu_text_2): ?>
            <div class="heading--secondary-sm">
              <h2><?php echo esc_html($menu_text_2); ?></h2>
            </div>
            <?php endif; ?>
            <div class="footer__links f-sb text-cp">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-3',
                  'menu_class'     => '',
                  'container'      => false,
                )
              );
              ?>
            </div>
          </div>
          <div class="footer__item">
            <?php if($menu_text_3): ?>
            <div class="heading--secondary-sm">
              <h2><?php echo esc_html($menu_text_3); ?></h2>
            </div>
            <?php endif; ?>
            <div class="footer__links f-sb text-cp">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-4',
                  'menu_class'     => '',
                  'container'      => false,
                )
              );
              ?>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--
  ┌─────────────────────────────────────────────┐
  │        * ADD SCRIPT JS FILES                │
  └─────────────────────────────────────────────┘
  -->

<?php wp_footer(); ?>

</body>
</html>
