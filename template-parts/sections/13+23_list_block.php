<?php
$fc_title = get_sub_field('fc_title');
$fc_text = get_sub_field('fc_text');
?>
<div class="auto-container">
    <div class="row-half-col dy-flex">
        <div class="col-h-left">
            <?php if(!empty($fc_title)): ?>
            <h3 class="fl-titles"><?php echo $fc_title ; ?></h3>
            <?php endif; ?>
            <?php if(!empty($fc_text)): ?>
                <div class="f1-texts">
                    <?php echo $fc_text ;  ?>
                </div>    
            <?php endif; ?>
        </div>
        <div class="col-h-right">
            <div class="list-xxx">
                <?php if(have_rows('fc_list_details')):
                    while (have_rows('fc_list_details')): the_row();
                    $fc_title = get_sub_field('fc_title');
                    $fc_text = get_sub_field('fc_text');
                ?>
                <h6>
                    <?php if(!empty($fc_title)): ?>
                    <span><?php echo $fc_title; ?></span>
                    <?php endif; ?>
                    <?php if(!empty($fc_text)): ?>
                    <span><?php echo $fc_text; ?></span>
                    <?php endif; ?>
                </h6>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>