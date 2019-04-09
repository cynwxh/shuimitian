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
        <div id="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background:url(../img/banner2.png)"></div>
                    <div class="swiper-slide" style="background:url(../img/banner2.png)"></div>
                    <div class="swiper-slide" style="background:url(../img/banner2.png)"></div>
                    <div class="swiper-slide" style="background:url(../img/banner2.png)"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next iconfont">&#xe601;</div>
                <div class="swiper-button-prev iconfont">&#xe667;</div>
            </div>
        </div>
        <div id="nav">
            <div class="container">
                <a href="javascript:;">集团新闻</a>
                <a href="javascript:;">活动公告</a>
            </div>
        </div>
        <div class="container">
            <ul id="news">
                <li>
                    <a href="news-events-details.php">
                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                        <div class="word">
                            <h1 class="hidden1">新学期家长会丨陈亚男：了解孩子、了解自己，成就彼此完美的生命旅程
                            </h1>
                            <h2><span>来源：水米田教育</span><span>发布时间：2019-02-28</span></h2>
                            <p class="hidden3">2019年2月26日，水米田教育集团幼儿园新生家长会上，北京水米田教育集团总园长、水米田蒙特梭利教育研究院院长、英国Wee Gems幼儿园名誉园长、北师大特聘教授、国培特邀讲师、身心灵成长课程导师陈亚男女士细语轻柔、情深专注地给到场的200多位新生家长分享了自己30多年来的教育智慧与生命成长感悟。</p>
                        </div>
                    </a>
                </li>
                <?php include "common/page.php" ?>
            </ul>
            <ul id="events">
                <li>
                    <a href="news-events-details.php">
                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                        <div class="word">
                            <h1 class="hidden1">新学期家长会丨陈亚男：了解孩子、了解自己，成就彼此完美的生命旅程
                            </h1>
                            <h2><span>来源：水米田教育</span><span>发布时间：2019-02-28</span></h2>
                            <p class="hidden3">2019年2月26日，水米田教育集团幼儿园新生家长会上，北京水米田教育集团总园长、水米田蒙特梭利教育研究院院长、英国Wee Gems幼儿园名誉园长、北师大特聘教授、国培特邀讲师、身心灵成长课程导师陈亚男女士细语轻柔、情深专注地给到场的200多位新生家长分享了自己30多年来的教育智慧与生命成长感悟。</p>
                        </div>
                    </a>
                </li>
                <?php include "common/page.php" ?>
            </ul>
        </div>
    </main>
    <script>
        // 轮播图
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            loop: true,
            autoplay: true,
            speed: 2000,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        //默认显示集团新闻
        $(function() {
            $("#nav .container a").eq(0).addClass("active");
            $("#main .container ul").eq(0).show().siblings().hide();
        })
        //点击导航
        $("#nav .container a").on("click", function() {
            $("#nav .container a").removeClass("active");
            $(this).addClass("active");
            console.log($(this).index())
            $("#main .container ul").eq($(this).index()).show().siblings().hide();
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