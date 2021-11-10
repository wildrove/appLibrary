<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'         =>    'required',
            'user_name'    =>    ['required','min:4', 'max:10'],
            'user_type'    =>    'required',
            'cpf'          =>    ['required', 'min:11', 'max:14'],
            'phone_number' =>    'required',
            'email'        =>    'required',
            'password'     =>    'required',
            'photos.*'       =>    'image'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório.',
            'min'      => 'Este campo deve ter no mínimo :min caracteres.',
            'max'      => 'Este campo deve ter no máximo :max caracteres.',
            'image'    => 'O arquivo selecionado não é uma imagem válida !'
        ];
    }
}
