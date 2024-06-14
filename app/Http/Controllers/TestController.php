<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;//Testモデルを使えるように読み込む

class TestController extends Controller
{
    public function index ()//indexメソッドを追加
    {
        $values = Test::all();//全件取得

        // dd($values);
    
        return view('tests.test', compact('values'));//compact関数でView側に変数を渡すと楽
    }
}
