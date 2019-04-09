//默认列表，内容，导航第一项内容
$(function () {
    $("#list ul li").eq(0).addClass("active");
    $("#content ul li").eq(0).show().siblings().hide();
    $("#content ul li .nav span").eq(0).addClass("active");
})
//点击列表显示对应内容
$("#list ul li").on("click", function () {
    $("#list ul li").removeClass("active");
    $(this).addClass("active");
    $("#content ul li").eq($(this).index()).show().siblings().hide();
    $("#content ul li").eq($(this).index()).find(".nav span").eq(0).addClass("active");
    $("#content ul li").eq($(this).index()).find(".main .card").eq(0).show().siblings().hide();
    $("#content ul li").eq($(this).index()).find(".main .card .process").eq(0).show().siblings().hide(); //账号与安全默认显示修改手机号第一步
})
//点击内容导航显示对应内容
$("#content ul li .nav span").on("click", function () {
    $("#content ul li .nav span").removeClass("active");
    $(this).addClass("active");
    $(this).parent().parent().find(".main .card").eq($(this).index()).show().siblings().hide();
    $(this).parent().parent().find(".main .card").eq($(this).index()).find(".process").eq(0).show().siblings().hide(); //账号与安全默认显示修改手机号第一步
})
//点击保存
$("#info .button").on("click", function () {
    var info = {
        user: $("#info .name input").val(),
        phone: $("#info .phone span").text(),
        sex: $("#info .sex input[type='radio']:checked").val(),
        birthday: $("#info .birthday input").val(),
        id: $("#info .id input").val(),
        vocation: $("#info .vocation input").val(),
        address: $("#info .address input").val()
    }
    console.log(info)
})
//宝宝信息点击保存
$("#babyinfo .button").on("click", function () {
    var babyinfo = {
        user: $("#babyinfo .name input").val(),
        phone: $("#babyinfo .phone span").text(),
        sex: $("#babyinfo .sex input[type='radio']:checked").val(),
        birthday: $("#babyinfo .birthday input").val(),
        id: $("#babyinfo .id input").val(),
        vocation: $("#babyinfo .vocation input").val(),
        address: $("#babyinfo .address input").val()
    }
    console.log(babyinfo);
})
//修改手机号点击获取验证码
$("#phone .process1 label span").on("click", function () {
    var send = $(this);
    var i = 60;
    send.css("font-size", "24px");
    send.text(i + "s");
    getCode = setInterval(function () {
        i--;
        send.text(i + "s");
        if (i == 0) {
            clearInterval(getCode);
            send.text("发送验证码");
            send.css("font-size", "12px");
        }
    }, 1000)
})
//修改手机号点击下一步
$("#phone .process1 a.button").on("click", function () {
    if ($("#phone .process1 label input").val()) {
        $("#phone .process").hide();
        $("#phone .process2").show();
    } else {
        layer.msg("请输入验证码")
    }
})
//修改手机号第二部点击获取验证码
$("#phone .process2 label span").on("click", function () {
    if ($("#phone .process2 input").val()) {
        var send = $(this);
        var i = 60;
        send.css("font-size", "24px");
        send.text(i + "s");
        getCode = setInterval(function () {
            i--;
            send.text(i + "s");
            if (i == 0) {
                clearInterval(getCode);
                send.text("发送验证码");
                send.css("font-size", "12px");
            }
        }, 1000)
    } else {
        layer.msg("请输入手机号！")
    }
})
//修改手机号第二步点击确定按钮
$("#phone .process2 a.button").on("click", function () {
    if ($("#phone .process2 input").val()) {
        $("#phone .process").hide();
        $("#phone .process3").show();
    } else {
        layer.msg("请输入手机号及验证码！")
    }
})
// 修改密码点击使用手机号验证
$("#password .process1-1 a.link").on("click", function () {
    $("#password .process").hide();
    $("#password .process1-2").show();
})
//修改密码点击下一步
$("#password .process1-1 a.button").on("click", function () {
    if ($("#password .process1-1 input").val()) {
        $("#password .process").hide();
        $("#password .process2").show();
    } else {
        layer.msg("请输入原始密码！")
    }
})
// 修改密码手机验证点击下一步
$("#password .process1-2 a.button").on("click", function () {
    if ($("#password .process1-2 input").val()) {
        $("#password .process").hide();
        $("#password .process2").show();
    } else {
        layer.msg("请输入验证码！")
    }
})
//修改密码点击确定
$("#password .process2 a.button").on("click", function () {
    if ($("#password .process2 input").val()) {
        if ($("#password .process2 .pass").val() == $("#password .process2 .repass").val()) {
            $("#password .process").hide();
            $("#password .process3").show();
        } else {
            layer.msg("两次密码输入不相同！")
        }
    } else {
        layer.msg("请输入你的新密码！")
    }
})
// 修改支付密码点击使用手机号验证
$("#paypass .process1-1 a.link").on("click", function () {
    $("#paypass .process").hide();
    $("#paypass .process1-2").show();
})
//修改支付密码点击下一步
$("#paypass .process1-1 a.button").on("click", function () {
    if ($("#paypass .process1-1 input").val()) {
        $("#paypass .process").hide();
        $("#paypass .process2").show();
    } else {
        layer.msg("请输入原始密码！")
    }
})
// 修改支付密码手机验证点击下一步
$("#paypass .process1-2 a.button").on("click", function () {
    if ($("#paypass .process1-2 input").val()) {
        $("#paypass .process").hide();
        $("#paypass .process2").show();
    } else {
        layer.msg("请输入验证码！")
    }
})
//修改支付密码点击确定
$("#paypass .process2 a.button").on("click", function () {
    if ($("#paypass .process2 input").val()) {
        if ($("#paypass .process2 .pass").val() == $("#paypass .process2 .repass").val()) {
            $("#paypass .process").hide();
            $("#paypass .process3").show();
        } else {
            layer.msg("两次密码输入不相同！")
        }
    } else {
        layer.msg("请输入你的新密码！")
    }
})
//订单管理页面点击查看详情
$("#shop .list .item .button-box a.see").on("click", function () {
    if ($(this).parent().parent().find(".details").css("height") == "0px") {
        $(this).text("收起");
        $(this).parent().parent().find("div.details").addClass("active");
    } else {
        $(this).text("查看详情");
        $(this).parent().parent().find("div.details").removeClass("active");
    }
})
//点击确认支付
$("#recharge a.button").on("click", function () {
    // window.open("pay-sure.php");
    layer.open({
        title: "",
        scrollbar: false,
        type: 1,
        area: ['1056px', '620px'], //宽高
        content: $("#paypop"),
        //弹出层执行成功回调函数
        success: function () {
            $(".layui-layer #paypop .pay .success .button-s,.layui-layer #paypop .pay .error .button-e").on("click", function () {
                layer.closeAll();
            })
        }
    });
})
//默认选择第一种支付方式
$(function () {
    $("#recharge .list .item").eq(0).addClass("active");
    $("#recharge .pay-method .pay").eq(0).addClass("active");
})
//点击充值金额效果
$("#recharge .list .item").on("click", function () {
    $("#recharge .list .item").removeClass("active");
    $(this).addClass("active");
})
//点击支付方式
$("#recharge .pay-method .pay").on("click", function () {
    $("#recharge .pay-method .pay").removeClass("active");
    $(this).addClass("active");
})

//点击新增地址
$(".address .nav a.add").on("click", function () {
    layer.open({
        title: "",
        scrollbar: false,
        type: 1,
        area: ['1440px', '704px'], //宽高
        content: $("#add"),
        btn: ['确定', '取消']
    });
})
// 点击编辑地址
$("#address table tr td a.edit").on("click", function () {
    layer.open({
        title: "",
        scrollbar: false,
        type: 1,
        area: ['1440px', '704px'], //宽高
        content: $("#edit"),
        btn: ['确定', '取消']
    });
})
// 点击删除
$("#address table tr td a.delete").on("click", function () {
    layer.confirm('确定删除吗？', {
        btn: ['确定', '取消'] //按钮
    }, function () {
        layer.msg('卧槽你居然来真的', {
            icon: 1
        });
    }, function () {
        layer.msg('没毛病老铁', {
            time: 20000, //20s后自动关闭
            btn: '双击666'
        });
    });
})
//点击设为默认地址
$("#address table tr td a.default").on("click", function () {
    $("#address table tr td a.default").removeClass("active");
    $("#address table tr td a.default").text("设为默认地址");
    $(this).addClass("active");
    $(this).text("默认地址");
})

// 日期格式化方法
Date.prototype.format = function (fmt) {
    var o = {
        "M+": this.getMonth() + 1, //月份 
        "d+": this.getDate(), //日 
        "h+": this.getHours(), //小时 
        "m+": this.getMinutes(), //分 
        "s+": this.getSeconds(), //秒 
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
        "S": this.getMilliseconds() //毫秒 
    };
    if (/(y+)/.test(fmt)) {
        fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    }
    for (var k in o) {
        if (new RegExp("(" + k + ")").test(fmt)) {
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        }
    }
    return fmt;
}
/**
 * 获取日期函数，调用获取日期对象以及当前是星期几
 * 参数必须为number类型！参数为0代表获取当前日期正数为之后的日期负数为之前的日期
 */
function getDate(num) {
    var date = new Date(new Date().getTime() + num * 24 * 60 * 60 * 1000).format("yyyy-MM-dd");
    var week = new Date(new Date().getTime() + num * 24 * 60 * 60 * 1000).getDay();
    switch (week) {
        case 0:
            week = "星期日";
            break;
        case 1:
            week = "星期一";
            break;
        case 2:
            week = "星期二";
            break;
        case 3:
            week = "星期三";
            break;
        case 4:
            week = "星期四";
            break;
        case 5:
            week = "星期五";
            break;
        case 6:
            week = "星期六";
            break;
    }
    var dateObj = {
        date: date,
        week: week
    }
    return dateObj;
}

function getAweek1(num) {
    for (var i = 0; i < 7; i++) {
        num++;
        $("#teaching .date .date-list").append("<div class='date-item'><span class='week'>"+getDate(num).week+"</span><span class='time'>"+getDate(num).date+"</span></div>")
    }
}
function getAweek2(num) {
    for (var i = 0; i < 7; i++) {
        num++;
        $("#coursem .date .date-list").append("<div class='date-item'><span class='week'>"+getDate(num).week+"</span><span class='time'>"+getDate(num).date+"</span></div>")
    }
}
//页面加载自动生成日期节点
$(function () {
    let num = -4;
    getAweek1(num);
    $("#teaching .date .date-list .date-item").eq(3).addClass("active");
    //点击左右箭头
    $("#teaching .date .prev").on("click", function () {
        num--;
        $("#teaching .date .date-list").empty();
        getAweek1(num);
    })
    $("#teaching .date .next").on("click", function () {
        num++;
        $("#teaching .date .date-list").empty();
        getAweek1(num);
    })
    // 点击日期
    $("#teaching .date .date-list").on("click", ".date-item", function () {
        $("#teaching .date .date-list .date-item").removeClass("active");
        $(this).addClass("active");
    })
})
// 点击进入课程
$("#teaching .list .item a").on("click", function () {
    $(".teacher .main .card").hide();
    $("#teachingd").show();
})
//点击是否到课按钮
$("#teachingd table tbody tr td a").on("click", function () {
    $(this).parent().parent().find("td a").removeClass("active");
    $(this).addClass("active");
})
//初始化地图对象，加载地图
var map = new AMap.Map("map", {
    resizeEnable: true,
});
// 初始化地图标记
marker = new AMap.Marker({
    icon: "//a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-red.png",
    position: [116.406315, 39.908775],
    offset: new AMap.Pixel(-13, -30)
});
marker.setMap(map);
//地图点击事件
function showInfoClick(e) {
    if (marker) {
        marker.setMap(null);
        marker = null;
        marker = new AMap.Marker({
            icon: '//a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-red.png',
            position: [e.lnglat.getLng(), e.lnglat.getLat()],
            offset: new AMap.Pixel(-13, -30)
        });
        marker.setMap(map);
    }
    return e.lnglat.getLng()+','+e.lnglat.getLat()
}
//为地图绑定点击事件
map.on("click", showInfoClick);

//页面加载自动生成日期节点
$(function () {
    let num = -4;
    getAweek2(num);
    $("#coursem .date .date-list .date-item").eq(3).addClass("active");
    //店面管理中课程管理点击左右箭头
    $("#coursem .date .prev").on("click", function () {
        num--;
        $("#coursem .date .date-list").empty();
        getAweek2(num);
    })
    $("#coursem .date .next").on("click", function () {
        num++;
        $("#coursem .date .date-list").empty();
        getAweek2(num);
    })
    // 店面管理中课程管理点击日期
    $("#coursem .date .date-list").on("click", ".date-item", function () {
        $("#coursem .date .date-list .date-item").removeClass("active");
        $(this).addClass("active");
    })
})
// 点击取消课程
$("#coursem .list .item a.del").on("click", function () {
    layer.confirm('确定取消吗？', {
        btn: ['确定', '取消'] //按钮
    })
})
// 点击添加课程
$("#coursem .list .item.add a").on("click", function () {
    $("#coursem .list").hide();
    $("#coursem .addcourse").css("display","flex");
})
//时间选择器
layui.use('laydate', function () {
    var laydate = layui.laydate;
    laydate.render({
        elem: '#time',
        type: 'time'
    });
    laydate.render({
        elem: '#birthday'
      });
      laydate.render({
        elem: '#babybirthday'
      });

})

//点击宝宝评测
$("#list ul li:nth-child(7)").on("click",function(){
    location.href="https://www.baidu.com"
})

// 点击积分商城跳转
$(".integral .nav span:nth-child(2)").on("click",function(){
    location.href="https://www.baidu.com"
})

//点击店面管理余额信息
$(".store .nav span:nth-child(4)").on("click",function(){
    $("#list ul li:nth-child(6)").trigger("click");
})

// 点击修改头像
$("#info .head i").on("click",function(){
    $("#info .head input").trigger("click");
})
$("#babyinfo .head i").on("click",function(){
    $("#babyinfo .head input").trigger("click");
})

//点击购物车
$("#list ul li:nth-child(9)").on("click",function(){
    location.href="shopingcart.php"
})