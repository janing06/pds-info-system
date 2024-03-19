<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'first_name' => [
				'required',
				'string',
			],
			'last_name' => [
				'required',
				'string',
			],
			'role' => [
				'required',
				'string',
				'in:admin,user'
			],
			'status' => [
				'required',
				'string',
				'in:active,inactive'
			],
			'email' => [
				'required',
				'email',
				Rule::unique('users', 'email')
			],
			'password' => [
				'required',
				'confirmed',
				Password::default(),
			],
		];
	}
}


