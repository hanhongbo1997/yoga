<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clubsort;
use App\Models\Club;
use App\Models\Lesson;
use App\Models\Clubinfo;

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

        $data = $where->paginate(10);
        $data->cname = $request->search_nname;
        // $user = Club::find(1);
        // dump($user->clubsortinfo->crname);
        // dump($data);
      
        // foreach($data as $k=>$v){ 
            
        //     dump($v->clubsortinfo);
       
        // }exit;
        $user = Lesson::all();
        // dump($user);exit;
        
        //加载视图
        return view('home.club.index',['title'=>'会馆','user'=>$user],compact('data'));
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
    public function show($id)
    {
        //提取数据
        $data = Club::find($id);
        
        $arr = explode('|@x@|',$data->clubdetails->cimges);
        $data->countimg = count($arr);
        
        
        
        
        //加载模板
        return view('home.club.show',['title'=>'场馆详情','arr'=>$arr,'data'=>$data]);
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
