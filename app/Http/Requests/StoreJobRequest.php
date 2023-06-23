<?php

namespace App\Http\Requests;

use App\Rules\CheckExperience;
use App\Rules\DescriptionOrUrl;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreJobRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(Request $request): array
    {
        if (!Auth::check()) {
            return [
                'job_title' => 'required|max:255',
                'company_name' => 'required|max:255',
                'content' => 'nullable',
                'description_url' => ['url', new DescriptionOrUrl($request->input('content'))],
                'salary' => 'nullable|max:255',
                'category' => 'required|max:255',
                'company_logo' => 'sometimes|mimes:jpeg,jpg,png|required|max:10000',
                'start_ex' => 'required_with:end_page|integer',
                'end_ex' => 'required_with:start_ex|integer',
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users|max:255',
                'password' => 'required',
            ];
        } else {
            return [
                'job_title' => 'required|max:255',
                'company_name' => 'required|max:255',
                'category' => 'required|max:255',
                'content' => 'nullable',
                'description_url' => ['url', new DescriptionOrUrl($request->input('content'))],
                'salary' => 'nullable|max:255',
                'company_logo' => 'sometimes|mimes:jpeg,jpg,png|required|max:10000',
                'start_ex' => 'required_with:end_page|integer',
                'end_ex' => ['required_with:start_ex|integer', new CheckExperience($request->input('start_ex'))],
            ];
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'job_title.required' => 'A title is required',
            'company_name.required' => 'A Company name is required',
            'company_logo.max' => 'Please upload the valid file, file must not exceed 10mb',
            'name.required' => 'A Name is required',
            'category.required' => 'A Category is required',
            'email.required' => 'A Email is required',
            'email.email' => 'Please enter the valid email',
            'password.required' => 'A Password is required',
        ];
    }
}
