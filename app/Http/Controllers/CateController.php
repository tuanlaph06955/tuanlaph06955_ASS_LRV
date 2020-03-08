<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Cate;
use App\Models\User;
use App\Http\Requests\Categories\StoreRequest;
use Arr;
use Auth;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = Cate::all();

        return view('cates.index', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Arr::except($request->all(), ['_token']);

        $cate = Cate::create($data);
        // dd($data);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cate $cate)
    {
        return view('cates.show', [
            'cate_data' => $cate,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Cate::find($id);
        return view('cates.update', [
            'cate' => $cate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $cate=Cate::find($id);
        $cate->user_id=$r->user_id;
        $cate->name=$r->name;
        $cate->save();
        return redirect('categories')->with('thongbao','Đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Cate::find($id);
        $cate->delete();
        
        return redirect()->route('categories.index');
    }
}
