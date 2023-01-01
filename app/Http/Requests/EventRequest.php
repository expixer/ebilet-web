<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name' => ['required','string', 'min:3', 'max:120', 'unique:events'],
            'description' => ['required','string', 'min:20', 'max:400'],
            'start_date' => ['required','date', 'after:today', 'before:end_date', 'date_format:Y-m-d H:i:s'],
            'end_date' => ['required','date', 'after:start_date', 'date_format:Y-m-d H:i:s'],
            'location' => ['required','string'],
            'image' => ['required','file', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'status' => ['required','numeric', 'min:0', 'max:1'],
        ];
    }
}
