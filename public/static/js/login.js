cur($(".method_nav span"));
tab($(".method_nav span"),$(".dengluArea"));
/*出现删除按钮*/
$(".loginList li .number_out input").keyup(function(){	
	if($(this).val().length>=1){
		if($(this).parent().parent().find(".deleteSpan").is(":hidden")){
    		$(this).parent().parent().find(".deleteSpan").show();
    	}  
	}
})
$(".deleteSpan").click(function(){
	$(this).parent().find("input").val("");
	$(this).hide();
})
$(".loginList li .number_out input").focus(function(){
	$(".loginList li .deleteSpan").hide();
	if($(this).val().length>=1){
		$(this).parent().find(".deleteSpan").show();
	}
})
function getLoginCode(){
	$.ajax({
		type: "POST",
		url: basePath + "getlogonqrcode.ajax",
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			alert("网络环境不好，请稍后重试!");
		},
		success: function (data) {
			if (data.code == "1") {
				var url = "";
				$("#loginCodeImg").html("");
				var message = data.message;
				url = message.qrcode;
				$("#loginCodeImg").qrcode(url);//将查询出的链接生成二维码
				$("#codeLogin").show();
				var headTimes = 0;
				logintimer = setInterval(function checkLogin() {
					headTimes = headTimes + 1;
					if (headTimes == 33) {
							$("#refreshCode").show();
							clearInterval(logintimer);
					}
					$.ajax({
						type: "POST",
						url: basePath + "ckqrcodelogon.ajax",
						error: function (XMLHttpRequest, textStatus, errorThrown) {
							alert("网络环境不好，请稍后重试!");
						},
						success: function (data) {
							if (data.code == "1") {
								hasLogined=true;
								clearInterval(logintimer);
								data= data.message.user;
								$("#user").html(data.nickname);
								$("#userImage").attr("src", data.u_icon_url);
								if(data.is_svip==1){
									$(".vipMark").show();
								}else {
									$(".vipMark").hide();
								}
								$("#codeLogin").hide();
								$(".loginBtn").hide();
								$(".user").show();
								window.location.href = basePath;
							}
						}
					});
				}, 3000);
			}else {
				alert(data.desc)
			}
		}
	});
}

function submitMyform() {
	var mobile_number = $("#phone").val();
	var password = $("#password").val();
	var reg = /^1\d{10}$/;
	if (mobile_number.replace(/[ ]/g, "") == "") {
		buildAlert2("关闭", "手机号不能为空");
		return;
	}
	if (password.replace(/[ ]/g, "") == "") {
		buildAlert2("关闭", "密码不能为空");

//            alert("密码不能为空");
		return;
	}
	if (!reg.test(mobile_number)) {
		buildAlert2("关闭", "手机号输入不合法");
//            alert("手机号输入不合法")
		return;
	}
	var width = $("body").width();
	var height = $("body").height();
//        document.documentElement.clientWidth;document.documentElement.clientHeigh
	$.ajax({
		type: "POST",
		url: basePath+"ckloginpasswd.ajax",
		data: {
			mobile_number: mobile_number,
			u_password: password,
			phoneheight: height,
			phonewidth: width
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			buildAlert2("好的", "网络环境不好，请稍后重试!");

		},
		success: function (data) {
			if (data.code == "1") {
				window.location.href = basePath;
			} else {
				buildAlert2("好的", data.desc);
			}
		}
	});
}
function login(loginType) {
	var width = $("body").width();
	var height = $("body").height();
		window.location.href = basePath+"23rdpartlogin.html?loginType=" + loginType + "&width=" + width + "&height=" + height;
}































