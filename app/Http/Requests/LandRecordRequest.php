<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'nationality' => 'required|string|max:100',
            'occupation' => 'required|string|max:100',
            'block_no' => 'required|string|max:50',
            'plot_no' => 'required|string|max:50|unique:plots,plot_no',
            'plot_size' => 'required|string|max:50',
            'occupancy_no' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'receipt_url' => 'required|url',
            'additional_info' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
        ];
    }
}
