<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateDoctor extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'max:120',
                'min:3',
                'unique:doctors,name',
            ],
            'speciality' => [
                'string',
                'required',
                'max:120',
                'min:3',
                'unique:doctors,speciality',
                ]
        ];
    }

    public function messages() {
        return [
            'name.required' => 'O campo name é obrigatório',
            'name.string' => 'O campo name deve ser string',
            'name.max' => 'O campo name deve ter no max 120 caracteres',
            'name.min' => 'O campo name deve ter no min 3 caracteres',
            'name.unique' => 'Esse name :attribute já existe, tente outro',

            'speciality.required' => 'O campo speciality é obrigatório',
            'speciality.string' => 'O campo speciality deve ser string',
            'speciality.max' => 'O campo speciality deve ter no max 120 caracteres',
            'speciality.min' => 'O campo speciality deve ter no min 3 caracteres',
            'speciality.unique' => 'Essa speciality: ":attribute" já existe, tente outro'
        ];
    }

}
