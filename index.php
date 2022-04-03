<?php
/**
 * Default theme for Garin
 *
 * @package Typecho Garin Simple Theme
 * @author Garin
 * @version 1.1
 * @link http://www.garinj.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="garin-simple-introduce-box">
    <div class="garin-simple-introduce-avatar">

        <img src=" <?php $this->options->themeUrl('/img/avatar.jpg');?>">
    </div>
    <div class="garin-simple-introduce-signature">
        <p id="flash_text"></p>
    </div>
    <div class="garin-simple-introduce-site">


        <?php





        if ($this->options->bilibili){
            echo "<a target=\"_blank\" href=\"".$this->options->bilibili."\"><i class=\"ri-bilibili-fill\"></i></a>";
        }

        if ($this->options->github){
            echo "<a target=\"_blank\" href=\"".$this->options->github."\"><i class=\"ri-github-fill\"></i></a>";
        }


          if ($this->options->csdn){
            echo "<a target=\"_blank\" href=\"".$this->options->csdn."\"><i class=\"ri-copyright-fill\"></i></a>";
          }

        if ($this->options->qq){
            echo "<a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=".$this->options->qq."\"><i class=\"ri-qq-fill\"></i></a>";
        }

        if ($this->options->email){
            echo "<a target=\"_blank\" href=\"mailto:".$this->options->email."\"><i class=\"ri-mail-fill\"></i></a>";
        }



        ?>






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
        <?php
        if ($this->options->motto){
            echo "str='".$this->options->motto."';";
        }else{
            echo "str='由Typecho&Garin联合驱动 :) ';";
        }


        ?>

    var flash=0;
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
