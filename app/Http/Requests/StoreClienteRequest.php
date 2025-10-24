<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'cpf' => 'required|string|size:11|unique:clientes,cpf',
            'senha' => 'required|string|min:6',
            'cep' => 'required|string',
            'logradouro' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'uf' => 'required|string|size:2',
        ];
    }

    public function messages(): array
    {
        return [
            'email.unique' => 'Este e-mail já está cadastrado.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'required' => 'O campo :attribute é obrigatório.',
        ];
    }
}
