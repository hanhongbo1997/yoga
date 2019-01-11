/**
 * Created by 16074 on 2017/11/30.
 */
//百度站长统计代码
var _hmt = _hmt || [];
(function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?bb62d7379cd5d363a61fe19d7a644ae3";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();
//growing io
var _vds = _vds || [];
window._vds = _vds;
(function(){
    _vds.push(['setAccountId', 'b99bdfa0f85ca539']);
    (function() {
        var vds = document.createElement('script');
        vds.type='text/javascript';
        vds.async = true;
        vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(vds, s);
    })();
})();
$(function () {
    if (hasLogined) {
        document.getElementById("user").innerText = userName;//从Session中获取用户信息
        $("#userImage").attr("src", userImage);
        $("#myloginCode").hide();
        $(".loginBtn").hide();
        $(".user").show();
        if(isVip){
            $(".vipMark").show();
        }else {
            $(".vipMark").hide();
        }
    }
    var showFlag = $("#showFlag").val();
    if (showFlag == 1) {
        $(".navList2 a").removeClass();
        $("#index").attr("class", "cur");
    } else if (showFlag == 2) {
        $(".navList2 a").removeClass();
        $("#lesson").attr("class", "cur");
    } else if (showFlag == 3) {
        $(".navList2 a").removeClass();
        $("#community").attr("class", "cur");
    } else if (showFlag == 4) {
        $(".navList2 a").removeClass();
        $("#clubYoga").attr("class", "cur");
    } else if (showFlag == 5) {
        $(".navList2 a").removeClass();
        $("#annuaGiving").attr("class", "cur");
    } else if(showFlag == 6){
        $(".navList2 a").removeClass();
        $("#enterpriseYoga").attr("class", "cur");
    } else if(showFlag == 7){
        $(".navList2 a").removeClass();
        $("#trainingCoach").attr("class", "cur");
    }else {
        $(".navList2 a").removeClass("cur");
    }
});
function myrefresh(){
    headLoginBtn();
}
$(document).click(function(){
    $("#myloginCode").hide();
    clearInterval(logintimer);
})
$("#myloginCode").click(function(event){
    event.stopPropagation();
})
$(".wechat").hover(function(){
    $(".wecode").show();
},function(){
    $(".wecode").hide();
});
/*二级菜单*/
//$(".trainList").hover(function(){
//  $(".train_inner").slideDown();
//},function(){
//    $(".train_inner").slideUp();
//});
function toLogin(){
    window.location.href=basePath;
}

function headLoginBtn() {
    window.location.href=basePath+"2logon.html";
}

function loginOut() {
    $.ajax({
        type: "POST",
        url: basePath + "logout.ajax",
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("网络环境不好，请稍后重试!");
        },
        success: function (data) {
            if (data.code == "1") {
                $(".loginBtn").show();
                $(".user").hide();
                history.go(0);
            } else {
                $(".loginBtn").show();
                $(".user").hide();
                history.go(0);
            }
        }
    });
}