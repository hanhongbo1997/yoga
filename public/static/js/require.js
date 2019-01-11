var host = window.location.host;
var config = {
	URL: 'https://'+host+'/pc/',
}
if(typeof jQuery === 'undefined'){
	throw new Error('jQuery.Validate\'s JavaScript requires jQuery')
}
/**
 * 常用方法封装
 * @Author slz@yujia.com xc@yujia.com
 * @DateTime 2017-05-06T10:01:05+0800
 */
(function(window){
	var u = u || {};
	// 只能輸入數字，且第一數字不能為0
	u.digitalOnly = function(obj) {
		// 先把非数字的都替换掉
		obj.value = obj.value.replace(/\D/g, "");
	}
	/********************
	* 获取窗口滚动条高度
	******************/
	u.getScrollTop = function(){
		var scrollTop=0;
		if(document.documentElement&&document.documentElement.scrollTop){
			scrollTop=document.documentElement.scrollTop;
		}else if(document.body){
			scrollTop=document.body.scrollTop;
		}
		return scrollTop;
	}
	/********************
	* 获取文档内容实际高度
	*******************/
	u.getScrollHeight = function(){
		return Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
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
	// Number.prototype.toFixed = function(exponent){
	// 	return parseInt(this * Math.pow(10, exponent)+0.5 )/Math.pow(10,exponent);
	// }
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
	//判断是否手机
	u.isPhone = function(v){
		var tel = new RegExp("^[1][3,4,5,6,7,8][0-9]{9}$");
		return(tel.test(v));
	}
	u.isCardcode = function(code){
		var city={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江 ",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北 ",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏 ",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外 "};
        var tip = "";
        var pass= true;
            
        if(!code || !/^\d{6}(18|19|20)?\d{2}(0[1-9]|1[12])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$/i.test(code)){
            tip = "身份证号格式错误";
            pass = false;
        }
            
        else if(!city[code.substr(0,2)]){
            tip = "地址编码错误";
            pass = false;
        }
        else{
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
                for (var i = 0; i < 17; i++)
                {
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
	/**
	* 截取字符串
	*/
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
	/**
	 * GET获取方法
	 */
	u.AjaxGet = function(path, param) {
		var toast = new UToast();
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
			},
			success: function(data) {
				if(data){
					setTimeout(function(){
						toast.hide();
						callback(data);
					},500);
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
	/**
	 * [AjaxPost提交方法]
	 * @Author xc@yujia.com
	 * @DateTime 2017-05-16T10:12:13+0800
	 * @param{[字符串]} path [description]
	 * @param{[数组]} param[description]
	 * @param{Function} callback [返回true/false]
	 */
	u.AjaxPost = function(path, param, callback) {
		var toast = new UToast();
		var paths;
		if(path.indexOf('/pc/') > -1){
			paths = path;
		}else{
			paths = config.URL + path;
		}
		$.ajax({
			type: 'post',
			url: paths,
			data: param,
			dataType: 'json',
			timeout: 10000,
			beforeSend: function(){
				toast.loading({
					title:"加载中"
				})
			},
			success: function(data) {
				if(data){
					setTimeout(function(){
						toast.hide();
						callback(data);
					},500);
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
	/**
	 * [BrowserType 判断当前浏览类型]
	 * @Author xc@yujia.com
	 * @DateTime 2017-11-06T14:59:06+0800
	 */
	u.BrowserType = function(){
		var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串
		var isOpera = userAgent.indexOf("Opera") > -1; //判断是否Opera浏览器
		var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera; //判断是否IE浏览器
		var isEdge = userAgent.indexOf("Windows NT 6.1; Trident/7.0;") > -1 && !isIE; //判断是否IE的Edge浏览器
		var isFF = userAgent.indexOf("Firefox") > -1; //判断是否Firefox浏览器
		var isSafari = userAgent.indexOf("Safari") > -1 && userAgent.indexOf("Chrome") == -1; //判断是否Safari浏览器
		var isChrome = userAgent.indexOf("Chrome") > -1 && userAgent.indexOf("Safari") > -1; //判断Chrome浏览器
		if(isIE){
			var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
			reIE.test(userAgent);
			var fIEVersion = parseFloat(RegExp["$1"]);
			if(fIEVersion == 8){return "IE8";}
			else if(fIEVersion == 9){return "IE9";}
			else if(fIEVersion == 10){return "IE10";}
			else if(fIEVersion == 11){return "IE11";}
			else{return "0"}//IE版本过低
		}//isIE end
		if (isFF){return "FF";}
		if (isOpera){return "Opera";}
		if (isSafari){return "Safari";}
		if (isChrome){return "Chrome";}
		if (isEdge){return "Edge";}
	}

/*end*/
	window.$app = u;
})(window);

/**
 * 移动端对话框组件
 * @Author xc@yujia.com
 * @DateTime 2017-05-06T11:13:24+0800
 */
(function( window, undefined ) {
	"use strict";
	var UDialog = function() {
	};
	var isShow = false;
	UDialog.prototype = {
		params: {
			title:'',
			msg:'',
			buttons: ['取消','确定'],
			input:false
		},
		create: function(params,callback) {
			var self = this;
			var dialogHtml = '';
			var buttonsHtml = '';
			var headerHtml = params.title ? '<div class="U-dialog-header">' + params.title + '</div>' : '<div class="U-dialog-header">' + self.params.title + '</div>';
			if(params.input){
				params.text = params.text ? params.text: '';
				var msgHtml = '<div class="U-dialog-body"><input type="text" placeholder="'+params.text+'"></div>';
			}else{
				var msgHtml = params.msg ? '<div class="U-dialog-body">' + params.msg + '</div>' : '<div class="U-dialog-body">' + self.params.msg + '</div>';
			}
			var buttons = params.buttons ? params.buttons : self.params.buttons;
			if (buttons && buttons.length > 0) {
				for (var i = 0; i < buttons.length; i++) {
					buttonsHtml += '<div class="U-dialog-btn" tapmode button-index="'+i+'">'+buttons[i]+'</div>';
				}
			}
			var footerHtml = '<div class="U-dialog-footer">'+buttonsHtml+'</div>';
			dialogHtml = '<div class="U-dialog">'+headerHtml+msgHtml+footerHtml+'</div>';
			document.body.insertAdjacentHTML('beforeend', dialogHtml);
			// listen buttons click
			var dialogButtons = document.querySelectorAll(".U-dialog-btn");
			if(dialogButtons && dialogButtons.length > 0){
				for(var ii = 0; ii < dialogButtons.length; ii++){
					dialogButtons[ii].onclick = function(){
						if(callback){
							if(params.input){
								callback({
									buttonIndex: parseInt(this.getAttribute("button-index"))+1,
									text: document.querySelector("input").value
								});
							}else{
								callback({
									buttonIndex: parseInt(this.getAttribute("button-index"))+1
								});
							}
						};
						self.close();
						return;
					}
				}
			}
			self.open();
		},
		open: function(){
			if(!document.querySelector(".U-dialog"))return;
			var self = this;
			document.querySelector(".U-dialog").style.marginTop ="-"+Math.round(document.querySelector(".U-dialog").offsetHeight/2)+"px";
			if(!document.querySelector(".U-mask")){
				var maskHtml = '<div class="U-mask"></div>';
				document.body.insertAdjacentHTML('beforeend', maskHtml);
			}
			// document.querySelector(".U-dialog").style.display = "block";
			setTimeout(function(){
				document.querySelector(".U-dialog").classList.add("U-dialog-in");
				document.querySelector(".U-mask").classList.add("U-mask-show");
				document.querySelector(".U-dialog").classList.add("U-dialog-in");
			}, 10)
			document.querySelector(".U-mask").addEventListener("touchmove", function(e){
				e.preventDefault();
			})
			document.querySelector(".U-dialog").addEventListener("touchmove", function(e){
				e.preventDefault();
			})
			return;
		},
		close: function(){
			var self = this;
			document.querySelector(".U-mask").classList.remove("U-mask-show");
			document.querySelector(".U-dialog").classList.remove("U-dialog-in");
			document.querySelector(".U-dialog").classList.add("U-dialog-out");
			if (document.querySelector(".U-dialog:not(.U-dialog-out)")) {
				setTimeout(function(){
					if(document.querySelector(".U-dialog"))document.querySelector(".U-dialog").parentNode.removeChild(document.querySelector(".U-dialog"));
					self.open();
					return true;
				},200)
			}else{
				document.querySelector(".U-mask").classList.add("U-mask-hide");
				document.querySelector(".U-dialog").addEventListener("webkitTransitionEnd", function(){
					self.remove();
				})
				document.querySelector(".U-dialog").addEventListener("transitionend", function(){
					self.remove();
				})
			}
		},
		remove: function(){
			if(document.querySelector(".U-dialog"))document.querySelector(".U-dialog").parentNode.removeChild(document.querySelector(".U-dialog"));
			if(document.querySelector(".U-mask")){
				document.querySelector(".U-mask").classList.remove("U-mask-hide");
			}
			return true;
		},
		alert: function(params,callback){
			var self = this;
			return self.create(params,callback);
		},
		prompt:function(params,callback){
			var self = this;
			params.input = true;
			return self.create(params,callback);
		}
	};
	window.UDialog = UDialog;
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

//图片延迟加载
function loadPic(obj){
var oH = obj.offsetHeight,
	oW = obj.offsetWidth;
var dataSrc = obj.getAttribute('data-src');
if(dataSrc){
setTimeout(function(){
obj.setAttribute('src', dataSrc);
obj.style.height = oH + 'px';
obj.style.width = oW + 'px';
obj.setAttribute('data-src', '');
},300);
}
}
//返回上一页
function goBack(){
	var history = window.history.go(-1);
	if(history){
		window.location.href = history;
	}else{
		window.location.href = "http://www.yujia.com/siftclasslist";
	}
}