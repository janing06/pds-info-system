<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
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
		$userId = $this->route('user')->id;

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
				Rule::unique('users', 'email')->ignore($userId),
			],
			'password' => [
				'nullable', // Password is not required for updating
				'confirmed',
				Password::default(),
			],
		];
	}
}
