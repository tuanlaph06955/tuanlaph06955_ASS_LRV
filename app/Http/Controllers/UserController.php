<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Cate;
use App\Models\User;

use App\Http\Requests\Users\StoreRequest;
use Arr;

class UserController extends Controller
{
    public function index(){
        $users = User::with('posts')->get();
        User::all();

        if(auth()->user()->role == 2) { 
            return view('users.index', [
                'users' => $users,
            ]);
        }
        else{
            return redirect('posts');
        }

        
    }

    public function create(){
        return view('users.create');
    }

    public function store(StoreRequest $request){
        // $request = request()->all();
        
        $data = Arr::except($request->all(), ['_token']);

        $user = User::create($data);
        // dd($data);
        return redirect()->route('users.index');
    }

    public function show($id){
        $users = User::where('id' , '=' , $id)->first();
        return view('users.show', [
            'users' => $users,
        ]);
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        
        return redirect()->route('users.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.update', [
            'user' => $user,
        ]);
    }

    public function update(Request $r, $id)
    {
        $user=User::find($id);
        $user->name=$r->name;
        $user->dob=$r->dob;
        $user->email=$r->email;
        $user->password=$r->password;
        $user->role=$r->role;
        $user->save();

        return redirect('users')->with('thongbao','Đã sửa thành công');
    }
}
