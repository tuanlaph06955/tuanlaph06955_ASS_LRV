<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Cate;
use App\Models\User;
use Arr;

class AuthController extends Controller
{

    public function getLoginForm(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        // dd($request->all());
        $data = $request->except(['_token']);
        $result = auth()->attempt($data); // hàm attempt nó mã hóa password nhé 
        // dd($data, $result);
        // return redirect()->route('home.hello_world');

        if(auth()->user()->role == 2) { 
            return view('hello_world');
        }else{
            return redirect('posts');
        }
    }
}
