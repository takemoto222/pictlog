<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TopController extends Controller
{
    public function top()
    {
        $id = Auth::id();
        $id = User::find($id);
        return view('top', ['id' => $id]);
    }
    public function logout_top()
    {
        return view('logout_top');
    }
}
