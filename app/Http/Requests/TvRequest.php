<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TvRequest extends FormRequest
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
            'name' => 'required|min:3',
            'patrimonio' => 'required|unique:Televisoes',
            
        ];
    }

    public function messages(){
        return[
        'name.required' => 'o campo nome é Obrigatorio!!',
        'name.min' => 'preciso de 4 ou mais caracter!!',
        'patrimonio.required' => 'patrimonio Obrigatorio!',
        'patrimonio.unique' => 'patrimonio ja cadastrado!',
        


        

        ];
    }
}
