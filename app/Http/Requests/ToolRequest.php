<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToolRequest extends FormRequest
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
            'image'         => 'nullable|image|mimes:jpeg,jpg,png',
            'name'          => 'required|string',
            'description'   => 'required|string',
            'company_name'  => 'required|string',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
            'delivery_time' => 'required|numeric',
            'discount'      => 'nullable|numeric',
            'shared'        => 'nullable|boolean',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'shared' => isset($this->shared)
        ]);
    }
}
