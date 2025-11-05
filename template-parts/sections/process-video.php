<?php
$image      = get_sub_field('fc_image');
$video_url  = get_sub_field('video_ifram');
?>

<div class="auto-container">
    <div class="inner bg" style="background-image: url('<?php echo $image['url']; ?>');">
        <?php if (!empty($video_url)): ?>
        <a href="#iframe-video"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-icon.svg" alt=""></a>
        <?php endif; ?>
    </div>
</div>


<?php if (!empty($video_url)): ?>
<!-- Modal -->
<div id="iframe-video" class="styles-modal iframe-video">
    <div class="modal-contents">
        <span class="close" onclick="closeModal('iframe-video')">
            <i class="fa-solid fa-xmark"></i>
        </span>
        <div class="video-frame">
            <iframe src="<?php echo $video_url; ?>"></iframe>
        </div>
    </div>
</div>
<?php endif ; ?>