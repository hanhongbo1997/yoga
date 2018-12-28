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
    public function index()
    {
        //
        $data = Slideshow::all();
        // dd($data);
        return view('admin.slideshow.index',['data'=>$data]);
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
        //
        $data = $request->except(['_token','_method']);
        // 
        $files = $request->file('img');
        // dd($data);
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
        $data = Slideshow::find($id);

        $content = $data->content;
        // dd($content);
         $ptn1='/<img src="(.*?)"/';
         preg_match_all($ptn1, $content,$arr1);
          $ptn2='/\/>(.*?)<\/p>/';  
         preg_match_all($ptn2, $content,$arr2);
        // dd($arr1,$arr2);
        $arr1 = $arr1['1'];
        $arr2 = $arr2['1'];
        $content = $arr1;
        // dd($arr1,$arr2);
        return view('admin.slideshow.show',['arr1'=>$arr1,'arr2'=>$arr2]);
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
        $data=$request->except(['_token','_method']);
        // dd($data);
        $res =Slideshow::find($id)->update($data);      
        // dd($res);
        if ($res) {
            return redirect('admin/slideshow')->with('success', '修改成功');
        }else{
            return back()->with('error', '修改失败');
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
