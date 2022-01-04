<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //練習
    //練習
    public function index($id)
    {
        //新しい記述
        //$id = Auth::id();
        //$id = User::find($id);
        // return view('item_scr', ['id' => $id]);
        //新しい記述ここまで
        $id = Auth::id();
        $items = User::find($id); //テストからIDを取得、idを特定 $itemsに渡す
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
    public function edit_update(Request $request)
    {
        $form = $request->all('name', 'profile', 'image'); //nameをデータベースから全て取り出す formに渡す
        User::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)でnameを更新
        return redirect("/{$request->id}");
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
