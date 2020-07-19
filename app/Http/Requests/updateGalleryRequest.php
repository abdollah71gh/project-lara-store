<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateGalleryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "gallery" => "max:5000",
        ];
    }

    public function messages()
    {
        return [
            "gallery.max" => 'عکس مورد نظر باید بیشتر از 5 مگا بایت باشد'
        ];
    }
}
