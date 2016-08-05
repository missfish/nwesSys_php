<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>新闻首页</title>
    <link rel="stylesheet" media="(max-width:800px)" href="/newsSys_php/Public/Common/css/bootstrap.min.css"/>
    <link rel="stylesheet" media="(max-width:800px)" href="/newsSys_php/Public/Home/css/style.css"/>
    <script src="/newsSys_php/Public/Common/js/jquery.min.js"></script>
    <script src="/newsSys_php/Public/Common/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <div class="toolbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4">
                    <i class="toolbar-icon icon-baidu"></i>
                    <i class="toolbar-icon icon-userhome"></i>
                </div>
                <div class="col-xs-4"><i class="icon-baidu-news"></i></div>
                <div class="col-xs-4 text-right">
                    <i class="toolbar-icon icon-search"></i>
                    <i class="toolbar-icon icon-subscribe"></i>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="divider"></div>
        <div class="container-fluid">
            <ul class="visibleUl">
                <div class="row">
                    <li class="col-xs-2"><a href="<?php echo U('Index/index');?>" id="Index_index">推荐</a><b></b></li>
                    <li class="col-xs-2"><a href="<?php echo U('Baijia/index');?>" id="Baijia_index">百家</a><b></b></li>
                    <li class="col-xs-2"><a href="#">本地</a><b></b></li>
                    <li class="col-xs-2"><a href="#">图片</a><b></b></li>
                    <li class="col-xs-2"><a href="#">娱乐</a><b></b></li>
                    <li class="col-xs-2"><a href="#">社会</a><b></b></li>
                </div>
                <div class="row">
                    <li class="col-xs-2"><a href="#">军事</a><b></b></li>
                    <li class="col-xs-2"><a href="#">女人</a><b></b></li>
                    <li class="col-xs-2"><a href="#">搞笑</a><b></b></li>
                    <li class="col-xs-2"><a href="#">科技</a><b></b></li>
                    <li class="col-xs-4 text-center more" data-toggle="collapse" href="#collapse"><a
                            href="#">更多</a><b></b><span class="caret"></span></li>
                    <li class="col-xs-4 text-center internet" style="display: none"><a href="#"> 互联网</a><b></b></li>
                </div>
            </ul>
            <div class="collapse" id="collapse">
                <ul>
                    <div class="row">
                        <li class="col-xs-2"><a href="#">生活</a><b></b></li>
                        <li class="col-xs-2"><a href="#">国际</a><b></b></li>
                        <li class="col-xs-2"><a href="#">国内</a><b></b></li>
                        <li class="col-xs-2"><a href="#">体育</a><b></b></li>
                        <li class="col-xs-2"><a href="#">汽车</a><b></b></li>
                        <li class="col-xs-2"><a href="#">财经</a><b></b></li>
                    </div>
                    <div class="row">
                        <li class="col-xs-2"><a href="#">房产</a><b></b></li>
                        <li class="col-xs-2"><a href="#">时尚</a><b></b></li>
                        <li class="col-xs-2"><a href="#">教育</a><b></b></li>
                        <li class="col-xs-2"><a href="#">游戏</a><b></b></li>
                        <li class="col-xs-2"><a href="#">旅游</a><b></b></li>
                        <li class="col-xs-2"><a href="#">人文</a><b></b></li>
                    </div>
                    <div class="row">
                        <li class="col-xs-4 text-center"><a href="#">创意</a><b></b></li>
                        <li class="col-xs-4 text-center"><a href="#">互联网+</a><b></b></li>
                    </div>
                </ul>
                <div class="divider"></div>
                <ul class="other">
                    <div class="row">
                        <li class="col-xs-2"><a href="#">记者榜</a><b></b></li>
                        <li class="col-xs-2"><a href="#">媒体榜</a><b></b></li>
                        <li class="col-xs-3"><a href="#">删除及排序</a><b></b></li>
                        <li class="col-xs-3 col-xs-offset-2" data-toggle="collapse" href="#collapse"><a
                                href="#">收起</a><i class="caret"></i></li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>


</header>
<article>
    
<ul class="list-group newsList">
    <?php if(is_array($data)): foreach($data as $key=>$v): ?><li class="list-group-item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4 col-sm-2 imgBox">
                        <?php if(empty($v["img"])): ?><img src="/newsSys_php/Public/Common/img/preview.jpg">
                            <?php else: ?>
                            <img src="/newsSys_php/Public/Uploads/small/<?php echo ($v["img"]); ?>"><?php endif; ?>
                    </div>
                    <div class="col-xs-8 col-sm-10">
                        <div class="title"><?php echo ($v["title"]); ?></div>
                        <div class="time-lable clearfix" >
                            <div class="time pull-left"><?php echo date("h:i:s") ?></div>
                            <div class="lable pull-right">
                                <span class="label label-warning"><?php echo ($v["lable"]); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li><?php endforeach; endif; ?>
</ul>

</article>

<script>
    $('#collapse').on('show.bs.collapse', function () {
        $('.more').hide();
        $('.internet').show()
    });
    $('#collapse').on('hide.bs.collapse', function () {
        $('.more').show();
        $('.internet').hide()
    })

    //切换菜单
    $("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").css('text-decoration','underline');
</script>
</body>
</html>