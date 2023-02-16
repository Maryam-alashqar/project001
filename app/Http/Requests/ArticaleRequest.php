<?php

namespace App\Http\Requests;

use App\Rules\TextLength;
use Illuminate\Foundation\Http\FormRequest;

class ArticaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', new TextLength(3)],
            'image' => ['required', 'image'],
            'short_description' => ['string'],
            'full_description' => ['required', new TextLength(20)],
        ];
    }
}
