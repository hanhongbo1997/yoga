<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->video_id = $request->video_id;
        $comment->content = $request->content;
        $comment->comment_id = $request->comment_id;
        $res = $comment->save();
        if($res){
            return back()->with('添加成功');
        }else{
            return back()->with('添加失败');
        }

    }

    function time_ago($id)
    {
        $posttimes = Comment::find($id);
         //当前时间的时间戳
        $nowtimes = strtotime(date('Y-m-d H:i:s'),time());
        //之前时间参数的时间戳
        $posttimes = strtotime($posttime->created_at);
        //相差时间戳
        $counttime = $nowtimes - $posttimes;
        
        //进行时间转换
        if($counttime<=10){
        
           return '刚刚';
            
        }else if($counttime>10 && $counttime<=30){
        
           return '刚才';
            
        }else if($counttime>30 && $counttime<=60){
        
            return '刚一会';
            
        }else if($counttime>60 && $counttime<=120){
        
           return '1分钟前';
            
        }else if($counttime>120 && $counttime<=180){
        
           return '2分钟前';
            
        }else if($counttime>180 && $counttime<3600){
        
           return intval(($counttime/60)).'分钟前';
            
        }else if($counttime>=3600 && $counttime<3600*24){
        
           return intval(($counttime/3600)).'小时前';
            
        }else if($counttime>=3600*24 && $counttime<3600*24*2){
        
           return '昨天';
            
        }else if($counttime>=3600*24*2 && $counttime<3600*24*3){
        
           return '前天';
            
        }else if($counttime>=3600*24*3 && $counttime<=3600*24*20){
        
           return intval(($counttime/(3600*24))).'天前';
            
        }else{
        
           return $posttime;
            
        }
    }

    public static function getComment($comment_id = 0)
    { 
        $data = DB::table('video_comment')->where('comment_id',$comment_id)->get();
        foreach ($data as $key => $value) {
            // 获取所有下一级 子分类
            $temp = self::getComment($value->id);
            $value->sub = $temp;
        }
        return $data;
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
    }
}
