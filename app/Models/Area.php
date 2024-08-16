<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function shops()
    {
        return $this->hasMany(Shop::class);//hasMany は複数のレコードを持つ 1対多の関係 を表す この場合は1つのエリアに複数の店舗を持つ という意味 なので hasMany を使う
    }
}
