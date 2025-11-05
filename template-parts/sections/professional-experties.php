<?php
$title_exp = get_field('title_exp', 'option');
$sub_title_exp = get_field('sub_title_exp', 'option');
$content_exp = get_field('content_exp', 'option');
$button_exp = get_field('button_exp', 'option');
?> 

<div class="intersection-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sssee.png" alt="">
    </div>
    <div class="auto-container">
        <div class="row-main-ww dy-flex">
            <div class="same-col-ww wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
                <div class="inner">
                    <?php if(!empty($sub_title_exp)):?>
                    <div class="sub-heading">
                        <h5><?php echo $sub_title_exp; ?></h5>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($title_exp)):?>
                    <h2><?php echo $title_exp; ?></h2>
                    <?php endif; ?>
                    <?php if(!empty($content_exp)):?>
                    <p><?php echo $content_exp; ?></p>
                    <?php endif; ?>
                    <?php if(!empty($button_exp)):?>
                    <div class="btn-box dy-flex">
                        <div class="s-btn b-btn">
                            <a href="<?php echo $button_exp['url']; ?>" target="<?php echo $button_exp['target']; ?>">
                                <?php echo $button_exp['title']; ?>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="same-col-ww expertice-w wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s" style="visibility: visible; animation-duration: 2s; animation-delay: 1s; animation-name: fadeInUp;">
                <div class="p-e-main-boxes dy-flex">
                    <?php if(have_rows('professional_experties', 'option')):
                        while(have_rows('professional_experties', 'option')):  the_row(); 
                        $links_exp = get_sub_field('links_exp'); 
                    ?>
                    <div class="iner-box-ss">
                        <h3><?php echo $links_exp['title']; ?></h3>
                        <div class="e-p-arrw">
                            <a href="<?php echo $links_exp['url']; ?>" target="<?php echo $links_exp['target']; ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experise-arrow.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>