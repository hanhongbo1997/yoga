<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clubsort;
use App\Models\Club;
use App\Models\Lesson;
use App\Models\Clubinfo;
use App\Models\Logon;
use DB;

class ClubController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取数据     
       $data = new Club;
        $where = $data;
        if($request->search_nname){
            $where = $where->where('cname','like','%'.$request->search_nname.'%');
        }

        $data = $where->paginate(16);
        $data->cname = $request->search_nname;
        
        // $aaa = Club::get();
        // $bbb = Clubsort::get();
        // dump($aaa);

        // dump($bbb);
        // foreach($data as $k=>$v){
        //         dump($v->clubsortinfo);
        // }
        // $user = Club::find(1);
        // dump($user->clubsortinfo->crname);
        //     dump($data);
          
        //     foreach($data as $k=>$v){ 
                
        //         dump($v->pid);
           
        //     }
            $user = Lesson::all();
        // // dump($user);exit;
        // die;
        //加载视图
        $lesson = Lesson::orderBy(\DB::raw('RAND()'))
        ->take(4)
        ->get();
        return view('home.club.index',['title'=>'会馆','user'=>$user,'lesson'=>$lesson],compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public static function getComment($comment_id = 0)
    { 
        $data = DB::table('club_comment')->where('comment_id',$comment_id)->get();
        foreach ($data as $key => $value) {
            // 获取所有下一级 子分类
            $temp = self::getComment($value->id);
            $value->sub = $temp;
        }
        return $data;
    }


    public function show($id)
    {
        //提取数据
        $data = Club::find($id);
        
        $arr = explode('|@x@|',$data->clubdetails->cimges);
        $data->countimg = count($arr);
        
        // dump($data);exit;
        
        
        //加载模板
        $comment = self::getComment(0)->where('club_id',$id);
        if(session('admin_login')){
            $info = Logon::find(session('admin_login')->uid);
        }else{
            $info = null; 
        }
        return view('home.club.show',['title'=>'场馆详情','arr'=>$arr,'data'=>$data,'comment'=>$comment,'info'=>$info]);
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
    }
}
