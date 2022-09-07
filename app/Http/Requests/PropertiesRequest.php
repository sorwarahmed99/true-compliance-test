<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertiesRequest extends FormRequest
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
        // 'organisation', 
        // 'property_type', 
        // 'parent_property_id', 
        // 'uprn', 
        // 'address', 
        // 'town', 
        // 'postcode', 
        // 'live',
        return [
            'organisation' => ['required', 'max:70'],
            'property_type'  => ['required']
        ];
    }
}
