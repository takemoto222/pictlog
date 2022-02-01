<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class TopController extends Controller
{
    public function top()
    {
        $id = Auth::id();  //認証しているユーザーidを取得
        //$items = Post::where('user_id', $id)->with('user')->get(); //←解説：Postから投稿情報を引っ張り出して$itemsに渡す //＋where関数の部分で、ログイン中のユーザーのIDと一致するuser_idをもつpostのみが取得されています
        $items = Post::with('user')->latest()->paginate(10); //↑から、where関数をなくしてこのように記述すると全件取得
        //$post1 = new post();
        //$post = $post1->user();
        $item = User::where('id', $id)->with('posts')->get(); //Userにpostsの情報をを結びつけてitemに渡す
        $page = Post::Paginate(5);
        return view('top', [ //viewに渡す
            'id' => $id,
            'item' => $item, //Userの情報を渡す
            'posts' => $items, //Postの情報を渡す
            //'posts' => $post
            'page' => $page
        ]);
    }


    public function logout_top()
    {
        return view('logout_top');
    }

    public function boot()
    {
        Paginator::useBootstrap();
    }
}
