<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'cpf' => 'required|string|min:11|max:11',
            'password' => 'required|string',
            'data_nascimento' => 'required|date',
            'email' => 'required|email',
            'telefone' => 'required|min:8|max:9',
            'cep' => 'required|string|min:8|max:8',
            'estado' => 'required|string|min:2',
            'cidade' => 'required|string',
            'bairro' => 'required|string',
            'endereco' => 'required|string'
        ];
    }
}
