<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录页面</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./css/common_css.css">

</head>
<body>
<!--导航-->
<ul class="layui-nav" id="nav">
    <li class="layui-nav-item nav-left logo"><img src="images/1.png" height="43" width="127"/></li>
    <li class="layui-nav-item nav-left"><a href="">首页</a></li>
    <li class="layui-nav-item nav-left"><a href="">搭圈儿</a></li>
    <li class="layui-nav-item nav-left"><a href="">分享</a></li>
    <li class="layui-nav-item" id="nav-input"><input type="text" placeholder="请输入搜索信息"></li>
    <li class="layui-nav-item nav-right">
        <a href="javascript:;">个人中心</a>
        <dl class="layui-nav-child"> <!-- 二级菜单 -->
            <dd><a href="">我滴信息</a></dd>
            <dd><a href="">我滴搭圈儿</a></dd>
            <dd><a href="">我滴收藏</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item nav-right">
        <a href=""><img src="//t.cn/RCzsdCq" class="layui-nav-img">我</a>
        <dl class="layui-nav-child">
            <dd><a href="javascript:;">修改信息</a></dd>
            <dd><a href="javascript:;">退了</a></dd>
        </dl>
    </li>
</ul>
<!--登录-->
<div id="back">
    <div class="layui-container">

        <div class="layui-row">
            <div class="layui-col-md1 layui-col-lg-offset5"><h1>登</h1></div>
            <div class="layui-col-md1"><h1>录</h1></div>
        </div>
        <hr>

        <div class="layui-row login_one">
            <!--用户名-->
            <div class="layui-col-md6 layui-col-lg-offset4">
                <form class="layui-form">

                    <div class="layui-form-item">
                        <label class="layui-form-label label_style">用户名</label>
                        <div class="layui-input-inline">
                            <input type="text" name="username" value="" placeholder="请输入用户名" autocomplete="off"
                                   class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux umind">*必填</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label label_style">密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="passwd" value="" placeholder="请输入密码" autocomplete="off"
                                   class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux pmind">*密码为6-12位</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label label_style">记住密码</label>
                        <div class="layui-input-inline">
                            <input type="checkbox" name="switch" lay-skin="switch">
                        </div>
                        <div class="layui-form-mid layui-word-aux">*不是自己的电脑不要勾选</div>
                    </div>

                </form>

            </div>


            <!--登陆注册按钮-->
            <div class="layui-row">
                <div class="layui-col-md2 layui-col-lg-offset3">
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn bt login_bt" type="button" name="login">登录</button>
                        </div>
                    </div>
                </div>

                <div class="layui-col-md3">
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button type="button" class="layui-btn  bt layui-btn-primary register_bt" name="register">注册
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="./layui/layui.all.js"></script>
<script src="./js/login.js"></script>
<script>
    var logo = document.querySelector(".logo");
    var input = document.getElementById("nav-input");
    var nav_bar = document.querySelector(".layui-nav-bar");
    logo.onmouseover = function () {
        nav_bar.style.display = "none";
    };
    logo.onmouseout = function () {
        nav_bar.style.display = "block";
    };
    input.onmouseover = function () {
        nav_bar.style.display = "none";
    };
    input.onmouseout = function () {
        nav_bar.style.display = "block";
    };

</script>
</body>
</html>