<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Cate;
use Auth;

class HelloController extends Controller
{
    public function __invoke(){

        $posts = Post::all();
        $users = User::all();
        $cates = Cate::all();
    
        return view('hello_world', [
            'posts' => $posts,
            'users' => $users,
            'cates' => $cates,
            ]);
    }
}
