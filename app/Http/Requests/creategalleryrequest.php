<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class creategalleryrequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "gallery" => "required|max:5000",
        ];
    }

    public function messages()
    {
        return [
            "gallery.required" => 'مقدار عکس الزامی میباشد',
            "gallery.max" => 'عکس مورد نظر باید بیشتر از 5 مگا بایت باشد'
        ];
    }
}
