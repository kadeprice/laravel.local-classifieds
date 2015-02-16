<?php namespace Classifieds\Http\Requests;

use Classifieds\Http\Requests\Request;

class UserSignupRequest extends Request {

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
                'fname' => 'required|min:2',
                'lname' => 'required|min:2',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:4|confirmed',
                'password_confirmation' => 'required'
            ];
	}

}
