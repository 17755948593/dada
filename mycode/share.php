<?php require "./common/mysql.php";

$sql = "SELECT * FROM share WHERE  uid = " . $_SESSION['uid'];
$result = $mysql->query($sql);
$message = $result->fetch_array(MYSQLI_ASSOC);
foreach ($message AS $key => $value) {
    $$key = $value;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>分享页面</title>
    <!--<link rel="stylesheet" href="bootstrap-4.1.2-dist/css/bootstrap.css">-->
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
            <dd><a href="./personal_mess.php">我滴信息</a></dd>
            <dd><a href="">我滴搭圈儿</a></dd>
            <dd><a href="">我滴收藏</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item nav-right">
        <a href=""><img src="//t.cn/RCzsdCq" class="layui-nav-img">我</a>
        <dl class="layui-nav-child">
            <dd><a href="javascript:;">退了</a></dd>
        </dl>
    </li>
</ul>


<!--分享主体内容-->
<div class="layui-container">
    <div class="layui-row">
        <!--<div class="layui-col-md2 layui-col-lg-offset3">-->
        <div style="padding: 15px;">
            <span class="layui-breadcrumb" lay-separator="-">
               <a href="">我的哒哒分享</a>
               <a><cite>投稿专栏</cite></a>
            </span>
            <hr>
        </div>
    </div>
</div>

<div class="layui-container">
    <form class="layui-form" action="" enctype="multipart/form-data">
        <div class="layui-row">
            <div class="layui-col-md8 layui-col-lg-offset2">
                <div class="layui-form-item layui-icon">
                    <div class="layui-input-inline">
                        <label class="picture imglist" for="picture">
                            <img src="images/2.png" width="70" height="50" id="old">
                        </label>
                        <input type="file" name="mypicture" multiple
                               accept="image/gif, image/jpeg, image/png, image/svg" id="picture" class="mypicture"
                               hidden>

                        <!-- 默认值设置 -->
                        <input type="hidden" name="picture" value="<?= $head ?>">
                    </div>
                    <p class="pic_submit">添加专栏图片</p>
                </div>
                <!--               显示多张图片-->
                <div class="layui-fluid">
                    <div class="layui-row">
                        <label class="layui_col-md12 uploadimg">

                        </label>
                        <input type="hidden" name="picture" value="">

                    </div>
                </div>

                <!--添加专栏标题-->
                <div class="layui-row">
                    <div class="layui-colla-title">
                        <input type="text" placeholder="输入标题（介意15字以内）" class="layui-colla-title" name="title" maxlength="15">
                    </div>
                </div>
                <!--专栏标签-->
                <!--<form class="layui-form" action="">-->
                <div class="layui-row">
                    <div class="layui-form-item">
                        <label class="layui-form-label">专栏标签</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="tag[]" title="小清新" value="小清新">
                            <input type="checkbox" name="tag[]" title="可爱风" value="可爱风" checked>
                            <input type="checkbox" name="tag[]" title="职场风" value="职场风">
                            <input type="checkbox" name="tag[]" title="休闲风" value="休闲风">
                            <input type="checkbox" name="tag[]" title="森女风" value="森女风">
                            <input type="checkbox" name="tag[]" title="欧美风" value="欧美风">
                            <input type="checkbox" name="tag[]" title="机场风" value="机场风">
                        </div>
                    </div>
                </div>
                <!--</form>-->


                <!--添加专栏详情-->
                <div class="layui-row">
                    <div class="top_title">
                        <p>请输入专栏详情，保证在200-2000字以内</p>
                    </div>
                </div>
                <!--富文本编辑框-->
                <div class="layui-row">
                    <div id="editor">
                        <p><?=$detail?></p>
                    </div>

                    <textarea name="detail" id="info" cols="30" rows="10" class="hide" hidden><?=$detail?></textarea>

                </div>

                <!--提交专栏按钮-->
                <div class="layui-row">
                    <div class="layui-col-md4 layui-col-lg-offset5">
                        <div class="layui-input-inline">
                            <button class="layui-btn sharebt" type="button">提交专栏</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script src="http://unpkg.com/wangeditor/release/wangEditor.min.js"></script>
<script src="./layui/layui.all.js"></script>
<script src="./js/share.js"></script>

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
<script>
    var E = window.wangEditor;
    // 创建一个编辑器
    var editor = new E('#editor');
    // 配置服务器端地址
    editor.customConfig.uploadImgServer = './editorupload.php?from=pc';
    //服务器端接收的文件名称
    editor.customConfig.uploadFileName = 'images[]';
    //内容同步
    var $text1 = document.querySelector('#info');
    editor.customConfig.onchange = function (html) {
        // 监控变化，同步更新到 textarea
        // $text1.val(html);
        $text1.value = html;
    };


    editor.create();
    // 再创建一个编辑器
    // var editor1 = new E('#editor1')
    // editor1.create();


</script>
</body>
</html>