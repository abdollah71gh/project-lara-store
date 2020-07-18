<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateRequestSlider extends FormRequest
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

            "image" => "max:5000",
            "alt" => "required",
            "caption" => 'required'
        ];
    }

    public function messages()
    {
        return [

            'image.max' => 'نباید مقدار عکس از ۵ مگا بیشتر باشد',
            'alt.required' => 'مقدار اسم عکس الزامی میباشد',
            'caption.required' => 'مقدار زیر نویس الزامی میباشد'
        ];
    }
}
