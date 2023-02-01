<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FlightFormRequest extends FormRequest
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
            'name' => [
                'required',
                'string'
            ],
            'company' => [
                'required',
                'string'
            ],
            'res_no' => [
                'required',
                'string'
            ],
            'Gate' => [
                'required',
                'string'
            ],
            'seat_no' => [
                'required',
                'string'
            ],
            'asc_time' => [
                'required',
                'string'
            ],
            'takeoff_time' => [
                'required',
                'string'
            ],
        ];
        return $rules;
    }
}
