<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>







<div id="comments">

    <div id="disqus_thread"></div>

    <?php $this->comments()->to($comments); ?>

    <?php if ($this->allow('comment')): ?>




        <script src="https://cdn.jsdelivr.net/npm/disqusjs@1.3/dist/disqus.js"></script>

        <script>

            var dsqjs = new DisqusJS({
                shortname: 'www-garinj-com',
                api:'http://disqus.garinj.com/disqus/',
                url: document.location.origin + document.location.pathname,
                apikey: '填写key',

            });
        </script>

    <?php endif; ?>
</div>




