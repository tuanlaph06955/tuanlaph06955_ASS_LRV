<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Cate;
use App\Models\User;

use Arr;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::all();
        if(auth()->user()->role == 2) { 
            return view('posts.index', [
                'posts' => $posts,
            ]);
        }else{
            return view('posts.user.index_user', [
                'posts' => $posts,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Cate::all();
        return view('posts.create',[
            'cate' => $cate,
        ]);
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
        // dd($data);
        $post = Post::create($data);
        // dd($data);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::where('id' , '=' , $id)->first();
        $cate = Cate::all();
        return view('posts.show', [
            'posts' => $posts,
            'cate' => $cate,
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
        $post = Post::find($id);
        // dd($post);
        $po = Post::where('id' , '=' , $id)->first();
        $cate = Cate::where('id' , '=' , $po->category_id)->first();
        $category = Cate::all();
        return view('posts.update', [
            'post' => $post,
            'cate' => $cate,
            'category' =>$category,
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
        $post=Post::find($id);
        $post->title=$r->title;
        $post->category_id=$r->category_id;
        $post->content=$r->content;
        $post->time=$r->time;
        $post->save();
        return redirect('posts')->with('thongbao','Đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        
        return redirect()->route('posts.index');
    }
}
