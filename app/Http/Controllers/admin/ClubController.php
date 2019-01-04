<?php

namespace App\Http\Controllers\admin;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clubinfo;
use App\Models\Clubsort;
use DB;


class ClubController extends Controller
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
        $data = DB::table('club_sort')->select('*',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
        foreach ($data as $k=>$v) {
            //统计，出现次数
            $n = substr_count($v->path,',');
            $data[$k]->crname = str_repeat('|— — ', $n).$v->crname;
        }
        return $data;
    }
    /**
     * 图片函数
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($request)
    {
         if($request->hasFile('profile')){

            $profile = $request->file('profile');
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
     * 分类信息
     *
     * @return \Illuminate\Http\Response
     */
    public static function getPidClub($csid=0)
    {
        $data = Clubsort::where('csid','=',$csid)->get();
        foreach ($data as $k=>$v) {
            //二级分类
           // $temp = Clubsort::where('csid','=',$v->id)->get();
           //获取所有下
           $temp = self::getPidClub($v->id);
           $v->sub= $temp;

        }
        return $data;
    }

    /**
     * 瑜伽馆浏览
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = new Club;
        $where = $data;
        if($request->search_nname){
            $where = $where->where('cname','like','%'.$request->search_nname.'%');
        }

        $data = $where->paginate(10);
        $data->cname = $request->search_nname;
       
        // return view('admin.video.index',compact('video'));

        //获取数据
        // $data = Club::paginate(15);
        // dump($data);exit;
         //用户浏览模板
        // echo '1111';
        return view('admin.club.index',['title'=>'瑜伽馆列表'],compact('data'));
    }

    /**
     * 瑜伽馆添加
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取分类信息
        // $data = Clubsort::all();
        // dump($data);exit;
        // 加载添加模板
        return view('admin.club.create',['title'=>'瑜伽馆添加','data'=>self::getCates()]);
    }

    /**
     * 把新添加的会馆信息添加到数据库
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //获取数据
        $club = $request->all();
        // dump($club);
        
        $data = new Club;
        $data ->cname = $request->input('cname');
        $data ->caddr = $request->input('caddr');
        $data ->pid = $club['pid'];
        // dump($data->pid);
        
        //图片
        $data ->cimg = '/uploads/'.self::profile($request);
       // dump($data);exit;

         if($data->save()){

            return redirect('admin/club')->with('success', '添加成功!');
           
        }else{
             return back()->with('error', '添加失败!');
        }
    }

    /**
     *添加商品详情
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Club::find($id);

        return view('admin.club.show',['title'=>'添加详情','data'=>$data]);
    }

    /**
     *添加商品详情
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request,$id)
    {

        $data = new Clubinfo;

        //判断文件
        if($request->hasFile('profiles')){
             $profile = $request->file('profiles');


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


             // dump($arr);exit;
            $data ->clid = $id;
            $data ->cimges = $arr;
            $data ->cphone = $request->input('cphone');
            $data ->cinfo = $request->input('cinfo');
            $data ->teach = $request->input('teach');
            $data ->lesson = $request->input('lesson');
            
            // dump($data);exit;
            // dump($data);exit;
         if($data->save()){

            return redirect('admin/club')->with('success', '添加成功!');
           
        }else{
             return back()->with('error', '添加失败!');
        }
            
         
    }

    /**
     * 修改场馆
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //接收数据
        $data = Club::find($club->cid);
        //加载模板
        return view('admin.club.edit',['title'=>'修改场馆','data'=>$data,'club'=>self::getCates()]);
    }

    /**
     * 修改上传.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = Club::find($id);
         //获取数据
        $club = $request->all();   
         $data ->pid = $club['pid'];
        $data ->cname = $request->input('cname');
        $data ->caddr = $request->input('caddr');
        
       
        //图片
        $data ->cimg = '/uploads/'.self::profile($request);
       
      
         if($data->save()){

            return redirect('admin/club')->with('success', '修改成功!');
           
        }else{
             return back()->with('error', '修改失败!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //接收ID
        $data = Club::find($id);

        //删除
        if($data->delete($data)){

            return redirect('admin/club')->with('success', '删除成功!');
           
        }else{
             return back()->with('error', '删除失败!');
        }
    }

     /**
     * 查看详情
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        //获取会馆数据
        $data = Club::find($id);
        // dump($data ->clubdetails->cphone);
        
        // dump($data ->clubdetails->cinfo);
        // dump($data ->clubdetails->teach);
        // dump($data ->clubdetails->lesson);
        
        
        $a = $data ->clubdetails->cimges;
        $arr = explode('|@x@|',$a);
        
        
        //加载模板
         return view('admin.club.details',['title'=>'查看详情','data'=>$data,'arr'=>$arr]);
    }
}
