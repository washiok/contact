<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            public function rules()
{
  return [
        'name.required' => '名前を入力してください'
        'sex.required' => '性別を選択してください'
        'email.required' => 'メールアドレスを入力してください'
        'email.email' => 'メールアドレスはメール形式で入力してください'
        'tel.required' => '電話番号を入力してください'
        'tel.digits_between:11' => '電話番号は11桁までの数字で入力してください'
        'building.required' => '住所を入力してください'
        'select.required' => 'お問い合わせの種類を選択してください'
        'content.required' => 'お問い合わせ内容を入力してください'
        'content.max:120'  => 'お問合せ内容は120文字以内で入力してください'
];
}
        ];
    }
}
