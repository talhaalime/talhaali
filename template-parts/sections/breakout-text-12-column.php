<?php
$fc_title   = get_sub_field('fc_title');
$fc_text   = get_sub_field('fc_text');
?>
<div class="auto-container">
    <div class="row-gap dy-flex">
        <div class="col-two-colum">
            <?php if($fc_title):?>
                <h2><?php echo $fc_title; ?></h2>
            <?php endif; ?>
        </div>
        <div class="col-two-colum">
            <?php echo $fc_text; ?>
        </div>
    </div>
</div>