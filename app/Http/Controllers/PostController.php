<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //練習
    public function item_scr()
    {
        $photos = DB::select('select * from posts');
        return view('item_scr', ['photos' => $photos]);
    }

    public function item_add()
    {
        return view('item_post');
    }
    public function item_create(Request $request)
    {
        $request->all();
        $param = [
            'name' => $request->name,
            'content' => $request->content,
            'image' => $request->image,
        ];
        DB::insert('insert into posts(name, content,image) values(:name, :content, :image)', $param);
        return redirect('/item_scr');
    }
    public function item_image(Request $request)
    {
        $image = $request->image;
        $image = $request->file('image')->store('public/image');
        $image = str_replace('public/image/', '', $image);
        $image = new Post;
        $image->file = $image;

        $image->save();
    }
}
