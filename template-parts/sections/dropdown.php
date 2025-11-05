<?php
$fc_title = get_sub_field('fc_title');
$fc_text = get_sub_field('fc_text');
$fc_link = get_sub_field('fc_link');
?>


<div class="auto-container">
    <div class="row-gap dy-flex">
        <div class="col-half-colum">
            <?php if(!empty($fc_title)): ?>
            <h3 class="fl-titles"><?php echo $fc_title ; ?></h3>
            <?php endif; ?>
            <?php if(!empty($fc_text)): ?>
                <?php echo $fc_text ;  ?>
            <?php endif; ?>
            <?php if( !empty($fc_link) ): ?>
                <div class="orange-btn style-btn">
                    <a href="<?php echo $fc_link['url'];?>" target="<?php echo $fc_link['target'];?>">
                        <?php echo $fc_link['title'];?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-half-second-colum">
            <div class="accordian-box">
                <div class="accordion-container">
                    <?php if ( have_rows('accordion_content') ) : 
                        $i = 0;
                        while ( have_rows('accordion_content') ) : the_row();
                            $question  = get_sub_field('fc_title1');
                            $answer    = get_sub_field('fc_text1');
                            $fc_link = get_sub_field('fc_link');
                    ?>
                        <div class="main-acc">
                            <?php if ( !empty($question) ) : ?>
                                <div class="accordions <?php echo ($i === 0) ? 'active' : ''; ?>">
                                    <?php echo $question; ?>
                                </div>
                            <?php endif; ?>

                            <div class="panel" <?php echo ($i === 0) ? 'style="display:block;"' : ''; ?>>
                                <div class="inner">
                                    <?php if ( !empty($answer) ) : ?>
                                        <p><?php echo $answer; ?></p>
                                    <?php endif; ?>

                                    <?php if ( $fc_link && !empty($fc_link['url']) ) : ?>
                                        <div class="blue-btn style-btn">
                                            <a href="<?php echo esc_url($fc_link['url']); ?>" 
                                            target="<?php echo esc_attr($fc_link['target'] ?: '_self'); ?>">
                                                <?php echo esc_html($fc_link['title']); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php 
                        $i++;
                        endwhile;
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>