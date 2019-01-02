<?php

namespace App\Http\Controllers\admin;

use App\Models\Teacher;
use App\Models\Teacher_info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class TeacherController extends Controller
{

    /**
     * 图片函数
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($request)
    {
         if($request->hasFile('timg')){

            $profile = $request->file('timg');
            //获取图片后缀
            $ext = $profile->extension();

            //定义图片名称
            $name = time().'.'.$ext;
            
            $res = $profile->storeAs('images',  $name);
        }else{
            dd('请选择文件');
        }
        
        return $res;

    }
    /**
     * 多图片函数
     *
     * @return \Illuminate\Http\Response
     */
     public function Timges(Request $request)
     {
        //判断文件
        if($request->hasFile('imges')){
             $profile = $request->file('imges');


                $arr = array();
                 foreach ($profile as $key=>$value) {

                     //获取图片后缀
                    $ext = $value->extension();

                    
                    //定义图片名称
                    // $name = time().rand(10000,99999).'.'.$ext;
                    $name = md5($value->getFileName()).'.'.$ext;


                    $res = $value->storeAs('images',  $name);

                    $res = '/uploads/'.$res;  
                    $arr[] .= $res;
                 } 

        }else{
            dd('请选择文件');
        }
             $arr = implode('|@x@|',$arr);
             return $arr;
     }
    /**
     * 名师显示列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $data = new Teacher;
        $where = $data;
        if($request->search_nname){
            $where = $where->where('tname','like','%'.$request->search_nname.'%');
        }

        $data = $where->paginate(10);
        $data->tname = $request->search_nname;
        //加载模板
        return view('admin.teacher.index',['title'=>'名师列表','data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载视图
        return view('admin.teacher.create',['title'=>'名师列表']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取数据
        $user =  $request->all();
        dump($user);

        $data = new Teacher;
        $data->tname = $request->input('tname');
        $data->intor = $request->input('intor');
        $data->seniority = $request->input('seniority');
        $data->adept = $request->input('adept');
        $data->sex = $request->input('sex');
        $data->status = $request->input('status');
        $data->book = $request->input('book');
        $data->book = $request->input('book');
        $data->add = $request->input('add');
       

        $teach = new Teacher_info;
        
        $teach->tphone = $user['tphone'];
        $teach->tid = $data->tid;
        $teach->course = $user['course'];
        //主图获取 timg
        $teach ->timg = '/uploads/'.self::profile($request);

        $teach->imges = '/uploads/'.self::Timges($request);
        // dump($data);
        // dump($teach);
        
        if($data->save() && $teach->save()){

            return redirect('admin/teacher')->with('success', '添加成功!');
           
        }else{
             return back()->with('error', '添加失败!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
