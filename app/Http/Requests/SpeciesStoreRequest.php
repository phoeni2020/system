<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpeciesStoreRequest extends FormRequest
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
            'name'=>'required',
            'qty_weight'=>'required|numeric',
            'qty_no'=>'required|numeric',
            'price_all'=>'required|numeric',
            'price'=>'required|numeric',
        ];
    }
}
