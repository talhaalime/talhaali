<?php
    $fc_content      = get_sub_field('fc_content');
    $fc_title        = get_sub_field('fc_title');
    $fc_button_1     = get_sub_field('fc_button_1');
    $fc_button_2     = get_sub_field('fc_button_2');
?>

<img src="<?php echo get_template_directory_uri(); ?>/assets/images/layer-g.png" class="tri-angle" alt="">
<div class="auto-container">
    <div class="bread-crumbs">
        <ul>
            <li>
                <a href="<?php echo home_url(); ?>">Home </a>
            </li>
            <li>
                <?php if(!empty($fc_title)): ?>
                    <a href="#"><?php echo $fc_title; ?></a>
                <?php else: ?>
                    <a href="#"><?php the_title(); ?></a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
    <?php if(!empty($fc_title)): ?>
        <h2><?php echo $fc_title; ?></h2>
    <?php else: ?>
        <h2><?php the_title(); ?></h2>
    <?php endif; ?>
    <?php if(!empty($fc_content)): ?>
        <p><?php echo $fc_content; ?></p>
    <?php endif; ?>
    <div class="popup--btn">
        <ul>
            <?php if(!empty($fc_button_1)):?>
            <li>
                <a href="<?php echo $fc_button_1['url']; ?>" target="<?php echo $fc_button_1['target']; ?>">
                    <?php echo $fc_button_1['title']; ?>
                </a>
            </li>
            <?php endif; ?>
            <?php if(!empty($fc_button_2)):?>
            <li>
                <a href="<?php echo $fc_button_2['url']; ?>" target="<?php echo $fc_button_2['target']; ?>">
                    <?php echo $fc_button_2['title']; ?>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>