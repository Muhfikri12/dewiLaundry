<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        $photoRule = $this->isMethod('post') ? 'required|image|mimes:jpg,jpeg,png,gif|max:8192' : 'nullable|image|mimes:jpg,jpeg,png,gif|max:8192';

        return [
            'name' => 'required',
            'logo' => $photoRule,
        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'Name field is required.',
            'logo.required' => 'Photo field is required.',
            'logo.image' => 'The uploaded file must be a valid image.',
            'logo.mimes' => 'The uploaded file must be an image of type: jpeg, png, jpg, gif, or svg.',
            'logo.max' => 'The image size must not exceed 8 MB.',
        ];
    }
}
