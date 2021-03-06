<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyRequest extends Request
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
            'name' => 'required|max:255',
            'website' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ];
    }

}
