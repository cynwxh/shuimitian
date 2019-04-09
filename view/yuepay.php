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
        <div class="container yue">
        <div class="img" style="background:url(../img/pay2.png) no-repeat center /cover"></div>
            <div id="yuepay">
                <div class="order">
                    <div class="img" style="background:url(../img/pay.png) no-repeat center /cover"></div>
                    <div class="word">
                        <h1>余额支付</h1>
                        <h2>
                            <p class="number"><span>订单号：</span><span>
                                    20190313152319YXMPDD1624196296
                                </span></p>
                            <p class="money"><span>实付：</span><span>￥100.00</span></p>
                        </h2>
                    </div>
                </div>
                <div class="yuepay">
                    <h1>余额支付密码</h1>
                    <label for=""><input type="password"><a href="">忘记密码</a></label>
                    <span>请输入6位数字支付密码</span>
                </div>
                <a href="" class="button">确认付款</a>
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