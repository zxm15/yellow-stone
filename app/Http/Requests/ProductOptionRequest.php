<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductOptionRequest extends Request {

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
			'company_id' => 'required|integer',
			'product_id' => 'required|integer',
			'name' => 'required|max:255',
			'sku' => 'required',
			'price' => 'required|numeric',
			'shipping_price' => 'required|numeric',
			'cost' => 'numeric',
			'description' => 'required',
			'advertisement' => 'required'
		];
	}

}
