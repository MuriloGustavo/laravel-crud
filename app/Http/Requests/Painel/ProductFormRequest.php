<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name'          => 'required|min:3|max:150',
            'number'        => 'required|numeric',
            'category'      => 'required',
            'description'   => 'min:3|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'O campo nome é obriatório!',
            'name.min'          => 'O campo nome tem no minimo 3 caracteres!',
            'name.max'          => 'O campo nome tem no maximo 150 caracteres!',
            'number.required'   => 'O campo numero é obriatório!',
            'number.numeric'    => 'O campo numero é numerico!',
            'category.required' => 'Selecione uma categoria valida!',
            'description.min'   => 'O campo descrição tem no minimo 3 caracteres!',
            'description.max'   => 'O campo descrição tem no maximo 1000 caracteres!'
        ];
    }
}
