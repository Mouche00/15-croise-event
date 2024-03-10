<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|unique:events,title|min:4|max:255',
            'description' => 'required|min:4',
            'venue' => 'required|min:4',
            'seats' => 'required|numeric|integer|min:1',
            'price' => 'required|numeric|min:1',
            'date' => 'required|date|before:' . now()->timezone('Africa/Casablanca')->addYears(2)->toDateTimeString() . '|after:' . now()->timezone('Africa/Casablanca')->toDateTimeString(),
            'category_id' => 'required|numeric',
            'image' => 'required|image'
        ];
    }
}
