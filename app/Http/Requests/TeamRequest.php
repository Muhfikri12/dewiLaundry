<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'photo' => $photoRule,
            'position' => 'required',
            'ig_link' => 'nullable|url',
            'fb_link' => 'nullable|url',
            'x_link' => 'nullable|url',
            'linkedIn_link' => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is required.',
            'position.required' => 'Position field is required.',
            'photo.required' => 'Photo field is required.',
            'photo.image' => 'The uploaded file must be a valid image.',
            'photo.mimes' => 'The uploaded file must be an image of type: jpeg, png, jpg, or gif.',
            'photo.max' => 'The image size must not exceed 8 MB.',
            'fb_link.url' => 'The Facebook link must be a valid URL.',
            'ig_link.url' => 'The Instagram link must be a valid URL.',
            'x_link.url' => 'The X (Twitter) link must be a valid URL.',
            'linkedIn_link.url' => 'The LinkedIn link must be a valid URL.',
        ];
    }
}
