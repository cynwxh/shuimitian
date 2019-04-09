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
        <?php include "common/online-course-nav.php" ?>
        <div id="nancy">
            <div class="container">
                <div class="column">
                    <div class="img" style="background:#eee url(../img/yanan.png) no-repeat center /cover"></div>
                    <div class="introduction">
                        <h1>陈亚男&nbsp;&nbsp;<span>Nancy Chen</span></h1>
                        <h2>总园长、教育总监</h2>
                        <p>北京水米田教育集团总园长</p>
                        <p>北大特聘教授</p>
                        <p>国培项目讲师</p>
                        <p>美国James Pan教育公司总监</p>
                        <p>英国Wee Ganes幼儿园名誉园长</p>
                        <p>幼儿教育家</p>
                        <p>童话作家</p>
                    </div>
                    <div class="nancy">
                        <a href="">
                            <div class="img" style="background:#eee url(../img/ertong1.png)"></div>
                            <h1 class="hidden1">儿童敏感期教育（0-3岁）</h1>
                        </a>
                        <a href="">
                            <div class="img" style="background:#eee url(../img/ertong1.png)"></div>
                            <h1 class="hidden1">儿童敏感期教育（0-3岁）</h1>
                        </a>
                        <a href="">
                            <div class="img" style="background:#eee url(../img/ertong1.png)"></div>
                            <h1 class="hidden1">儿童敏感期教育（0-3岁）</h1>
                        </a>
                        <a href="">
                            <div class="img" style="background:#eee url(../img/ertong1.png)"></div>
                            <h1 class="hidden1">儿童敏感期教育（0-3岁）</h1>
                        </a>
                        <a href="">
                            <div class="img" style="background:#eee url(../img/ertong1.png)"></div>
                            <h1 class="hidden1">儿童敏感期教育（0-3岁）</h1>
                        </a>
                        <a href="">
                            <div class="img" style="background:#eee url(../img/ertong1.png)"></div>
                            <h1 class="hidden1">儿童敏感期教育（0-3岁）</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
    // 线上课程列表
    $(function() {
            $("#nav .container .title .desc span a").eq(3).addClass("active");
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