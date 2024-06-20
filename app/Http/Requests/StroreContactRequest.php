<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StroreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //$ php artisan make:request StroreContactRequestでRequestが作成される
        //初回はfalseになっているのでtureに変更する
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'], //テーブル毎に1件ならunique:contact_forms
            'url' => ['url', 'nullable'],
            'gender' => ['required', 'boolean'],
            'age' => ['required'],
            'contact' => ['required', 'string', 'max:200'],
            'caution' => ['required', 'accepted']
        ];
    }
}
