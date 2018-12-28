<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\VideoDetails;
use DB;
class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        // echo '我是视频列表';
        $video = new Video;
        $where = $video;
        if($request->search_vname){
            $where = $where->where('vname','like','%'.$request->search_vname.'%');
        }
        $video = $where->paginate(5);

        $video->vname = $request->search_vname;
        return view('admin.video.index',compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo '我是视频添加';
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $video = new Video;

        $video->vname = $request->vname;
        $img = $request->file('img');
        $ext = $img->extension('img');
        $filename = time().'.'.$ext;
        $res = $img->storeAs('images',$filename);
        $video->img = $res;
        $res1 = $video->save();

        $detail = new VideoDetails;
        $detail->vid = $video->id;
        $detail->vname = $request->vname;
        $detail->writer = $request->writer;
        $detail->details = $request->details;
        $detail->imgs = $res;

        $video = $request->file('video');
        $ext = $video->extension('video');
        $filename = time().'.'.$ext;
        $videos = $img->storeAs('video',$filename);
        
        $detail->video = $videos;
        $res2 = $detail->save();

        
        
        if($res1 && $res2){
            DB::commit();
            return redirect('/admin/videos')->with('success', '添加成功');
         }else{
            DB::rollBack();
             return back()->with('error', '添加失败');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //视频修改
        $data = Video::find($id);
        // dump($data->videodetails->details);
        return view('admin.video.edit',['data'=>$data]);
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
        //保存修改
        $data = VideoDetails::where('vid',$id)->first();
        $data->vname = $request->input('vname','');
        $data->details = $request->input('details','');
        $data->writer = $request->input('writer','');
        $res1 = $data->save();

        $data = Video::where('id',$id)->first();
        $data->vname = $request->input('vname','');
        $res2 = $data->save();
        if($res1 && $res2){
            return back()->with('success', '保存成功');
         }else{
             return back()->with('error', '保存失败');
         
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除
        $res1 = Video::destroy('id',$id);
        $res2 = VideoDetails::where('vid',$id)->delete();
        if($res1 && $res2){
             return back()->with('success', '删除成功');
         }else{
             return back()->with('error', '删除失败');
         
        }
    }
}
