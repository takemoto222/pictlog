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
        //dd($photos); //dd()関数は変数の中身を表示してくれる関数で、この時点で処理は停止
        dd($photos);
        return view('item_scr', ['photos' => $photos]);
    }

    public function item_add()
    {
        return view('item_post');
    }
    // public function item_create(Request $request)
    // {
    //  $request->all();
    //  $param = [
    //   'name' => $request->name,
    // 'content' => $request->content,
    // 'image' => $request->image,
    //  ];
    // DB::insert('insert into posts(name, content,//image) values(:name, :content, :image)', $param);
    // return redirect('/item_scr');
    //}
    public function item_create(Request $request)
    {
        $request->all();
        $image_file = $request->image;
        $image_file = $request->image2; //追加
        $image_file = $request->file('image')->store('public/image');
        $image_file = str_replace('public/image/', '', $image_file);
        $image = new Post;
        $image = $image_file;
        $param = [
            'name' => $request->name,
            'content' => $request->content,
            'image' => $image,
            'image2' => $image, //追加
            /*'user_id' => $request->user_id,*/
        ];
        DB::insert('insert into posts(name, content, image, image) values(:name, :content, :image, :image2)', $param); //追加
        return redirect('/item_scr');
    }

    public function item_image(Request $request)
    {
        $image = $request->image;
        $image = $request->image2; //追加
        $image = $request->file('image', 'image2')->store('public/image'); //追加
        $image = str_replace('public/image/', '', $image);
        $image = new Post;
        $image->file = $image;

        $image->save();
    }
}
