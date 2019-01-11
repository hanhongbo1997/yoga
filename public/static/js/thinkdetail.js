/**
 * Created by 16074 on 2017/11/30.
 */
cur($(".method_nav span"));
tab($(".method_nav span"),$(".dengluArea"));
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
    $(".energy_mengb").hide();
});

var wakeVideo = new wakeVideo();
wakeVideo.init();
$("video").removeAttr("poster");
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
wakeVideo.addEvent("ended", function () {
    console.log("ended");
    upload();
});
$('.vjs-play-control').unbind("click").bind("click", function (e) {
	if(!$(this).hasClass("vjs-playing")){
        e.stopPropagation();
        if (wakeVideo.paused) {
            wakeVideo.play();
        } else {
            playAudio();
        }
	}
    	

});
function changeLesson(id, fileName, lessonName) {
    $("#remind").hide();
    ind = 0;
    curLessonID = id;
    curLessonFileName = fileName;
    if (timer) {
        clearInterval(timer);
    }
    $(".energyMask").hide();
    $("#container h2").text(lessonName);
    playAudio();
}
function playAudio() {
    $.ajax({
        type: "POST",
        url: basePath + "getmeditationlesaudio.ajax",
        data: {
            "fileName": curLessonFileName
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("网络连接失败，请稍后再试");
        },
        success: function (data) {
            if (data.code == "1") {
                wakeVideo.reloadSrc_mp3(data.message.url);
                wakeVideo.play();
                var load_count=0;
                var timer_load=setInterval(function(){
                	load_count+=1;
                	if($(".vjs-loading-spinner").is(":hidden")){                		
                    	$(".video-js .vjs-time-tooltip").css({
                        	"visibility":"visible",
                    		"opacity":"1"
                        })
                        $(".video-js.vjs-user-inactive .vjs-progress-control .vjs-mouse-display").css({
                        	"visibility":"visible",
                    		"display":"block",
                    		"opacity":"1"
                        })
                    }  
                	if(load_count>15){
                		clearInterval(timer_load);
                	}
                },1000)                                                           
            } else {
                alert("播放失败！");
            }
        }
    });
}
function upload() {
    if (hasLogin) {
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
                        if (category == "2") {
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
                    hasLogin = false;
                    $("#punchAmount").text(energyValue);
                    $("#loginRemind").hide();
                    $("#buyVipRemind").hide();
                    $("#loginRemind2").show();
                    $("#punchRemind").hide();
                    $("#remind").show();
                    $(".loginBtn").show();
                    $(".user").hide();
                } else {
                    alert("打卡失败");
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                if (XMLHttpRequest.status == 401) {
                    hasLogin = false;
                    $("#loginRemind").hide();
                    $("#buyVipRemind").hide();
                    $("#loginRemind2").show();
                    $("#punchRemind").hide();
                    $("#remind").show();
                    $(".loginBtn").show();
                    $(".user").hide();
                } else {
                    alert("网络连接失败，请稍后再试");
                }
            }
        });
    } else {
        $("#loginRemind").hide();
        $("#buyVipRemind").hide();
        $("#loginRemind2").show();
        $("#punchRemind").hide();
        $("#remind").show();
        $(".loginBtn").show();
        $(".user").hide();
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
function hidesModel(type) {
    if (type == 2) {
        $("#energyMaskn").hide();
    } else {
        $("#energyMask").hide();
    }
}
function getLoginCode(){
    $("#code").empty();//将查询出的链接生成二维码
    $.ajax({
        type: "POST",
        url: basePath + "getlogonqrcode.ajax",
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("网络连接失败，请稍后再试");
        },
        success: function (data) {
            if (data.code == "1") {
                var url = "";
                url = data.message.qrcode;
                $("#code").qrcode(url);
                var headTimes = 0;
                clearInterval(logintimer);
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
                            alert("网络连接失败，请稍后再试");
                        },
                        success: function (data) {
                            if (data.code == "1") {
                                hasLogin = true;
                                data = data.message.user;
                                $("#user").html(data.nickname);
                                $("#userImage").attr("src", data.u_icon_url);
                                if(data.is_svip==1){
                                    $(".vipMark").show();
                                }else {
                                    $(".vipMark").hide();
                                }
                                $(".loginBtn").hide();
                                $(".user").show();
                                $(".innerLogin").hide();
                                clearInterval(logintimer);
                                if (ind > 0) {
                                    upload();
                                }
                            } else {
                            }
                        }
                    });
                }, 3000);
            } else {
                alert(data.desc);
            }
        }
    });
}
function submitMyform() {
    $("#loginBtn").attr("disabled");
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
                data= data.message.user;
                $("#user").html(data.nickname);
                $("#userImage").attr("src", data.u_icon_url);
                $(".loginBtn").hide();
                $(".user").show();
                $(".innerLogin").hide();
                if (ind > 0) {
                    hasLogin = true;
                    upload(ind);
                }else {
                    history.go(0);
                }
            } else {
                buildAlert2("好的", data.desc);
            }
        }
    });
}
function login(loginType) {
    var width = $("body").width();
    var height = $("body").height();
    if(ind>0){
        recph=encodeURIComponent("2meditationlesd"+curLessonID + ".html?uncompleteurl=" + encodeURIComponent("uploaddata.ajax?timelength=" + ind + "&lssi=" + curLessonID));
    }else {
        recph=encodeURIComponent("2meditationlesd"+curLessonID+".html");;
    }
    window.location.href = basePath+"23rdpartlogin.html?loginType=" + loginType + "&width=" + width + "&height=" + height+ "&recph="+recph;
}
$(function () {
    var url = basePath+"2meditationlesd"+curLessonID+".html";
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
                    $(".loginBtn").show();
                    $(".user").hide();
                } else {
                    alert("打卡失败");
                }
            }
        });
    }
});
/*左侧导航点击效果*/
cur($(".thinkRight li"));
/*课程浮动效果----------------------------------------*/
  $(".courseList li").hover(function(){
    $(this).find(".courseName").addClass("fireOut");
    $(this).find(".seeNum .fireTime").show();
    $(this).find(".courseName").stop().animate({marginTop:"-20px"});
    $(this).find(".yellow_blue").stop().animate({top:"0"},"slow");
  },function(){
      $(this).find(".courseName").stop().animate({marginTop:"0"});
      $(this).find(".seeNum .fireTime").hide();
      $(this).find(".courseName").removeClass("fireOut");
      $(this).find(".yellow_blue").stop().animate({top:"-10px"},"slow");
  });
  /*关闭登录框*/
  $(".closeDL").click(function(){
    $(".innerLogin").hide();
  })