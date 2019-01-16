<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Logon;
use DB;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Lesson::get();
        return view('home.lesson.lesson_list',['data'=>$data,'title'=>'瑜伽课程']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public static function getComment($comment_id = 0)
    { 
        $data = DB::table('lesson_comment')->where('comment_id',$comment_id)->get();
        foreach ($data as $key => $value) {
            // 获取所有下一级 子分类
            $temp = self::getComment($value->id);
            $value->sub = $temp;
        }
        return $data;
    }

    public function edit($id)
    {
        $data = Lesson::find($id);
        $comment = self::getComment(0)->where('lesson_id',$id);
        if(session('admin_login')){
            $info = Logon::find(session('admin_login')->uid);
        }else{
            $info = null; 
        }
        return view('home.lesson.lesson_info',['data'=>$data,'comment'=>$comment,'info'=>$info]);
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
