<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name'          => 'required|string',
            'price'         => 'required|numeric',
            'stock'         => 'required|integer',
            'cover'         => 'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048',
            // 'cover'         => 'file|nullable',
            'description'   => 'nullable|string',
        ];
    }
}
