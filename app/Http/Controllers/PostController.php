<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //練習
    public function item_scr()
    {
        $photos = DB::select('select * from posts');
        //dd($photos); //dd()関数は変数の中身を表示してくれる関数で、この時点で処理は停止
        return view('item_scr', ['photos' => $photos]);
    }

    public function item_add()
    {
        $user = Auth::user(); //追加行
        return $user; //追加行
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
        //一枚目
        $image_file = $request->image;   //image_fileという変数に$request->imageの中身を追加する
        $image_file = $request->file('image')->store('public/image');  //publicのimageに保存する
        $image_file = str_replace('public/image/', '', $image_file);
        $image = new Post;
        $image = $image_file; //$imageにファイル名を入れる
        //二枚目追加
        $image2_file = $request->image2;
        $image2_file = $request->file('image2')->store('public/image');
        $image2_file = str_replace('public/image/', '', $image2_file);
        $image2 = new Post;
        $image2 = $image2_file;
        //二枚目追加ここまで
        //3枚目
        $image3_file = $request->image3;
        $image3_file = $request->file('image3')->store('public/image');
        $image3_file = str_replace('public/image/', '', $image3_file);
        $image3 = new Post;
        $image3 = $image3_file;
        //3枚目追加ここまで
        //4枚目
        $image4_file = $request->image4;
        $image4_file = $request->file('image4')->store('public/image');
        $image4_file = str_replace('public/image/', '', $image4_file);
        $image4 = new Post;
        $image4 = $image4_file;
        //4枚目追加ここまで
        //5枚目
        $image5_file = $request->image5;
        $image5_file = $request->file('image5')->store('public/image');
        $image5_file = str_replace('public/image/', '', $image5_file);
        $image5 = new Post;
        $image5 = $image5_file;
        //5枚目追加ここまで
        $param = [
            'name' => $request->name,
            'content' => $request->content,
            'image' => $image,
            'image2' => $image2, //追加
            'image3' => $image3, //追加
            'image4' => $image4, //追加
            'image5' => $image5, //追加
            /*'user_id' => $request->user_id,*/
        ];
        DB::insert('insert into posts(name, content, image, image2, image3, image4, image5) values(:name, :content, :image, :image2, :image3, :image4, :image5)', $param); //画像追加５枚まで
        return redirect('/item_scr');
    }

    public function item_image(Request $request)
    {
        $image = $request->image;
        $image2 = $request->image2; //追加2枚目
        $image3 = $request->image2; //追加3
        $image4 = $request->image2; //追加4
        $image5 = $request->image2; //追加5
        $image = $request->file('image', 'image2')->store('public/image'); //追加
        $image = str_replace('public/image/', '', $image);
        $image = new Post;
        $image->file = $image;
        $image2->file = $image2; //追加2枚目
        $image3->file = $image2; //追加3
        $image4->file = $image2; //追加4
        $image5->file = $image2; //追加5

        $image->save();
        $image2->save(); //追加2
        $image3->save(); //追加3
        $image4->save(); //追加4
        $image5->save(); //追加5
    }
}
