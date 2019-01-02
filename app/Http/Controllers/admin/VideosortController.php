<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Videosort;
use DB;
class VideosortController extends Controller
{
    /**
     * 公众部分
     *
     * @return \Illuminate\Http\Response
     */
    public function getCates()
    {
        //获取数据
        // $data = DB::select("select *,concat(path,',',id) as paths from club_sort order by paths asc");
        $data = DB::table('video_sort')->select('*',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
        foreach ($data as $k=>$v) {
            //统计，出现次数
            $n = substr_count($v->path,',');
            $data[$k]->vsname = str_repeat('|— — ', $n).$v->vsname;
        }
        return $data;
    }

    /**
     * 场馆分类首页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载视图
        return view('admin.videosort.index',['title'=>'分类表','data'=>self::getCates()]);
    }

    /**
     * 添加场馆分类
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=0)
    {
        //添加子分类
        echo $id;
        //读取分类
       // $data = Clubsort::all();
       // dump($data);exit;
        
        //加载视图
        return view('admin.videosort.create',['id'=>$id,'title'=>'添加分类','data'=>self::getCates()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加
        $user = new Videosort;

        //接收数据
        // $data = $request->except('_token');

        //获取父级ID
        // $csid = $data['csid'];
        $pid = $user->pid = $request->input('pid');
        $user ->vsname = $request->input('vsname');
        $user ->status = '1';

        // $data['status'] = 1;

        //检测顶级ID
        if($pid==0){
            $user->path = 0;
        }else{
            //拼接父级ID
            $parent_data = Videosort::where('id','=',$pid)->first();
            $user->path = $parent_data->path.','.$parent_data->id;

        }
        //执行添加
        if($user->save()){

            return redirect('admin/videosort')->with('success', '添加成功!');
           
        }else{
             return back()->with('error', '添加失败!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clubsort  $clubsort
     * @return \Illuminate\Http\Response
     */
    public function show(Clubsort $clubsort)
    {
        //
    }

    /**
     * 修改
     *
     * @param  \App\Models\Clubsort  $clubsort
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       

        //加载数据
        $data = Videosort::where('id',$id)->first();
        // dump($user);exit;
        // 加载视图
        return view('admin.videosort.edit',['title'=>'修改分类','data'=>$data,'user'=>self::getCates()]);
    }

    /**
     * 接收修改数据
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clubsort  $clubsort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //检测当前分类
        $child_data = Videosort::where('pid',$id)->first();

        if($child_data) {

            return back()->with('error','当前分类下有子分类，不允许修改');
            exit;
        }

        $data = Videosort::find($id);
        //接收数据
        $data->vsname = $request->input('vsname');
        //获取父级分类ID
        $pid = $data->pid = $request->input('pid');
        //检测顶级分类ID
        if($pid == 0) {
            $data->path = 0;
        }else{
            //拼接path
            //拼接父级ID
            $parent_data = Videosort::where('id','=',$pid)->first();
            $data->path = $parent_data->path.','.$parent_data->id;
        }
         //执行添加
        if($data->save()){

            return redirect('admin/videosort')->with('success', '修改成功!');
           
        }else{
             return back()->with('error', '修改失败!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clubsort  $clubsort
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //检测当前分类
        $child_data = Videosort::where('pid',$id)->first();

        if($child_data) {

            return back()->with('error','当前分类下有子分类，不允许修改');
            exit;
        }
        $data = Videosort::find($id);

         if($data->delete()){

            return redirect('admin/videosort')->with('success', '删除成功!');
           
        }else{
             return back()->with('error', '删除失败!');
        }
    }
}
