<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slideshow;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        // 获取数据  判断是否有分页传值和搜索传值
         $params = $request->all();
        if(empty($params['limit'])){
            $params['limit']=5;
        }
        if(empty($params['sousuo'])){
            $params['sousuo']='';
        }
        // dd($params);
        $search_uname = $request->input('search_uname','');
        // dd($search_uname);
        //获取数据便里面的所有数据
        $data = Slideshow::where('name','like','%'.$params['sousuo'].'%')->paginate($params['limit']);
        // dd($data);
        return view('admin.slideshow.index',['data'=>$data,'params'=>$params]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.slideshow.create');
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
        $data = $request->except(['_token','_method']);
        // 获取图片
        $files = $request->file('img');
        // dd($data);
        //判断是否有图片
        if ($files) {
            $file_name=date('YmdHis',time()).rand(1000,9999).'.'.$files->extension();
            $file_res=$files->storeAs('admin_face',$file_name);
            // dd($file_name);
            $data['img']='/uploads/'.$file_res;
            // dd($data);
            $res = Slideshow::insert($data);
            if($res){
                return redirect('admin/slideshow')->with('success', '添加成功');
            }else{
                return back()->with('error', '添加失败');
            } 
        }else{
            return back()->with('error','请为轮播图添加图片');
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
        // <p><img src="/uploads/images/20181228/cdr1545977160.jpg" title="cdr1545977160.jpg" alt="cdr.jpg"/>12321312321321321</p>
        // 获取数据
        $data = Slideshow::find($id);
        // dd($data['img']);
        $content = $data->content;
        // dd($content);
        // 用正则匹配相应的数据
        $ptn1='/<img src="(.*?)"/';
        preg_match_all($ptn1, $content, $arr1);
        // dd($arr1['1']);
        if (!$arr1) {
            $ptn2='/\/>(.*?)<\/p>/';  
            preg_match_all($ptn2, $content, $arr2);
        }else{
            $ptn3='/>(.*?)<\/p>/';
            preg_match_all($ptn3, $content, $arr2);
        }
        $arr1 = $arr1['1'];
        $arr2 = $arr2['1'];
        $content = $arr1;
        // dd($arr1,$arr2);
        

        return view('admin.slideshow.show',['arr1'=>$arr1,'arr2'=>$arr2,'data'=>$data]);
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
        //获取需要修改的数据
         $data = Slideshow::find($id);
        return view('admin.slideshow.edit',['data'=>$data]);
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

        // $data1=$request->all();
        $data = Slideshow::find($id);
        //获取修改过的数据

        $files = $request->file('img');
        if ($files) {
            $file_name=date('YmdHis',time()).rand(1000,9999).'.'.$files->extension();
            $file_res=$files->storeAs('admin_face',$file_name);
            $img ='/uploads/'.$file_res;
            $data->img = $img;
            $data->name = $request->name;
            $data->link = $request->link;
            $data->content = $request->content;
            $res = $data->save();


            if ($res) {
                return redirect('admin/slideshow')->with('success', '修改成功');
            }else{
                return back()->with('error', '修改失败');
            }
        }else{
            $data->name = $request->name;
            $data->link = $request->link;
            $data->content = $request->content;
            $res = $data->save();
            if ($res) {
                return redirect('admin/slideshow')->with('success', '修改成功');
            }else{
                return back()->with('error', '修改失败');
            }
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
        //根据id获取要删除的数据
        // echo $id;
         $data = Slideshow::destroy($id);

        
        // $user_info = User_info::find($id);
       
        // $res1 = $data->delete();
        // $res2 = $user_info->delete();
        // dd($res1);
       if($data){

            return redirect('admin/slideshow')->with('success', '删除成功!');
           
        }else{
             return back()->with('error', '删除失败!');
        }
    }
}
