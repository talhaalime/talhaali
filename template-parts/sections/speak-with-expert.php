<?php
$title_sp = get_field('title_sp', 'option');
$link_sp = get_field('link_sp', 'option');
?>

<div class="auto-container">
    <div class="row-secure dy-flex">
        <div class="col-text-secure">
            <?php if(!empty($title_sp)): ?>
            <h2><?php echo $title_sp; ?></h2>
            <?php endif; ?>
        </div>
        <div class="col-secure-right">
            <div class="inner">
                <?php if(!empty($link_sp)): ?>
                <a href="<?php echo $link_sp['url']; ?>" target="<?php echo $link_sp['target']; ?>">
                    <span><?php echo $link_sp['title']; ?></span>
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-aa.png" alt=""></span>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>