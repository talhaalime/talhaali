<?php
    $fc_title   = get_sub_field('fc_title');
    $fc_content_2   = get_sub_field('fc_content_2');
    $fc_content_1   = get_sub_field('fc_content_1');
    $fc_image   = get_sub_field('fc_image');
    $fc_link    = get_sub_field('fc_link');

    $fc_title_psd    = get_sub_field('fc_title_psd');
    $fc_text_psd    = get_sub_field('fc_text_psd');
    $fc_title_tsd    = get_sub_field('fc_title_tsd');
    $fc_text_tsd    = get_sub_field('fc_text_tsd');
    $fc_title_ovd    = get_sub_field('fc_title_ovd');
    $fc_text_ovd    = get_sub_field('fc_text_ovd');
?>

<div class="auto-container">
    <div class="row-agency-counter dy-flex">
        <div class="col-agency-counter-img">
            <?php if(!empty($fc_image)): ?>
                <div class="counter-img">
                    <img src="<?php echo $fc_image['url']; ?>" alt="<?php echo $fc_image['alt']; ?>">
                </div>
            <?php endif; ?>
            <?php if(!empty($fc_link)): ?>
                <div class="recepion-btn phone-btn">
                    <a href="<?php echo $fc_link['url']; ?>" target="<?php echo $fc_link['target']; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dollar.svg" alt="">
                        <?php echo $fc_link['title']; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-agency-counter">
            <?php if ($fc_title): ?>
                <h2><?php echo $fc_title; ?></h2>
            <?php endif; ?>
            <div class="counter-text">
                <div class="row-gap dy-flex">
                    <div class="col-two-colum">
                        <?php echo $fc_content_1; ?>
                    </div>
                    <div class="col-two-colum">
                        <?php echo $fc_content_2; ?>
                    </div>
                </div>
            </div>

            <div class="counter-section">
                <div class="counter-box">
                    <?php if(!empty($fc_title_psd)): ?>
                    <div class="row-counter-text">
                        <div class="counter4" data-countto="<?php echo $fc_title_psd; ?>" data-duration="3000">0</div><span>+</span>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($fc_text_psd)): ?>
                    <p><?php echo $fc_text_psd; ?></p>
                    <?php endif; ?>
                </div>

                <div class="counter-box">
					<?php if(!empty($fc_title_tsd)): ?>
                    <div class="row-counter-text">
                        <span>$</span>
                        <div class="counter4" data-countto="<?php echo $fc_title_tsd; ?>" data-duration="2000">0</div><span>m</span>
                    </div>
					<?php endif; ?>
                    <?php if(!empty($fc_text_tsd)): ?>
                    <p><?php echo $fc_text_tsd; ?></p>
                    <?php endif; ?>
                </div>

                <div class="counter-box">
					<?php if(!empty($fc_title_ovd)): ?>
                    <div class="row-counter-text">
                        <span>$</span>
                        <div class="counter4" data-countto="<?php echo $fc_title_ovd; ?>" data-duration="3000">0</div><span>m</span>
                    </div>
					<?php endif; ?>
                    <?php if(!empty($fc_text_ovd)): ?>
                    <p><?php echo $fc_text_ovd; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>