<?php

namespace App\Http\Requests;

use App\Rules\TextLength;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'li' => ['url'],
            'tw' => [ 'url'],
            'fb' => [ 'url'],
            'bio' => [new TextLength(10)],
        ];
    }
}
