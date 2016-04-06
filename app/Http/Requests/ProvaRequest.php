<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProvaRequest extends Request
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return TRUE;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'disciplina'	=> 'required',
			'data'			=> 'required|date',
			'descricao'		=> 'required'
		];
	}
}
