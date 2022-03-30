<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="garin-simple-post-box">
    <div class="garin-simple-post-info">
        <p class="garin-simple-post-title"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
    </div>

    <div class="garin-simple-post-content">
        <?php $this->content(); ?>
    </div>
</div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
