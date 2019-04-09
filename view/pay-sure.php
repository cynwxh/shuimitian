<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/pay.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <div class="container">
            <div id="pay-method">
                <div class="img" style="background:url(../img/pay2.png) no-repeat center /cover"></div>
                <div class="pay-box">
                    <h1>请选择支付方式</h1>
                    <h2>
                        <p class="number"><span>订单号：</span><span>
                                20190313152319YXMPDD1624196296
                            </span></p>
                        <p class="money"><span>实付：</span><span>￥100.00</span></p>
                    </h2>
                    <div class="pay-method">
                        <div class="pay">
                            <div class="radio"></div>
                            <img src="../img/alipay.png" alt="">
                        </div>
                        <div class="pay">
                            <div class="radio"></div>
                            <img src="../img/wxpay.png" alt="">
                        </div>
                        <div class="pay">
                            <div class="radio"></div>
                            <img src="../img/yuepay.png" alt="">
                        </div>
                    </div>
                    <a href="" class="button">确认支付</a>
                </div>
            </div>
        </div>
    </main>
    <script>
        //默认选择第一种支付方式
        $(function() {
            $("#pay-method .pay-box .pay-method .pay").eq(0).addClass("active");
        })
        //点击支付方式
        $("#pay-method .pay-box .pay-method .pay").on("click", function() {
            $("#pay-method .pay-box .pay-method .pay").removeClass("active");
            $(this).addClass("active");
            if($(this).index()==0){
                $("#pay-method .pay-box a.button").attr("href","")
            }else if($(this).index()==1){
                $("#pay-method .pay-box a.button").attr("href","wxpay.php");
            }else if($(this).index()==2){
                $("#pay-method .pay-box a.button").attr("href","yuepay.php");
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