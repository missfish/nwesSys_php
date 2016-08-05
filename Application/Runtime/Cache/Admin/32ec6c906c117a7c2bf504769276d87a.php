<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新闻管理系统登录</title>
    <link rel="stylesheet" href="/newsSys_php/Public/Common/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/newsSys_php/Public/Admin/css/login.css" />
    <script src="/newsSys_php/Public/Common/js/jquery.min.js"></script>
    <script src="/newsSys_php/Public/Common/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
    <div class="login-Con center-block">
        <h2 class="login-title">欢迎访问新闻管理系统</h2>
        <form class="form-horizontal login-form" method="post">
            <div class="form-group">
                <label for="username" class="col-sm-3 control-label">用户名:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="username"  name="username" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">密码:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="form-group">
                <label for="verify" class="col-sm-3 control-label">验证码:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="verify" name="verify" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <img src="<?php echo U('Login/getVerify');?>" id="verify_img" alt="验证码" title="点击刷新验证码"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-info login-btn">登录</button>
                </div>
            </div>
        </form>
    </div>
<script>
    //验证码点击刷新
    $(function(){
        var img = $("#verify_img");
        var src = img.attr("src")+"?";
        img.click(function(){
            img.attr("src",src+Math.random());
        });
    });
</script>
</body>
</html>