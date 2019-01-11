/**
 * Created by 16074 on 2017/11/30.
 */

/*视频播放完成事件*/

/*视频开始播放事件----计时*/
var ind = 0;
var timer;
var wakeVideo = new wakeVideo();
wakeVideo.init();
wakeVideo.addEvent('play', function () {
    console.log("play");
    if (timer) {
        clearInterval(timer);
    }
    timer = setInterval(function () {
        ind = ind + 1;
        console.log(ind);
    }, 1000);
});
wakeVideo.addEvent('pause', function () {
    console.log("pause");
    clearInterval(timer);
});
wakeVideo.addEvent('ended', function () {
    exitFullscreen();
    console.log("ended");
    if(!istryFile){
        upload();
    }else {
        if(hasLogined){
            if(checkCanplay){
                if(!u_lesson_training_plan_start_at){
                    console.info("爱我和吃屎选一个，快说");

                }else {
                    buildAlert("稍后开启", "开始计划", "您还没有开始计划", function () {
                        var mydate = new Date();
                        var startDate = mydate.getFullYear() + "-" + (mydate.getMonth() + 1) + "-" + mydate.getDate();
//                        alert(startDate)
                        startPlan(curLessonID, startDate);
                    });
                }
            }else {
                $("#loginRemind").hide();
                $("#buyVipRemind").show();
                $("#loginRemind2").hide();
                $("#punchRemind").hide();
                $("#remind").show();
            }
        }else {
            $("#loginRemind").show();
            $("#buyVipRemind").hide();
            $("#loginRemind2").hide();
            $("#punchRemind").hide();
            $("#remind").show();
        }
    }

});
/*获取是哪个浏览器-----------------------------------------------------------*/
function IEVersion() {
    var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串  
    var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1; //判断是否IE<11浏览器  
    var isEdge = userAgent.indexOf("Edge") > -1 && !isIE; //判断是否IE的Edge浏览器  
    var isIE11 = userAgent.indexOf('Trident') > -1 && userAgent.indexOf("rv:11.0") > -1;
    if(isIE) {
        var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
        reIE.test(userAgent);
        var fIEVersion = parseFloat(RegExp["$1"]);
        if(fIEVersion == 7) {
            return 7;
        } else if(fIEVersion == 8) {
            return 8;
        } else if(fIEVersion == 9) {
            return 9;
        } else if(fIEVersion == 10) {
            return 10;
        } else {
            return 6;//IE版本<=7
        }   
    } else if(isEdge) {
        return 'edge';//edge
    } else if(isIE11) {
        return 11; //IE11  
    }else{
        return -1;//不是ie浏览器
    }
}
/*END-获取是哪个浏览器-----------------------------------------------------------*/
$('.mejs__button.mejs__playpause-button button').unbind("click").bind("click", function (e) {
    if ($('.mejs__button.mejs__playpause-button').hasClass("mejs__play")) {
        e.stopPropagation();
        if (wakeVideo.paused) {
            wakeVideo.play();
        } else {
            if(hasLogined){
                if(checkCanplay){
                    if(!u_lesson_training_plan_start_at){
                        istryFile=false;
                        playVedio();
                    }else{
                        istryFile=true;
                        wakeVideo.reloadSrc(tryFile)
                        wakeVideo.play();
                    }
                }else {
                    istryFile=true;
                    wakeVideo.reloadSrc(tryFile)
                    wakeVideo.play();
                }
            }else {
                istryFile=true;
                wakeVideo.reloadSrc(tryFile)
                wakeVideo.play();
            }
        }
    }
});
var userClick=0;
$('.vjs-big-play-button').unbind("click").bind("click", function (e) {
	if(IEVersion()!=-1 && userClick==0){
		buildAlert2("确定","为了获得最佳观看效果，请选择其他浏览器。推荐谷歌、火狐")
	}	
	userClick+=1;
	
    $(".mejs__overlay").show();
    e.stopPropagation();
    if (wakeVideo.paused) {
        wakeVideo.play();
    } else {
        if(hasLogined){//已登录-----------------------------------------------------------
            if(checkCanplay){
                if(!u_lesson_training_plan_start_at){
                    istryFile=false;
                    playVedio();
                }else{//试看视频---------------------------------
                    istryFile=true;
                    wakeVideo.reloadSrc_mp4(tryFile)
                    wakeVideo.play();
                }
            }else {//试看视频-----------------------------------------------------------
                istryFile=true;
                wakeVideo.reloadSrc_mp4(tryFile)
                wakeVideo.play();
            }
        }else {//未登录-----------------------------------------------------------------
            istryFile=true;
            wakeVideo.reloadSrc_mp4(tryFile)
            wakeVideo.play();
        }
    }
});

function changeLesson(lessonId, filename) {
    $("#remind").hide();
    istryFile=false;
    ind = 0;
    curLessonID = lessonId;
    curLessonFileName = filename;
    if (timer) {
        clearInterval(timer);
    }
    $(".energyMask").hide();
    playVedio();
}
function playVedio(fileName) {
    if(typeof (fileName) !="undefined"){
        curLessonFileName=fileName;

    }
    if (!curLessonFileName) {
        alert("播放失败");
        return;
    }
    if (hasLogined) {
        if (checkCanplay) {
            if (!u_lesson_training_plan_start_at) {            	
                $.ajax({
                    type: "POST",
                    url: basePath + "getplanvedio.ajax",
                    data: {
                        "lessonId": curLessonID,
                        "fileName": curLessonFileName
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        if (XMLHttpRequest.status == 401) {
                            $("#loginRemind").show();
                            $("#buyVipRemind").hide();
                            $("#loginRemind2").hide();
                            $("#punchRemind").hide();
                            $("#remind").show();
                            hasLogined = false;
                        } else {
                            alert("网络连接失败，请稍后再试");
                        }
                    },
                    success: function (data) {
                        if (data.code == "1") {
                            ind=0;                          
                            wakeVideo.reloadSrc(data.message.url);
                            wakeVideo.play();
                        } else if (data.code == "-2") {
                            $("#loginRemind").show();
                            $("#buyVipRemind").hide();
                            $("#loginRemind2").hide();
                            $("#punchRemind").hide();
                            $("#remind").show();
                            hasLogined = false;
                        } else if (data.code == "-3") {
                            $("#loginRemind").hide();
                            $("#buyVipRemind").show();
                            $("#loginRemind2").hide();
                            $("#punchRemind").hide();
                            $("#remind").show();
                        } else {
                            alert("播放失败");
                        }
                    }
                });
            } else {
                buildAlert("稍后开启", "开始计划", "您还没有开始计划", function () {
                    var mydate = new Date();
                    var startDate = mydate.getFullYear() + "-" + (mydate.getMonth() + 1) + "-" + mydate.getDate();
//                        alert(startDate)
                    startPlan(curLessonID, startDate);
                });
            }
        } else {
            $("#loginRemind").hide();
            $("#buyVipRemind").show();
            $("#loginRemind2").hide();
            $("#punchRemind").hide();
            $("#remind").show();
        }

    } else {
        $("#loginRemind").show();
        $("#buyVipRemind").hide();
        $("#loginRemind2").hide();
        $("#punchRemind").hide();
        $("#remind").show();
    }
}
function upload() {
    if(!u_lesson_training_plan_start_at){
        if (hasLogined) {
            if (ind > 0) {
                $.ajax({
                    url: basePath + "uploaddata.ajax",// 跳转到 action
                    data: {
                        timelength: ind,
                        lssi: parentId
                    },
                    type: 'post',
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        if (data.code == "1") {
                            var energyValue;
                            for (var category in data.message.lesson_category_energy_info) {
                                if (category == "4") {
                                    energyValue = data.message.lesson_category_energy_info[category];
                                }
                            }
                            $("#punchAmount").text(energyValue);
                            $("#loginRemind").hide();
                            $("#buyVipRemind").hide();
                            $("#loginRemind2").hide();
                            $("#punchRemind").show();
                            $("#remind").show();
                            ind = 0;
                        } else if (data.code == "-2") {
                            $("#loginRemind").show();
                            $("#buyVipRemind").hide();
                            $("#loginRemind2").hide();
                            $("#punchRemind").show();
                            $("#remind").show();
                        } else {
                            alert("打卡失败");
                            ind = 0;
                        }

                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        if (XMLHttpRequest.status == 401) {
                            $("#user").hide();
                            $("#loginRemind").show();
                            $("#buyVipRemind").hide();
                            $("#loginRemind2").hide();
                            $("#punchRemind").hide();
                            $("#remind").show();
                            $(".loginBtn").show();
                            $(".user").hide();
                            hasLogined = false;
                        } else {
                            alert("网络连接失败，请稍后再试");
                        }
                    }
                });
            }
        } else {
            $("#loginRemind").show();
            $("#buyVipRemind").hide();
            $("#punchRemind").hide();
            $("#loginRemind2").hide();
            $("#remind").show();
        }
    }else {
        getLock()
    }

}
function loginBtn() {
    $("#remind").hide();
    $(".innerLogin").show();
}
function myrefresh1() {//二维码失效后刷新重新调用接口生成新的二维码
    $("#loginCode").html("");
    loginBtn();
}
function startPlan(lessonId, startDate) {
    $.ajax({
        type: "post",
        url: basePath + "startplan.ajax",
        data: {"lessonid": lessonId, "startDate": startDate},
        dataType: "json", //服务器返回数据类型, xml, html, script, json, jsonp, text
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            buildAlert2("好的","网络连接失败，请稍后再试");
        },
        success: function (result) {
            if (result.code == "1") {
                window.location.href = basePath + "auth/2pland" + curLessonID+".html";
            } else {
                buildAlert2("好的","登陆过期，请重新登陆")
            }
        }
    });
}
function getLock(){
    wakeVideo.pause();
    if(hasLogined){
        if(checkCanplay){
            if(!u_lesson_training_plan_start_at){
                buildAlert2("好的","当前课程还未解锁，请耐心等候！")
            }else {
                buildAlert("稍后开启", "开始计划", "您还没有开始计划", function () {
                    var mydate = new Date();
                    var startDate = mydate.getFullYear() + "-" + (mydate.getMonth() + 1) + "-" + mydate.getDate();
//                        alert(startDate)
                    startPlan(curLessonID, startDate);
                });
            }
        }else {
            $("#loginRemind").hide();
            $("#buyVipRemind").show();
            $("#punchRemind").hide();
            $("#loginRemind2").hide();
            $("#remind").show();
        }
    }else {
        $("#loginRemind").show();
        $("#buyVipRemind").hide();
        $("#punchRemind").hide();
        $("#loginRemind2").hide();
        $("#remind").show();
    }
}
$(document).click(function(){
    $("#energyMas").hide();
    clearInterval(logintimer);
})
function submitMyform() {
    $("#loginBtn").attr("disabled");
    var mobile_number = $("#phone").val();
    var password = $("#password").val();
    var reg = /^1\d{10}$/;
    if (mobile_number.replace(/[ ]/g, "") == "") {
        buildAlert2("关闭", "手机号不能为空");
        $("#loginBtn").attr("disabled","true");
        return;
    }
    if (password.replace(/[ ]/g, "") == "") {
        buildAlert2("关闭", "密码不能为空");
        $("#loginBtn").attr("disabled","true");
//            alert("密码不能为空");
        return;
    }
    if (!reg.test(mobile_number)) {
        buildAlert2("关闭", "手机号输入不合法");
        $("#loginBtn").attr("disabled","true");
//            alert("手机号输入不合法")
        return;
    }
    var width = $("body").width();
    var height = $("body").height();
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
            $("#loginBtn").attr("disabled","true");

        },
        success: function (data) {
            if (data.code == "1") {
                data= data.message.user;
                $("#user").html(data.nickname);
                $("#punchRemindUser").text(data.nickname);
                $("#buyVipRemindUser").text(data.nickname);
                $("#userImage").attr("src", data.u_icon_url);
                if(data.is_svip==1){
                    $(".vipMark").show();
                }else {
                    $(".vipMark").hide();
                }
                $(".loginBtn").hide();
                $(".user").show();
                $(".innerLogin").hide();
                if (ind > 0) {
                    hasLogined = true;
                    if(!istryFile){
                        upload(ind);
                    }
                }else {
                    history.go(0);
                }
            } else {
                buildAlert2("好的", data.desc);
                $("#loginBtn").attr("disabled","true");
            }
        }
    });
}
function login(loginType) {
    var width = $("body").width();
    var height = $("body").height();
    if(ind>0){
        recph=encodeURIComponent("auth/2pland"+curLessonID + ".html?uncompleteurl=" + encodeURIComponent("uploaddata.ajax?timelength=" + ind + "&lssi=" + curLessonID));
    }else {
        recph=encodeURIComponent("auth/2pland"+curLessonID+".html");;
    }
    window.location.href = basePath+"23rdpartlogin.html?loginType=" + loginType + "&width=" + width + "&height=" + height+ "&recph="+recph;
}
$(function () {
    var url = basePath+"auth/2pland"+curLessonID+".html";
    window.history.replaceState(null, null, url);
    if(recph){
        $.ajax({
            type: "POST",
            url: basePath+recph,
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                buildAlert2("好的", "网络环境不好，请稍后重试!");
            },
            success: function (data) {
                if (data.code == "1") {
                    var energyValue;
                    for (var category in data.message.lesson_category_energy_info) {
                        if (category == "0") {
                            energyValue = data.message.lesson_category_energy_info[category];
                        }
                    }
                    $("#punchAmount").text(energyValue);
                    $("#loginRemind").hide();
                    $("#buyVipRemind").hide();
                    $("#loginRemind2").hide();
                    $("#punchRemind").show();
                    $("#remind").show();
                    ind = 0;
                } else if (data.code == "-2") {
                    hasLogined = false;
                    $("#loginRemind").show();
                    $("#buyVipRemind").hide();
                    $("#loginRemind2").hide();
                    $("#punchRemind").hide();
                    $("#remind").show();
                    $(".loginBtn").show();
                    $(".user").hide();
                } else {
                    alert("打卡失败");
                }
            }
        });
    }
});
function getLoginCode(){
    $("#codes").empty();
    $.ajax({
        type: "POST",
        url: basePath + "getlogonqrcode.ajax",
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("网络连接失败，请稍后再试");
        },
        success: function (data) {
            if (data.code == 1) {
                var url = "";
                url = data.message.qrcode;
                $("#codes").qrcode(url);
                var headTimes = 0;
                clearInterval(logintimer);
                logintimer = setInterval(function () {
                    headTimes = headTimes + 1;
                    if (headTimes == 33) {
                        $("#refreshCode").show();
                        clearInterval(logintimer);
                    }
                    $.ajax({
                        type: "POST",
                        url: basePath + "ckqrcodelogon.ajax",
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            alert("网络连接失败，请稍后再试");
                        },
                        success: function (data) {
                            if (data.code == "1") {
                                clearInterval(logintimer);
                                $("#user").html(data.message.user.nickname);
                                $("#userImage").attr("src", data.message.user.u_icon_url);
                                if(data.message.user.is_svip==1){
                                    $(".vipMark").show();
                                }else {
                                    $(".vipMark").hide();
                                }
                                $("#energyMas").hide();
                                $(".loginBtn").hide();
                                $(".user").show();
                                $(".innerLogin").hide();
                                hasLogined = true;
                                history.go(0);
                            }
                        }
                    });
                }, 3000);
            }
        }
    });
}
/*课程浮动效果----------------------------------------*/
$(".courseList li").hover(function () {
    $(this).find(".courseName").addClass("fireOut");
    $(this).find(".seeNum .fireTime").show();
    $(this).find(".courseName").stop().animate({marginTop: "-20px"});
    $(this).find(".yellow_blue").stop().animate({top: "0"}, "slow");
}, function () {
    $(this).find(".courseName").stop().animate({marginTop: "0"});
    $(this).find(".seeNum .fireTime").hide();
    $(this).find(".courseName").removeClass("fireOut");
    $(this).find(".yellow_blue").stop().animate({top: "-10px"}, "slow");
});
$(document).click(function () {
    $(".loginCode").hide();
})
$(".loginCode").click(function (event) {
    event.stopPropagation();
})
cur($(".method_nav span"));
tab($(".method_nav span"), $(".dengluArea"));
/*出现删除按钮*/
$(".loginList li .number_out input").keyup(function () {
    if ($(this).val().length >= 1) {
        if ($(this).parent().parent().find(".deleteSpan").is(":hidden")) {
            $(this).parent().parent().find(".deleteSpan").show();
        }
    }
})
$(".deleteSpan").click(function () {
    $(this).parent().find("input").val("");
    $(this).hide();
})
$(".loginList li .number_out input").focus(function () {
    $(".loginList li .deleteSpan").hide();
    if ($(this).val().length >= 1) {
        $(this).parent().find(".deleteSpan").show();
    }
})
/*名师课程浮动效果*/
 $(".boxscroll ul li").hover(function(){
    if(!$(this).hasClass("cur")&&!$(this).hasClass("lock")){
      $(this).find(".boxMask").fadeOut();
    }    
  },function(){
    if(!$(this).hasClass("cur")&&!$(this).hasClass("lock")){
      $(this).find(".boxMask").fadeIn();
    }
  });
/*lundong----------------------------------------------------*/
var oLength=$(".boxscroll ul li").length;
$(".boxscroll ul").width(265*oLength);
$(".leftBox").hide();
if(oLength<=4){
  $(".rightBox").hide();
}
var ind_num=0;
$(".rightBox").click(function(){
    $(".leftBox").show();
    ind_num+=1;
    console.log(ind_num);
    if(ind_num==oLength-4){
      $(".rightBox").hide();
    }
    $(".boxscroll ul").stop().animate({left:265*ind_num*-1});
})
$(".leftBox").click(function(){
    $(".rightBox").show();
    ind_num-=1;
    if(ind_num==0){
      $(".leftBox").hide()
    }
    $(".boxscroll ul").stop().animate({left:265*ind_num*-1});  
})
/*点击选中标志*/
$(".boxscroll ul li").click(function(){
    if(!$(this).hasClass("lock")){
      $(".boxscroll ul li").removeClass("cur");
      $(this).addClass("cur");
      $(".boxscroll ul li").find(".boxMask").show();
      $(this).find(".boxMask").hide();
    }   
})
/*关闭登录框*/
$(".closeDL").click(function(){
    $(".innerLogin").hide();
})
function exitFullscreen() {
    var de = document;
    if (de.exitFullscreen) {
        de.exitFullscreen();
    } else if (de.mozCancelFullScreen) {
        de.mozCancelFullScreen();
    } else if (de.webkitCancelFullScreen) {
        de.webkitCancelFullScreen();
    }
}