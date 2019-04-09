<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/under-course.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <div id="store">
            <div class="msg">
                <div class="container">
                    <span><i class="iconfont">!</i>与老师或机构私下交易造成的任何损失与纠纷，水米田教育不承担任何责任，若曾经有老师向你提出私下交易，请立即投诉。</span>
                    <span class="off">×</span>
                </div>
            </div>
            <div class="container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background:url(../img/store.png) no-repeat center /cover"></div>
                        <div class="swiper-slide" style="background:url(../img/store.png) no-repeat center /cover"></div>
                        <div class="swiper-slide" style="background:url(../img/store.png) no-repeat center /cover"></div>
                    </div>
                </div>
                <div class="info">
                    <h1>水米田教育03亲子课程绘本大变身</h1>
                    <div class="desc"><span>1633人购买</span><span>评价</span>
                        <div class="start"></div>
                    </div>
                    <div class="address">
                        <h1>地址信息</h1>
                        <i class="iconfont">&#xe617;</i>
                        <p>儿童之家北京丰台万达广场店北京市丰台区南四环西路汉威国际广场2区1号楼6M层</p>
                    </div>
                    <div class="button-box">
                        <a href="time-pay.php" class="pay">购买课时</a>
                        <a href="store-list.php" class="other">其他店面</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="content">
                <h1>身体协调与控制</h1>
                <p>内容</p>
                <p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p><p>内容</p>
            </div>
        </div>
        <div id="nearby">
            <p>附近其他门店</p>
            <a href="">
                <div class="img" style="background:#eee url(../img/other.png)"></div>
                <h1>幼儿园的孩子都在学孝顺</h1>
                <span>共10节</span>
            </a>
            <ul>
                <li>
                    <a href="">
                        <h1>幼儿园的孩子都在学孝顺</h1>
                        <span>共10节</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h1>幼儿园的孩子都在学孝顺</h1>
                        <span>共10节</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h1>幼儿园的孩子都在学孝顺</h1>
                        <span>共10节</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h1>幼儿园的孩子都在学孝顺</h1>
                        <span>共10节</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h1>幼儿园的孩子都在学孝顺</h1>
                        <span>共10节</span>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <script>
        //点击×按钮关闭消息提示
        $("#store .msg .container span.off").on("click", function(){
            $("#store .msg").css("height", "0px");
        })
        // 附近其他店浮窗
        $(window).on("scroll", function () {
            var height = document.documentElement.scrollTop||document.body.scrollTop;
            $("#nearby").css("top",620-height+"px");
            if (height>600) {
                $("#nearby").css("top","20px");
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