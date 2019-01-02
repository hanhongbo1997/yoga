<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideocommentController extends Controller
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

    public function getCommentList($video_id, $page, $limit)
    {
        echo '11111';

        // $count = DB::name('video_comment')->where('video_id',$video_id)->count('id');
        // if (!$count) {
        //     $data = [
        //         'count' => 0,
        //         'list' => []
        //     ];
        //     return $data;
        // }

        // $list = DB::name('video_comment')->alias('a')->where('video_id', $video_id)
        //     ->join('user u1', 'a.uid = u1.id')
        //     ->join('user u2', 'a.reply_uid = u2.id')
        //     ->field('a.id, a.uid, a.reply_uid, a.comment, u1.username, u2.username as reply_username');
        // if ($page && $limit) {
        //     $list = $list->page($page, $limit);
        // }
        // $list = $list->select(); //需加上按时间排序
        // $data = [
        //     'count' => $count,
        //     'list' => $list
        // ];
        // return $data;
        // dd($data);
    }

}
