<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>



<div id="comments">
    <div id="comment"></div>

    <?php $this->comments()->to($comments); ?>

    <?php if ($this->allow('comment')): ?>


        <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/iDisqus.min.css'); ?>" />
        <script src="<?php $this->options->themeUrl('/js/iDisqus.min.js'); ?>"></script>

        <script>
            var disq = new iDisqus('comment', {
                forum: 'fooleap',
                site: 'https://www.garinj.com/',
                api: 'xxx需要反代，请看博客的说明',
                url: document.location.origin + document.location.pathname,
                mode: 2,
                timeout: 3000,
                init: true,
                emojiPreview: true
            });
            disq.count();
        </script>

    <?php endif; ?>
</div>




