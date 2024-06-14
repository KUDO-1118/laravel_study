<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index ()//indexメソッドを追加
    {
        return view('tests.test');// tests(フォルダ名)testファイル名
    }
}
