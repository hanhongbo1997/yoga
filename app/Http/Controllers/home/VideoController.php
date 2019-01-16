<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Videosort;
use App\Models\Logon;
use App\Models\User_info;
use DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getPidVideos($pid = 0)
    {
        $data = DB::table('video_sort')->where('pid',$pid)->get(); 

        foreach ($data as $key => $value) {
            // 获取所有下一级 子分类
            $temp = self::getPidVideos($value->id);
            $value->sub = $temp;
        }
        return $data;
    }

    public function index()
    {
        $data = Video::get();
        return view('home.video.video_list',['data'=>$data,'title'=>'瑜伽视频']);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo '222222';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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


    public function edit($id)
    {
        $data = Video::find($id);
        $comment = self::getComment(0)->where('video_id',$id);
        if(session('admin_login')){
            $info = Logon::find(session('admin_login')->uid);
        }else{
            $info = null; 
        }
        return view('home.video.video_info',['data'=>$data,'comment'=>$comment,'info'=>$info]); 
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
