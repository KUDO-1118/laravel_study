<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;//Testモデルを使えるように読み込む
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index ()//indexメソッドを追加
    {
        //Eloquent(エロクアント)
        $values = Test::all();//全件取得

        $count = Test::count();//件数を取得

        $first = Test::findOrFail(1);//1件取得

        $where = Test::where('text', '=', '');//条件に合うレコードを取得

        //クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'これはテストです')->select('id', 'text')->get();

        dd($values, $count, $first, $where, $queryBuilder);
    
        return view('tests.test', compact('values'));//compact関数でView側に変数を渡すと楽
    }
}
