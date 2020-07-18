<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAboutReauest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
             "font"=>"required|max:40",
            "color"=>'required',
            "about"=>"required|between:10,1500"
        ];
    }
    public  function messages()
    {
        return[
            'font.required'=>'مقدار فونت الزامی میباشد',
            'font.max'=>'مقدار بیشتر از 40 پیکسل نباشد',
            'color.required'=>'مقدار رنگ الزامی میباشد',
            'about.required'=>'مقدار درباره ما الزامی میباشد ',
            'about.between'=>'مقدار between بین 10 تا 1500 کارکتر باشد'

        ];
    }
}
