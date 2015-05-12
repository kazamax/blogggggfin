<?php namespace Curso\Http\Requests;

use Curso\Http\Requests\Request;

class CrearValidacionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true; //cambiarlo a true
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() // Aca van los campos a validar
	{
		return [
			'title' => 'required',
			'content' => 'required',
			'tags'  => 'required',
			'photo' => 'required'
		];
	}

}
