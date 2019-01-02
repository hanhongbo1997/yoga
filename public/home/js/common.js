function cur(nav){
	$(nav).click(function(){
		$(nav).removeClass("cur");
		$(this).addClass("cur");
	})
}
/*tab切换*/
function tab(nav,aDiv){
	$(nav).click(function(){
		var oIndex=$(nav).index( $(this)[0] ); 
		$(aDiv).hide();
		$(aDiv).eq(oIndex).show();
	})
}
/*hover效果*/
function hover(dom,transMask){
  $(dom).hover(function(){
      $(this).find(transMask).show();    
  },function(){
      $(this).find(transMask).hide();
  });
}
var scrollTop;//全局变量滚动条
function lock(){
	//锁定屏幕，不允许滚动
	scrollTop = $("body").scrollTop();
	$("body").css({
	    'overflow':'hidden',
	    'position': 'fixed',
	    "width":'100%',
	    'top': scrollTop*-1
	});
}
function nolock(){
	//解锁屏幕
	$("body").css({
	    'overflow':'auto',
	    'position': 'static',
	});
	$("body").scrollTop(scrollTop);
}
/*弹窗---仅有一句提示语，两个按钮*/
function buildAlert(btnText1,btnText2,oText,result){
	$(".hidden_mask").remove();
	$("body").append('<div class="hidden_mask"><div class="appoint_inner"><h3>'+oText+'</h3><div class="btnOut oh"><a href="javascript:;" class="fl">'+btnText1+'</a><a href="javascript:;" class="fr cur">'+btnText2+'</a></div></div></div>');
	lock();
	$(".hidden_mask").on("click",function(){
		$(this).remove();
		nolock();
	})
	$(".appoint_inner").on("click",function(event){
		event.stopPropagation();
	})
	$(".btnOut a").eq(0).on("click",function(){
		$(".hidden_mask").remove();
		nolock();
	})
	$(".btnOut a").eq(1).on("click",function(){
		$(".hidden_mask").remove();
		nolock();
		if(result){
			result();
		}
	})
}
/*弹窗---仅有一句提示语，toast成功提示,可跳转*/
function buildToast(oText,oHref){
	$(".hidden_mask").remove();
	$("body").append('<div class="hidden_mask"><div class="toast_inner"><img src="../image/pc/done.png"/><div>'+oText+'</div></div></div>');
	lock();
	setTimeout(function(){
		$(".hidden_mask").remove();
		nolock();
		if(oHref){
			self.location.href=oHref;
		}
	},1000)
}
/*弹窗---仅有一句提示语，toast失败提示*/
function buildToast_fail(oText){
	$(".hidden_mask").remove();
	$("body").append('<div class="hidden_mask"><div class="toast_inner"><img src="../image/pc/fail.png"/><div>'+oText+'</div></div></div>');
	lock();
	setTimeout(function(){
		$(".hidden_mask").remove();
		nolock();
	},1000)
}
/*弹窗---仅有一句提示语，loading提示*/
function buildLoad(oText){
	$(".hidden_mask").remove();
	$("body").append('<div class="hidden_mask"><div class="toast_inner"><img src="../image/pc/loading.gif"/><div>'+oText+'</div></div></div>');
	lock();
}
/*弹窗---仅有一句提示语，一个按钮*/
function buildAlert2(btnText1,oText,result){
	$(".hidden_mask").hide();
	$("body").append('<div class="hidden_mask"><div class="appoint_inner"><h3>'+oText+'</h3><div class="btnOut btnOut2 oh"><a href="javascript:;" class="fl cur">'+btnText1+'</a></div></div></div>');
	lock();
	$(".hidden_mask").on("click",function(){
		$(this).hide();
		nolock();
	})
	$(".appoint_inner").on("click",function(event){
		event.stopPropagation();
	})
	$(".btnOut a").on("click",function(){
		$(".hidden_mask").hide();
		nolock();
		if(result){
			result();
		}
	})
}
