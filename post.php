<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="garin-simple-post-box">
    <div class="garin-simple-post-info">
        <p class="garin-simple-post-title"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
        <p class="garin-simple-post-infos">
            <span><?php $this->date(); ?></span>
            <span class="garin-separated">/</span>
            <span><a itemprop="name"
                     href="<?php $this->author->permalink(); ?>"
                     rel="author"><?php $this->author(); ?></a></span>
            <span class="garin-separated">/</span>
            <span class="garin-blue">#</span>
            <span><?php $this->category(','); ?></span>
        </p>
    </div>
    <div class="garin-simple-post-content">
        <?php $this->content(); ?>
    </div>
    <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s', '没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s', '没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
