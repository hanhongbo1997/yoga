
/*第一行单选条件--------------------------------------------*/
function chooseType1(name, obj) {
	$("#page").val(1);
    $("span[name=sort]").find("i").removeClass("cur");
    $("#reduSort").find("i").addClass("cur");
    $("#reduSort").find("i").find("input").prop("checked",true);
    $(".zifei1").find("input").prop("checked",false);
    $(".liupai1").find("input").prop("checked",false);
    $(".gongxiao1").find("input").prop("checked",false);
    $(".buwei1").find("input").prop("checked",false);
    $(".jibie1").find("input").prop("checked",false);
    $(".fenlei1").find("input").prop("checked",false);
    $(".zhuangtai1").find("input").prop("checked",false);
    $(".fenlei2").find("input").prop("checked",false);
    $(".tiaojian1").find("input").prop("checked",false);
    $(".type1").find("input").prop("checked",false);
    $(obj).parent().find("a").find("input").prop("checked",false);
    $(obj).find("input").prop("checked",true);
    $(obj).parent().find("a").removeClass("cur");
    $(obj).addClass("cur");
    if (name == 'leixing') {
        $(".userChoose span.leixing").remove();
        $(".userChoose span").remove();
        $(".userChoose").append('<span class="'+name+'">'+$(obj).text()+'</span>')
    }
    //
    //getData();
};
////资费
function chooseType2(name, obj) {
	$("#page").val(1);
    $(obj).parent().find("a").find("input").prop("checked",false);
    $(obj).find("input").prop("checked",true);
    $(obj).parent().find("a").removeClass("cur");
    $(obj).addClass("cur");
    if (name == 'zifei1') {
        $(".userChoose span.zifei1").remove();
    }
    if (name == 'liupai1') {
        $(".userChoose span.liupai1").remove();
    }
    if (name == 'gongxiao1') {
        $(".userChoose span.gongxiao1").remove();
    }
    if (name == 'buwei1') {
        $(".userChoose span.buwei1").remove();
    }
    if (name == 'jibie1') {
        $(".userChoose span.jibie1").remove();
    }
    if (name == 'fenlei1') {
        $(".userChoose span.fenlei1").remove();
    }
    if (name == 'zhuangtai1') {
        $(".userChoose span.zhuangtai1").remove();
    }
    if (name == 'fenlei2') {
        $(".userChoose span.fenlei2").remove();
    }
    if (name == 'tiaojian1') {
        $(".userChoose span.tiaojian1").remove();
    }
    if (name == 'type1') {
        $(".userChoose span.type1").remove();
    }

        $(".userChoose").append('<span class="'+name+'">'+$(obj).text()+'<img src="'+basePath+'image/pc/delete.png" alt="" onclick="deleteSpan(this,\''+name+'\')"/></span>')
    getData();
};

/*其余行多选条件--------------------------------------------*/
function choosePay(name, obj,ifree,lsstgaimati,lsstgeffecti,lsstgovvi,lsscate,lsslv,lvtp,lv3rdtp,asal2catis) {
    if (!$(obj).hasClass("cur")) {
        $(obj).addClass("cur");
        $(".userChoose").append('<span class="' + name + '">' + $(obj).text() + '<img src="'+basePath+'image/pc/delete.png" alt="" onclick="deleteSpan(this,\'' + name + '\')"/></span>')

    }
};
/*删除筛选条件*/
function deleteSpan(obj, name) {
    $(obj).parent().remove();
    $(".chooseTj ul li").find("a." + name).removeClass("cur");
    $(".chooseTj ul li").find("a." + name).find("input:checked").removeAttr("checked",false);
    getData();
}
/*练基础---2、3、4、5*/
$(".fasten").find("a").eq(0).click(function () {
    style=1;
    $(".chooseTj ul li.all").hide();
    $(".chooseTj ul li.all").find("a").removeClass("cur");
    $(".chooseTj ul li.choose1").show();
})
/*去冥想---3、4*/
$(".fasten").find("a").eq(1).click(function () {
    lessonType=2
    $(".chooseTj ul li.all").hide();
    $(".chooseTj ul li.all").find("a").removeClass("cur");
    $(".chooseTj ul li.choose2").show();
})
/*跟名师---1、2、3、4*/
$(".fasten").find("a").eq(2).click(function () {
    lessonType=3;
    $(".chooseTj ul li.all").hide();
    $(".chooseTj ul li.all").find("a").removeClass("cur");
    $(".chooseTj ul li.choose6").show();
})
/*定计划---1、2、3、4*/
$(".fasten").find("a").eq(3).click(function () {

    lessonType=4;
    $(".chooseTj ul li.all").hide();
    $(".chooseTj ul li.all").find("a").removeClass("cur");
    $(".chooseTj ul li.choose3").show();
})
/*直播课堂---1、6、7*/
$(".fasten").find("a").eq(4).click(function () {

    style=2;
    $(".chooseTj ul li.all").hide();
    $(".chooseTj ul li.all").find("a").removeClass("cur");
    $(".chooseTj ul li.choose4").show();
})
/*体式库---8、9、10*/
$(".fasten").find("a").eq(5).click(function () {

    style=3
    $(".chooseTj ul li.all").hide();
    $(".chooseTj ul li.all").find("a").removeClass("cur");
    $(".chooseTj ul li.choose5").show();

})
/*排序-------------------------------------------------------*/
$(".sortArea span i").click(function () {
	$("#page").val(1);
    $(".sortArea span i").find("input").attr("checked",false);
    $(this).find("input").prop("checked",true);
    $(".sortArea span i").removeClass("cur");
    $(this).addClass("cur");
})
/*课程浮动效果*/
hover($(".courseList li dt"), $(".courseMask"));

function getData() {
	$(".loadSign").show();
    $("#initData").hide();
    $("#result").hide();
    $("#isNull").hide();//隐藏查找失败提示
    $("#isError").hide();
    var test = window.location.host;
    var url=basePath + "2lessons/";
    var title="";
    var lsslv = $('input:radio[name="lsslv"]:checked').val();
    var lsslvText = $('input:radio[name="lsslv"]:checked').parent().text();
    if(typeof(lsslvText)!="undefined" && lsslvText !=""){
        title+=lsslvText+"瑜伽_";
    }
    var lsstgovvi = $('input:radio[name="lsstgovvi"]:checked').val();
    var lsstgovviText =$('input:radio[name="lsstgovvi"]:checked').parent().text();
    if(typeof(lsstgovviText)!="undefined"&& lsstgovviText !=""){
        title+=lsstgovviText+"瑜伽_";
    }
    var lsstgaimati = $('input:radio[name="lsstgaimati"]:checked').val();
    var lsstgaimatiText = $('input:radio[name="lsstgaimati"]:checked').parent().text();
    var lsstgeffecti = $('input:radio[name="lsstgeffecti"]:checked').val();
    var lsstgeffectiText = $('input:radio[name="lsstgeffecti"]:checked').parent().text();
    if(typeof(lsstgaimatiText)!="undefined"&& lsstgaimatiText !=""){
        title+=lsstgaimatiText;
    }
    if(typeof(lsstgeffectiText)!="undefined"&& lsstgeffectiText !=""){
        title+=lsstgeffectiText+"瑜伽_";
    }
    if(typeof(lsstgaimatiText)!="undefined"&& lsstgaimatiText !="" && lsstgeffectiText==""){
        title+="瑜伽_";
    }
    var ifree =$('input:radio[name="ifree"]:checked').val();
    var ifreeText=$('input:radio[name="ifree"]:checked').parent().text();
    if(typeof(ifreeText)!="undefined"&& ifreeText !=""){
        title+=ifreeText+"瑜伽_";
    }
    var lvtp = $('input:radio[name="lvtp"]:checked').val();
    var lvtpText = $('input:radio[name="lvtp"]:checked').parent().text();
    if(typeof(lvtpText)!="undefined"&& lvtpText !=""){
        title+=lvtpText+"瑜伽_";
    }
    var lv3rdtp = $('input:radio[name="lv3rdtp"]:checked').val();
    var lv3rdtpText = $('input:radio[name="lv3rdtp"]:checked').parent().text();
    if(typeof(lv3rdtpText)!="undefined"&& lv3rdtpText !=""){
        title+=lv3rdtpText+"瑜伽_";
    }
    var asal2catis2 = $('input:radio[name="asal2catis2"]:checked').val();
    var asal2catis2Text = $('input:radio[name="asal2catis2"]:checked').parent().text();
    if(typeof(asal2catis2Text)!="undefined"&& asal2catis2Text !=""){
        title+=asal2catis2Text+"瑜伽_";
    }
    var asal2catis3 = $('input:radio[name="asal2catis3"]:checked').val();
    var asal2catis3Text = $('input:radio[name="asal2catis3"]:checked').parent().text();
    if(typeof(asal2catis3Text)!="undefined"&& asal2catis3Text !=""){
        title+=asal2catis3Text+"瑜伽_";
    }
    var asal2catis1 = $('input:radio[name="asal2catis1"]:checked').val();
    var asal2catis1Text = $('input:radio[name="asal2catis1"]:checked').parent().text();
    if(typeof(asal2catis1Text)!="undefined"&& asal2catis1Text !=""){
        title+=asal2catis1Text+"瑜伽_";
    }
    var lesson=$('input:radio[name="lesson"]:checked').val();
    var lessonText = $('input:radio[name="lesson"]:checked').parent().text();
    title=title.replace(/\ +/g, "");
    title= title.replace(/[\r\n]/g,"");
    title+="瑜伽课程_Wake瑜伽";
    $("title").html(title);
    var page = $("#page").val();
    if(typeof (lesson) !="undefined"){
        $(".sortArea").show();
        $("#lessonTitle").text(lessonText);
        url+="a"+lesson;
    }
    if(typeof(ifree)!="undefined"){
        url+="b"+ifree;
    }
    if(typeof(lsstgovvi)!="undefined"){
        url+="c"+lsstgovvi;
    } if(typeof(lsstgeffecti)!="undefined"){
        url+="d"+lsstgeffecti;
    } if(typeof(lsstgaimati)!="undefined"){
        url+="e"+lsstgaimati;
    } if(typeof(lsslv)!="undefined"){
        url+="f"+lsslv;
    } if(typeof(lvtp)!="undefined"){
        url+="g"+lvtp;
    } if(typeof(lv3rdtp)!="undefined"){
        url+="h"+lv3rdtp;
    } if(typeof(asal2catis1)!="undefined"){
        url+="i"+asal2catis1;
    }if(typeof(asal2catis2)!="undefined"){
        url+="j"+asal2catis2;
    }if(typeof(asal2catis3)!="undefined"){
        url+="k"+asal2catis3;
    }
    url+="z2/";
    window.history.replaceState(null, null, url);
    $(".pageOut").show()
    console.info($("#myForm").serializeArray());
    /*开始请求数据*/
        $.ajax({
            type: "POST",
            url: basePath + "getless.ajax",
            data: $("#myForm").serializeArray(),
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $(".loadSign").hide();
                $("#initData").hide();
                $("#result").empty();
                $("#result").show();
                $("#isError").show();
                $(".pageOut").hide();
                //alert("网络环境不好，请稍后重试!");
            },
            success: function (data) {
            	$(".loadSign").hide();
                $("#result").show();
                if (data.code == 0) {
                    var count = data.message.contents.total;
                    var current= data.message.contents.current;
                    $("#page1").initPage(count, current, GG.kk);//总条数，当前页数，回掉函数
                    $("#count").val(count);
                    if(count==0){
                        $("#initData").hide();
                        $("#result").empty();
                        $("#isNull").show();//提示查找失败
                        $(".pageOut").hide()
                    }else {
                        data = data.message.contents.list;
                        $("#initData").hide();
                        $("#result").empty();
                        $("#checkLesson").val(lesson);
                        if(lesson==5){
                            $("#result").setTemplateElement("liveData");
                        }else if(lesson==6){
                            $("#result").setTemplateElement("asanasList");
                        }else if(lesson==4){
                            $("#result").setTemplateElement("plan");
                        }else if(lesson==3){
                            $("#result").setTemplateElement("teacherLesson");
                        }else if(lesson==2){
                            $("#result").setTemplateElement("tinkLesson");
                        }else {
                            $("#result").setTemplateElement("template");
                        }
                        // 给模板加载数据
                        $("#result").processTemplate(data);
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
                    }

                }else {
                    $("#initData").hide();
                    $("#result").empty();
                    $("#isError").show();
                    $(".pageOut").hide();
                }
            }
        });
}
$(function () {
    var checkLesson=$("#checkLesson").val();
    var name;
    $(".chooseTj ul li.all").hide();
    if(checkLesson=="1"){
        document.getElementById("point").className="";
        $("#point").addClass("point1");
        name="练基础";
        $("#baseLesson").parent().find("a").find("input").attr("checked",false);
        $("#baseLesson").find("input").prop("checked",true);
        $("#baseLesson").addClass("cur");
        //$(".userChoose").append('<span class="'+name+'">'+ $("#baseLesson").text()+'</span>');
        $(".userChoose").append('<span class="leixing">'+name+'</span>');

        $(".chooseTj ul li.all").hide();
        $(".chooseTj ul li.choose1").show();
        $("#lessonTitle").text(name);

    }else if(checkLesson=="2"){
        document.getElementById("point").className="";
        $("#point").addClass("point2");
        name="去冥想";
        $("#meditation").parent().find("a").find("input").attr("checked",false);
        $("#meditation").find("input").prop("checked",true);
        $("#meditation").addClass("cur");
        $(".userChoose").append('<span class="leixing">' + name + '</span>');
        //$(".userChoose").append('<span class="'+name+'">'+ $("#meditation").text()+'</span>');
        $(".chooseTj ul li.all").hide();
        $(".chooseTj ul li.choose2").show();
        $("#lessonTitle").text(name);
    }else if(checkLesson=="3"){
        document.getElementById("point").className="";
        $("#point").addClass("point3");
        name="跟名师";
        $("#master").parent().find("a").find("input").attr("checked",false);
        $("#master").find("input").prop("checked",true);
        $("#master").addClass("cur");
        $(".userChoose").append('<span class="leixing">'+name+'</span>');
        $(".chooseTj ul li.choose6").show();
        $("#lessonTitle").text(name);

    }else if(checkLesson=="4"){
        document.getElementById("point").className="";
        $("#point").addClass("point4");
        name="定计划";
        $("#plans").parent().find("a").find("input").attr("checked",false);
        $("#plans").find("input").prop("checked",true);
        $("#plans").addClass("cur");
        $(".userChoose").append('<span class="leixing">'+name+'</span>');
        $(".chooseTj ul li.all").hide();
        $(".chooseTj ul li.choose3").show();
        $("#lessonTitle").text(name);

    }else if(checkLesson=="5"){
        document.getElementById("point").className="";
        $("#point").addClass("point5");
        name="直播课堂";
        $("#live").parent().find("a").find("input").attr("checked",false);
        $("#live").find("input").prop("checked",true);
        $("#live").addClass("cur");
        $(".userChoose").append('<span class="leixing">'+name+'</span>');
        $(".chooseTj ul li.all").hide();
        $(".chooseTj ul li.choose4").show();
        $("#lessonTitle").text(name);

    }else if(checkLesson=="6"){
        document.getElementById("point").className="";
        $("#point").addClass("point6");
        name="体式库";
        $("#style").parent().find("a").find("input").attr("checked",false);
        $("#style").find("input").prop("checked",true);
        $("#style").addClass("cur");
        $(".userChoose").append('<span class="leixing">'+name+'</span>');
        $(".chooseTj ul li.all").hide();
        $(".chooseTj ul li.choose5").show();
        $("#lessonTitle").text(name);

    }else{
        name="练基础";
        $("#baseLesson").parent().find("a").find("input").attr("checked",false);
        $("#baseLesson").find("input").prop("checked",true);
        $("#baseLesson").addClass("cur");
        $(".userChoose").append('<span class="leixing">'+name+'</span>');
        $(".chooseTj ul li.all").hide();
        $(".chooseTj ul li.all").find("a").removeClass("cur");
        $(".chooseTj ul li.choose1").show();
        $("#lessonTitle").text(name);
    }
})

function MillisecondToDate(msd) {
    var time = parseFloat(msd) / 1000;
    if (null != time && "" != time) {
        if (time > 60 && time < 60 * 60) {
            time = parseInt(time / 60.0) + "分钟" + parseInt((parseFloat(time / 60.0) -
                    parseInt(time / 60.0)) * 60) + "秒";
        }
        else if (time >= 60 * 60 && time < 60 * 60 * 24) {
            time = parseInt(time / 3600.0) + "小时" + parseInt((parseFloat(time / 3600.0) -
                    parseInt(time / 3600.0)) * 60) + "分钟" +
                parseInt((parseFloat((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60) -
                    parseInt((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60)) * 60) + "秒";
        }
        else {
            time = parseInt(time) + "秒";
        }
    }
    return time;
}


function GetRequest() {
    var url = location.search; //获取url中"?"符后的字串
    var theRequest = new Object();
    if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        strs = str.split("&");
        for(var i = 0; i < strs.length; i ++) {
            theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
        }
    }
    return theRequest;
}

function getDetails(checkLesson,lessonId){
    if(checkLesson=='1' || checkLesson=='0'){
        window.location.href=basePath + "2commonlesd"+lessonId+".html";
    }else if(checkLesson=='2'){
        window.location.href=basePath + "2meditationlesd"+lessonId+".html";
    }else if(checkLesson=='3'){
        window.location.href=basePath + "auth/2comprehensivelesd"+lessonId+".html";

    }else if(checkLesson=='4'){
        window.location.href=basePath + "auth/2pland"+lessonId+".html";
    }else if(checkLesson=='5'){
        window.location.href=basePath + "auth/2lived"+lessonId+".html";
    }else {
        window.location.href=basePath + "2asanasd"+lessonId+".html";
    }
}

function formatSeconds(value) {
    var theTime = parseInt(value);// 秒
    var theTime1 = 0;// 分
    // alert(theTime);
    if(theTime > 60) {
        theTime1 = parseInt(theTime/60);
        theTime = parseInt(theTime%60);
        // alert(theTime1+"-"+theTime);
        if(theTime1 > 60) {
            theTime1 = parseInt(theTime1%60);
        }
    }
    var result = ""+parseInt(theTime)+"秒";
    if(theTime1 > 0) {
        result = ""+parseInt(theTime1)+"分"+result;
    }
    return result;
}
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