<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;

class TeacherController extends Controller
{
    
    /**
     * 老师首页
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取数据     
       $data = new Teacher;
        $where = $data;
        if($request->search_nname){
            $where = $where->where('cname','like','%'.$request->search_nname.'%');
        }

        $data = $where->paginate(12);
        // foreach($data as $k=>$v){
        //     dump($v->teachinfoend->id);
        //     dump($v->teachinfoend->timg);
        // }
        // dump($data->teachinfoend->imges);
        // dump($data);exit;
        $data->cname = $request->search_nname;
    	//加载模板
    	return view('home.teacher.index',['title'=>'名师列表'],compact('data'));
    }
    /**
     * 名师详情
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //加载数据
        $data = Teacher::find($id);

        $arr = explode('|@x@|',$data->teachinfoend->imges);
        $data->countimg = count($arr);
       
        //加载视图
        return view('home/teacher/show',['title'=>'名师详情','data'=>$data,'arr'=>$arr]);
    }
}
