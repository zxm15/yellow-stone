<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerRequest extends Request {

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
			'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'email' => 'required|email',
			'phone' => 'required|numeric|min:10',
			'address1' => 'required',
			'city' => 'required',
			'state' => 'required',
			'zip' => 'required',
			'country' => 'required',
			'birthday' => 'date'
		];
	}

}
