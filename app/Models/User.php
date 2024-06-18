<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [//データベースに保存ができる
        'name',
        'email',
        'password',
    ];
    // createメソッドを使用する前に、モデルクラスでfillableまたはguardedプロパティを指定する必要があります。すべてのEloquentモデルはデフォルトで複数代入の脆弱性から保護されているため、こうしたプロパティが必須https://readouble.com/laravel/9.x/ja/eloquent.html#mass-assignment(複数代入)

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
