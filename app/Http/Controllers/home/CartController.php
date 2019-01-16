<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Lesson;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Cart::get();
        $sum = Cart::get()->sum('price');
        return view('home.order.cart',['data'=>$data,'sum'=>$sum]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Cart;
        $data->cid = $request->cid;
        $data->price = $request->price;
        $data->count = $request->count;
        $res = $data->save();
        if($res){
            return back()->with('添加成功');
        }else{
            return back()->with('添加失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $res = Cart::destroy('id',$id);
        if($res){
             return back()->with('success', '删除成功');
         }else{
             return back()->with('error', '删除失败');
         
        }
    }

    public function order(Request $request)
    {
        //
        $data = Cart::get();
        $sum = $request->price;
        return view('/home/order/order',['data'=>$data,'sum'=>$sum]);
    }

    public function success()
    {
        //
        return view('/home/order/success');
    }
    

}
