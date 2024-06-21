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
}
