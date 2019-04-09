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
            <div id="time">
                <h1>课时单位：1课时100元</h1>
                <div class="recharge">
                    <div class="time">
                        <h1><i class="iconfont">&#xe663;</i><span class="num">12</span><span>课时</span></h1>
                        <h2><span>￥1200.00</span><span><i class="iconfont">&#xe640;</i>1200.00</span></h2>
                        </a>
                    </div>
                    <div class="time">
                        <h1><i class="iconfont">&#xe663;</i><span class="num">48</span><span>课时</span></h1>
                        <h2><span>￥1200.00</span><span><i class="iconfont">&#xe640;</i>1200.00</span></h2>
                        </a>
                    </div>
                    <div class="time">
                        <h1><i class="iconfont">&#xe663;</i><span class="num">96</span><span>课时</span></h1>
                        <h2><span>￥1200.00</span><span><i class="iconfont">&#xe640;</i>1200.00</span></h2>
                        </a>
                    </div>
                </div>
                <h2>请选择支付方式</h2>
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
                <a href="javascript:;" class="button">确认支付</a>
            </div>
        </div>
    </main>
    <!-- 公共立即下单弹出层 -->
    <?php include "common/paypop.php" ?>
    <script>
        //点击确认订单
        $("#time a.button").on("click", function() {
            // window.open("pay-sure.php");
            layer.open({
                title: "",
                scrollbar: false,
                type: 1,
                area: ['1056px', '620px'], //宽高
                content: $("#paypop"),
                //弹出层执行成功回调函数
                success: function() {
                    $(".layui-layer #paypop .pay .success .button-s,.layui-layer #paypop .pay .error .button-e").on("click", function() {
                        layer.closeAll();
                    })
                }
            });
        })
        //默认选择第一种支付方式
        $(function() {
            $("#time .recharge .time").eq(0).addClass("active");
            $("#time .pay-method .pay").eq(0).addClass("active");
        })
        //点击课时效果
        $("#time .recharge .time").on("click", function() {
            $("#time .recharge .time").removeClass("active");
            $(this).addClass("active");
        })
        //点击支付方式
        $("#time .pay-method .pay").on("click", function() {
            $("#time .pay-method .pay").removeClass("active");
            $(this).addClass("active");
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