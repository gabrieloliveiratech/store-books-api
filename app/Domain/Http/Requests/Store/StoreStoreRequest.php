<?php

namespace App\Domain\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreStoreRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'active' => ['required', 'boolean'],
            'address' => ['nullable', 'array'],
            'address.number' => ['nullable', 'string', 'max:20'],
            'address.street' => ['required_with:address,!=,null', 'string', 'max:255'],
            'address.district' => ['required_with:address,!=,null', 'string', 'max:255'],
            'address.city' => ['required_with:address,!=,null', 'string', 'max:255'],
            'address.state' => ['required_with:address,!=,null', 'string'],
            'address.country' => ['required_with:address,!=,null', 'string', 'max:255'],
            'address.complement' => ['nullable', 'string', 'max:255'],
            'address.zip_code' => ['required_with:address,!=,null', 'string', 'max:10'],
        ];
    }
}
