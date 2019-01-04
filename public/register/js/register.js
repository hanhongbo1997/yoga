(function(){
	var clock,
    	count,
        AdressCode,
    	PhoneNum = $('#PhoneNum'),
		code = $('#msgcode'),
		Pswd = $('#inputPassword'),
		PswdAgn = $('#inputPasswordAgn'),
		url = $('#registbtn').data('url'),
		sign = $('#registbtn').data('sign'),
		dialog = new UDialog({}),
		toast = new UToast({});
	//获取验证码
	$('#gainCode').click(function(event) {
		var _this = $(this);
        AdressCode = $('input[name="adress_code"]').val();
        if(AdressCode == '0086' && $app.isPhone(PhoneNum.val()) == false){
            dialog.alert({
                title:"出错啦~！",
                msg:'请输入正确的手机号码',
                buttons:['确定']
            },function(ret){
                PhoneNum.focus();
            })
            return false;
        }
        var codeUrl = _this.data('url');
        //注册请求验证码
        $app.AjaxPost(codeUrl,{
            adress_code: AdressCode,
            phone_num: PhoneNum.val(),
            action: 'reg',//标识注册验证码
            sign: sign
        },function(state){
            console.log(JSON.stringify(state));
            if(state.status == 'ok'){
                toast.success({
                    title:"发送成功",
                    duration:2000
                });
                //180秒倒计时
                count = 180;
                clock = setInterval(function() {
                    fnCount(_this);
                },1000)
            }else{
                dialog.alert({
                    title:"出错啦~！",
                    msg: state.msg,
                    buttons:['确定']
                })
            }
        })

	});
	/**
     * 验证码倒计时
     * @Author   xc@yujia.com
     * @DateTime 2017-05-08T17:30:48+0800
     */
    function fnCount(obj){
        if(count == 0){
            obj.attr('disabled', false).val('获取').addClass('btn-bordered disabled');
            clearInterval(clock);
            count = 60;
            return;
        }else{
            obj.attr('disabled', true).val(count+' S').removeClass('btn-bordered disabled');
            count--; 
        }
    }
	//回车提交方法
	$('input').keypress(function(e){
		var key = e.which; //e.which是按键的值
		if (key == 13){
			submitform();
		}
	})
	//点击提交方法			
	$("#registbtn").click(function(){
		submitform();
	})
	//注册提交方法
	function submitform(){
        AdressCode = $('input[name="adress_code"]').val();
		if(AdressCode == '0086' && $app.isPhone(PhoneNum.val()) == false){
			dialog.alert({
                title:"出错啦~！",
                msg:'请输入正确的手机号码',
                buttons:['确定']
            },function(ret){
                PhoneNum.focus();
            })
            return false;
		}else if($app.isMesCode(code.val()) == false){
			dialog.alert({
                title:"出错啦~！",
                msg:'请重新正确的短信验证码',
                buttons:['确定']
            },function(ret){
                code.focus();
            })
            return false;
		}else if($app.isPassRule(Pswd.val()) == false){
			dialog.alert({
                title:"出错啦~！",
                msg:'密码为6-12位字符',
                buttons:['确定']
            },function(ret){
                Pswd.focus();
            })
            return false;
		}else if(Pswd.val() != PswdAgn.val()){
			dialog.alert({
                title:"出错啦~！",
                msg:'两次密码设置不符',
                buttons:['确定']
            },function(ret){
                PswdAgn.focus();
            })
            return false;
		}else{
			$app.AjaxPost(url,{
                adress_code: AdressCode,
				phone_num: PhoneNum.val(),
				vif_code: code.val(),
				pass: Pswd.val(),
				repass: PswdAgn.val(),
				sign: sign
			},function(state){
				console.log(JSON.stringify(state));
				if(state.status == 'ok'){
					toast.success({
                        title:"注册成功",
                        duration:2000
                    });
                    setTimeout(function(){
                        window.location.href = config.URL;
                       // window.location.href = config.URL + "entry/register_setNature/user_id/" + state.user_id;
                    },2000);
				}else{
					dialog.alert({
                        title:"出错啦~！",
                        msg: state.msg,
                        buttons:['确定']
                    })
				}
			})
		}
	}
})();