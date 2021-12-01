<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TopController extends Controller
{

    //トップ画像
    public function top()
    {
        return view('top');
    }
}
