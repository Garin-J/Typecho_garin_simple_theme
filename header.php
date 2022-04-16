<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>




    <!-- 使用url函数转换相关路径 -->

    <link rel="icon" href="<?php $this->options->themeUrl('/img/favicon.ico'); ?>" mce_href="<?php $this->options->themeUrl('/img/favicon.ico'); ?>" type="image/x-icon">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/disqusjs@1.3/dist/disqusjs.css">


    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/layui/css/layui.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/garin_simple.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@400;600&display=swap" rel="stylesheet">


    <script src="<?php $this->options->themeUrl('/js/jquery-3.6.0.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('/layui/layui.js'); ?>"></script>

    <script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>


    <script>
        var model = $.cookie('NightMode');
        if (model == 1) {
            var style = document.createElement("link");
            style.href = "<?php $this->options->themeUrl('/css/garin_simple_dark.css'); ?>";
            style.type = "text/css";
            style.rel = "styleSheet";
            document.head.appendChild(style);
        }
    </script>


    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>

</head>





<body class="garin-simple-bg">

<div class="garin-simple-nav-box garin-simple-bg layui-hide-xs">

    <div class="layui-container ">


        <ul class="layui-nav  garin-simple-bg garin-simple-nav-ul">
            <li class="layui-nav-item"><a class="garin-simple-nav-title" style="padding: 0 15px 0 0" itemprop="url"
                                          href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
            </li>


            <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
            <?php while ($categorys->next()): ?>
                <?php if ($categorys->levels === 0): ?>
                    <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                    <?php if (empty($children)) { ?>
                        <li class="layui-nav-item garin-simple-nav-item"><a
                                    href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a></li>
                    <?php } else { ?>
                        <li class="layui-nav-item garin-simple-nav-item"><a
                                    href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a>
                            <dl class="layui-nav-child">
                                <?php foreach ($children as $mid) { ?>
                                    <?php $child = $categorys->getCategory($mid); ?>
                                    <dd><a href="<?php echo $child['permalink'] ?>"><?php echo $child['name']; ?></a>
                                    </dd>
                                <?php } ?>
                            </dl>
                        </li>
                    <?php } ?>
                <?php endif; ?>
            <?php endwhile; ?>



            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while ($pages->next()): ?>
                <li class="layui-nav-item"><a <?php if ($this->is('page', $pages->slug)): ?><?php endif; ?>
                            href="<?php $pages->permalink(); ?>"
                            title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>


        </ul>

        <ul class="layui-nav layui-layout-right garin-simple-box-bg">


            <li class="layui-nav-item">
                <div  class="garin-simple-light model-btn"><i  class="ri-sun-fill garin-simple-font-color"></i></div>
            </li>


            <li class="layui-nav-item">
                <div class="garin-simple-search-bg garin-simple-search-pc">
                    <form  method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <input  class=" garin-simple-box-bg garin-simple-font-color" id="s" name="s"  type="text">
                    <button type="submit" class="ri-search-line garin-simple-box-bg garin-simple-font-color"></button>
                    </form>
                </div>
            </li>

        </ul>

    </div>

</div>


<div style="height: 60px"></div>


<div class="garin-simple-mobile-nav layui-hide-md xijiayi-shadow garin-simple-box-bg">

    <div class="garin-simple-mobile-nav-title ">
        <span><a itemprop="url"
                 href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></span>

        <span id="mobile-nav-btn" class="garin-simple-mobile-nav-menu">
                <i class="ri-menu-line"></i>
        </span>
        <span   class="garin-simple-light model-btn" style="float: right"> <i
                    class="ri-sun-fill garin-simple-font-color"></i></span>

    </div>

    <ul id="mobile-nav" class="layui-nav layui-nav-tree garin-simple-mobile-nav-ul garin-simple-box-bg layui-hide"
        lay-filter="test">


        <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
        <?php while ($categorys->next()): ?>
            <?php if ($categorys->levels === 0): ?>
                <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                <?php if (empty($children)) { ?>
                    <li class="layui-nav-item"><a
                                href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a></li>
                <?php } else { ?>
                    <li class="layui-nav-item layui-nav-itemed"><a
                                href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a>
                        <dl class="layui-nav-child">
                            <?php foreach ($children as $mid) { ?>
                                <?php $child = $categorys->getCategory($mid); ?>
                                <dd><a href="<?php echo $child['permalink'] ?>"><?php echo $child['name']; ?></a></dd>
                            <?php } ?>
                        </dl>
                    </li>
                <?php } ?>
            <?php endif; ?>
        <?php endwhile; ?>



        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while ($pages->next()): ?>
            <li class="layui-nav-item"><a <?php if ($this->is('page', $pages->slug)): ?><?php endif; ?>
                        href="<?php $pages->permalink(); ?>"
                        title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
        <?php endwhile; ?>

        <li class="layui-nav-item">
            <div style="margin-left: 15px" class="garin-simple-search-bg garin-simple-search-pc">
                <form  method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <input  class=" garin-simple-box-bg garin-simple-font-color" id="s" name="s"  type="text">
                    <button type="submit" class="ri-search-line garin-simple-box-bg garin-simple-font-color"></button>
                </form>
            </div>
        </li>


    </ul>


</div>


<script>

    var mobile = false;

    $("#mobile-nav-btn").click(function () {

        if (mobile == false) {
            $("#mobile-nav").removeClass('layui-hide');
            mobile = true;
        } else {
            $("#mobile-nav").addClass('layui-hide');
            mobile = false;
        }

    });

    $(".model-btn").click(function () {

        if (model == 1) {

            removejscssfile("<?php $this->options->themeUrl('/css/garin_simple_dark.css'); ?>", "css");
            $.cookie('NightMode',0,{expires:30,path:'/'});
            model = 0;

        } else {

            var style = document.createElement("link");
            style.href = "<?php $this->options->themeUrl('/css/garin_simple_dark.css'); ?>";
            style.type = "text/css";
            style.rel = "styleSheet";
            document.head.appendChild(style);
            $.cookie('NightMode',1,{expires:30,path:'/'});
            model = 1;
        }

    });


    function removejscssfile(filename, filetype) {
        var targetelement = (filetype == "js") ? "script" : (filetype == "css") ? "link" : "none"
        var targetattr = (filetype == "js") ? "src" : (filetype == "css") ? "href" : "none"
        var allsuspects = document.getElementsByTagName(targetelement)
        for (var i = allsuspects.length; i >= 0; i--) {
            if (allsuspects[i] && allsuspects[i].getAttribute(targetattr) != null && allsuspects[i].getAttribute(targetattr).indexOf(filename) != -1)
                allsuspects[i].parentNode.removeChild(allsuspects[i])
        }
    }

</script>


<div class="garin-main-box" id="body">
    <div class="layui-container" style="padding: 20px 10px">


    
    
