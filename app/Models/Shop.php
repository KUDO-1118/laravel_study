<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(Area::class);// 1対多の関係 1つのエリアに複数の店舗が存在 その逆も同様 なのでbelongsTo(属するという意味) で記述
    }

    public function routes()
    {
        return $this->belongsToMany(Route::class);// 多対多の関係 1つの店舗に複数のルートを持つ 1つのルートも複数の店舗を持つ なのでbelongsToMany(属する) で記述 また、中間テーブルを作成する必要がある そのため、モデル名_id のカラムを持つ中間テー ブルを作成する この場合、shop_route というテーブルを作成 その中にshop_id とroute_id のカラムを持つ このテーブルを中間テー ブルと呼ぶ このテーブルを作成すると、shop_id とroute_id のカラムを持つ shops テ ーブル、routes の中間 テーブルが作成される この中間テーブルを参照するため、belongsToMany(属する) の引数にRoute::class を指定 これで、shop_route テーブルを参照する
    }
}
