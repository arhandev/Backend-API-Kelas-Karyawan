<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $validate = [
            'name' => 'required|string',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
            'image_url' => 'required|string|url',
            'is_diskon' => 'required|boolean',
            'harga' => 'required|numeric',
            'description' => 'nullable|string',
            'category' => 'required|string',
        ];

        if ($this->get('is_diskon') == true) {
            $validate['harga_diskon'] = 'nullable|required_if:is_diskon,true|lt:harga|numeric';
        }


        return $validate;
    }

    protected function failedValidation(Validator $validator)
    {
        $response = response()->json([
            "info" => $validator->messages()->first(),
            "data" => ['errors' => $validator->messages()->toArray()]
        ], 400);
        throw new ValidationException($validator, $response);
    }
}
