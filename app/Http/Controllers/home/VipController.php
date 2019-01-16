<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class VipController extends Controller
{
     /**
     * 确定订单
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//加载模板
        return view('home.vip.index',['title'=>'vip开通']);
    }
    /**
     * 提交订单
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updates(Request $request,$id)
    {	
    	//VIP 订单号获取
    	$oname = 'VIP';
    	$oname .= date('YmdHis',time() );
    	$oname .= rand(10000,99999);
    	//接收数据
    	$data = new Order;
    	$data->oname = '[限时抢购] 瑜课堂丨超值VIP至尊视频年卡';
    	$data->ouser = $id;
		$data->oprice = $request->input('oprice');
		$data->order = $oname;
		// dump($data);
    	if($data->save()){
                // dump(session('mobile_code') == $request->smsCode);
                return view('/home/vip/index',['title'=>'vip开通','data'=>$data])->with('success', '添加成功!');
               
                }else{
                    
                     return back()->with('error', '添加失败!');
              
        }
    	

    	//加载模板
        // return view('home.vip.index',['title'=>'vip开通']);
    }
    /**
     * 提交订单
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request,$id)
    {
    	$data = Order::find($id);
    	// dump($data);
    	//加载模板
    	return view('/home/vip/order',['title'=>'支付中心','data'=>$data]);
    }
}
