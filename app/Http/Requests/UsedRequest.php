<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsedRequest extends FormRequest
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
            'image'                 => 'nullable|image|mimes:jpeg,jpg,png',
            'name'                  => 'required|string',
            'description'           => 'required|string',
            'status'                => 'required|string',
            'communication_method'  => 'required|string',
            'price'                 => 'required|numeric',
            'quantity'              => 'required|numeric',
            'delivery_time'         => 'nullable|numeric',
            'discount'              => 'nullable|numeric',
            'confirmed'             => 'nullable|boolean',
            'shared'                => 'nullable|boolean',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'shared'    => isset($this->shared),
            'confirmed' => isset($this->confirmed),
        ]);
    }
}
