$(".hot_coach_inner ul li").hover(function(){
      $(this).find(".coachMask").fadeOut("slow");
      $(this).addClass("cur");
  },function(){
      $(this).find(".coachMask").fadeIn("slow");
      $(this).removeClass("cur");
  });
  /*大树小树-------------------------------------------*/
  var oSet_top=$(".coachTeam").offset().top;/*小树的top*/
  var oWin_height=$(window).height();/*可视窗口的高度*/
  var oMin_top=oSet_top-oWin_height;/*scrolltop*/
  var oMax_top=$(".coachersList").offset().top;/*小树的bottom*/
  var oSet2_top=$(".tree_out").offset().top;/*大树的top*/
  var oMin2_top=oSet2_top-oWin_height;/*scrolltop*/
  var oMax2_top=$(".invironment").offset().top;/*大树的bottom*/
  /*背景缓慢滚动*/
  var scrollFunc = function (e) {  
        e = e || window.event;  
        if (e.wheelDelta) {  //判断浏览器IE，谷歌滑轮事件               
            if (e.wheelDelta > 0) { //当滑轮向上滚动时  
                /**控制小树*/
                var oTop=parseInt($(".coachTeam").css("background-positionY"));
                if($(window).scrollTop()>=oMin_top && $(window).scrollTop()<oMax_top){                  
                  oTop-=10;
                  $(".coachTeam").stop().animate({"background-positionY":oTop},"slow")
                }  
                /*控制大树*/
                var oTop2=parseInt($(".tree_out").css("background-positionY"));
                if($(window).scrollTop()>=oMin2_top && $(window).scrollTop()<oMax2_top){                  
                  oTop2-=10;
                  $(".tree_out").stop().animate({"background-positionY":oTop2},"slow")
                }                   
            }  
            if (e.wheelDelta < 0) { //当滑轮向下滚动时 
                /*控制小树*/ 
                var oTop=parseInt($(".coachTeam").css("background-positionY"));
                if($(window).scrollTop()>=oMin_top && $(window).scrollTop()<oMax_top){
                  oTop+=10;
                  $(".coachTeam").stop().animate({"background-positionY":oTop},"slow")
                }                 
                /*控制大树*/
                var oTop2=parseInt($(".tree_out").css("background-positionY"));
                if($(window).scrollTop()>=oMin2_top && $(window).scrollTop()<oMax2_top){
                  oTop2+=10;
                  $(".tree_out").stop().animate({"background-positionY":oTop2},"slow")
                }                  
            }  
        } else if (e.detail) {  //Firefox滑轮事件  
            if (e.detail> 0) { //当滑轮向上滚动时  
                /*控制小树*/ 
                var oTop=parseInt($(".coachTeam").css("background-positionY"));
                if($(window).scrollTop()>=oMin_top && $(window).scrollTop()<oMax_top){
                  oTop+=10;
                  $(".coachTeam").stop().animate({"background-positionY":oTop},"slow")
                }  
                /*控制大树*/
                var oTop2=parseInt($(".tree_out").css("background-positionY"));
                if($(window).scrollTop()>=oMin2_top && $(window).scrollTop()<oMax2_top){
                  oTop2+=10;
                  $(".tree_out").stop().animate({"background-positionY":oTop2},"slow")
                }     
            }  
            if (e.detail< 0) { //当滑轮向下滚动时 
                /**控制小树*/
                var oTop=parseInt($(".coachTeam").css("background-positionY"));
                if($(window).scrollTop()>=oMin_top && $(window).scrollTop()<oMax_top){                  
                  oTop-=10;
                  $(".coachTeam").stop().animate({"background-positionY":oTop},"slow")
                }  
                /*控制大树*/
                var oTop2=parseInt($(".tree_out").css("background-positionY"));
                if($(window).scrollTop()>=oMin2_top && $(window).scrollTop()<oMax2_top){                  
                  oTop2-=10;
                  $(".tree_out").stop().animate({"background-positionY":oTop2},"slow")
                }       
            }  
        }  
    }  
  //给页面绑定滑轮滚动事件  
    if (document.addEventListener) {//firefox  
        document.addEventListener('DOMMouseScroll', scrollFunc, false);  
    }  
  window.onmousewheel = document.onmousewheel = scrollFunc;   
  /*教学团队--------------------------------------------------*/
  jQuery(".slideBox").slide({mainCell:".bd ul",effect:"top",autoPlay:true});  