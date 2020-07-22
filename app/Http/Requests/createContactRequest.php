<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createContactRequest extends FormRequest
{




    public function rules()
    {
        return [
            "fullname"=>'max:100|min:10',
            "email"=>"email|max:100",
            "comment"=>"max:100"
        ];
    }
    public  function messages()
    {
        return[
            "fullname.max"=>"بیشترین مقدار نام و نام خانوادگی100 تا کارکتر باشد",
            "fullname.min"=>'کمترین مقدار نام و نام خانواگی ۱۰ کارکتر باشد',
            'email.email'=>'فرمت ایمل را وارد نمایید',
            'comment.max'=>'بیشترین مقدار میتواند ۵۰۰ کارکتر باشد'
        ];
    }
}
