<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createRequestSetting extends FormRequest
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
            "title" => 'required|min:5|max:200',
            "author" => 'required|min:5|max:200',
            'keywords' => 'required|between:5,500',
            'description' => 'required|between:5,500'
        ];
    }

    public function messages()
    {
        return [
            "title.required" => 'مقدار عنوان شما الزامی میباشد',
            "title.main" => 'کمترین مقدار عنوان ۵ کارکتر میباشد',
            "title.max" => 'بیشترین مقدار عنوان 200 کارکتر میباشد',
            "author.required" => ' مقدار نویسنده شما الزمی می باشد',
            "author.min" => 'کمترین مقدار نویسنده 5 کارکتر میباشد',
            "author.max" => 'بیشترین مقدار نویسنده 500 کارکتر میباشد',
            "keywords.required" => 'مقدار کلمات کلیدی الزامی میباشد',
            "keywords.between" => 'کلمات باید بین 5 تا 500 کارکتر باشد',
            "description.required" => 'توضیحات کلمات الزامی میباشد',
            "description.between" => 'توضیحات  کلمات باید بین 5 تا 500 کارکتر باشد',
        ];
    }
}
