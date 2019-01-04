<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\LessonDetails;
use DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //我课程的列表页
        $search_lname = $request -> input('lname','');
        $lesson = DB::table('lesson');
        if(!empty($search_lname)){
           $lesson->where('lname','like','%'.$search_lname.'%'); 
        }
        $data = $lesson
            ->select('id','uid','lname','img','status','created_at','deleted_at','updated_at')
            ->paginate(5);
        return view('admin.class.index',['request'=>$request -> all(),'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //我是课程的添加页
        return view('admin.class.create');
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
        $lesson = new Lesson;

        $lesson->lname = $request->lname;
        $img = $request->file('img');
        $ext = $img->extension('img');
        $filename = time().'.'.$ext;
        $res = $img->storeAs('images',$filename);
        $lesson->img = $res;
        $res1 = $lesson->save();

        $detail = new LessonDetails;
        $detail->vid = $lesson->id;
        $detail->lname = $request->lname;
        $detail->writer = $request->writer;
        $detail->details = $request->details;
        $detail->peoples = $request->peoples;
        $detail->tips = $request->tips;
        $detail->time = $request->time;
        $detail->imgs = $res;
        $detail->video = $request->video;
        $res2 = $detail->save();

        
        
        if($res1 && $res2){
            DB::commit();
            return redirect('/admin/class')->with('success', '添加成功');
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
        //我是课程的编辑页
        $data = Lesson::find($id);
        return view('admin.class.edit',['data'=>$data]);
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
        $data = LessonDetails::where('vid',$id)->first();
        $data->lname = $request->input('lname','');
        $data->details = $request->input('details','');
        $data->writer = $request->input('writer','');
        $res1 = $data->save();

        $data = Lesson::where('id',$id)->first();
        $data->lname = $request->input('lname','');
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
        //
        $res1 = Lesson::destroy('id',$id);
        $res2 = LessonDetails::where('vid',$id)->delete();
        if($res1 && $res2){
             return back()->with('success', '删除成功');
         }else{
             return back()->with('error', '删除失败');
         
        }
    }
}
