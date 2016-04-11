<?php

namespace App\Http\Requests;

class AtividadeRequest extends Request
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
            'disciplina'       => 'required',
            'entrega'          => 'required|date',
            'descricao'        => 'required',
        ];
    }
}
