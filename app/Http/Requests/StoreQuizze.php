<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuizze extends FormRequest
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
            'Name_ar' => 'required',
            'Name_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'time.required' => trans('validation.required'),
            'time.between' => 'يجب ادخال وقت وليس نص',
            'time.date_format' => 'يجب ادخال وقت وليس نص',
            'Name_ar.required' => trans('validation.required'),
            'Name_en.required' => trans('validation.required'),

        ];
    }
}
