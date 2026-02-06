<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Landing;

class LandingRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'country' => 'string|size:2|nullable',
            'campaign_id' => 'required|exists:campaigns,id',
            'is_catch_all' => 'required|boolean',
            'html' => 'required|string',
            'action_url' => 'string|max:255|nullable',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {

            if ($this->input('country') && $this->input('is_catch_all') ||
                !$this->input('is_catch_all') && $this->input('country') === null) {
                    $validator->errors()->add('country', 'Country must be specified if not a catch-all, and must be null if it is a catch-all.');
            }

            if ($this->input('is_catch_all') && $this->input('country') !== null &&
                Landing::where('campaign_id', $this->input('campaign_id'))->where('is_catch_all', true)->exists()) {
                    $validator->errors()->add('is_catch_all', 'A catch-all landing page already exists for this campaign.');
            }
        });
    }
}
