<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //練習
    //練習
    public function index($id)
    {
        $items = User::find($id); //テストからIDを取得、idを特定 $itemsに渡す
        return view('index', ['item' => $items]);
    }
    public function create(Request $request)
    {
        $form = $request->all('name', 'age', 'profile', 'image');
        User::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $form = $request->all('name', 'age', 'profile', 'image'); //nameをデータベースから全て取り出す formに渡す
        User::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)でnameを更新
        return redirect("/{$request->id}");
    }
    //練習


    //後
    //マイページ編集
    public function mypage_edit(Request $request)
    {
        $form = $request->all('name', 'age', 'profile', 'image');
        $images = $request->image;
        if ($images->isValid()) {
            $filePath = $images->store('public');
            $images = str_replace('public/', '', $filePath);
        } //nameをデータベースから全て取り出す formに渡す
        $form['image'] = $images;
        User::where('id', $request->id)->update($form); //‘id’, $request->idで更新するIDを特定、update($form)でnameを更新
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
