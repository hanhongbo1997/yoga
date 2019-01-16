<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Lesson;

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
       //搜索框
        $where = $data;
        if($request->search_nname){
            $where = $where->where('cname','like','%'.$request->search_nname.'%');
        }
        //按照首字母查找
        
        // 条件搜索
       //  if($request->status){
       //      $where = $where->where('status',$request->status);
               
       //  }
       // dump($request->status);
       

        $data = $where->paginate(12);

        // foreach($data as $k=>$v){
        //     dump($v->teachinfoend->id);
        //     dump($v->teachinfoend->timg);
        // }
        // dump($data->teachinfoend->imges);
        // dump($data);exit;
        $data->cname = $request->search_nname;
    	//加载模板
        $lesson = Lesson::orderBy(\DB::raw('RAND()'))
        ->take(4)
        ->get();
    	return view('home.teacher.index',['title'=>'名师列表','lesson'=>$lesson],compact('data'));
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
    /**
     * 按照首字母查找
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //接收数据
        $letter = $request->all();
        


       if(empty($letter['letter'])){
            
            return back()->with('error', '找找不能为空!');

       }else{

        
                $data = Teacher::where('abc','=',$letter['letter'])->get();
                return view('home.teacher.add',['title'=>'名师列表','data'=>$data]);
        }    
    }
    /**
     * 按照首字母查找
     *
     * @return \Illuminate\Http\Response
     */
    public function agg(Request $request)
    {
        //接收数据
        $status = $request->all();

        //判断是否存在数据
        if(empty($status)){
            
            return back()->with('error', '查找不能为空!');

       }else{

        
                $data = Teacher::where('status','=',$status)->get();

                return view('home.teacher.add',['title'=>'名师列表','data'=>$data]);
        }  
    }

    
}
