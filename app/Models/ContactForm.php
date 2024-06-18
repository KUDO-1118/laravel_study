<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [//データベースに保存ができる
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact',
    ];
}
