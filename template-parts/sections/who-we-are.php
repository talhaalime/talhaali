<?php
    $fc_sub_title        = get_sub_field('fc_sub_title');
    $fc_title        = get_sub_field('fc_title');
    $fc_content        = get_sub_field('fc_content');
    $fc_button_1         = get_sub_field('fc_button_1');
    $fc_button_2       = get_sub_field('fc_button_2');
    $fc_button_3       = get_sub_field('fc_button_3');
?>
<div class="shap-layer-b">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Intersection-shape.png" alt="">
    </div>
    <div class="auto-container">
        <div class="row-main-ww dy-flex">
            <div class="same-col-ww wow fadeInUp" data-wow-duration="2s">
                <div class="inner">
                    <?php if($fc_sub_title): ?>
                    <div class="sub-heading">
                        <h5><?php echo $fc_sub_title ;  ?></h5>
                    </div>
                    <?php endif; ?>
                    <?php if($fc_title): ?>
                    <h2><?php echo $fc_title ; ?></h2>
                    <?php endif; ?>
                    <?php if($fc_content): ?>
                    <?php echo $fc_content ; ?>
                    <?php endif; ?>
                    <div class="btn-box dy-flex">
                        <?php 
                        if( $fc_button_1): 
                        $fc_button_1_url = $fc_button_1['url'];
                        $fc_button_1_title = $fc_button_1['title'];
                        $fc_button_1_target = $fc_button_1['target'] ? $fc_button_1['target'] : '_self';
                        ?>
                        <div class="s-btn bg-btn">
                            <a href="<?php echo esc_url( $fc_button_1_url ); ?>" target="<?php echo esc_attr( $fc_button_1_target ); ?>">
                                <?php echo esc_html( $fc_button_1_title ); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php 
                        if( $fc_button_2): 
                        $fc_button_2_url = $fc_button_2['url'];
                        $fc_button_2_title = $fc_button_2['title'];
                        $fc_button_2_target = $fc_button_2['target'] ? $fc_button_2['target'] : '_self';
                        ?>
                        <div class="s-btn b-btn">
                            <a href="<?php echo esc_url( $fc_button_2_url ); ?>" target="<?php echo esc_attr( $fc_button_2_target ); ?>">
                                <?php echo esc_html( $fc_button_2_title ); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php 
                        if( $fc_button_3): 
                        $fc_button_3_url = $fc_button_3['url'];
                        $fc_button_3_title = $fc_button_3['title'];
                        $fc_button_3_target = $fc_button_3['target'] ? $fc_button_3['target'] : '_self';
                        ?>
                        <div class="s-btn indigo-btn">
                            <a href="<?php echo esc_url( $fc_button_3_url ); ?>" target="<?php echo esc_attr( $fc_button_3_target ); ?>">
                                <?php echo esc_html( $fc_button_3_title ); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="same-col-ww wow fadeInUp" data-wow-duration="2s"  data-wow-delay="1s">
                <div class="inner-w">
                    <div class="row-are-w dy-flex">
                        <?php
                        if(have_rows('fc_detail_boxes')):
                            while(have_rows('fc_detail_boxes')):  the_row();
                            $title        = get_sub_field('fc_title');
                            $image         = get_sub_field('fc_image');
                            $content       = get_sub_field('fc_content');
                            $fc_link       = get_sub_field('fc_link');
                        ?>
                        <div class="col-are-w">
                            <div class="box--software">
                                <div class="box--software-img">
                                    <img src="<?php echo $image['url']; ?>" alt="">
                                </div>
                                <div class="content--box-soft">
                                    <a href="<?php echo $fc_link; ?>">
                                        <h4><?php echo $title; ?></h4>
                                    </a>
                                    <p><?php echo $content; ?></p>
                                    <?php if(!empty($fc_link)): ?>
                                        <div class="btn-soft">
                                            <a href="<?php echo $fc_link ;?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>