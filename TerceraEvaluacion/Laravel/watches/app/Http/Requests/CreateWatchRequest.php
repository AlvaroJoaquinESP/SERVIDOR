<?php

namespace App\Http\Requests;

use App\Enums\WatchBrand;
use App\Enums\WatchType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CreateWatchRequest extends FormRequest
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
            'model' => 'required|string|max:255',
            'brand' => ['required', 'string', new Enum(WatchBrand::class)],
            'type' => ['required', 'string', new Enum(WatchType::class)]
        ];
    }
}
