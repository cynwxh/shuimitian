<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/shop-list.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <div id="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background:url(../img/banner1.png)"></div>
                    <div class="swiper-slide" style="background:url(../img/banner1.png)"></div>
                    <div class="swiper-slide" style="background:url(../img/banner1.png)"></div>
                    <div class="swiper-slide" style="background:url(../img/banner1.png)"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next iconfont">&#xe601;</div>
                <div class="swiper-button-prev iconfont">&#xe667;</div>
            </div>
        </div>
        <div id="shop">
            <div class="container">
                <!-- 检索商品 -->
                <div id="retrieval">
                    <div class="category class">
                        <div class="classname">分类</div>
                        <div class="classlist">
                            <span id="1" class="active">全部</span>
                            <span id="2">教材</span>
                        </div>
                    </div>
                    <div class="category stuff">
                        <div class="classname">材料</div>
                        <div class="classlist">
                            <span class="active">全部</span>
                            <span>毛绒</span>
                        </div>
                    </div>
                    <div class="category age">
                        <div class="classname">适用年龄</div>
                        <div class="classlist">
                            <span class="active">全部</span>
                            <span>毛绒</span>
                        </div>
                    </div>
                    <div class="category price">
                        <div class="classname">价格</div>
                        <div class="classlist">
                            <span class="active">全部</span>
                            <span>毛绒</span>
                        </div>
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="shop-details.php">
                            <div class="img" style="background: #eee url(../img/goods1.png) no-repeat center /cover"></div>
                            <p class="money">￥ 32.80</p>
                            <p class="name hidden2">蒙特蒙台梭利数学教具儿童加减法算术教具</p>
                            <div class="new active">NEW</div>
                            <div class="cart">
                                <i class="iconfont">&#xe607;</i>
                                <i class="iconfont active">&#xe639;</i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="shop-details.php">
                            <div class="img" style="background: #eee url(../img/goods1.png) no-repeat center /cover"></div>
                            <p class="money">￥ 32.80</p>
                            <p class="name hidden2">蒙特蒙台梭利数学教具儿童加减法算术教具</p>
                            <div class="new active">NEW</div>
                            <div class="cart">
                                <i class="iconfont">&#xe607;</i>
                                <i class="iconfont active">&#xe639;</i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="shop-details.php">
                            <div class="img" style="background: #eee url(../img/goods1.png) no-repeat center /cover"></div>
                            <p class="money">￥ 32.80</p>
                            <p class="name hidden2">蒙特蒙台梭利数学教具儿童加减法算术教具</p>
                            <div class="new active">NEW</div>
                            <div class="cart">
                                <i class="iconfont">&#xe607;</i>
                                <i class="iconfont active">&#xe639;</i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="shop-details.php">
                            <div class="img" style="background: #eee url(../img/goods1.png) no-repeat center /cover"></div>
                            <p class="money">￥ 32.80</p>
                            <p class="name hidden2">蒙特蒙台梭利数学教具儿童加减法算术教具</p>
                            <div class="new active">NEW</div>
                            <div class="cart">
                                <i class="iconfont">&#xe607;</i>
                                <i class="iconfont active">&#xe639;</i>
                            </div>
                        </a>
                    </li>
                </ul>
                <?php include "common/page.php" ?>
            </div>
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
        // 点击检索商品列表
        $("#retrieval .category .classlist").on("click",function(e){
            if($(e.target).prop("nodeName")=="SPAN"){
                $(this).find("span").removeClass("active");
                $(e.target).addClass("active")
            }
            var category={
                class:$("#retrieval .class .classlist .active").text(),
                stuff:$("#retrieval .stuff .classlist .active").text(),
                age:$("#retrieval .age .classlist .active").text(),
                price:$("#retrieval .price .classlist .active").text()
            }
            $.ajax({

            })
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