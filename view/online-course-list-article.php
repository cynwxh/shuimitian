<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/online-course-list.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <!-- 列表页导航 -->
        <?php include "common/online-course-nav.php" ?>
        <div id="article">
            <div class="container">
                <ul>
                    <li>
                        <a href="online-course-article-details.php">
                            <div class="img" style="background:#eee url(../img/reco1.png) no-repeat center /cover">
                                <span><i class="iconfont">&#xe65a;</i>音频</span>
                                <i class="iconfont active">&#xe639;</i>
                            </div>
                            <div class="word">
                                <h1 class="hidden1">幼儿园的孩子都在学孝顺</h1>
                                <h6 class="hidden1">共10节</h6>
                                <p><span>360人观看</span>￥ 32.80</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div id="page">
                    <i class="iconfont">&#xe667;</i>
                    <a href="" class="active">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">...</a>
                    <a href="">100</a>
                    <i class="iconfont">&#xe601;</i>
                </div>
            </div>
        </div>
    </main>
    <script>
        // 线上课程列表
        $(function() {
            $("#nav .container .title .desc span a").eq(2).addClass("active");
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