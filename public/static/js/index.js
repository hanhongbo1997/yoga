
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
$(".zhiboList li").hover(function () {
  $(this).find("dt span").fadeIn();
}, function () {
  $(this).find("dt span").fadeOut();
});
/*体式库浮动效果*/
$(".allStyle li").hover(function () {
  $(this).find(".courseName2").slideUp();
}, function () {
  $(this).find(".courseName2").slideDown();
});
/*bannner浮动效果*/
var oHeight=$(".scaleBanner ul li").height();
$(".scaleBanner ul li").hover(function(){
  $(this).stop().animate({width:"21%",height:oHeight+50},500)
  $(this).find("span").animate({"font-size":"24px"},500);
},function(){    
  $(this).stop().animate({width:"20%",height:oHeight},500)
  $(this).find("span").animate({"font-size":"18px"},500);
});

  var ind=0;
  $(".slideInner").append($(".enjoyOut").clone());
  var timer=setInterval(function(){
    ind+=1;
    if(ind==logsNum){
      $(".slideInner").css("top",0);    
      ind=1;     
    }
    var oTop=240*ind*-1; 
    $(".slideInner").animate({top:oTop},"slow");
  },3000);
function commonCur(hot, news, favora) {
  if (hot == 1) {
    $("#commonNew").removeClass("cur");
    $("#favorable").removeClass("cur")
    $("#commoHot").addClass("cur");
    $("#commonHotLessons").show();
    $("#commonNewLessons").hide();
    $("#commonFavorableLessons").hide();
  } else if (hot == 2) {
    $("#meditationNew").removeClass("cur");
    $("#meditationFavorable").removeClass("cur");
    $("#meditationHot").addClass("cur");
    $("#meditationFavorableLessons").hide();
    $("#meditationNewLessons").hide();
    $("#meditationHotLessons").show();
  } else if (hot == 3) {
    $("#plainsFavorable").removeClass("cur");
    $("#plainsNew").removeClass("cur")
    $("#plainsHot").addClass("cur");
    $("#trainingPlainsHot").show();
    $("#trainingPlainsNew").hide();
    $("#trainingPlainsFavorable").hide();
  }else if(hot==4){
    $("#comprehensive2Favorable").removeClass("cur");
    $("#comprehensive2New").removeClass("cur");
    $("#comprehensive2Hot").addClass("cur");
    $("#comprehensive2FavorableLessons").hide();
    $("#comprehensive2NewLessons").hide();
    $("#comprehensive2HotLessons").show();
  }
  if (news == 1) {
    $("#commoHot").removeClass("cur");
    $("#favorable").removeClass("cur");
    $("#commonNew").addClass("cur");
    $("#commonFavorableLessons").hide();
    $("#commonHotLessons").hide();
    $("#commonNewLessons").show();
  } else if (news == 2) {
    $("#meditationFavorable").removeClass("cur");
    $("#meditationHot").removeClass("cur");
    $("#meditationNew").addClass("cur");
    $("#meditationFavorableLessons").hide();
    $("#meditationHotLessons").hide();
    $("#meditationNewLessons").show();
  } else if (news == 3) {
    $("#plainsFavorable").removeClass("cur");
    $("#plainsHot").removeClass("cur");
    $("#plainsNew").addClass("cur");
    $("#trainingPlainsFavorable").hide();
    $("#trainingPlainsHot").hide();
    $("#trainingPlainsNew").show();
  }else if(news==4){
    $("#comprehensive2Favorable").removeClass("cur");
    $("#comprehensive2Hot").removeClass("cur");
    $("#comprehensive2New").addClass("cur");
    $("#comprehensive2FavorableLessons").hide();
    $("#comprehensive2HotLessons").hide();
    $("#comprehensive2NewLessons").show();
  }

  if (favora == 1) {
    $("#commoHot").removeClass("cur");
    $("#commonNew").removeClass("cur");
    $("#favorable").addClass("cur");
    $("#commonHotLessons").hide();
    $("#commonNewLessons").hide();
    $("#commonFavorableLessons").show();
  } else if (favora == 2) {
    $("#meditationNew").removeClass("cur");
    $("#meditationHot").removeClass("cur");
    $("#meditationFavorable").addClass("cur");
    $("#meditationNewLessons").hide();
    $("#meditationHotLessons").hide();
    $("#meditationFavorableLessons").show();
  } else if (favora == 3) {
    $("#plainsHot").removeClass("cur");
    $("#plainsNew").removeClass("cur");
    $("#plainsFavorable").addClass("cur");
    $("#trainingPlainsHot").hide();
    $("#trainingPlainsNew").hide();
    $("#trainingPlainsFavorable").show();
  }else if(favora==4){
    $("#comprehensive2Hot").removeClass("cur");
    $("#comprehensive2New").removeClass("cur");
    $("#comprehensive2Favorable").addClass("cur");
    $("#comprehensive2HotLessons").hide();
    $("#comprehensive2NewLessons").hide();
    $("#comprehensive2FavorableLessons").show();
  }
}
function plasy(lessonId) {
  window.location.href = basePath + "2commonlesd" + lessonId+".html";
}
function getTingkDetail(lessonId) {
  console.log("aid" + lessonId);
  window.location.href = basePath + "2meditationlesd" + lessonId+".html";
}
function getTecherDetail(lessonId){
  window.location.href =basePath + "auth/2comprehensivelesd"+lessonId+".html";
}
function getPlanDetal(lessonId){
  window.location.href=basePath + "auth/2pland"+lessonId+".html";
}
function getLiveDetail(liveId){
  window.location.href=basePath + "auth/2lived"+liveId+".html";
}
function getAsanasDetail(lessonId){
  window.location.href=basePath + "2asanasd"+lessonId+".html";
}