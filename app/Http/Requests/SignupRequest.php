<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'idcard' => 'required|string|unique:signups|max:255',
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'tel' => 'required|string|max:255',
            'email' => 'required|email|confirmed',
            'category' => 'required|string|max:255',
            'photo' => 'required|mimes:jpg,png,jpeg,svg,gif'
            /* 
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5' */
        ];
    }
    public function messages()
    {
        return [
            'idcard.required' => 'O nº de Passaporte/Bilhete de Identidade é obrigatório.',
            'idcard.string' => 'O nº de Passaporte/Bilhete de Identidade deve ser uma string.',
            'idcard.unique' => 'Já temos uma candidatura com o nº de Passaporte/Bilhete de Identidade inserido',
            'idcard.max' => 'O nº de Passaporte/Bilhete de Identidade não pode ser superior a :max caracteres.',

            'name.required' => 'O nome é obrigatório.',
            'name.string' => 'O nome deve ser uma string.',
            'name.max' => 'O nome não pode ser superior a :max caracteres.',

            'surname.required' => 'O apelido é obrigatório.',
            'surname.string' => 'O apelido deve ser uma string.',
            'surname.max' => 'O apelido não pode ser superior a :max caracteres.',

            'organization.required' => 'A Organização/Delegação é obrigatória.',
            'organization.string' => 'A Organização/Delegação deve ser uma string.',
            'organization.max' => 'A Organização/Delegação não pode ser superior a :max caracteres.',

            'function.required' => 'A Função é obrigatória.',
            'function.string' => 'A Função deve ser uma string.',
            'function.max' => 'A Função não pode ser superior a :max caracteres.',

            'birthday.required' => 'A data de nascimento é obrigatório.',
            'birthday.date' => 'A data de nascimento não é uma data válida.',

            'gender.required' => 'O Gênero é obrigatório.',
            'gender.string' => 'O Gênero deve ser uma string.',
            'gender.max' => 'O Gênero não pode ser superior a :max caracteres.',

            'country.required' => 'O País é obrigatório.',
            'country.string' => 'O País deve ser uma string.',
            'country.max' => 'O País não pode ser superior a :max caracteres.',

            'tel.required' => 'O Telefone é obrigatório.',
            'tel.string' => 'O Telefone deve ser uma string.',
            'tel.max' => 'O Telefone não pode ser superior a :max dígitos.',

            'email.required' => 'O Email é obrigatório.',
            'email.email' => 'O Email deve ser um endereço de e-mail válido.',
            'email.confirmed' => 'O Campo Email de Confirmação não confere.',

            'category.required' => 'A Categoria é obrigatória.',
            'category.string' => 'A Categoria deve ser uma string.',
            'category.max' => 'A Categoria não pode ser superior a :max caracteres.',

            'photo.required' => 'A Fotografia de Identificação é obrigatório.',
            'photo.mimes' => 'A Fotografia de Identificação deve ser um arquivo do tipo: :values.',

        ];
    }
}
