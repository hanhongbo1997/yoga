(function(){
    var dialog = new UDialog({}),
        toast = new UToast();

    //取消订单事件
    $('.del_orders').on('click',function(){
        var vid = $(this).parents('td').data('vid');
        dialog.alert({
            title:"警告",
            msg: "确认关闭该订单吗？",
            buttons:['确定','取消']
        },function(ret){
            if(ret.buttonIndex == 1 && vid){
                $app.AjaxPost('member/delete_order',{
                    vid: vid,
                },function(data){
                    if(data.status == 'ok'){
                        toast.success({
                            title:"订单取消成功",
                            duration:1000
                        });
                        setTimeout(function(){
                            window.location.href = config.URL + "member/orderform.html";
                        },1000);
                    }else{
                        toast.fail({
                            title:data.msg,
                            duration:2000
                        }); 
                    }
                });
            }else{
                return false;
            }
        })
    });

    
})();
