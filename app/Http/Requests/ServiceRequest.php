<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:8192',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Name field is required.',
            'image.required' => 'Photo field is required.',
            'image.image' => 'The uploaded file must be a valid image.',
            'image.mimes' => 'The uploaded file must be an image of type: jpeg, png, jpg, gif, or svg.',
            'image.max' => 'The image size must not exceed 8 MB.',
            'description.required' => 'Description field is required'
        ];
    }
}
