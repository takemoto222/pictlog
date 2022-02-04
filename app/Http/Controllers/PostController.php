<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PostController extends Controller
{
    public function item_scr(Request $request)
    {

        //リレーションのため追加
        $user = Auth::user();
        $id = $request->input('id');
        // $item = DB::table('users')->where('name', 'image', $user)->first();
        //↑のDBから取り出す記述から　↓に変更
        //dd($item);
        //1ページに1投稿まで の記述
        $photos = DB::table('posts')->latest()->get();
        if (empty($id)) {
            $photo = $photos[0];
        } else {
            $photo = $photos->where('id', $id)->first();
        }

        $item = User::find($photo->user_id);
        return view(
            'item_scr',
            [
                'photo' => $photo,
                'photos' => $photos,
                'id' => $user,
                'item' => $item //userの情報をbladeに渡す
            ]
        );
        //compact関数を使った例 エラー
        //return view('item_scr', compact('id', 'item', 'photos'));
    }

    public function item_add()
    {
        $id = Auth::id();
        $id = User::find($id);
        return view('item_post', ['id' => $id]);
    }





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
            'user_id' => Auth::id(),
            'name' => $request->name,
            'content' => $request->content,
            'image' => $image,
            'image2' => $image2, //追加
            'image3' => $image3, //追加
            'image4' => $image4, //追加
            'image5' => $image5, //追加
            /*'user_id' => $request->user_id,*/
        ];
        DB::insert('insert into posts(user_id, name, content, image, image2, image3, image4, image5) values(:user_id, :name, :content, :image, :image2, :image3, :image4, :image5)', $param); //画像追加５枚まで
        return redirect('/item_scr');
    }

    public function item_image(Request $request)
    {
        $image = $request->image;
        $image2 = $request->image2; //追加2枚目
        $image3 = $request->image3; //追加3
        $image4 = $request->image4; //追加4
        $image5 = $request->image5; //追加5
        $image = $request->file('image', 'image2')->store('public/image'); //追加
        $image = str_replace('public/image/', '', $image);
        $image = new Post;
        $image->file = $image;
        $image2->file = $image2; //追加2枚目
        $image3->file = $image3; //追加3
        $image4->file = $image4; //追加4
        $image5->file = $image5; //追加5

        $image->save();
        $image2->save(); //追加2
        $image3->save(); //追加3
        $image4->save(); //追加4
        $image5->save(); //追加5
    }


    //削除ボタン
    // こちらは削除を行うアクションメソッドです
    public function delete(Request $request)
    {
        // リクエストで送られてきたTodoのidを使い、テーブル側のどのTodoがリクエストのPostなのかを探してdeleteメソッドで削除しています
        $photo = Auth::id();
        Post::find($photo->id)->delete();
        return redirect('/{{$user}}');
    }
}
