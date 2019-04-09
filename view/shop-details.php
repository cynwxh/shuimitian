<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/shop-details.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <div id="goodsinfo">
            <div class="container">
                <div class="img">
                    <div class="simg active" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                    <div class="simg" style="background:url(../img/goods1.png) no-repeat center /cover"></div>
                    <div class="simg" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                    <div class="simg" style="background:url(../img/goods1.png) no-repeat center /cover"></div>
                </div>
                <div class="word">
                    <h1>蒙氏早教玩具木制拼插积木仙人掌仙人球</h1>
                    <div class="evaluate"><span>163人购买</span><span>评价</span>
                        <div class="star"></div><span>送388积分</span>
                    </div>
                    <div class="spec">
                        <h1>商品规格</h1>
                        <div class="color">
                            <span>颜色分类</span>
                            <div class="button active">黄色</div>
                            <div class="button">绿色</div>
                            <div class="button">蓝色</div>
                        </div>
                        <div class="size">
                            <span>规格大小</span>
                            <div class="button">大号</div>
                            <div class="button active">中号</div>
                            <div class="button">小号</div>
                        </div>
                        <div class="number">
                            <span>数量</span>
                            <div class="num">
                                <div class="add">+</div>
                                <span class="n">1</span>
                                <div class="reduce">-</div>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <div class="single">单价：￥<span>38.80</span></div>
                        <div class="stock-express">
                            <span>库存：689</span>
                            <span>快递：0.00</span>
                        </div>
                    </div>
                    <div class="button-box">
                        <a href="shop-pay.php" class="buy">立即购买</a>
                        <a href="" class="cart">加入购物车</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="details">
                <div class="nav">
                    <a href="#content" class="active">商品详情</a>
                    <a href="#price">规格参数</a>
                    <a href="#evaluate">累计评价</a>
                </div>
                <div id="content">
                    商品详情内容
                </div>
                <div id="price">
                    规格参数内容
                </div>
                <ul id="evaluate">
                    <li>
                        <a href="">
                            <div class="head">
                                <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                <h1>李**</h1>
                            </div>
                            <div class="content">
                                <div class="star"></div>
                                <h2>孩子们挺喜欢</h2>
                                <span>2018-10-10</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="head">
                                <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                <h1>李**</h1>
                            </div>
                            <div class="content">
                                <div class="star"></div>
                                <h2>孩子们挺喜欢</h2>
                                <span>2018-10-10</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="head">
                                <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                <h1>李**</h1>
                            </div>
                            <div class="content">
                                <div class="star"></div>
                                <h2>孩子们挺喜欢</h2>
                                <span>2018-10-10</span>
                            </div>
                        </a>
                    </li>
                    <?php include "common/page.php" ?>
                </ul>
            </div>
            <div id="other-goods">
                <div class="title">
                    <h1>其他推荐商品</h1>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                            <div class="word">
                                <h1 class="hidden2">蒙特蒙台梭利数学教具儿童加减法算术教具</h1>
                                <span>￥32.80</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <a href="shop-list.php" class="button">查看更多商品</a>
            </div>
        </div>
    </main>
    <script>
        // 评分
        layui.use('rate', function() {
            var rate = layui.rate;
            rate.render({
                elem: '.star',
                value: 4,
                readonly: true
            });
        })
        // 商品图片
        $(function() {
            $("#goodsinfo .img").css("background", $("#goodsinfo .img .active").css("background"));
            $("#goodsinfo .img .simg").on("click", function() {
                $("#goodsinfo .img .simg").removeClass("active");
                $(this).addClass("active");
                $("#goodsinfo .img").css("background", $("#goodsinfo .img .active").css("background"));
            })
        })
        // 点击颜色分类
        $("#goodsinfo .word .spec .color .button").on("click", function() {
            $("#goodsinfo .word .spec .color .button").removeClass("active");
            $(this).addClass("active");
        })
        // 点击规格大小
        $("#goodsinfo .word .spec .size .button").on("click", function() {
            $("#goodsinfo .word .spec .size .button").removeClass("active");
            $(this).addClass("active");
        })
        // 点击数量
        var num = 1;
        $("#goodsinfo .word .spec .number").on("click", function(e) {
            if (e.target.className == "add") {
                num++;
            } else if (e.target.className == "reduce") {
                num--;
            }
            if (num < 1) {
                num = 1;
            }
            $("#goodsinfo .word .spec .number span.n").text(num)
        })
        // 滚动到一定位置使导航和其他商品绝对定位
        $(window).on("scroll", function() {
            var height = document.documentElement.scrollTop || document.body.scrollTop;
            if (height > 823) {
                $("#details .nav").css({
                    "position": "fixed",
                    "top": "0",
                    "left": "352px",
                    "z-index": "999"
                });
                $("#other-goods").css({
                    "position": "fixed",
                    "top": "0",
                    "right": "352px",
                    "z-index": "999",
                    "margin-top": "0"
                });
            } else if (height < 823) {
                $("#details .nav").css({
                    "position": "static"
                });
                $("#other-goods").css({
                    "position": "static",
                    "margin-top": "40px"
                });
            }
            // 页面滚动激活对应的导航
            if($("#content").offset().top<$(window).scrollTop()&&$(window).scrollTop()<$("#price").offset().top){
                $("#details .nav a").removeClass("active");
                $("#details .nav a:nth-child(1)").addClass("active");
            }else if($("#price").offset().top<$(window).scrollTop()&&$(window).scrollTop()<$("#evaluate").offset().top){
                $("#details .nav a").removeClass("active");
                $("#details .nav a:nth-child(2)").addClass("active");
            }else if($("#evaluate").offset().top<$(window).scrollTop()){
                $("#details .nav a").removeClass("active");
                $("#details .nav a:nth-child(3)").addClass("active");
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