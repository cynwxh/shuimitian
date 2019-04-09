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
            <div id="wxpay">
                <div class="order">
                    <h1>请及时付款，以便订单尽快处理！</h1>
                    <h2>
                        <p class="number"><span>订单号：</span><span>
                                20190313152319YXMPDD1624196296
                            </span></p>
                        <p class="money"><span>实付：</span><span>￥100.00</span></p>
                    </h2>
                </div>
                <div class="wxpay">
                    <div class="code">
                        <div class="img"><img src="../img/wxcode.png" alt=""></div>
                        <p>微信扫一扫支付</p>
                    </div>
                    <div class="wxphone" style="background:url(../img/wxphone.png) no-repeat center /cover"></div>
                </div>
                <a href="javascript:window.history.back(-1)">选择其他支付方式>></a>
            </div>
        </div>
    </main>
    <!-- 公用返回顶部 -->
    <?php include "common/backtop.php" ?>
    <!-- 公用登录 -->
    <?php include "common/login.php" ?>
    <!-- 公用底部 -->
    <?php include "common/footer.php" ?>
</body>

</html> 