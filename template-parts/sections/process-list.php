<?php
$fc_sub_title   = get_sub_field('fc_sub_title');
$fc_title       = get_sub_field('fc_title');
$link           = get_sub_field('fc_button');
?>

<div class="auto-container">
        <div class="text-img-row dy-flex">
            <div class="col-left-text-img accor-da">
                <div class="content-acc">
                    <?php if(!empty($fc_sub_title)):?>
                    <h6><?php echo $fc_sub_title ?></h6>
                    <?php endif; ?>
                    <?php if(!empty($fc_title)):?>
                    <h3><?php echo $fc_title ;  ?></h3>
                    <?php endif; ?>
                </div>
                <div class="accordion-container" id="switch-images-title">
                    <?php 
                    $count = 1;
                    if(have_rows('fc_list_process')):
                        while(have_rows('fc_list_process')): the_row();
                        $question = get_sub_field('fc_list_title');
                        $answer   = get_sub_field('fc_text');
                    ?>
                    <?php if(!empty($question)):?>
                    <div class="accordion" data-image="Title <?php echo $count ?>"><?php echo $question ;  ?></div>
                    <?php endif; ?>
                    <?php if(!empty($answer)):?>
                    <div class="panel">
                        <p><?php echo $answer ;  ?></p>
                    </div>
                    <?php endif; ?>
                    <?php 
                   $count++;
                    endwhile;
                    endif; ?>
                </div>
                <?php 
                if( $link): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="theme-btn acc-btn-s b--a">
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i class="fa-solid fa-plus"></i></a>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-right-text-img">

                <div class="choos-us-images">
                    
                    <div id="switch-image-container">
                        <?php 
                        $count = 1;
                        if(have_rows('fc_list_process')):
                            while(have_rows('fc_list_process')): the_row();
                            $image_tit = get_sub_field('fc_images');
                        ?>
                        <img src="<?php echo esc_url($image_tit['url']); ?>" alt="<?php esc_attr($image_tit['alt']); ?>" class="image-here active"
                            data-title="Title <?php echo $count ;  ?>">
                            <?php 
                            $count++;
                            endwhile;
                            endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>