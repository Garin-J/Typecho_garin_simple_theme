<?php
/**
 * Default theme for Garin
 *
 * @package Typecho Garin Simple Theme
 * @author Garin
 * @version 1.0
 * @link http://www.garinj.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="garin-simple-introduce-box">
    <div class="garin-simple-introduce-avatar">
        <img src="http://www.garinj.com/usr/themes/Garlin_Simplicity/img/avatar.jpg">
    </div>
    <div class="garin-simple-introduce-signature">
        <p id="flash_text">不负遇见，不负每一份热爱，期待更好的我们！</p>
    </div>
    <div class="garin-simple-introduce-site">
          <a href="http://wpa.qq.com/msgrd?v=3&uin=17767023&site=qq&menu=yes"><i class="ri-qq-line"></i></a>
          <a href="https://github.com/Garin-J"><i class="ri-github-fill"></i></a>
          <a href="garinj@foxmail.com"><i class="ri-mail-line"></i></i></a>
    </div>
</div>


<div class="garin-simple-index-article-box">
    <?php while ($this->next()): ?>
        <div class="garin-simple-index-article-item">
            <p class="garin-simple-index-article-item-title"> <a itemprop="url"  target="_blank" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
            <p class="garin-simple-index-article-item-info">
                <span class="garin-blue">#</span>
                <span><a href="" ><?php $this->category(','); ?></a></span>
                <span class="garin-separated">/</span>
                <span><a href="<?php $this->author->permalink(); ?>" ><?php $this->author(); ?></a></span>
                <span class="garin-separated">/</span>
                <span><?php $this->date(); ?></span>
            </p>
        </div>
    <?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>


<script>
    let divTyping = document.getElementById('flash_text')
    let i = 0,
        timer = 0,
        str = '不负遇见，不负每一份热爱，期待更好的我们！'
    let flash=0;
    function flashing(){
        if(flash==0){
            divTyping.innerHTML = str + '_';
            flash=1;
        }else{
            divTyping.innerHTML = str;
            flash=0;
        }
    }
    function typing () {
        if (i <= str.length) {
            divTyping.innerHTML = str.slice(0, i++) + '_'
            timer = setTimeout(typing, 200)
        }
        else {
            divTyping.innerHTML = str;
            clearTimeout(timer)
            setInterval("flashing()",500);
        }
    }
    typing()
</script>
<?php $this->need('footer.php'); ?>
