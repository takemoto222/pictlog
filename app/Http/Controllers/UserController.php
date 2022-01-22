<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //練習
    //練習
    public function index($id)
    {
        $id = Auth::id();
        //リレーション 投稿記述
        $items = Post::where('user_id', $id)->get();
        $items = User::find($id)->posts(); //テストからIDを取得、idを特定 $itemsに渡す
        return view('index', ['item' => $items]);
    }


    public function create(Request $request)
    {
        $form = $request->all('name', 'profile', 'image');
        User::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $form = $request->all('name', 'profile', 'image'); //nameをデータベースから全て取り出す formに渡す
        User::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)でnameを更新
        return redirect("/{$request->id}");
    }



    //マイページ編集
    public function mypage_edit($id)
    {
        $items = User::find($id); //テストからIDを取得、idを特定 $itemsに渡す
        $id = Auth::id();
        return view('mypage_edit', ['item' => $items]);
    }

    //public function edit_update(Request $request)
    //{
    //  $form = $request->all('name', 'profile', 'image'); //nameをデータベースから全て取り出す formに渡す
    //User::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)でnameを更新
    // return redirect("/{$request->id}");
    // }
    public function edit_update(Request $request)
    {
        $image_path = $request->file('image')->store('public/image');  //publicのimageに保存する

        $path = str_replace('public/image/', '', $image_path); // 画像のパスを加工
        User::where('id', $request->id)->update([
            'name' => $request->name, //nameにはリクエストから来たnameプロパティの値
            'profile' => $request->profile, //profileはにはリクエストから来たprofileプロパティの値
            'image' => $path //imageには先ほど加工した画像ファイルの値
        ]); // 値の更新

        $item = User::where('id', $request->id)->first();
        return view("index", ["item" => $item]); // ユーザ情報の返却
    }

    /*画像関係*/
    public function image(Request $request, User $user)
    {
        $form = $request->profile_img;
        if ($form->isValid()) {
            $filePath = $form->store('public');
            $form->image = str_replace('public/', '', $filePath);
            $form->save();
            return redirect("/user/{$user->id}")->with('user', $user);
        }
    }
}
