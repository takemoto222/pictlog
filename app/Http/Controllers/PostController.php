<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //練習
    public function item_scr($id)
    {
        $items = Post::find($id);
        //テストからIDを取得、idを特定 $itemsに渡す
        return view('item_scr', ['photo' => $items]);
    }
    public function create(Request $request)
    {
        $form = $request->all('name', 'age', 'profile', 'image');
        Post::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $form = $request->all('name', 'age', 'profile', 'image'); //nameをデータベースから全て取り出す formに渡す
        Post::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)でnameを更新
        return redirect("/{$request->id}");
    }
    //練習


    //後
    //
    public function item_post($id)
    {
        $items = Post::find($id); //テストからIDを取得、idを特定 $itemsに渡す
        return view('item_post', ['photo' => $items]);
    }

    public function edit_update(Request $request)
    {
        $form = $request->all('name', 'age', 'profile', 'image');
        $images = $request->image; //フォームから送信された画像の取得をしている
        $filePath = $images->store('public'); //画像の保存&パス取得するため
        $images = str_replace('public/', '', $filePath); //パスから余分な部分をカットするため
        $form['image'] = $images; //画像をデータベースから全て取り出す formに渡す,更新した画像のパスが入っているもの（$images）をformのimage（画像を格納している部分）に変更している
        Post::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)で、nameだけでなく、imageもageもprofile全てを更新しています。
        return redirect("/{$request->id}");
    }



    /*画像関係*/
    public function image(Request $request, Post $user)
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
