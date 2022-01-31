<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class TopController extends Controller
{
    public function top()
    {
        $id = Auth::id();  //認証しているユーザーidを取得
        $id = User::find($id); //Userのidを取得
        $items = Post::where('user_id', $id)->with('users')->first(); //Postから投稿情報を引っ張り出して$itemsに渡す
        //$post1 = new post();
        //$post = $post1->user();
        $item = User::where('id', $id)->with('posts')->first(); //Userにpostsの情報をを結びつけてitemに渡す
        return view('top', [ //viewに渡す
            'id' => $id,

            'item' => $item, //Userの情報を渡す
            'post' => $items, //Postの情報を渡す
            //'posts' => $post
        ]);
    }


    public function logout_top()
    {
        return view('logout_top');
    }
}
