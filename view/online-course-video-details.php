<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/online-course-details.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <?php include "common/online-course-nav.php" ?>
        <div class="container">
            <video id='video' class='video-js vjs-big-play-centered' controls preload='auto' width='900' height='500' poster='../img/video.png' data-setup='{}'>
                <source src='../media/video.mp4' type='video/mp4'>
                <p class='vjs-no-js'>
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                </p>
            </video>
            <div class="course-title">
                <div class="info">
                    <h1 class="hidden2">石荟教你每20分钟了解一个干预方法-新家长科普</h1>
                    <span>163人购买</span>
                    <div class="start"></div>
                    <span>共10节</span>
                </div>
                <span class="money">￥ 200.00</span>
                <a href="course-pay.php" class="button">立即购买</a>
            </div>
            <div class="introduce-catalog">
                <div class="nav">
                    <span>课程介绍</span>
                    <span class="active">课程目录</span>
                </div>
                <div class="content">
                    <div class="introduce">课程介绍</div>
                    <div class="catalog">
                        <ul>
                            <li>
                                <a href="">
                                    <i style="background:url(../img/videoicon.png) no-repeat center /cover"></i>
                                    <h1 class="hidden1">实证有效的干预方法有哪些？ </h1>
                                    <span class="hidden1">（15分钟）</span>
                                    <span class="active">免费试学</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i style="background:url(../img/videoicon.png) no-repeat center /cover"></i>
                                    <h1 class="hidden1">实证有效的干预方法有哪些？ </h1>
                                    <span class="hidden1">（15分钟）</span>
                                    <span class="active">免费试学</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i style="background:url(../img/videoicon.png) no-repeat center /cover"></i>
                                    <h1 class="hidden1">实证有效的干预方法有哪些？ </h1>
                                    <span class="hidden1">（15分钟）</span>
                                    <span class="active">免费试学</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i style="background:url(../img/videoicon.png) no-repeat center /cover"></i>
                                    <h1 class="hidden1">实证有效的干预方法有哪些？ </h1>
                                    <span class="hidden1">（15分钟）</span>
                                    <span class="active">免费试学</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i style="background:url(../img/videoicon.png) no-repeat center /cover"></i>
                                    <h1 class="hidden1">实证有效的干预方法有哪些？ </h1>
                                    <span class="hidden1">（15分钟）</span>
                                    <span class="active">免费试学</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i style="background:url(../img/videoicon.png) no-repeat center /cover"></i>
                                    <h1 class="hidden1">实证有效的干预方法有哪些？ </h1>
                                    <span class="hidden1">（15分钟）</span>
                                    <span class="active">免费试学</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i style="background:url(../img/videoicon.png) no-repeat center /cover"></i>
                                    <h1 class="hidden1">实证有效的干预方法有哪些？ </h1>
                                    <span class="hidden1">（15分钟）</span>
                                    <span class="active">免费试学</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include "common/other-course.php" ?>
    </main>
    <script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
    <!-- 公用返回顶部 -->
    <?php include "common/backtop.php" ?>
    <!-- 公用登录 -->
    <?php include "common/login.php" ?>
    <!-- 公用底部 -->
    <?php include "common/footer.php" ?>
</body>

</html> 