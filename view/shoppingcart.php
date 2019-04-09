<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/shoppingcart.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <div id="t-header">
        <input id="allcheck" type="checkbox">
        <span class="allselect allcheck">全选</span>
        <span class="goods-info">商品信息</span>
        <span class="goods-onemoney">单价</span>
        <span class="goods-number">数量</span>
        <span class="goods-allmoney">小计</span>
        <span class="goods-op">操作</span>
    </div>
    <ul id="t-body">
        <li class="t-body">
            <div class="line"></div>
            <input class="check" type="checkbox">
            <div class="goods-img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
            <div class="goods-info">
                <p class="goods-title">小月亮 数学蒙特梭利教具 早教益智玩具0-3岁 数学几何嵌板家庭装</p>
                <p class="goods-desc">大型套装</p>
            </div>
            <div class="goods-onemoney">
                <span>￥ 48.00</span>
            </div>
            <div class="goods-number">
                <div class="reduce">-</div>
                <div class="goods-num">1</div>
                <div class="add">+</div>
            </div>
            <div class="goods-allmoney">
                <span>￥ 48.00</span>
            </div>
            <div class="goods-op">
                <p class="shoucang">加入收藏夹</p>
                <p class="del">删除</p>
            </div>
        </li>
        <li class="t-body">
            <div class="line"></div>
            <input class="check" type="checkbox">
            <div class="goods-img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
            <div class="goods-info">
                <p class="goods-title">小月亮 数学蒙特梭利教具 早教益智玩具0-3岁 数学几何嵌板家庭装</p>
                <p class="goods-desc">大型套装</p>
            </div>
            <div class="goods-onemoney">
                <span>￥ 48.00</span>
            </div>
            <div class="goods-number">
                <div class="reduce">-</div>
                <div class="goods-num">1</div>
                <div class="add">+</div>
            </div>
            <div class="goods-allmoney">
                <span>￥ 48.00</span>
            </div>
            <div class="goods-op">
                <p class="shoucang">加入收藏夹</p>
                <p class="del">删除</p>
            </div>
        </li>
        <li class="t-body">
            <div class="line"></div>
            <input class="check" type="checkbox">
            <div class="goods-img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
            <div class="goods-info">
                <p class="goods-title">小月亮 数学蒙特梭利教具 早教益智玩具0-3岁 数学几何嵌板家庭装</p>
                <p class="goods-desc">大型套装</p>
            </div>
            <div class="goods-onemoney">
                <span>￥ 48.00</span>
            </div>
            <div class="goods-number">
                <div class="reduce">-</div>
                <div class="goods-num">1</div>
                <div class="add">+</div>
            </div>
            <div class="goods-allmoney">
                <span>￥ 48.00</span>
            </div>
            <div class="goods-op">
                <p class="shoucang">加入收藏夹</p>
                <p class="del">删除</p>
            </div>
        </li>
        <li class="t-body">
            <div class="line"></div>
            <input class="check" type="checkbox">
            <div class="goods-img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
            <div class="goods-info">
                <p class="goods-title">小月亮 数学蒙特梭利教具 早教益智玩具0-3岁 数学几何嵌板家庭装</p>
                <p class="goods-desc">大型套装</p>
            </div>
            <div class="goods-onemoney">
                <span>￥ 48.00</span>
            </div>
            <div class="goods-number">
                <div class="reduce">-</div>
                <div class="goods-num">1</div>
                <div class="add">+</div>
            </div>
            <div class="goods-allmoney">
                <span>￥ 48.00</span>
            </div>
            <div class="goods-op">
                <p class="shoucang">加入收藏夹</p>
                <p class="del">删除</p>
            </div>
        </li>
    </ul>
    <div id="t-footer">
        <span id="select">已选(0)</span>
        <span class="button" onclick="del()">批量删除</span>
        <div class="goods-money">
            <h1>商品合计: <span>￥0.00</span></h1>
            <h2>快递费用: <span>￥0.00</span></h2>
        </div>
        <div class="goods-price"><span>应付金额:</span><span class="price">￥ 0.00</span></div>
        <a href="javascript:;" onclick="order()">立即下单</a>
    </div>
    <script>
        var goodsnum = $(".t-body");
        var allcheck = $("#allcheck");
        var check = $(".check");
        var select = $("#select");
        var goodsArr = [];
        // 已选商品总价函数
        function goodsPrice() {
            goodsArr = [];
            var price = 0;
            for (i = 0; i < check.length; i++) {
                if (check[i].checked) {
                    goodsInfo = {
                        1: $(".t-body")[i]
                    };
                    goodsArr.push(goodsInfo);
                    price += $(goodsnum[i]).find(".goods-allmoney span").text().substr(2)*1
                    console.log(price)
                }
            }
            select.text(`已选(${goodsArr.length})`);
            $(".goods-money h1 span").text('￥'+price+".00");
            $(".goods-price .price").text('￥'+(price+$(".goods-money h2 span").text().substr(2)*1)+".00");
        }
        // 点击全选功能
        allcheck.on("click", function() {
            check.prop("checked", this.checked);
            if (allcheck.prop("checked")) {
                $(".allselect").text("取消全选");
            } else {
                $(".allselect").text("全选");
            }
            goodsPrice();
        })
        $("[type=checkbox]").change(goodsPrice());
        // 购物车物品数量加减功能
        goodsnum.on("click", function(e) {
            var num = $(this).find(".goods-num").text();
            var onemoney = $(this).find(".goods-onemoney span").text().substr(2) * 1;
            var allmoneyNode = $(this).find(".goods-allmoney span");
            if (e.target.className == "reduce") {
                num--;
                if (num < 1) {
                    num = 1;
                }
            } else if (e.target.className == "add") {
                num++;
            }
            $(this).find(".goods-num").text(num);
            var allmoney = num * onemoney;
            allmoneyNode.text(`￥ ${allmoney}.00`);
            goodsPrice();
        })

        // 点击批量删除
        function del() {
            $.ajax({
                url: "",
                type: "POST",
                data: goodsArr,
                success: function(res) {
                    console.log(res)
                },
                erroe(err) {
                    console.log(err)
                }
            })
            layer.confirm('您是如何看待前端开发？', {
                btn: ['重要', '奇葩'] //按钮
            }, function() {
                layer.msg('的确很重要', {
                    icon: 1
                });
            }, function() {
                layer.msg('也可以这样', {
                    time: 20000, //20s后自动关闭
                    btn: ['明白了', '知道了']
                });
            });
        }
        // 点击收藏
        $(".shoucang").click(function() {
            layer.msg("已添加至您的收藏夹")
        })
        // 点击删除
        $(".goods-op .del").click(function() {
            layer.confirm('您是如何看待前端开发？', {
                btn: ['重要', '奇葩'] //按钮
            }, function() {
                layer.msg('的确很重要', {
                    icon: 1
                });
            }, function() {
                layer.msg('也可以这样', {
                    time: 20000, //20s后自动关闭
                    btn: ['明白了', '知道了']
                });
            });
        })
        // 点击下单
        function order() {
            $.ajax({
                url: "",
                type: "POST",
                data: goodsArr,
                success: function(res) {
                    console.log(res)
                },
                error: function(err) {
                    console.log(err)
                }
            })
        }
    </script>
    <!-- 公用返回顶部 -->
    <?php include "common/backtop.php" ?>
    <!-- 公用登录 -->
    <?php include "common/login.php" ?>
    <!-- 公用底部 -->
    <?php include "common/footer.php" ?>
</body>

</html>