<?php
    $fc_title        = get_sub_field('fc_title');
    $fc_form_title   = get_sub_field('fc_form_title');
    $fc_contact_form = get_sub_field('fc_contact_form');

    $address = get_field('address', 'option');
    $address_copy = get_field('address_copy', 'option');
    $phone_number = get_field('phone_number', 'option');
    $email_link = get_field('email_link', 'option');
    $facebook_link = get_field('facebook_link', 'option');
    $instagram_link = get_field('instagram_link', 'option');
    $linkedin_link = get_field('linkedin_link', 'option');
    $youtube_link = get_field('youtube_link', 'option');
    $twitter_link = get_field('twitter_link', 'option');
?>

<div class="auto-container">
    <div class="row-gap dy-flex">
        <div class="col-two-colum">
            <?php if ($fc_title): ?>
                <h2><?php echo $fc_title; ?></h2>
            <?php endif; ?>
            <div class="info-box">
                <h6>Address:</h6>
                <p><?php echo $address ;  ?></p>
            </div>
            <div class="info-box last">
                <h6>Office Hours:</h6>
                <p><?php echo $address_copy ;  ?></p>
            </div>
            <?php 
            if( $email_link ): 
                $email_link_url = $email_link['url'];
                $email_link_title = $email_link['title'];
                $email_link_target = $email_link['target'] ? $email_link['target'] : '_self';
                ?>
            <div class="recepion-btn">
                <a href="<?php echo esc_url( $email_link_url ); ?>" target="<?php echo esc_attr( $email_link_target ); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/message.svg" alt=""><?php echo esc_html( $email_link_title ); ?></a>
            </div>
            <?php endif; ?>
            <?php 
            if( $phone_number ): 
                $phone_number_url = $phone_number['url'];
                $phone_number_title = $phone_number['title'];
                $phone_number_target = $phone_number['target'] ? $phone_number['target'] : '_self';
                ?>
            <div class="recepion-btn phone-btn">
                <a href="<?php echo esc_url( $phone_number_url ); ?>" target="<?php echo esc_attr( $phone_number_target ); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt=""><?php echo esc_html( $phone_number_title ); ?></a>
            </div>
            <?php endif; ?>
            <div class="social-icons">
                <ul>
                    <?php if($facebook_link): ?>
                    <li>
                        <a href="<?php echo $facebook_link ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a>
                    </li>
                    <?php endif; ?>
                    <?php if($instagram_link): ?>
                    <li>
                        <a href="<?php echo $instagram_link ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt=""></a>
                    </li>
                    <?php endif; ?>
                    <?php if($linkedin_link): ?>
                    <li>
                        <a href="<?php echo $linkedin_link ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-in.svg" alt=""></a>
                    </li>
                    <?php endif; ?>
                    <?php if($youtube_link): ?>
                    <li>
                        <a href="<?php echo $youtube_link ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" alt=""></a>
                    </li>
                    <?php endif; ?>
                    <?php if($twitter_link): ?>
                    <li>
                        <a href="<?php echo $twitter_link ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twiter.svg" alt=""></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="col-two-colum">
            <?php if ($fc_form_title): ?>
                <h3><?php echo $fc_form_title; ?></h3>
            <?php endif; ?>
            <?php echo $fc_contact_form; ?>
        </div>
    </div>
</div>