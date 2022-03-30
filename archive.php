<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="garin-simple-index-article-box">
   <?php
   /*
   $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', '');*/

    ?>
    <?php if (!$this->have()) { ?>
    <div>暂无内容！</div>
    <?php } ?>
    <?php while ($this->next()): ?>
        <div class="garin-simple-index-article-item">
            <p> <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
            <p class="garin-simple-index-article-item-info">
                <span class="garin-blue">#</span>
                <span><a href="" ><?php $this->category(','); ?></a></span>
                <span class="garin-separated"></span>
                <span><a href="<?php $this->author->permalink(); ?>" ><?php $this->author(); ?></a></span>
                <span class="garin-separated"></span>
                <span><?php $this->date(); ?></span>
            </p>
        </div>

    <?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php $this->need('footer.php'); ?>
