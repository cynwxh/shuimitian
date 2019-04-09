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
            <div id="course">
                <div class="img" style="background:url(../img/pay1.png) no-repeat center /cover"></div>
                <div class="orderinfo">
                    <div class="title">
                        <span>订单信息</span>
                        <span>单号</span>
                        <span>价格</span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                            <div class="word">
                                <h1 class="hidden1">石荟教你每20分钟了解一个干预方法-新家长科普</h1>
                                <span>共10节课</span>
                            </div>
                        </div>
                        <div class="number">20190313152319YXMPDD16241</div>
                        <div class="money">￥36.00</div>
                    </div>
                </div>
                <div class="pay">
                    <div class="total">
                        <p><span>商品合计：</span><span>￥ 89.80</span></p>
                        <p><span>获得积分：</span><span>1098</span></p>
                    </div>
                    <div class="button-box">
                        <p><span>应付总额：</span><span>￥ 109.80</span></p>
                        <a class="button">立即下单</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- 公共立即下单弹出层 -->
    <?php include "common/paypop.php" ?>
    <script>
        //点击确认订单
        $(".pay .button-box a").on("click", function() {
            window.open("pay-sure.php");
            layer.open({
                title: "",
                scrollbar: false,
                type: 1,
                area: ['1056px', '620px'], //宽高
                content: $("#paypop"),
                //弹出层执行成功回调函数
                success: function() {
                    $(".layui-layer #paypop .pay .success .button-s,.layui-layer #paypop .pay .error .button-e").on("click",function(){
                        layer.closeAll();
                    })
                }
            });
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