<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lessonsort;
use DB;
class LessonsortController extends Controller
{
    /**
     * 公众部分
     *
     * @return \Illuminate\Http\Response
     */
    public function getCates()
    {
        //获取数据
   
        $data = DB::table('lesson_sort')->select('*',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
        foreach ($data as $k=>$v) {
            //统计，出现次数
            $n = substr_count($v->path,',');
            $data[$k]->lsname = str_repeat('|— — ', $n).$v->lsname;
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
        return view('admin.classsort.index',['title'=>'分类表','data'=>self::getCates()]);
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
   
        
        //加载视图
        return view('admin.classsort.create',['id'=>$id,'title'=>'添加分类','data'=>self::getCates()]);
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
        $user = new lessonsort;

        //接收数据
     

        //获取父级ID
      
        $sid = $user->sid = $request->input('sid');
        $user ->lsname = $request->input('lsname');
        $user ->status = '1';

        // $data['status'] = 1;

        //检测顶级ID
        if($sid==0){
            $user->path = 0;
        }else{
            //拼接父级ID
            $parent_data = lessonsort::where('id','=',$sid)->first();
            $user->path = $parent_data->path.','.$parent_data->id;

        }
        //执行添加
        if($user->save()){

            return redirect('admin/lessonsort')->with('success', '添加成功!');
           
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
        $data = lessonsort::where('id',$id)->first();
    
        // 加载视图
        return view('admin.classsort.edit',['title'=>'修改分类','data'=>$data,'user'=>self::getCates()]);
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
        $child_data = lessonsort::where('sid',$id)->first();

        if($child_data) {

            return back()->with('error','当前分类下有子分类，不允许修改');
            exit;
        }

        $data = lessonsort::find($id);
        //接收数据
        $data->lsname = $request->input('lsname');
        //获取父级分类ID
        $sid = $data->sid = $request->input('sid');
        //检测顶级分类ID
        if($sid == 0) {
            $data->path = 0;
        }else{
            //拼接path
            //拼接父级ID
            $parent_data = lessonsort::where('id','=',$sid)->first();
            $data->path = $parent_data->path.','.$parent_data->id;
        }
         //执行添加
        if($data->save()){

            return redirect('admin/lessonsort')->with('success', '修改成功!');
           
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
        $child_data = lessonsort::where('sid',$id)->first();

        if($child_data) {

            return back()->with('error','当前分类下有子分类，不允许刪除');
            exit;
        }
        $data = lessonsort::find($id);

         if($data->delete()){

            return redirect('admin/lessonsort')->with('success', '删除成功!');
           
        }else{
             return back()->with('error', '删除失败!');
        }
    }
}
