<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/news-events.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <div id="nav">
            <div class="container">
                <a href="javascript:;">集团新闻</a>
                <a href="javascript:;">活动公告</a>
            </div>
        </div>
        <div class="container">
            <div id="content">
                <h1>当孩子问起“我是从哪里来的？”正确回答比避免尴尬更重要丨观察</h1>
                <h2><span>2019-03-10</span><span>水米田教育</span></h2>
                <div class="content">
                    文章内容
                </div>
                <p class="foot"><span>上一篇：<a href="">
                            父母也很无助，对无助的人生气不对
                        </a></span><span>下一篇：<a href="">
                            拿平板当玩具，你这是在害！孩！子！
                        </a></span></p>
            </div>
        </div>
    </main>
    <div id="hot">
        <h1>热门推荐</h1>
        <ul>
            <li>
                <a href="">
                    <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                    <p class="hidden2">新学期家长会丨陈亚男：了解孩子、了解自己，成就彼此完美的生命旅程 </p>
                </a>
            </li>
        </ul>
    </div>
    <script>
        //默认显示集团新闻
        $(function() {
            $("#nav .container a").eq(0).addClass("active");
        })
        // 热门推荐浮窗
        $(window).on("scroll", function() {
            var height = document.documentElement.scrollTop || document.body.scrollTop;
            $("#hot").css("top", 180 - height + "px");
            if (height > 140) {
                $("#hot").css("top", "40px");
            }
        })
    </script>
    <!-- 公用返回顶部 -->
    <?php include "common/backtop.php" ?>
    <!-- 公用登录 -->
    <?php include "common/login.php" ?>
    <!-- 公用底部 -->
    <?php include "common/footer.php" ?>
</body>

</html> 