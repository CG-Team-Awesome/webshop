<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'article_number' => 'required',
            'supplier_id' => 'required',
            'category_id' => 'required',
            'name' => 'required',
            'tagline' => 'required',
            'description' => 'required',
            'in_stock' => 'required',
            'price' => 'required',
            'tax_group_id' => 'required',
            'strap_color' => 'required',
            'size' => 'required',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
