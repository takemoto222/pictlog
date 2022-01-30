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
        $id = Auth::id();
        $id = User::find($id);
        $items = Post::where('user_id', $id)->get();
        $item = User::where('id', $id)->with('posts')->first();
        //return view('mypage_edit', ['item' => $id]);
        return view('top', [
            'id' => $id,
            'item' => $item,
            'post' => $items
        ]);
    }


    public function logout_top()
    {
        return view('logout_top');
    }
}
