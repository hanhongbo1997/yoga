<?php

namespace App\Http\Controllers\admin;

use App\Models\Teacher;
use APP\Models\Teacher_info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teachinof;


class TeacherController extends Controller
{
    public function getFirstCharter($str)
    {
        if (empty($str)) {
            return '';
        }

        $fchar = ord($str{0});

        if ($fchar >= ord('A') && $fchar <= ord('z'))
            return strtoupper($str{0});

        $s1 = iconv('UTF-8', 'gb2312', $str);

        $s2 = iconv('gb2312', 'UTF-8', $s1);

        $s = $s2 == $str ? $s1 : $str;

        $asc = ord($s{0}) * 256 + ord($s{1}) - 65536;

        if ($asc >= -20319 && $asc <= -20284)
            return 'A';

        if ($asc >= -20283 && $asc <= -19776)
            return 'B';

        if ($asc >= -19775 && $asc <= -19219)
            return 'C';

        if ($asc >= -19218 && $asc <= -18711)
            return 'D';

        if ($asc >= -18710 && $asc <= -18527)
            return 'E';

        if ($asc >= -18526 && $asc <= -18240)
            return 'F';

        if ($asc >= -18239 && $asc <= -17923)
            return 'G';

        if ($asc >= -17922 && $asc <= -17418)
            return 'H';

        if ($asc >= -17417 && $asc <= -16475)
            return 'J';

        if ($asc >= -16474 && $asc <= -16213)
            return 'K';

        if ($asc >= -16212 && $asc <= -15641)
            return 'L';

        if ($asc >= -15640 && $asc <= -15166)
            return 'M';

        if ($asc >= -15165 && $asc <= -14923)
            return 'N';

        if ($asc >= -14922 && $asc <= -14915)
            return 'O';

        if ($asc >= -14914 && $asc <= -14631)
            return 'P';

        if ($asc >= -14630 && $asc <= -14150)
            return 'Q';

        if ($asc >= -14149 && $asc <= -14091)
            return 'R';

        if ($asc >= -14090 && $asc <= -13319)
            return 'S';

        if ($asc >= -13318 && $asc <= -12839)
            return 'T';

        if ($asc >= -12838 && $asc <= -12557)
            return 'W';

        if ($asc >= -12556 && $asc <= -11848)
            return 'X';

        if ($asc >= -11847 && $asc <= -11056)
            return 'Y';

        if ($asc >= -11055 && $asc <= -10247)
            return 'Z';

        return null;

    }
    
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

       //  foreach ($data as $k=>$v)
       //  {
       //    $arr[] = explode('##',$v->status);
         
       //  }
       //  $data->status = $arr;
       // dump($data);
        

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
        $user = $request->all();
       
        // $file = $request->file('status');
       
        
        $data = new Teacher;

        $data->tname = $request->input('tname');
        $data->intor = $request->input('intor');
        $a = $user['status'];
        $a = implode('##',$a);  
        $data->status = $a;
        // $data->status = $user['status'];
        $data->seniority = $request->input('seniority');
        $data->adept = $request->input('adept');

        $data->sex = $request->input('sex');
        
        $data->book = $request->input('book');
        // $data->book = $request->input('book');
        
        $data->abc = self::getFirstCharter($data->tname);
        
        $data->add = $request->input('add');
        
        // dump($data);
        // exit();
        $data->save();
        // dump($data);
        // exit();
        // dump($data);
        // dump($data->tid);

        // exit();

         // $data->status =  $request->only('status');
        
         // $a = implode('|@x@|',$user);
         // $data->status = $user['status'];
        
        $teach = new Teachinof;
        $teach->tphone = $user['tphone'];
        // $teach->tid = $data->tid;
        // dump($data->tid);
        $teach->tid = $data->tid;
        $teach->course = $user['course'];
        //主图获取 timg
        $teach ->timg = '/uploads/'.self::profile($request);

        $teach->imges = self::Timges($request);
        // dump($data);
        // dump($teach);exit;
        
        if($teach->save()){

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
    public function edit($id)
    {
        //提取数据
        $data = Teacher::find($id);
        // dump($data);
        //加载模板
        return view('admin.teacher.edit',['title'=>'名师修改','data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $request->all();

        //接收数据
        $data = Teacher::find($id);
        $data->tname = $request->input('tname'); 
        $data->intor = $request->input('intor'); 
        $a = $user['status']; 
        $a = implode('##',$a);  
        $data->status = $a;
        $data->seniority = $request->input('seniority'); 
        $data->adept = $request->input('adept'); 
        $data->sex = $request->input('sex'); 
        $data->book = $request->input('book'); 
        $data->add = $request->input('add'); 

        // dump($data);
        // dump($user);
        //详情页
        $teach =Teachinof::find($id);
        // dump($teach);exit();
        // $teach->tphone = $user['tphone'];
        // $teach->tid = $teach->tid;
        // $teach->course = $user['course'];
         //主图获取 timg
        $teach ->timg = '/uploads/'.self::profile($request);

        $teach->imges = self::Timges($request);
        // dump($teach);exit();
        if($data->save() && $teach->save()){

            return redirect('admin/teacher')->with('success', '修改成功!');
           
        }else{
             return back()->with('error', '修改失败!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Teacher::find($id);
        $teach =Teachinof::find($id);

        //删除
        if($data->delete($data) && $teach->delete($teach)){

            return redirect('admin/teacher')->with('success', '删除成功!');
           
        }else{
             return back()->with('error', '删除失败!');
        }

    }

    /**
     * 查看详情
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        //加载数据
        $data = Teacher::find($id);
        //获取状态
        $status = $data->status;
        $status = explode('##',$status);
        $data->status = $status;
       
        //图片获取
        $a = $data->teachinfoend->imges;
        $arr = explode('|@x@|',$a);
        // dump($arr);
        // dump($data);exit();
        //加載模板
        return view('admin.teacher.details',['title'=>'名师详情','data'=>$data,'arr'=>$arr]);
    }
}
