<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<div class="garin-simple-foot-box">
    <div class="layui-container">
        &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
        <?php _e('由 <a href="http://www.typecho.org">Typecho</a>&<a href="http://www.Garinj.com">Garin</a> 强力驱动'); ?>.
        <p class="garin-simple-foot-link">
            <span><a target="_blank" href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></span>
            <span><a target="_blank" href="<?php $this->options->feedUrl(); ?>"><?php _e('蜀ICP备11011049号'); ?></a></span>
            <span><a target="_blank" href="<?php $this->options->feedUrl(); ?>"><?php _e('公安备11011049号'); ?></a></span>
        </p>
    </div>



</div>
<?php $this->footer(); ?>
</body>
</html>
