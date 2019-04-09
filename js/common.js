//注意：导航 依赖 element 模块，否则无法进行功能性操作
layui.use(['element', 'layer'], function () {
	var element = layui.element;
	var layer = layui.layer;
});
// 点击搜索按钮提交搜索内容，获取到链接跳转到搜索结果
$("#header .search i.iconfont").on("click", function () {
	if ($("#header .search #search").val()) {
		$.ajax({
			url: "",
			type: "POST",
			data: $("#header .search #search").val(),
			success: function (res) {
				console.log(res)
			},
			error: function (err) {
				console.log(err)
			}
		})
	}
})
// 点击按钮切换app下载二维码
$("#header .download .button-box").on("click", function (e) {
	if (e.target.className == "iphone") {
		$("#header .download .button-box .iphone").css("background-image", "url(../img/bg1.png)");
		$("#header .download .button-box .android").css("background-image", "url(../img/bg2.png)");
		$("#header .download .code .img").css("background-image", "url(../img/code.png)");
	} else if (e.target.className == "android") {
		$("#header .download .button-box .iphone").css("background-image", "url(../img/bg2.png)");
		$("#header .download .button-box .android").css("background-image", "url(../img/bg1.png)");
		$("#header .download .code .img").css("background-image", "url(../img/code2.png)");
	}
})

// 点击头像登录
$("#header .container .user i").on("click", function () {
	$("#login").css("display", "flex");
})
// 移入返回顶部区域显示下载二维码
$("#backtop .code").hover(function () {
	$("#backtop .download").css("display", "flex");
}, function () {
	$("#backtop .download").css("display", "none");
})
//移入微信公众号二维码
$("#backtop .wechat").hover(function () {
	$("#backtop .wechat-code").css("display", "flex");
}, function () {
	$("#backtop .wechat-code").css("display", "none");
})
// 点击快捷登录
$("#login .login .nav span:first-child").on("click", function () {
	$("#login .login .nav span").removeClass("active");
	$(this).addClass("active");
	$("#login .login .quick").show();
	$("#login .login .account").hide();
})
// 点击账号登录
$("#login .login .nav span:last-child").on("click", function () {
	$("#login .login .nav span").removeClass("active");
	$(this).addClass("active");
	$("#login .login .quick").hide();
	$("#login .login .account").show();
})
// 检测快捷登录页面输入框
$("#login .login .quick input").on("input propertychange", function () {
	if ($("#login .login .quick .phone").val() && $("#login .login .quick .num").val()) {
		$("#login .login .quick .button-box .signin").css({
			"color": "#fff",
			"background": "#579ED5"
		})
	} else {
		$("#login .login .quick .button-box .signin").css({
			"color": "#579ED5",
			"background": "#fff",
			"border": "1px solid #579ED5"
		})
	}
})
//检测账号登录页面输入框
$("#login .login .account input").on("input propertychange", function () {
	if ($("#login .login .account .user").val() && $("#login .login .account .pass").val()) {
		$("#login .login .account .button-box .signin").css({
			"color": "#fff",
			"background": "#579ED5"
		})
	} else {
		$("#login .login .account .button-box .signin").css({
			"color": "#579ED5",
			"background": "#fff",
			"border": "1px solid #579ED5"
		})
	}
})
// 快捷登录页面点击登录
$("#login .login .quick .button-box .signin").on("click", function () {
	if (!$("#login .login .quick .phone").val()) {
		layer.msg("请输入手机号！")
		return false;
	}
	if (!$("#login .login .quick .num").val()) {
		layer.msg("请输入验证码！")
		return false;
	}
	var quick = {
		phone: $("#login .login .quick .phone").val(),
		num: $("#login .login .quick .num").val()
	};
	$.ajax({

	})
})
//账号登录页面点击登录
$("#login .login .account .button-box .signin").on("click", function () {
	if (!$("#login .login .account .user").val()) {
		layer.msg("请输入账号！")
		return false;
	}
	if (!$("#login .login .account .pass").val()) {
		layer.msg("请输入密码！")
		return false;
	}
	var account = {
		phone: $("#login .login .account .user").val(),
		num: $("#login .login .account .pass").val()
	};
	$.ajax({

	})
})
//点击账号登陆页面忘记密码
$("#login .login .account a.forget").on("click", function () {
	$("#login .login").hide();
	$("#login .forgetpass").css("display", "flex");
})
//监听注册页面输入框
$(
	"#login .enroll .phone,#login .enroll .code input,#login .enroll .pass,#login .enroll .repass,#login .enroll .agreement input"
).on("input propertychange", function () {
	if ($("#login .enroll .phone").val() && $("#login .enroll .code input").val() && $(
			"#login .enroll .pass").val() && $("#login .enroll .repass").val() && $(
			"#login .enroll .agreement input").prop("checked")) {
		$("#login .enroll .button").css({
			"background": "#579ED5",
			"color": "#fff"
		});
	} else {
		$("#login .enroll .button").css({
			"background": "#fff",
			"color": "#579ED5",
			"border": "1px solid #579ED5"
		});
	}
})
// 监听找回密码输入框
$(
	"#login .forgetpass .phone,#login .forgetpass .code input,#login .forgetpass .pass,#login .forgetpass .repass"
).on("input propertychange", function () {
	if ($("#login .forgetpass .phone").val() && $("#login .forgetpass .code input").val() && $(
			"#login .forgetpass .pass").val() && $("#login .forgetpass .repass").val()) {
		$("#login .forgetpass .button").css({
			"background": "#579ED5",
			"color": "#fff"
		});
	} else {
		$("#login .forgetpass .button").css({
			"background": "#fff",
			"color": "#579ED5",
			"border": "1px solid #579ED5"
		});
	}
})
// 点击注册账号弹出注册框
$("#login .login .button-box .register").on("click", function () {
	$("#login .login").hide();
	$("#login .enroll").css("display", "flex");
})
// 点击马上登录返回登录页面
$("#login .enroll .sign a").on("click", function () {
	$("#login .login").show();
	$("#login .login .nav span").removeClass("active");
	$("#login .login .nav span:last-child").addClass("active");
	$("#login .login .quick").hide();
	$("#login .login .account").show();
	$("#login .enroll").css("display", "none");
	$("#login .enroll input").val("");
	$("#login .enroll .button").css({
		"background": "#fff",
		"color": "#579ed5",
		"border": "1px solid #579ed5"
	})
})
//点击注册按钮
$("#login .enroll .button").on("click", function () {
	if (!$("#login .enroll .phone").val()) {
		layer.msg("请输入手机号！");
		return false;
	}
	if (!$("#login .enroll .code input").val()) {
		layer.msg("请输入验证码！");
		return false;
	}
	if (!$("#login .enroll .pass").val()) {
		layer.msg("请输入密码！");
		return false;
	}
	if (!$("#login .enroll .repass").val()) {
		layer.msg("请再次输入密码！");
		return false;
	}
	if (!$("#login .enroll .pass").val() == $("#login .enroll .repass").val()) {
		layer.msg("两次输入的密码不相同！");
		return false;
	}
	if (!$("#login .enroll .agreement input").prop("checked")) {
		layer.msg("请勾选同意《协议》");
		return false;
	}
	var register = {
		phone: $("#login .enroll .phone").val(),
		code: $("#login .enroll .code input").val(),
		pass: $("#login .enroll .pass").val()
	}
	$.ajax({

	})
})
//找回密码页面点击确定按钮
$("#login .forgetpass .button").on("click", function () {
	if (!$("#login .forgetpass .phone").val()) {
		layer.msg("请输入手机号！");
		return false;
	}
	if (!$("#login .forgetpass .code input").val()) {
		layer.msg("请输入验证码！");
		return false;
	}
	if (!$("#login .forgetpass .pass").val()) {
		layer.msg("请输入密码！");
		return false;
	}
	if (!$("#login .forgetpass .repass").val()) {
		layer.msg("请再次输入密码！");
		return false;
	}
	if (!$("#login .forgetpass .pass").val() == $("#login .forgetpass .repass").val()) {
		layer.msg("两次输入的密码不相同！");
		return false;
	}
	var forgetpass = {
		phone: $("#login .enroll .phone").val(),
		code: $("#login .enroll .code input").val(),
		pass: $("#login .enroll .pass").val()
	}
	$.ajax({

	})
})
//找回密码页面点击返回登录按钮
$("#login .forgetpass a").on("click", function () {
	$("#login .login").show();
	$("#login .login .nav span").removeClass("active");
	$("#login .login .nav span:last-child").addClass("active");
	$("#login .login .quick").hide();
	$("#login .login .account").show();
	$("#login .forgetpass").css("display", "none");
	$("#login .forgetpass input").val("");
	$("#login .forgetpass .button").css({
		"background": "#fff",
		"color": "#579ed5",
		"border": "1px solid #579ed5"
	})
})
//点击协议弹出框
$("#login .enroll .agreement a").on("click", function () {
	var protocol = $(".protocol").html();
	layer.open({
		type: 1,
		skin: 'agree', //自定义样式
		area: ['800px', '660px'], //宽高
		title: "",
		content: protocol,
		btn: "同意并确认",
		end: function () {
			$("#login .enroll .agreement input").prop("checked", true)
		}
	});
})
//快捷登录页面点击获取验证码
$("#login .login .code span.send").on("click", function () {
	if ($("#login .login .phone").val()) {
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
		layer.msg("请先输入手机号！");
		return false;
	}
})
//找回密码页面点击获取验证码
$("#login .forgetpass .code span.send").on("click", function () {
	if ($("#login .forgetpass .phone").val()) {
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
		layer.msg("请先输入手机号！");
		return false;
	}
})
// 注册页面点击获取验证码
$("#login .enroll .code span.send").on("click", function () {
	if ($("#login .enroll .phone").val()) {
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
		layer.msg("请先输入手机号！");
		return false;
	}
})
// 点击叉号关闭登录注册弹窗
$("#login .off").on("click", function () {
	$("#login").css("display", "none");
})

// 课程详情其他课程浮窗
$(window).on("scroll", function () {
	var height = document.documentElement.scrollTop||document.body.scrollTop;
	$("#other").css("top",180-height+"px");
	if (height>140) {
		$("#other").css("top","40px");
	}
})
 // 线上课程默认显示课程列表
 $(function() {
	$("#main .container .introduce-catalog .content div").eq(1).show().siblings().hide()
})
// 点击课程介绍或课程目录
$("#main .container .introduce-catalog .nav span").on("click", function() {
	$("#main .container .introduce-catalog .nav span").removeClass("active");
	$(this).addClass("active");
	$("#main .container .introduce-catalog .content div").eq($(this).index()).show().siblings().hide()
})