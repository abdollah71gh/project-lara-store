<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "image" => "required|max:5000",
            "alt" => "required",
            "caption" => 'required'
        ];
    }

    public function messages()
    {
        return [
            "image.required" => 'مقدار عکس الزامی میباشد',
            'image.max' => 'نباید مقدار عکس از ۵ مگا بیشتر باشد',
            'alt.required' => 'مقدار اسم عکس الزامی میباشد',
            'caption.required' => 'مقدار زیر نویس الزامی میباشد'
        ];
    }
}
