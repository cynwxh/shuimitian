<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/personal.css">
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <div class="container">
            <!-- 左侧导航 -->
            <div id="list">
                <div class="title">个人中心</div>
                <ul>
                    <li>基本信息</li>
                    <li>宝宝信息</li>
                    <li>账号与安全</li>
                    <li>订单管理</li>
                    <li>我的收藏</li>
                    <li>我的余额</li>
                    <li>宝宝评测</li>
                    <li>我的课程表</li>
                    <li>购物车</li>
                    <li>地址管理</li>
                    <li>我的积分</li>
                    <li>我的消息</li>
                    <li>我的教师课程</li>
                    <li>店面管理</li>
                </ul>
            </div>
            <!-- 右侧内容区域 -->
            <div id="content">
                <ul>
                    <!-- 基本信息 -->
                    <li class="info">
                        <div class="nav">
                            <span>基本信息</span>
                        </div>
                        <div class="main">
                            <div class="card" id="info">
                                <div class="head" style="background:url(../img/goods.png) no-repeat center /cover">
                                <i class="iconfont">&#xe652;</i>
                                <span>tony老师</span>
                                <input type="file" id="file" style="filter:alpha(opacity=0);opacity:0;width: 0;height: 0;"/>
                            </div>
                                <h1>基本信息</h1>
                                <div class="name">
                                    <label for="">姓名</label>
                                    <input type="text">
                                </div>
                                <div class="phone">
                                    <label for="">手机号</label>
                                    <span>186****6666</span>
                                    <a href="">修改</a>
                                </div>
                                <div class="sex">
                                    <label for="">性别</label>
                                    <label for="man"><input name="sex" value="man" type="radio">男</label>
                                    <label for="woman"><input name="sex" value="woman" type="radio">女</label>
                                </div>
                                <div class="birthday">
                                    <label for="">生日</label>
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input" id="birthday">
                                    </div>
                                </div>
                                <div class="id">
                                    <label for="">身份证</label>
                                    <input type="text">
                                </div>
                                <div class="vocation">
                                    <label for="">职业</label>
                                    <input type="text">
                                </div>
                                <div class="address">
                                    <label for="">现居</label>
                                    <input type="text">
                                </div>
                                <div class="button">保存</div>
                            </div>
                        </div>
                    </li>
                    <!-- 宝宝信息 -->
                    <li class="babyinfo">
                        <div class="nav">
                            <span>宝宝信息</span>
                        </div>
                        <div class="main">
                            <div class="card" id="babyinfo">
                            <div class="head" style="background:url(../img/goods.png) no-repeat center /cover">
                                <i class="iconfont">&#xe652;</i>
                                <span>tony老师</span>
                                <input type="file" id="file" style="filter:alpha(opacity=0);opacity:0;width: 0;height: 0;"/>
                                <h1>基本信息</h1>
                                <div class="name">
                                    <label for="">姓名</label>
                                    <input type="text">
                                </div>
                                <div class="phone">
                                    <label for="">手机号</label>
                                    <span>186****6666</span>
                                    <a href="">修改</a>
                                </div>
                                <div class="sex">
                                    <label for="">性别</label>
                                    <label for=""><input name="sex" type="radio">男</label>
                                    <label for=""><input name="sex" type="radio">女</label>
                                </div>
                                <div class="birthday">
                                    <label for="">生日</label>
                                    <div class="layui-input-inline">
                                        <input type="text" class="layui-input" id="babybirthday">
                                    </div>
                                </div>
                                <div class="id">
                                    <label for="">身份证</label>
                                    <input type="text">
                                </div>
                                <div class="vocation">
                                    <label for="">职业</label>
                                    <input type="text">
                                </div>
                                <div class="address">
                                    <label for="">现居</label>
                                    <input type="text">
                                </div>
                                <div class="button">保存</div>
                            </div>
                        </div>
                    </li>
                    <!-- 账号与安全 -->
                    <li class="safety">
                        <div class="nav">
                            <span>修改手机号</span>
                            <span>修改密码</span>
                            <span>修改支付密码</span>
                        </div>
                        <div class="main">
                            <!-- 修改手机号 -->
                            <div class="card" id="phone">
                                <!-- 修改手机号第一步 -->
                                <div class="process process1">
                                    <div class="img" style="background:url(../img/process1-1.png) no-repeat center /cover"></div>
                                    <h1>已绑定手机号：18335692140</h1>
                                    <label for=""><input type="text"><span>获取验证码</span></label>
                                    <a href="javascript:;" class="button">下一步</a>
                                </div>
                                <!-- 修改手机号第二步 -->
                                <div class="process process2">
                                    <div class="img" style="background:url(../img/process1-2.png) no-repeat center /cover"></div>
                                    <input type="text" placeholder="请输入手机号">
                                    <label for=""><input type="text"><span>获取验证码</span></label>
                                    <a href="javascript:;" class="button">确定</a>
                                </div>
                                <!-- 修改手机号第三步 -->
                                <div class="process process3">
                                    <div class="img" style="background:url(../img/process1-3.png) no-repeat center /cover"></div>
                                    <h1>恭喜您！手机号码修改成功！</h1>
                                    <a href="javascript:;" class="button">确定</a>
                                </div>
                            </div>
                            <!-- 修改密码 -->
                            <div class="card" id="password">
                                <!-- 修改密码第一步 -->
                                <div class="process process1-1">
                                    <div class="img" style="background:url(../img/process2-1.png) no-repeat center /cover"></div>
                                    <input type="password" placeholder="请输入原密码">
                                    <a href="javascript:;" class="link">使用手机号验证</a>
                                    <a href="javascript:;" class="button">下一步</a>
                                </div>
                                <!-- 修改密码改手机验证 -->
                                <div class="process process1-2">
                                    <div class="img" style="background:url(../img/process1-1.png) no-repeat center /cover"></div>
                                    <h1>已绑定手机号：18335692140</h1>
                                    <label for=""><input type="text"><span>获取验证码</span></label>
                                    <a href="javascript:;" class="button">下一步</a>
                                </div>
                                <!-- 修改密码第二步 -->
                                <div class="process process2">
                                    <div class="img" style="background:url(../img/process2-2.png) no-repeat center /cover"></div>
                                    <input class="pass" type="password" placeholder="请输入密码">
                                    <input class="repass" type="password" placeholder="请再次输入密码">
                                    <a href="javascript:;" class="button">确定</a>
                                </div>
                                <!-- 修改密码第三步 -->
                                <div class="process process3">
                                    <div class="img" style="background:url(../img/process2-3.png) no-repeat center /cover"></div>
                                    <h1>恭喜您！密码修改成功！</h1>
                                    <a href="javascript:;" class="button">确定</a>
                                </div>
                            </div>
                            <!-- 修改支付密码 -->
                            <div class="card" id="paypass">
                                <!-- 修改密码第一步密码验证 -->
                                <div class="process process1-1">
                                    <div class="img" style="background:url(../img/process2-1.png) no-repeat center /cover"></div>
                                    <input type="password" placeholder="请输入原密码">
                                    <a href="javascript:;" class="link">使用手机号验证</a>
                                    <a href="javascript:;" class="button">下一步</a>
                                </div>
                                <!-- 修改支付密码第一步手机验证 -->
                                <div class="process process1-2">
                                    <div class="img" style="background:url(../img/process1-1.png) no-repeat center /cover"></div>
                                    <h1>已绑定手机号：18335692140</h1>
                                    <label for=""><input type="text"><span>获取验证码</span></label>
                                    <a href="javascript:;" class="button">下一步</a>
                                </div>
                                <!-- 修改密码第二步 -->
                                <div class="process process2">
                                    <div class="img" style="background:url(../img/process2-2.png) no-repeat center /cover"></div>
                                    <input class="pass" type="password" placeholder="请输入密码">
                                    <input class="repass" type="password" placeholder="请再次输入密码">
                                    <a href="javascript:;" class="button">确定</a>
                                </div>
                                <!-- 修改密码第三步 -->
                                <div class="process process3">
                                    <div class="img" style="background:url(../img/process2-3.png) no-repeat center /cover"></div>
                                    <h1>恭喜您！密码修改成功！</h1>
                                    <a href="javascript:;" class="button">确定</a>
                                </div>
                            </div>
                        </div>
                        <div class="line">
                            <h1>安全服务提示</h1>
                            <p>• 确认您登录的是水米田教育网站，注意防范进入钓鱼网站，不要轻信各种即时通讯工具发送的课程、商品或支付链接，谨防网络诈骗<br>• 建议您安装杀毒软件，并定期更新操作系统等软件补丁，确保帐号及交易安全</p>
                        </div>
                    </li>
                    <!-- 订单管理 -->
                    <li class="order">
                        <div class="nav">
                            <span>课程订单</span>
                            <span>商城订单</span>
                        </div>
                        <div class="main">
                            <!-- 课程订单 -->
                            <div class="card" id="course">
                                <!-- 检索 -->
                                <div class="retrieval">
                                    <div class="class">
                                        <p>分类</p>
                                        <span>全部</span>
                                        <span>线上课程</span>
                                        <span>03亲子</span>
                                    </div>
                                    <div class="status">
                                        <p>状态</p>
                                        <span>全部</span>
                                        <span>待支付</span>
                                        <span>已支付</span>
                                        <span>已取消</span>
                                    </div>
                                </div>
                                <h1>共5个课程订单</h1>
                                <!-- 检索结果列表 -->
                                <div class="list">
                                    <div class="item">
                                        <div class="info">
                                            <h1>
                                                <p>下单时间<span>2019-03-12</span></p>
                                                <p>订单号：<span>201903020000</span></p>
                                            </h1>
                                            <div class="content">
                                                <div class="img" style="background:url(../img/goods.png) no-repeat  center /cover"></div>
                                                <p><span>五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</span></p>
                                            </div>
                                        </div>
                                        <div class="money">￥ 699.00</div>
                                        <div class="hidden2 statu">订单已提交待付款中</div>
                                        <div class="button-box">
                                            <a href="" class="pay">立即付款</a>
                                            <a href="" class="cancel">取消订单</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="info">
                                            <h1>
                                                <p>下单时间<span>2019-03-12</span></p>
                                                <p>订单号：<span>201903020000</span></p>
                                            </h1>
                                            <div class="content">
                                                <div class="img" style="background:url(../img/goods.png) no-repeat  center /cover"></div>
                                                <p><span>五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</span></p>
                                            </div>
                                        </div>
                                        <div class="money">￥ 699.00</div>
                                        <div class="hidden2 statu">订单已支付</div>
                                        <div class="button-box">
                                            <a href="" class="pay">其他课程</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="info">
                                            <h1>
                                                <p>下单时间<span>2019-03-12</span></p>
                                                <p>订单号：<span>201903020000</span></p>
                                            </h1>
                                            <div class="content">
                                                <div class="img" style="background:url(../img/goods.png) no-repeat  center /cover"></div>
                                                <p>
                                                    <span>五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</span>
                                                    <span>2019-03-04</span>
                                                    <span>丰台区汉威国际广场</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="money">2课时</div>
                                        <div class="hidden2 statu">订单已提交待付款中</div>
                                        <div class="button-box">
                                            <a href="" class="pay">立即付款</a>
                                            <a href="" class="cancel">取消订单</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="info">
                                            <h1>
                                                <p>下单时间<span>2019-03-12</span></p>
                                                <p>订单号：<span>201903020000</span></p>
                                            </h1>
                                            <div class="content">
                                                <div class="img" style="background:url(../img/goods.png) no-repeat  center /cover"></div>
                                                <p>
                                                    <span>五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</span>
                                                    <span>2019-03-04</span>
                                                    <span>丰台区汉威国际广场</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="money">2课时</div>
                                        <div class="hidden2 statu">订单已支付</div>
                                        <div class="button-box">
                                            <a href="" class="pay">其他课程</a>
                                            <a href="" class="cancel">退款</a>
                                        </div>
                                    </div>
                                    <!-- 分页 -->
                                    <?php include "common/page.php" ?>
                                </div>
                            </div>
                            <!-- 商品订单 -->
                            <div class="card" id="shop">
                                <!-- 检索 -->
                                <div class="retrieval">
                                    <div class="class">
                                        <p>分类</p>
                                        <span>全部</span>
                                        <span>实体商场</span>
                                        <span>积分商城</span>
                                    </div>
                                    <div class="status">
                                        <p>状态</p>
                                        <span>全部</span>
                                        <span>待支付</span>
                                        <span>待发货</span>
                                        <span>待收货</span>
                                    </div>
                                </div>
                                <h1>共5个商城订单</h1>
                                <!-- 检索结果列表 -->
                                <div class="list">
                                    <div class="item">
                                        <div class="info">
                                            <h1>
                                                <p>下单时间<span>2019-03-12</span></p>
                                                <p>订单号：<span>201903020000</span></p>
                                            </h1>
                                            <div class="content">
                                                <div class="img" style="background:url(../img/goods.png) no-repeat  center /cover"></div>
                                                <p>
                                                    <span>五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</span>
                                                    <span>2019-02-12</span>
                                                    <span>丰台区汉威国际广场</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="money">￥ 36.00</div>
                                        <div class="button-box">
                                            <a href="javascript:;" class="pay see">查看详情</a>
                                        </div>
                                        <div class="details">
                                            <div class="orderd">
                                                <h1>订单详情</h1>
                                                <p><span>订单编号：</span><span>0000000000000</span></p>
                                                <p><span>时间：</span><span>2019-03-04</span></p>
                                                <p><span>数量：</span><span>9</span></p>
                                                <p><span>快递：</span><span>￥0.00</span></p>
                                                <p><span>收货地址：</span><span>丰台区汉威国际广场</span></p>
                                                <p><span>收货人</span><span>tony老师</span></p>
                                                <div class="line"></div>
                                                <div class="money">实付款：<span>￥ 699.00</span></div>
                                            </div>
                                            <div class="orders">
                                                <h1>订单状态</h1>
                                                <p>订单已提交，等待付款中</p>
                                            </div>
                                            <div class="button-box">
                                                <a href="" class="pay">立即付款</a>
                                                <a href="" class="cancel">取消订单</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="info">
                                            <h1>
                                                <p>下单时间<span>2019-03-12</span></p>
                                                <p>订单号：<span>201903020000</span></p>
                                            </h1>
                                            <div class="content">
                                                <div class="img" style="background:url(../img/goods.png) no-repeat  center /cover"></div>
                                                <p>
                                                    <span>五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</span>
                                                    <span>2019-02-12</span>
                                                    <span>丰台区汉威国际广场</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="money">￥ 36.00</div>
                                        <div class="button-box">
                                            <a href="javascript:;" class="pay see">查看详情</a>
                                        </div>
                                        <!-- 订单详情，默认隐藏 -->
                                        <div class="details">
                                            <div class="orderd">
                                                <h1>订单详情</h1>
                                                <p><span>订单编号：</span><span>0000000000000</span></p>
                                                <p><span>时间：</span><span>2019-03-04</span></p>
                                                <p><span>数量：</span><span>9</span></p>
                                                <p><span>快递：</span><span>￥0.00</span></p>
                                                <p><span>收货地址：</span><span>丰台区汉威国际广场</span></p>
                                                <p><span>收货人</span><span>tony老师</span></p>
                                                <div class="line"></div>
                                                <div class="money">实付款：<span>￥ 699.00</span></div>
                                            </div>
                                            <div class="orders">
                                                <h1>订单状态</h1>
                                                <p>2019-03-20 订单已付款，等待接单发货</p>
                                                <p>2019-03-20 已接单</p>
                                                <p>2019-03-20 包裹由物流公司揽收</p>
                                                <p>2019-03-20 订单已到达物流服务点</p>
                                                <p>2019-03-20 派送员：陈诚【18666667777】正在为您派件</p>
                                                <p>2019-03-20 您的包裹已完成签收，期待再次为你完成服务</p>
                                            </div>
                                            <div class="button-box">
                                                <a href="" class="pay">立即付款</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- 我的收藏 -->
                    <li class="collection">
                        <div class="nav">
                            <span>课程收藏</span>
                            <span>商品收藏</span>
                        </div>
                        <div class="main">
                            <!-- 课程收藏 -->
                            <div class="card" id="coursec">
                                <h1>共0个收藏</h1>
                                <div class="list">
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <?php include "common/page.php" ?>
                                </div>
                            </div>
                            <div class="card" id="shopc">
                                <!-- 检索 -->
                                <div class="retrieval">
                                    <div class="class">
                                        <p>分类</p>
                                        <span>全部</span>
                                        <span>实体商场</span>
                                        <span>积分商城</span>
                                    </div>
                                </div>
                                <h1>共0个商城订单</h1>
                                <!-- 检索结果列表 -->
                                <div class="list">
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p><span>￥198.00</span><a href="">移出</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p><span>￥198.00</span><a href="">移出</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p><span>￥198.00</span><a href="">移出</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p><span>￥198.00</span><a href="">移出</a></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p><span>￥198.00</span><a href="">移出</a></p>
                                        </div>
                                    </div>
                                    <?php include "common/page.php" ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- 我的余额 -->
                    <li class="yue">
                        <div class="nav">
                            <span>我的余额</span>
                            <span>水米田币充值</span>
                        </div>
                        <div class="main">
                            <!-- 我的余额 -->
                            <div class="card" id="balance">
                                <div class="yue">
                                    <h1><i class="iconfont">&#xe640;</i>水米田币</h1>
                                    <div class="use">
                                        <div class="money">可用余额<span>3600</span>币</div>
                                        <div class="link">
                                            <a href="">购买课程</a>
                                            <a href="">购买商品</a>
                                            <a href="">购买课时</a>
                                        </div>
                                    </div>
                                    <a href="" class="recharge">充值</a>
                                </div>
                                <div class="record">
                                    <h1><span>水米田消费记录</span><span>水米田币只保留最近30天记录</span></h1>
                                    <div class="table">
                                        <table class="layui-table" lay-skin="line">
                                            <colgroup>
                                                <col width="150">
                                                <col width="200">
                                                <col width="150">
                                                <col width="100">
                                                <col width="100">
                                                <col width="100">
                                                <col width="150">
                                                <col>
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>时间</th>
                                                    <th>订单号</th>
                                                    <th>订单类型</th>
                                                    <th>收支类型</th>
                                                    <th>收支额度</th>
                                                    <th>账户余额</th>
                                                    <th>操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>2019021635000</td>
                                                    <td>商城订单</td>
                                                    <td>交易</td>
                                                    <td>-200</td>
                                                    <td>3600</td>
                                                    <td><a href="">删除</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>2019021635000</td>
                                                    <td>商城订单</td>
                                                    <td>交易</td>
                                                    <td>-200</td>
                                                    <td>3600</td>
                                                    <td><a href="">删除</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>2019021635000</td>
                                                    <td>商城订单</td>
                                                    <td>交易</td>
                                                    <td>-200</td>
                                                    <td>3600</td>
                                                    <td><a href="">删除</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>2019021635000</td>
                                                    <td>商城订单</td>
                                                    <td>交易</td>
                                                    <td>-200</td>
                                                    <td>3600</td>
                                                    <td><a href="">删除</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php include "common/page.php" ?>
                                    </div>
                                </div>
                            </div>
                            <!-- 水米田币充值 -->
                            <div class="card" id="recharge">
                                <h1>水米田币单位：1币/元</h1>
                                <div class="list">
                                    <div class="item">
                                        <p><i class="iconfont">&#xe640;</i><span>1000</span>币</p>
                                        <p>￥800.00</p>
                                        <p>省￥100.00</p>
                                    </div>
                                    <div class="item">
                                        <p><i class="iconfont">&#xe640;</i><span>1000</span>币</p>
                                        <p>￥800.00</p>
                                        <p>省￥100.00</p>
                                    </div>
                                    <div class="item">
                                        <p><i class="iconfont">&#xe640;</i><span>1000</span>币</p>
                                        <p>￥800.00</p>
                                        <p>省￥100.00</p>
                                    </div>
                                    <div class="item">
                                        <p><i class="iconfont">&#xe640;</i><span>1000</span>币</p>
                                        <p>￥800.00</p>
                                        <p>省￥100.00</p>
                                    </div>
                                    <div class="item">
                                        <p><i class="iconfont">&#xe640;</i><span>1000</span>币</p>
                                        <p>￥800.00</p>
                                        <p>省￥100.00</p>
                                    </div>
                                </div>
                                <h2>选择支付方式</h2>
                                <div class="pay-method">
                                    <div class="pay">
                                        <div class="radio"></div>
                                        <img src="../img/alipay.png" alt="">
                                    </div>
                                    <div class="pay">
                                        <div class="radio"></div>
                                        <img src="../img/wxpay.png" alt="">
                                    </div>
                                </div>
                                <a href="javascript:;" class="button">确认支付</a>
                                <!-- 公用确认支付弹出层 -->
                                <?php include "common/paypop.php" ?>
                            </div>
                        </div>
                    </li>
                    <!-- 宝宝评测 -->
                    <li>
                        <div class="nav">
                            <span>宝宝评测</span>
                        </div>
                        <div class="main"></div>
                    </li>
                    <!-- 我的课程表 -->
                    <li class="syllabus">
                        <div class="nav">
                            <span>我的课时</span>
                            <span>我的预约</span>
                            <span>线上课程</span>
                        </div>
                        <div class="main">
                            <!-- 我的课程 -->
                            <div class="card" id="hour">
                                <div class="list">
                                    <div class="item">
                                        <div class="title">
                                            <h1><i class="iconfont">&#xe663;</i>课时</h1>
                                            <h2><i class="iconfont">&#xe77e;</i>北京万达广场店</h2>
                                        </div>
                                        <div class="details">
                                            <h1>
                                                <p>可用课时</p>
                                                <p><span>48</span>课时</p>
                                            </h1>
                                            <h2>
                                                <p>已用课时</p>
                                                <p>0<span>课时</span></p>
                                            </h2>
                                        </div>
                                        <div class="button-box">
                                            <a href="" class="hour">购买课时</a>
                                            <a href="" class="course">预约课程</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="title">
                                            <h1><i class="iconfont">&#xe663;</i>课时</h1>
                                            <h2><i class="iconfont">&#xe77e;</i>北京万达广场店</h2>
                                        </div>
                                        <div class="details">
                                            <h1>
                                                <p>可用课时</p>
                                                <p><span>48</span>课时</p>
                                            </h1>
                                            <h2>
                                                <p>已用课时</p>
                                                <p>0<span>课时</span></p>
                                            </h2>
                                        </div>
                                        <div class="button-box">
                                            <a href="" class="hour">购买课时</a>
                                            <a href="" class="course">预约课程</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="title">
                                            <h1><i class="iconfont">&#xe663;</i>课时</h1>
                                            <h2><i class="iconfont">&#xe77e;</i>北京万达广场店</h2>
                                        </div>
                                        <div class="details">
                                            <h1>
                                                <p>可用课时</p>
                                                <p><span>48</span>课时</p>
                                            </h1>
                                            <h2>
                                                <p>已用课时</p>
                                                <p>0<span>课时</span></p>
                                            </h2>
                                        </div>
                                        <div class="button-box">
                                            <a href="" class="hour">购买课时</a>
                                            <a href="" class="course">预约课程</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 我的预约 -->
                            <div class="card" id="bespeak">
                                <h1>共4个课程</h1>
                                <div class="list">
                                    <div class="item">
                                        <div class="info">
                                            <h1>
                                                <p>上课时间:<span>2019-03-12 09：00</span></p>
                                            </h1>
                                            <div class="content">
                                                <div class="img" style="background:url(../img/goods.png) no-repeat  center /cover"></div>
                                                <p><span>五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</span></p>
                                            </div>
                                        </div>
                                        <div class="money">2课时</div>
                                        <div class="hidden2 statu">待上课</div>
                                        <div class="button-box">
                                            <a href="" class="cancel">取消课程</a>
                                        </div>
                                    </div>

                                    <!-- 分页 -->
                                    <?php include "common/page.php" ?>
                                </div>
                            </div>
                            <!-- 线上课程 -->
                            <div class="card" id="online-course">
                                <div class="list">
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--购物车 -->
                    <li>
                        <div class="nav">
                            <span>购物车</span>
                        </div>
                        <div class="main"></div>
                    </li>
                    <!-- 地址管理 -->
                    <li class="address">
                        <div class="nav">
                            <span>地址管理</span>
                            <a href="javascript:;" class="add">新增地址</a>
                        </div>
                        <div class="main">
                            <div class="card" id="address">
                                <table class="layui-table" lay-skin="line">
                                    <colgroup>
                                        <col width="100">
                                        <col width="350">
                                        <col width="150">
                                        <col width="80">
                                        <col width="80">
                                        <col width="120">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>收货人</th>
                                            <th>地址</th>
                                            <th>联系方式</th>
                                            <th>操作</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>tony拉老师</td>
                                            <td>北京市丰台区南四环西路汉威国际广场2区1号楼6M</td>
                                            <td>17835066898</td>
                                            <td><a href="javascript:;" class="edit">编辑</a></td>
                                            <td><a href="javascript:;" class="delete">删除</a></td>
                                            <td><a href="javascript:;" class="default">设为默认地址</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- 新增地址信息弹出层 -->
                                <div id="add" style="display:none;">
                                    <h1>新增地址</h1>
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
                                <!-- 修改地址信息弹出层 -->
                                <div id="edit" style="display:none;">
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
                            </div>
                        </div>
                    </li>
                    <!-- 我的积分 -->
                    <li class="integral">
                        <div class="nav">
                            <span>我的积分</span>
                            <span>积分商城</span>
                            <span>我的分销</span>
                        </div>
                        <div class="main">
                            <div class="card" id="integral">
                                <div class="info">
                                    <span class="use">可用积分</span>
                                    <span class="num">3600</span>
                                    <span class="rule"><i class="iconfont">&#xe62a;</i>积分规则</span>
                                    <span class="mycode">我的分销邀请码：</span>
                                    <span id="code" class="code">txs306kdsy1</span>
                                    <input id="input" type="hidden">
                                    <span class="copy">复制</span>
                                </div>
                                <div class="record">
                                    <h1><span>积分明细</span><span>积分消费记录只保留最近30天记录</span></h1>
                                    <div class="table">
                                        <table class="layui-table" lay-skin="line">
                                            <colgroup>
                                                <col width="150">
                                                <col width="200">
                                                <col width="150">
                                                <col width="100">
                                                <col width="100">
                                                <col width="100">
                                                <col width="150">
                                                <col>
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>时间</th>
                                                    <th>订单号</th>
                                                    <th>订单类型</th>
                                                    <th>收支类型</th>
                                                    <th>收支额度</th>
                                                    <th>积分余额</th>
                                                    <th>操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>2019021635000</td>
                                                    <td>商城订单</td>
                                                    <td>交易</td>
                                                    <td>-200</td>
                                                    <td>3600</td>
                                                    <td><a href="">删除</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>2019021635000</td>
                                                    <td>商城订单</td>
                                                    <td>交易</td>
                                                    <td>-200</td>
                                                    <td>3600</td>
                                                    <td><a href="">删除</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>2019021635000</td>
                                                    <td>商城订单</td>
                                                    <td>交易</td>
                                                    <td>-200</td>
                                                    <td>3600</td>
                                                    <td><a href="">删除</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>2019021635000</td>
                                                    <td>商城订单</td>
                                                    <td>交易</td>
                                                    <td>-200</td>
                                                    <td>3600</td>
                                                    <td><a href="">删除</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php include "common/page.php" ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="shop">
                            </div>
                            <div class="card" id="distribution">
                                <div class="info">
                                    <h1>分销规则</h1>
                                    <p>1、教师优雅的走到教具柜面前，站在所取教具的前面。2、教师身体微微向前，下蹲至教具前面，拇指放在把手上方，四指托住托盘底部，轻轻的将教具提至胸前，走到教具展示位置，坐下。3、教师先观察碗中的核桃，停顿。4、用非主控手扶碗，主控手将核桃从碗中慢慢抓起。5、将手中核桃平移到另一个碗的上方，停顿观察，将核桃放入碗中。6、依次将左边碗中的核桃转移到右边碗中。7、稍有停顿后，再将核桃抓回到原来的碗中。8、收工作， 教师起身将椅子推近至桌子下方，将工作送回到日常教具</p>
                                </div>
                                <div class="record">
                                    <h1><span>积分明细</span><span>积分消费记录只保留最近30天记录</span></h1>
                                    <div class="table">
                                        <table class="layui-table" lay-skin="line">
                                            <colgroup>
                                                <col width="200">
                                                <col width="320">
                                                <col width="200">
                                                <col width="200">
                                                <col>
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>受邀时间</th>
                                                    <th>好友手机号</th>
                                                    <th>积分情况</th>
                                                    <th>积分余额</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>188****8888</td>
                                                    <td>+200</td>
                                                    <td>3600</td>
                                                </tr>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>188****8888</td>
                                                    <td>+200</td>
                                                    <td>3600</td>
                                                </tr>
                                                <tr>
                                                    <td>2019-03-06</td>
                                                    <td>188****8888</td>
                                                    <td>+200</td>
                                                    <td>3600</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php include "common/page.php" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- 我的消息 -->
                    <li class="massage">
                        <div class="nav">
                            <span>我的消息</span>
                        </div>
                        <div class="main">
                            <div class="card" id="massage">
                                <div class="list">
                                    <div class="item">
                                        <div class="title">
                                            <div class="head" style="background:url(../img/goods.png) no-repeat center /cover;"></div>
                                            <span class="user">活动</span>
                                            <span class="date">2018-03-02</span>
                                        </div>
                                        <div class="content">
                                            留言内容
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="title">
                                            <div class="head" style="background:url(../img/goods.png) no-repeat center /cover;"></div>
                                            <span class="user">活动</span>
                                            <span class="date">2018-03-02</span>
                                        </div>
                                        <div class="content">
                                            留言内容
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="title">
                                            <div class="head" style="background:url(../img/goods.png) no-repeat center /cover;"></div>
                                            <span class="user">活动</span>
                                            <span class="date">2018-03-02</span>
                                        </div>
                                        <div class="content">
                                            留言内容
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="title">
                                            <div class="head" style="background:url(../img/goods.png) no-repeat center /cover;"></div>
                                            <span class="user">活动</span>
                                            <span class="date">2018-03-02</span>
                                        </div>
                                        <div class="content">
                                            留言内容
                                        </div>
                                    </div>
                                </div>
                                <?php include "common/page.php" ?>
                            </div>
                        </div>
                    </li>
                    <!-- 我的教师课程 -->
                    <li class="teacher">
                        <div class="nav">
                            <span>线上学习课程</span>
                            <span>线下教授课程</span>
                        </div>
                        <div class="main">
                            <div class="card" id="study">
                                <h1>共0个课程</h1>
                                <div class="list">
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="word">
                                            <h1 class="hidden2">五加一周三讲堂：康复知识、听力科普、家长心声，就等你来！</h1>
                                            <p>线上线程|视频</p>
                                            <a href="">移出</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="teaching">
                                <div class="date">
                                    <div class="prev"><i class="iconfont">&#xe667;</i></div>
                                    <div class="date-list">
                                        <!-- 这里是js动态生成的日期节点 -->
                                    </div>
                                    <div class="next"><i class="iconfont">&#xe601;</i></div>
                                </div>
                                <div class="list">
                                    <div class="item">
                                        <div class="line"></div>
                                        <h1>水米田教育03亲子-大体课</h1>
                                        <span>已报名8人</span>
                                        <span>8:00~10:30</span>
                                        <a href="javascript:;">进入课程</a>
                                    </div>
                                    <div class="item">
                                        <div class="line"></div>
                                        <h1>水米田教育03亲子-大体课</h1>
                                        <span>已报名8人</span>
                                        <span>8:00~10:30</span>
                                        <a href="javascript:;">进入课程</a>
                                    </div>
                                    <div class="item">
                                        <div class="line"></div>
                                        <h1>水米田教育03亲子-大体课</h1>
                                        <span>已报名8人</span>
                                        <span>8:00~10:30</span>
                                        <a href="javascript:;">进入课程</a>
                                    </div>
                                    <div class="item">
                                        <div class="line"></div>
                                        <h1>水米田教育03亲子-大体课</h1>
                                        <span>已报名8人</span>
                                        <span>8:00~10:30</span>
                                        <a href="javascript:;">进入课程</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="teachingd">
                                <div class="info">
                                    <div class="info-title">
                                        <h1>水米田亲子-大体课</h1>
                                        <h2><span>11:00开课</span><span>报名人数：8</span></h2>
                                    </div>
                                    <a href="javascript:;" class="button">课程结束</a>
                                </div>
                                <table class="layui-table" lay-skin="line">
                                    <colgroup>
                                        <col width="200">
                                        <col width="200">
                                        <col width="300">
                                        <col width="100">
                                        <col width="100">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>家长姓名</th>
                                            <th>宝宝姓名</th>
                                            <th>联系方式</th>
                                            <th>是否到课</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>tony老师</td>
                                            <td>tony老师的儿子</td>
                                            <td>18888886666</td>
                                            <td><a href="javascript:;" class="active">已到</a></td>
                                            <td><a href="javascript:;">未到</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- 店面管理 -->
                    <li class="store">
                        <div class="nav">
                            <span>店面信息</span>
                            <span>教师管理</span>
                            <span>课程管理</span>
                            <span class="yue">余额信息</span>
                            <span>会员管理</span>
                        </div>
                        <div class="main">
                            <div class="card" id="store">
                                <div class="storename">
                                    <span>店面名称</span>
                                    <input type="text">
                                </div>
                                <div class="storeaddress">
                                    <span>店面地址</span>
                                    <div id="map"></div>
                                </div>
                                <div class="storeimg">
                                    <span>店面图片</span>
                                    <div class="list">
                                        <div class="item">
                                            <img src="../img/goods.png" alt="">
                                            <div class="bg">
                                                <div class="del">×</div>
                                                <span>删除</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="../img/goods.png" alt="">
                                            <div class="bg">
                                                <div class="del">×</div>
                                                <span>删除</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="../img/goods.png" alt="">
                                            <div class="bg">
                                                <div class="del">×</div>
                                                <span>删除</span>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="../img/goods.png" alt="">
                                            <div class="bg">
                                                <div class="del">×</div>
                                                <span>删除</span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="file" value="上传图片">
                                </div>
                                <div class="storedesc">
                                    <span>店面描述</span>
                                    <textarea name="" id="" cols="30" rows="10">添加文字描述</textarea>
                                </div>
                                <a href="javascript:;">确认并保存</a>
                            </div>
                            <div class="card" id="teacher">
                                <div class="list">
                                    <div class="item">
                                        <div class="head" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="info">
                                            <h1>教师姓名:<span>李时珍</span></h1>
                                            <h2>教师电话:<span>18866668888</span></h2>
                                        </div>
                                        <a href="">修改信息</a>
                                        <div class="del">×</div>
                                    </div>
                                    <div class="item">
                                        <div class="head" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="info">
                                            <h1>教师姓名:<span>李时珍</span></h1>
                                            <h2>教师电话:<span>18866668888</span></h2>
                                        </div>
                                        <a href="">修改信息</a>
                                        <div class="del">×</div>
                                    </div>
                                    <div class="item">
                                        <div class="head" style="background:url(../img/goods.png) no-repeat center /cover"></div>
                                        <div class="info">
                                            <h1>教师姓名:<span>李时珍</span></h1>
                                            <h2>教师电话:<span>18866668888</span></h2>
                                        </div>
                                        <a href="">修改信息</a>
                                        <div class="del">×</div>
                                    </div>
                                    <div class="item add">
                                        <div class="head" style="background:#eee;"></div>
                                        <div class="info">
                                            <h1><span></span></h1>
                                            <h2><span></span></h2>
                                        </div>
                                        <a href="">添加信息</a>
                                        <div class="del">×</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="coursem">
                                <div class="date">
                                    <div class="prev"><i class="iconfont">&#xe667;</i></div>
                                    <div class="date-list">
                                        <!-- 这里是js动态生成的日期节点 -->
                                    </div>
                                    <div class="next"><i class="iconfont">&#xe601;</i></div>
                                </div>
                                <div class="list">
                                    <div class="item">
                                        <div class="line"></div>
                                        <h1>水米田教育03亲子-大体课</h1>
                                        <h2>已报名8人</h2>
                                        <h3>8:00~10:30</h3>
                                        <a href="javascript:;" class="del">取消课程</a>
                                    </div>
                                    <div class="item add">
                                        <div class="line"></div>
                                        <h1></h1>
                                        <h2></h2>
                                        <h3></h3>
                                        <a href="javascript:;">添加课程</a>
                                    </div>
                                </div>
                                <div class="addcourse">
                                    <h1>添加/修改课程信息</h1>
                                    <div class="form coursename">
                                        <span>课程名称</span>
                                        <input type="text" placeholder="请输入课程名称">
                                    </div>
                                    <div class="form personalnum">
                                        <span>最多人数</span>
                                        <input type="text" placeholder="请输入最多人数">
                                    </div>
                                    <div class="form teacher">
                                        <span>授课教师</span>
                                        <select name="" id="">
                                            <option value="">李老师</option>
                                            <option value="">陈老师</option>
                                            <option value="">王老师</option>
                                        </select>
                                    </div>
                                    <div class="form time">
                                        <span>课程时间</span>
                                        <div class="layui-inline">
                                            <div class="layui-input-inline">
                                                <input type="text" class="layui-input" id="time" placeholder="HH:mm:ss">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">确认并保存</a>
                                </div>
                            </div>
                            <div class="card" id="yue"></div>
                            <div class="card" id="vip">
                                <table class="layui-table" lay-skin="line">
                                    <colgroup>
                                        <col width="200">
                                        <col width="200">
                                        <col width="250">
                                        <col width="200">
                                        <col width="200">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>会员姓名</th>
                                            <th>联系方式</th>
                                            <th>课时包套餐</th>
                                            <th>剩余课时</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>陈诚</td>
                                            <td>18688886666</td>
                                            <td>96课时</td>
                                            <td>12课时</td>
                                            <td><a href="">清空课时</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.14&key=22a576a0cc76364d643523b7cdaf918e"></script>
    <script src="../js/personal.js"></script>
    <!-- 公用返回顶部 -->
    <?php include "common/backtop.php" ?>
    <!-- 公用登录 -->
    <?php include "common/login.php" ?>
    <!-- 公用底部 -->
    <?php include "common/footer.php" ?>
</body>

</html>