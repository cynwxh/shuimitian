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
            <div id="shop">
                <div class="img" style="background:url(../img/pay1.png) no-repeat center /cover"></div>
                <div class="orderinfo">
                    <div class="title">
                        <span class="shopinfo">商品信息</span>
                        <span class="">数量</span>
                        <span class="">价格</span>
                        <span class="">运费</span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                            <div class="word">
                                <h1 class="hidden2">石荟教你每20分钟了解一个干预方法-新家长科普</h1>
                                <span>红色/大型</span>
                            </div>
                        </div>
                        <div class="number">1</div>
                        <div class="money">￥36.00</div>
                        <div class="freight">￥36.00</div>
                    </div>
                </div>
                <div class="pay">
                    <div class="address">
                        <h1>地址信息</h1>
                        <div class="receiver">
                            <p>收货人： <span>tony老师</span></p>
                            <div class="modify">修改</div>
                            <div class="switch">切换地址</div>
                        </div>
                        <div class="contact">
                            <p>联系方式：<span>186****6666</span></p>
                        </div>
                        <div class="collect">
                            <p>收货地址：<span>北京市丰台区汉威国际广场2区1号楼</span></p>
                        </div>
                    </div>
                    <div class="button-box">
                        <p><span>商品合计：</span><span>￥88.88</span></p>
                        <p><span>快递：</span><span>￥0.00</span></p>
                        <p><span>获得积分： </span><span>1098</span></p>
                        <div class="line"></div>
                        <p><span>应付总额</span><span class="money">￥109.80</span></p>
                        <a href="javascript:;" class="button">立即下单</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- 修改地址信息弹出层 -->
    <div id="modify" style="display:none;">
        <h1>修改地址</h1>
        <form action="">
            <label for="">所在地区：&nbsp;&nbsp;
                <select name="province" id="">
                    <option value="">河北省</option>
                    <option value="">山西省</option>
                    <option value="">山东省</option>
                </select>
                <select name="city" id="">
                    <option value="">北京市</option>
                    <option value="">天津市</option>
                    <option value="">上海市</option>
                </select>
                <select name="area" id="">
                    <option value="">朝阳区</option>
                    <option value="">海淀区</option>
                    <option value="">丰台区</option>
                </select>
            </label>
            <label for="">详细地址：&nbsp;&nbsp;
                <textarea name="" id="" cols="30" rows="10" placeholder="详细地址、街道、门牌号等"></textarea>
            </label>
            <label for="">收货人：&nbsp;&nbsp;<input type="text" class="user">手机号码:&nbsp;&nbsp;<input type="text" class="phone"></label>
            <label for=""><input type="checkbox">设为默认</label>
        </form>
    </div>
    <!-- 切换地址弹出层 -->
    <div id="switch" style="display:none">
        <h1>切换地址</h1>
        <table class="layui-table" lay-skin="line">
            <colgroup>
                <col width="150">
                <col width="350">
                <col width="200">
                <col width="200">
            </colgroup>
            <thead>
                <tr>
                    <td>收货人</td>
                    <td>地址</td>
                    <td>联系方式</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>tony老师</td>
                    <td>北京市丰台区南四环西路汉威国际广场2区1号楼6M层</td>
                    <td>186****6666</td>
                    <td>
                        <div class="select">选择地址</div>
                    </td>
                </tr>
                <tr>
                    <td>tony老师</td>
                    <td>北京市丰台区南四环西路汉威国际广场2区1号楼6M层</td>
                    <td>186****6666</td>
                    <td>
                        <div class="select">选择地址</div>
                    </td>
                </tr>
                <tr>
                    <td>tony老师</td>
                    <td>北京市丰台区南四环西路汉威国际广场2区1号楼6M层</td>
                    <td>186****6666</td>
                    <td>
                        <div class="select">选择地址</div>
                    </td>
                </tr>
                <tr>
                    <td>tony老师</td>
                    <td>北京市丰台区南四环西路汉威国际广场2区1号楼6M层</td>
                    <td>186****6666</td>
                    <td>
                        <div class="select">选择地址</div>
                    </td>
                </tr>
                <tr>
                    <td>tony老师</td>
                    <td>北京市丰台区南四环西路汉威国际广场2区1号楼6M层</td>
                    <td>186****6666</td>
                    <td>
                        <div class="select">选择地址</div>
                    </td>
                </tr>
                <tr>
                    <td>tony老师</td>
                    <td>北京市丰台区南四环西路汉威国际广场2区1号楼6M层</td>
                    <td>186****6666</td>
                    <td>
                        <div class="select">选择地址</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- 公用立即下单弹出层 -->
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
                    $(".layui-layer #paypop .pay .success .button-s,.layui-layer #paypop .pay .error .button-e").on("click", function() {
                        layer.closeAll();
                    })
                }
            });
        })
        //点击修改地址
        $("#shop .pay .address .receiver .modify").on("click", function() {
            layer.open({
                title: "",
                scrollbar: false,
                type: 1,
                area: ['1440px', '704px'], //宽高
                content: $("#modify"),
                btn: ['确定', '取消']
            });
        })
        //点击切换地址
        $("#shop .pay .address .receiver .switch").on("click", function() {
            console.log(1)
            layer.open({
                title: "",
                scrollbar: false,
                type: 1,
                area: ['1440px', '894px'], //宽高
                content: $("#switch"),
                success: function() {
                    $(".layui-layer #switch table tbody tr td").on("click", function(e) {
                        if(e.target.className=="select"){
                            $(".layui-layer #switch table tbody tr td .select").removeClass("active");
                            $(e.target).addClass("active");
                            $(".layui-layer #switch table tbody tr").removeClass("active");
                            $(this).parent().addClass("active");
                        }
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