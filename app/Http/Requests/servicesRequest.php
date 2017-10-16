<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class servicesRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'titel'         => 'required',
         'sub_title' => 'required',
         'catalogue_id'       => 'required',
         'image'  => 'required|image',
         'detils' => 'required',
        ];
    }
}
