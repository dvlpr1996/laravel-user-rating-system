<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TopicFormRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'title' => ['required', 'string', 'min:4', 'max:64'],
			'category_id' => ['required', Rule::in(['1', '2', '3', '4', '5', '6', '7'])],
			'body'  => ['required', 'string', 'min:4', 'max:1024']
		];
	}
}
