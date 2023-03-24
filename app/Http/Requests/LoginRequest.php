<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|string',
        ];

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
