<?php
$fc_sub_title   = get_sub_field('fc_sub_title');
$fc_title       = get_sub_field('fc_title');
?>

<div class="auto-container">
        <div class="main-row dy-flex">
            <div class="col-left">
                <div class="inner-acc-content">
                    <?php if(!empty($fc_sub_title)):?>
                    <h6><?php echo $fc_sub_title ?></h6>
                    <?php endif; ?>
                    <?php if(!empty($fc_title)):?>
                    <h3><?php echo $fc_title ;  ?></h3>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-right">
                <div class="row-right-numbers dy-flex">
                    <?php
                    if(have_rows('fc_list_contents')):
                        while(have_rows('fc_list_contents')): the_row();
                        $main_title = get_sub_field('fc_list_title');
                        $main_text  = get_sub_field('fc_text');
                        $link       = get_sub_field('fc_button');
                    ?>
                    <div class="col-numbers">
                        <div class="inner">
                            <?php if(!empty($main_title)):?>
                            <h4><?php echo $main_title ;  ?></h4>
                            <?php endif; ?>
                            <?php if(!empty($main_text)): ?>
                            <p> <?php echo $main_text ;  ?> </p>
                            <?php endif; ?>
                            <?php 
                            if( $link): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <div class="theme-btn blacka">
                                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i class="fa-solid fa-plus"></i></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>