(function(){
	var Utils = Utils || {};
	var scripts = document.getElementsByTagName("script"); 
	var file = scripts[scripts.length - 1].getAttribute("src");

 	Utils.getQueryObject = function(file) {
 		var url = file ? file : location.search; //获取url中"?"符后的字串 
		var theRequest = new Object(); 
		if (url.indexOf("?") != -1) { 
			var strs = url.split("?");
			var parmas = strs[1].split("&");
			for(var i = 0; i < parmas.length; i ++) { 
				theRequest[parmas[i].split("=")[0]] = unescape(parmas[i].split("=")[1]); 
			}
		} 
		return theRequest;
 	}
    var parmas = Utils.getQueryObject(file);
    document.write('<div id="adlist'+parmas.pid+'" class="ad_show"></div>');
    //以下为AJAX执行方法
    var oAjax = new XMLHttpRequest();//创建ajax对象
    oAjax.open("GET","https://www.yujia.com/index.php/pc/index/adShow?pid=" + parmas.pid + "&time=" + new Date().getTime(),true);
    oAjax.send();
    oAjax.onreadystatechange=function(){
        if(oAjax.readyState == 4){
            if(oAjax.status==200){
                // alert("成功" + oAjax.responseText);
                var ret = oAjax.responseText;
                //alert(ret)
				var addom = document.getElementById('adlist'+parmas.pid);
                // console.log('dsfsdf');
                if(ret!='error'){
                    addom.innerHTML = ret;
                }
                console.log(ret);
				
            }else{
                console.log('广告加载失败');
            }
        }
    };
    
})();