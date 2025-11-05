<?php
$thisID = get_the_ID();
$icon_counter = 1;
?>
<?php
// Check value exists.
$thisID = '';
if( is_page() ){
  $thisID = get_option('page_for_posts');
}
?>
<div class="general-content-cntlr">
  <?php 
  if( have_rows('general_content', $thisID) ): 
  // Loop through rows.
  $counter = 1;
  while ( have_rows('general_content', $thisID) ) : the_row();


  if( get_row_layout() == 'full_width_block' ){ 
  $fc_title = get_sub_field('fc_title');
  $fc_text = get_sub_field('fc_text');
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');;
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="same-about-typo grey same-padding wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="3s">
    <?php get_template_part( 'template-parts/sections/full-width' ); ?> 
      <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> .fl-title{
        <?php if(!empty($fc_text_color)) printf('color:%s;', $fc_text_color);?>
        
      }
      .fl-sec-crtl-<?php echo $counter; ?> .fl-text p{
        <?php if(!empty($fc_content_color)) printf('color:%s;', $fc_content_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'90px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'58px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'30px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'90px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'58px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'30px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'90px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'58px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'30px'; ?>; 
        }
      }
    </style>  
  </section>
  <?php }else if( get_row_layout() == 'full_width_gradient_block'){ 
    $fc_title = get_sub_field('fc_title');
    $fc_text = get_sub_field('fc_text');
    $pd = get_sub_field('padding');
    $mrg = get_sub_field('margin');;
    $fc_text_color = get_sub_field('text_color');
    $fc_content_color = get_sub_field('content_color');
    $background_option = get_sub_field('select_background_color');
    $block_id = get_sub_field('block_id');
    $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
    ?>
  <section class="same-about-typo same-padding wow fadeInUp <?php echo $background_option; ?> fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="3s">
    <?php get_template_part( 'template-parts/sections/full-width-gradient' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> .fl-title{
        <?php if(!empty($fc_text_color)) printf('color:%s;', $fc_text_color);?>
        
      }
      .fl-sec-crtl-<?php echo $counter; ?> .fl-text p{
        <?php if(!empty($fc_content_color)) printf('color:%s;', $fc_content_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'82px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'68px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'30px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'60px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'60px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'30px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'50px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'50px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'30px'; ?>; 
        }
      }
    </style>  
  </section>
    
  <?php }else if( get_row_layout() == '2_columns_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="two-colum same-about-typo wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/2-column' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'48px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'48px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'48px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>

  <?php }else if( get_row_layout() == '3_columns_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="two-colum same-about-typo wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/3-column' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'67px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }

      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'67px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'67px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'banner_slider_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="hero-banner fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/banner-slider' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'0px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'0px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'0px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'text_13+23_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="two-colum same-about-typo wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/1-3+2-3' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'74px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'74px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'74px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'text_23+13_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="three-reverse-colum same-about-typo wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/2-3+1-3' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'78px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'78px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'78px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == '4_column_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="three-colum same-about-typo same-padding-colum wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/4-column' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'78px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'78px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'78px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'breakout_text_12_column' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="break-out wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/breakout-text-12-column' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'152px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'120px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'title_breakout_text' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section  class="quote-sec wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/breakout-text' ); ?>    
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'105px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'title_breakout_text_2' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>

  <section class="quote-sec wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/breakout-text-2' ); ?>    
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'46px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'46px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'50px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'46px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'accordion_dropdown_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="accordian-sec wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/dropdown' ); ?> 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'120px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == '12_text+image_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_select_image_postition = get_sub_field('fc_select_image_postition');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="img-text <?php if($fc_select_image_postition === "Right"): ?>reverse-row <?php endif; ?>wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/image-text' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'93px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'60px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'breakout_text_12_column_image' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="over-img-sec la-p wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/breakout-text-image' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'108px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'120px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'327px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'60px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'60px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'127px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'60px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'60px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'127px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == '13_text+image_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_select_image_postition = get_sub_field('fc_select_image_postition');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="two-img-text <?php if($fc_select_image_postition === "Right"): ?>reverse-row-two <?php endif; ?>wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/image-text-2' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'110px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'60px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'image_text_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $fc_select_image_position = get_sub_field('fc_select_image_position');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="full-width-img-text <?php if($fc_select_image_position === "Right"): ?>reverse-row-full <?php endif; ?>wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>" <?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/image-text-block' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> .col-text-full {
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> .col-text-full .fl-title,
      .fl-sec-crtl-<?php echo $counter; ?> .col-text-full .fl-text p {
        <?php if(!empty($fc_text_color)) printf('color:%s;', $fc_text_color);?>
        
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'18px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'18px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'18px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'text_over_image_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="over-img-text-sec wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/text-over' ); ?>
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'131px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'110px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'90px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
  <?php }else if( get_row_layout() == 'full_width_image_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_image = get_sub_field('fc_image');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="full-img-box wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <img src="<?php echo $fc_image['url'];?>" alt="<?php echo $fc_image['alt'];?>">
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'109px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
  <?php }else if( get_row_layout() == 'process_video_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="full-img-box wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/process-video' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'109px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'image_gallery_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="counter-same-slider gallery-sec <?php if (is_singular('project')): ?> bg-light-grey <?php endif; ?>  wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
    <?php get_template_part( 'template-parts/sections/image-gallery' ); ?>
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'0px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'50px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'0px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'50px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'0px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'50px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
  </section>
  <?php }else if( get_row_layout() == 'order_unorder_list_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="order-list wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/order+unorder-list' ); ?>
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'93px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'60px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'contact_form_block' ){
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="about-contact fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s" style="visibility: visible; animation-duration: 3s; animation-name: fadeInUp;">
        <?php get_template_part( 'template-parts/sections/contact-form' ); ?>
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'135px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'properties_area_section_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="estate-agency wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/properties-area' ); ?>
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'110px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
  <?php }else if( get_row_layout() == 'properties_slider_section_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="dream-home shape-bottm wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>" <?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/properties-slider' ); ?>
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'104px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'60px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'team_members_listings' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="dream-home wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>" <?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/team_members_listings' ); ?>
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'104px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'60px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'about_section_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="estate-agency-counter wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/about-section' ); ?>
 
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'135px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'featured_properties_section_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="dream-home faetured-sec wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/featured_properties' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'123px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'icon_list_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="help-us wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/icon-list' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'123px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'faq_section_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="acc-two-sec wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/faq-section' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'135px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'reviews_section-block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $select_color = get_sub_field('select_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="people-say <?php echo $select_color; ?> wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/reviews-section' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'130px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'feeds_section_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="facebook-img wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/feeds-section' ); ?>
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'105px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'100px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
    <?php }else if( get_row_layout() == 'our_clients_slider_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $fc_text_color = get_sub_field('text_color');
  $fc_content_color = get_sub_field('content_color');
  $fc_sec_bg_color = get_sub_field('sec_bg_color');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>

  <section class="community-sec wow fadeInUp fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s">
  <?php get_template_part( 'template-parts/sections/logo-slider' ); ?>    
    <style type="text/css">
      .fl-sec-crtl-<?php echo $counter; ?>{
        <?php if(!empty($fc_sec_bg_color)) printf('background:%s;', $fc_sec_bg_color); ?>
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'100px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'0px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
      }
      @media(max-width: 1023px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
        }
      }
      @media (max-width: 767px){
        .fl-sec-crtl-<?php echo $counter; ?> {
          padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'80px'; ?>;
          padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'0px'; ?>; 
        }
        .fl-sec-crtl-<?php echo $counter; ?> {
          margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
          margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
        }
      }
    </style> 
    </section>
  <?php } else if( get_row_layout() == 'softwares_block' ){ 
  $pd = get_sub_field('padding');
  $mrg = get_sub_field('margin');
  $block_id = get_sub_field('block_id');
  $blockID = !empty($block_id)?' id="'.$block_id.'"':'';
  ?>
  <section class="fl-sec-crtl-<?php echo $counter; ?>"<?php echo $blockID; ?> data-wow-duration="2s" style="visibility: visible; animation-duration: 3s; animation-name: fadeInUp;">
  <?php get_template_part( 'template-parts/sections/software-block' ); ?>

  <style type="text/css">
    .fl-sec-crtl-<?php echo $counter; ?> {
      padding-top:<?php echo !empty(mrgpd_top($pd['desktop']))?mrgpd_top($pd['desktop']):'0px'; ?>;
      padding-bottom:<?php echo !empty(mrgpd_btm($pd['desktop']))?mrgpd_btm($pd['desktop']):'90px'; ?>; 
    }
    .fl-sec-crtl-<?php echo $counter; ?> {
      margin-top:<?php echo !empty(mrgpd_top($mrg['desktop']))?mrgpd_top($mrg['desktop']):'0px'; ?>;
      margin-bottom:<?php echo !empty(mrgpd_btm($mrg['desktop']))?mrgpd_btm($mrg['desktop']):'0px'; ?>; 
    }
    @media(max-width: 1023px){
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['tablet']))?mrgpd_top($pd['tablet']):'0px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['tablet']))?mrgpd_btm($pd['tablet']):'60px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['tablet']))?mrgpd_top($mrg['tablet']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['tablet']))?mrgpd_btm($mrg['tablet']):'0px'; ?>; 
      }
    }
    @media (max-width: 767px){
      .fl-sec-crtl-<?php echo $counter; ?> {
        padding-top:<?php echo !empty(mrgpd_top($pd['mobile']))?mrgpd_top($pd['mobile']):'0px'; ?>;
        padding-bottom:<?php echo !empty(mrgpd_btm($pd['mobile']))?mrgpd_btm($pd['mobile']):'40px'; ?>; 
      }
      .fl-sec-crtl-<?php echo $counter; ?> {
        margin-top:<?php echo !empty(mrgpd_top($mrg['mobile']))?mrgpd_top($mrg['mobile']):'0px'; ?>;
        margin-bottom:<?php echo !empty(mrgpd_btm($mrg['mobile']))?mrgpd_btm($mrg['mobile']):'0px'; ?>; 
      }
    }
  </style> 
  </section>
    <?php } ?>
  <?php
  $counter++;
  endwhile; 
  endif; 
  ?>