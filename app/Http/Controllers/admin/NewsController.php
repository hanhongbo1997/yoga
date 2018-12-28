<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewInfo;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //获取数据
        $data = new News;
        $where = $data;
        if($request->search_nname){
            $where = $where->where('nname','like','%'.$request->search_nname.'%');
        }
        $data = $where->paginate(5);
        $data->nname = $request->search_nname;
        return view('admin.news.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //资讯添加
        $news = new News;
        $news->nname = $request->nname;
        $news->nuser = $request->nuser;
        $img = $request->file('img');
        dd($img);
        $ext = $img->extension('img');
        $filename = time().'.'.$ext;
        $res = $img->storeAs('images',$filename);
        $news->img = $res;
        $res1 = $news->save();

        $newinfo = new NewInfo;
        $newinfo->niid = $news->id;
        $newinfo->ncontent = $request->ncontent;
        $newinfo->abs = $request->abs;
        $newinfo->img = $res;
        $res2 = $newinfo->save();

        if($res1 && $res2){
            DB::commit();
            return redirect('/admin/news')->with('success', '添加成功');
         }else{
            DB::rollBack();
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
        //
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
