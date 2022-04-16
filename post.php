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
    <div id="garin-simple-post-content" class="garin-simple-post-content">
        <?php $this->content(); ?>
    </div>
    <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s', '没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s', '没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<script>
    //调用示例
    layer.photos({
        photos: '#garin-simple-post-content'
        ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
    });

</script>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
