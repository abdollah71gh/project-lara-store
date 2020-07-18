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
          "image"=>"reqired|max:5000",
        ];
    }
    public  function messages()
    {
  return[
      "image.required"=>'مقدار عکس الزامی میباشد',
      "image.max"=>'عکس مورد نظر باید بیشتر از 5 مگا بایت باشد'
  ];
    }
}
