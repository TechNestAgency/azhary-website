<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
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
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20|min:8',
            'date' => 'nullable|date|after_or_equal:today',
            'time' => 'nullable|date_format:H:i',
            'arabic_level' => 'required|in:beginner,intermediate,advanced,native',
            'course_interest' => 'required|string|max:255',
            'message' => 'nullable|string|max:1000',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'name.required' => __('website.Name is required'),
            'name.min' => __('website.Name must be at least 2 characters'),
            'name.max' => __('website.Name cannot exceed 255 characters'),
            'email.required' => __('website.Email is required'),
            'email.email' => __('website.Please enter a valid email address'),
            'phone.required' => __('website.Phone number is required'),
            'phone.min' => __('website.Phone number must be at least 8 characters'),
            'phone.max' => __('website.Phone number cannot exceed 20 characters'),
            'date.after_or_equal' => __('website.Date must be today or a future date'),
            'date.date' => __('website.Please enter a valid date'),
            'time.date_format' => __('website.Please enter a valid time'),
            'arabic_level.required' => __('website.Please select your Arabic level'),
            'arabic_level.in' => __('website.Please select a valid Arabic level'),
            'course_interest.required' => __('website.Please select a course'),
            'message.max' => __('website.Message cannot exceed 1000 characters'),
        ];
    }

    /**
     * Get custom attributes for validation error messages.
     */
    public function attributes(): array
    {
        return [
            'name' => __('website.Name'),
            'email' => __('website.Email'),
            'phone' => __('website.Phone number'),
            'date' => __('website.Date'),
            'time' => __('website.Time'),
            'arabic_level' => __('website.Arabic level'),
            'course_interest' => __('website.Course interest'),
            'message' => __('website.Message'),
        ];
    }
}
