//获取当前域名地址
var host = 'https://' + window.location.host;
document.write("<script language=javascript src=" + host + "/static/aui/script/aui-toast.js charset='utf-8'><\/script>");
function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    return (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) ? 'mobile' : 'pc';
}
//终端配置
switch(browserRedirect()){
	case 'mobile':
		//引入相关框架
		document.write("<script language=javascript src=" + host + "/static/mobile/script/zepto.min.js charset='utf-8'><\/script>");
		// if(typeof Zepto === 'undefined'){
		//     throw new Error('Zepto.Validate\'s JavaScript requires Zepto')
		// }
		var config = {
			URL: host + '/mobile/',
		}
		//优化点击事件
		var UA = window.navigator.userAgent;
		var CLICK = 'click';
		if(/ipad|iphone|android/.test(UA)){
		    CLICK = 'tap';
		}
	break;
	case 'pc':
		//引入相关框架
		document.write("<script src=" + host + "/static/pc/script/jquery.min.js type='text/javascript' charset='utf-8'><\/script>");
		// if(typeof jQuery === 'undefined'){
		// 	throw new Error('jQuery.Validate\'s JavaScript requires jQuery')
		// }
		var config = {
			URL: host+'/pc/',
		}
	break;
}

/**
 * 常用方法封装
 * @Author   xc@yujia.com
 * @DateTime 2017-05-06T10:01:05+0800
 */
(function(window){
    var u = u || {};

	// 只能輸入數字，且第一數字不能為0
	u.digitalOnly = function(obj) {
		// 先把非数字的都替换掉
		obj.value = obj.value.replace(/\D/g, "");
	}

	//获取窗口滚动条高度
	u.getScrollTop = function(){
		var scrollTop=0;  
		if(document.documentElement&&document.documentElement.scrollTop){
			scrollTop=document.documentElement.scrollTop;  
		}else if(document.body){
			scrollTop=document.body.scrollTop;
		}
		return scrollTop;
	}

	//获取文档内容实际高度
	u.getScrollHeight = function(){
		return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);  
	}

	//只能輸入數字
	u.isNumberKey = function(evt){
		evt.value = evt.value.replace(/[^\-?\d.]/g,'')
	}

	//去掉字符串前后空格
	u.isNull = function(data){
		return data.replace(/\s+/g, "");
	}

	//只能輸入數字和小數點
	u.isNumberdoteKey = function(evt){
		var e = evt || window.event;
		var srcElement = e.srcElement || e.target;
		var charCode = (evt.which) ? evt.which : event.keyCode;
		if (charCode > 31 && ((charCode < 48 || charCode > 57) && charCode!=46)){
			return false;
		}else{
			if(charCode==46){
				var s = srcElement.value;
				if(s.length==0 || s.indexOf(".")!=-1){
					return false;
				}
			}
			return true;
		}
	}

	//只能輸入數字和字母
	u.isNumberCharKey = function(evt){
		var e = evt || window.event;
		var srcElement = e.srcElement || e.target;
		var charCode = (evt.which) ? evt.which : event.keyCode;
		if((charCode>=48 && charCode<=57) || (charCode>=65 && charCode<=90) || (charCode>=97 && charCode<=122) || charCode==8){
			return true;
		}else{
			return false;
		}
	}

	//判断是否为中文
	u.isChinese = function(obj,isReplace){
		var pattern = /[\u4E00-\u9FA5]|[\uFE30-\uFFA0]/i
		if(pattern.test(obj.value)){
			if(isReplace)obj.value = obj.value.replace(/[\u4E00-\u9FA5]|[\uFE30-\uFFA0]/ig,"");
			return true;
		}
		return false;
	}

	//用户名判断 （可输入"_",".","@", 数字，字母）
	u.isUserName = function(evt){
		var evt = evt || window.event; 
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if((charCode==95 || charCode==46 || charCode==64) || (charCode>=48 && charCode<=57) || (charCode>=65 && charCode<=90) || (charCode>=97 && charCode<=122) || charCode==8){
			return true;
		}else{		
			return false;
		}
	}

	//验证码规则(数字6位)
	u.isMesCode = function(data){
		var mesCode = new RegExp(/^\d{6}$/);
		return (mesCode.test(data));
	}

	//昵称规则(英文、数字、中文、2-8位)
	u.nickName = function(data){
		var nickName = new RegExp("^[\u4E00-\u9FA5A-Za-z0-9]{2,8}$");
		return (nickName.test(data));
	}

	//密码规则(英文、数字、标点符号、6-12位)
	u.isPassRule = function(data){
		var passRule = new RegExp("^[\@A-Za-z0-9\!\#\$\%\^\&\*\,\.\~]{6,12}$");
		return (passRule.test(data));
	}

	//判断是否邮箱
	u.isEmail =function(v){
		var email = new RegExp("^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+$");
		return(email.test(v));
	}

	//判断是否电话
	u.isTel = function(v){
		var tel = new RegExp("^[[0-9]{3}-|\[0-9]{4}-]?(\[0-9]{8}|[0-9]{7})?$");
		return(tel.test(v));
	}

	//判断是否手机（大陆/港澳台地区）
	u.isPhone = function(v){
		var tel = new RegExp('^[1][3-9][0-9]{9}$|^([6|9])[0-9]{7}$|^[0][9][0-9]{8}$|^[6]([8|6])[0-9]{5}$');
		return(tel.test(v));
	}

	//判断身份证是否正确
	u.isCardcode = function(code){
		var city = {11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江 ",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北 ",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏 ",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外 "};
        var tip = "";
        var pass= true;            
        if(!code || !/^\d{6}(18|19|20)?\d{2}(0[1-9]|1[12])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$/i.test(code)){
            tip = "身份证号格式错误";
            pass = false;
        }else if(!city[code.substr(0,2)]){
            tip = "地址编码错误";
            pass = false;
        }else{
            //18位身份证需要验证最后一位校验位
            if(code.length == 18){
                code = code.split('');
                //∑(ai×Wi)(mod 11)
                //加权因子
                var factor = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2 ];
                //校验位
                var parity = [ 1, 0, 'X', 9, 8, 7, 6, 5, 4, 3, 2 ];
                var sum = 0;
                var ai = 0;
                var wi = 0;
                for (var i = 0; i < 17; i++){
                    ai = code[i];
                    wi = factor[i];
                    sum += ai * wi;
                }
                var last = parity[sum % 11];
                if(parity[sum % 11] != code[17]){
                    tip = "校验位错误";
                    pass =false;
                }
            }
        }
        return pass;
	}

	//判断价格格式
	u.isPrice = function(data){
		var mesCode = new RegExp(/^[\d]*(?:.[\d]{0,2})?$/);
		return (mesCode.test(data));
	}
	
	//判断url
	u.isUrl = function(str){
		if(str==null||str=="") return false;
		var result=str.match(/^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_~`@[\]\’:+!]*([^<>\"])*$/);
		if(result==null)return false;
		return true;
	}

	//比较时间差
	u.getTimeDiff = function(startTime,endTime,diffType){
		//将xxxx-xx-xx的时间格式，转换为 xxxx/xx/xx的格式
		startTime = startTime.replace(/-/g, "/");
		endTime = endTime.replace(/-/g, "/");
		//将计算间隔类性字符转换为小写
		diffType = diffType.toLowerCase();
		var sTime = new Date(startTime); //开始时间
		var eTime = new Date(endTime); //结束时间
		//作为除数的数字
		var divNum = 1;
		switch(diffType){
		    case "second":
		         divNum = 1000;
		         break;
		    case "minute":
		         divNum = 1000 * 60;
		         break;
		    case "hour":
		         divNum = 1000 * 3600;
		         break;
		    case "day":
		         divNum = 1000 * 3600 * 24;
		         break;
		    default:
		         break;
		}
		return parseInt((eTime.getTime() - sTime.getTime()) / parseInt(divNum));
	}

	//截取字符串
	u.cutStr = function (str,len){
		if(!str || str=='')return '';
		var strlen = 0;
		var s = "";
		for(var i = 0;i < str.length;i++){
			if(strlen >= len){
				return s + "...";
			}
			if(str.charCodeAt(i) > 128){
				strlen += 2;
			}else{
				strlen++;
			}
			s += str.charAt(i);
		}
		return s;
	}

	//GET获取方法
	u.AjaxGet = function(path, param, callback) {
		var toast = new auiToast({});
		$.ajax({
		    type: 'get',
		    url: path,
		    data: param,
		    dataType: 'json',
		    timeout: 10000,
		    beforeSend: function(){
		    	toast.loading({
                    title: "请等待"
                })
		    },success: function(data) {
		    	toast.hide();
		    	if(data){
		    		setTimeout(function(){
                        callback(data);
                    },500);
		    	}else{
		    		toast.fail({
		                title: data.msg,
		                duration:1500
		            });
		    	}
		    },error: function() {
		    	toast.hide();
	            toast.fail({
	                title:"网络错误",
	                duration:1500
	            });
		    }
		});
	};

	//POST方法
	u.AjaxPost = function(path, param, callback) {
		var toast = new auiToast({});
		$.ajax({
		    type: 'post',
		    url: path,
		    data: param,
		    dataType: 'json',
		    timeout: 10000,
		    beforeSend: function(){
		    	toast.loading({
                    title:"加载中"
                })
		    },success: function(data) {
		    	toast.hide();
		    	if(data){
		    		setTimeout(function(){
                        callback(data);
                    },500);
		    	}else{
		    		toast.fail({
		                title: data.msg,
		                duration:1500
		            });
		    	}
		    },error: function() {
		    	toast.hide();
	            toast.fail({
	                title:"网络错误",
	                duration:1500
	            });
		    }
		});
	};

	//登出
	u.loginOut = function(){
		var toast = new auiToast({});
		$.ajax({
			type: 'post',
			url: host + '/pc/entry/login_out',
			data: {
				type: 1
			},dataType: 'json',
			timeout: 10000,
			beforeSend: function(){
				toast.loading({
					title:"请稍后"
				})
			},success: function(data) {
				setTimeout(function(){
					toast.hide();
					if(data.status == 'ok'){
			            toast.success({
			                title:"登出成功",
			                duration:2000
			            });
			            window.location.href = host + '/pc/entry/login';
			        }else{
			            toast.fail({
							title:"登出失败",
							duration:1500
						});
			        }
				},500);
			},error: function() {
				toast.hide();
				toast.fail({
					title:"网络错误",
					duration:1500
				});
			}
		});
	}

	//PC端弹出头像下拉菜单
	u.popHeader = function(obj){
		$(obj).find('.user-menu').toggleClass('aui-hide');
	}

	//
	u.scroll = function(obj,opt,callback){
	    //参数初始化
	    if(!opt) var opt = {};
	    var _this = $(obj).children('ul');
	    var lineH = _this.children('li').eq(0).height(), //获取行高
	        line = opt.line ? parseInt(opt.line,10):parseInt(this.height() / lineH,10), //每次滚动的行数，默认为一屏，即父容器高度
	        speed = opt.speed ? parseInt(opt.speed,10):5000,
	        timer = opt.timer ? parseInt(opt.timer,10):3000;
	    if(line == 0){line = 1;} 
	    var upHeight = 0 - line * lineH;
	    //滚动函数
        setInterval(function(){
            _this.animate({
                marginTop:upHeight
            },speed,function(){
                for(i=1;i<=line;i++){
                    _this.find('li').first().appendTo(_this);
                }
	            _this.css({
	            	marginTop:0
	            });
            }); 
        },timer);
	}

	//延迟加载图片
	u.loadImg = function(obj){
		var oH = obj.offsetHeight,
			oW = obj.offsetWidth,
			dataSrc = obj.getAttribute('data-src');
		if(dataSrc){
			setTimeout(function(){
				obj.setAttribute('src', dataSrc);
				obj.style.height = oH ? oH : 24;
				obj.style.width = oW ? oW : 24;
				obj.setAttribute('data-src', '');
			},300)
		}
	}

	//返回头部方法
	u.gotop = function(){
    	var scrollToTop = window.setInterval(function() {
		    var pos = window.pageYOffset;
		    if ( pos > 0 ) {
		        window.scrollTo( 0, pos - 50 );
		    } else {
		        window.clearInterval( scrollToTop );
		    }
		}, 1);
    }

    //快捷登录窗口创建
    u.login = function(){
    	var user_id = $('input[name="user_id"]').val();
    	var toast = new auiToast({});
    	if(user_id){
    		toast.fail({
                title: '您已登录',
                duration:1500
            });
           	return false;
    	}
    	//登录窗口拼接
    	var content = '';
    		content += '<div class="videoMask" id="videoMask"><div class="aui-padded-15 quickLogin"><h5 class="aui-text-center aui-font-size-18 aui-text-green">立即登录</h5><span id="loginClose" onclick="$app.closelogin()"><i class="aui-iconfont aui-icon-close"></i></span>';
    		content += '<ul class="aui-list aui-form-list"><li class="aui-list-item"><div class="aui-list-item-label-icon"><i class="aui-iconfont aui-icon-my"></i></div><div class="aui-list-item-inner"><div class="aui-list-item-input"><input type="number" id="phoneNum" class="userName" name="phone" placeholder="请输入用户名/手机号" maxlength="11" spellcheck="false" onfocus="$app.repairIosFocus()" onblur="$app.repairIosBlur()"></div></div></li><li class="aui-list-item"><div class="aui-list-item-label-icon"><i class="aui-iconfont aui-icon-lock"></i></div><div class="aui-list-item-inner"><div class="aui-list-item-input"><input type="password" id="lognPas" class="userPassWord" name="pswd" placeholder="请输入密码" maxlength="12" spellcheck="false" onfocus="$app.repairIosFocus()" onblur="$app.repairIosBlur()"></div></div></li></ul>';
    		content += '<p class="aui-content aui-padded-15"><a href="'+ config.URL +'entry/m_findpas.html" class="aui-text-default aui-pull-left" title="忘记密码？" target="_blank">忘记密码？</a><a href="'+ config.URL +'entry/m_register.html" class="aui-text-default aui-pull-right" title="立即注册" target="_blank">立即注册</a></p>';
    		content += '<input class="aui-btn aui-btn-green aui-btn-block" type="button" value="登录" onclick="$app.loginWay(this)" style="border-radius:2rem;border-radius:2rem;"/>';
    		content += '</div></div>';
    	if(!$('body').find('#videoMask')[0]){
    		$('body').append(content);
    	}
    }

    //IOS端浮动层focus
    u.repairIosFocus = function(){
    	var isiOS = !!UA.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    	if(!isiOS){
    		$('#videoMask').css({
				"position": "absolute",
				"top": u.getScrollTop() + 'px'
			})
    	}
    }

    //IOS端浮动层blur
    u.repairIosBlur = function(){
    	var isiOS = !!UA.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    	if(!isiOS){
    		$('#videoMask').css({
				"position": "fixed",
				"top": 0
			})
    	}
    }

    //移除快捷登录窗口
    u.closelogin = function(){
    	$('body').find('#videoMask')[0].remove();
    }

    //快捷登录请求方法
    u.loginWay = function(obj){
    	var toast = new auiToast({});
    	var acount = $('input[name="phone"]').val();
    	if(!$app.isPhone(acount)){
            toast.fail({
                title: "手机号码错误",
                duration:2000
            });
            return false;
        }
        toast.loading({
            title:"请等待.."
        })
    	$app.AjaxPost(config.URL+'entry/login_way',{
            acount: acount,
            password: $('input[name="pswd"]').val(),
            type: 2,
            sign: $('input[name="sign"]').val()
        },function(result){
        	// console.log(JSON.stringify(result));
        	toast.hide();
        	if(result.status == 'ok'){
        		toast.success({
                    title:"登录成功",
                    duration:2000
                });
                setTimeout(function(){
                    window.location.reload();
                },600);
        	}else{
        		toast.fail({
                    title: result.msg,
                    duration:2000
                });
        	}
        })
    }

	/**
    ** 精确加法计算函数，用来得到精确的减法结果
    ** 说明：javascript的加法结果会有误差，在两个浮点数相加的时候会比较明显。这个函数返回较为精确的加法结果。
    ** 调用：accAdd(arg1,arg2)
    ** 返回值：arg1加arg2的精确结果
    **/
	u.accAdd = function(arg1, arg2) {
		var r1, r2, m, c;
		try {
			r1 = arg1.toString().split(".")[1].length;
		}
		catch (e) {
			r1 = 0;
		}
		try {
			r2 = arg2.toString().split(".")[1].length;
		}
		catch (e) {
			r2 = 0;
		}
		c = Math.abs(r1 - r2);
		m = Math.pow(10, Math.max(r1, r2));
		if (c > 0) {
			var cm = Math.pow(10, c);
			if (r1 > r2) {
				arg1 = Number(arg1.toString().replace(".", ""));
				arg2 = Number(arg2.toString().replace(".", "")) * cm;
			} else {
				arg1 = Number(arg1.toString().replace(".", "")) * cm;
				arg2 = Number(arg2.toString().replace(".", ""));
			}
		} else {
			arg1 = Number(arg1.toString().replace(".", ""));
			arg2 = Number(arg2.toString().replace(".", ""));
		}
		return (arg1 + arg2) / m;
	}

    /**
    ** 精确减法计算函数，用来得到精确的减法结果
    ** 说明：javascript的减法结果会有误差，在两个浮点数相减的时候会比较明显。这个函数返回较为精确的减法结果。
    ** 调用：accSub(arg1,arg2)
    ** 返回值：arg1减arg2的精确结果
    **/
    u.accSub = function(arg1, arg2) {
        var r1, r2, m, n;
        try {
            r1 = arg1.toString().split(".")[1].length;
        }
        catch (e) {
            r1 = 0;
        }
        try {
            r2 = arg2.toString().split(".")[1].length;
        }
        catch (e) {
            r2 = 0;
        }
        m = Math.pow(10, Math.max(r1, r2)); //last modify by deeka //动态控制精度长度
        n = (r1 >= r2) ? r1 : r2;
        return ((arg1 * m - arg2 * m) / m).toFixed(n);
    }

	/**
	 ** 乘法函数，用来得到精确的乘法结果
	** 说明：javascript的乘法结果会有误差，在两个浮点数相乘的时候会比较明显。这个函数返回较为精确的乘法结果。
	** 调用：accMul(arg1,arg2)
	** 返回值：arg1乘以 arg2的精确结果
	**/
	u.accMul = function (arg1, arg2) {
		var m = 0, s1 = arg1.toString(), s2 = arg2.toString();
		try {
			m += s1.split(".")[1].length;
		}
		catch (e) {
		}
		try {
			m += s2.split(".")[1].length;
		}
		catch (e) {
		}
		return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m);
	}

    /** 
    ** 精确除法计算函数，用来得到精确的除法结果
    ** 说明：javascript的除法结果会有误差，在两个浮点数相除的时候会比较明显。这个函数返回较为精确的除法结果。
    ** 调用：accDiv(arg1,arg2)
    ** 返回值：arg1除以arg2的精确结果
    **/
    u.accDiv = function(arg1, arg2) {
        var t1 = 0, t2 = 0, r1, r2;
        try {
            t1 = arg1.toString().split(".")[1].length;
        }
        catch (e) {
        }
        try {
            t2 = arg2.toString().split(".")[1].length;
        }
        catch (e) {
        }
        with (Math) {
            r1 = Number(arg1.toString().replace(".", ""));
            r2 = Number(arg2.toString().replace(".", ""));
            return (r1 / r2) * pow(10, t2 - t1);
        }
    }

    /**
     * 返回上层页面
     * @param  {[type]} page [可选，返回第N页，默认为-1既上一页]
     * @return {[type]}      [description]
     */
    u.goBack = function(page){
    	window.history.go(page ? page : -1);
    }

    /**
	 * [setCookie 设置cookie]
	 * @Author xc@yujia.com
	 * @DateTime 2017-07-12T13:58:30+0800
	 * @param{[type]} name[键]
	 * @param{[type]} value [值]
	 * @param{[type]} time[过期时间/天]
	 */
	u.SetCookie = function( name, value, time ){
		var oDate = new Date();
		oDate.setDate( oDate.getDate() + time );
		document.cookie = name + '=' + value + '; expires=' + oDate;
	}
	/**
	 * [getCookie 读取cookie]
	 * @Author xc@yujia.com
	 * @DateTime 2017-07-12T14:08:01+0800
	 * @param{[type]} name [设置cookie的名称/键]
	 * @return {[type]}[返回]
	 */
	u.GetCookie = function( name ){
		//document.cookie获取当前网站的所有cookie
		var arr = document.cookie.split('; ');
		for( var i = 0; i < arr.length; i ++){
			var arr1 = arr[i].split('=');
			if(arr1[0] == name){
				return arr1[1];
			}
		}
		return '';
	}

/*end*/
    window.$app = u;
})(window);


/**
 * 移动端弹出提示框
 * @Author xc@yujia.com
 * @DateTime 2017-05-09T16:59:25+0800
 */
(function( window, undefined ) {
	"use strict";
	var UToast = function() {
		// this.create();
	};
	var isShow = false;
	UToast.prototype = {
		create: function(params,callback) {
			var self = this;
			var toastHtml = '';
			switch (params.type) {
				case "success":
					var iconHtml = '<i class="U-iconfont sui-icon icon-touch-right"></i>';
					break;
				case "fail":
					var iconHtml = '<i class="U-iconfont sui-icon icon-tb-close"></i>';
					break;
				case "custom":
					var iconHtml = params.html;
					break;
				case "loading":
					var iconHtml = '<div class="U-toast-loading"></div>';
					break;
			}

			var titleHtml = params.title ? '<div class="U-toast-content">'+params.title+'</div>' : '';
			toastHtml = '<div class="U-toast">'+iconHtml+titleHtml+'</div>';
			if(document.querySelector(".U-toast"))return;
			document.body.insertAdjacentHTML('beforeend', toastHtml);
			var duration = params.duration ? params.duration : "2000";
			self.show();
			if(params.type == 'loading'){
				if(callback){
					callback({
						status: "success"
					});
				};
			}else{
				setTimeout(function(){
					self.hide();
				}, duration)
			}
		},
		show: function(){
			var self = this;
			document.querySelector(".U-toast").style.display = "block";
			document.querySelector(".U-toast").style.marginTop ="-"+Math.round(document.querySelector(".U-toast").offsetHeight/2)+"px";
			if(document.querySelector(".U-toast"))return;
		},
		hide: function(){
			var self = this;
			if(document.querySelector(".U-toast")){
				document.querySelector(".U-toast").parentNode.removeChild(document.querySelector(".U-toast"));
			}
		},
		remove: function(){
			if(document.querySelector(".U-dialog"))document.querySelector(".U-dialog").parentNode.removeChild(document.querySelector(".U-dialog"));
			if(document.querySelector(".U-mask")){
				document.querySelector(".U-mask").classList.remove("U-mask-hide");
			}
			return true;
		},
		success: function(params,callback){
			var self = this;
			params.type = "success";
			return self.create(params,callback);
		},
		fail: function(params,callback){
			var self = this;
			params.type = "fail";
			return self.create(params,callback);
		},
		custom:function(params,callback){
			var self = this;
			params.type = "custom";
			return self.create(params,callback);
		},
		loading:function(params,callback){
			var self = this;
			params.type = "loading";
			return self.create(params,callback);
		}
	};
	window.UToast = UToast;
})(window);