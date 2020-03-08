<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\User;
use App\Models\Post;
use App\Models\Cate;


Route::view('/', 'auth.login')->name('welcome');

Route::group([
    'middleware' =>[
        'check_auth',
    ]
    ], function (){
        Route::get('hello_world', 'HelloController')->name('home.hello_world');

        Route::resource('users', 'UserController');
        Route::resource('posts', 'PostController');
        // Route::resource('comments', 'CommentController');
        Route::resource('categories', 'CateController');

    });

    // middliware check_guest có nhiệm vụ check sẽ đã có user nào đăng nhập hay chưa(cũng như middleware check_auth)
    // nhưng nhiệm vụ của nó là, nếu user đã đăng nhập mà vào trang login hay register thì tự đọc redirect về trang home 
Route::get('login', 'AuthController@getLoginForm')->middleware(['check_guest']);

Route::post('login', 'AuthController@login')->name('auth.login')->middleware(['check_guest']);

Route::get('logout', function(){
    \Auth::logout();
    return redirect()->route('auth.login');
})->name('logout');