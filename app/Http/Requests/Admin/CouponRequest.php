<?php

namespace App\Http\Requests\Admin;

use App\Rules\CouponValidAmount;
use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * @return string[]
     * #[ArrayShape(['name' => "string"])]
     */
    protected function onCreate(): array
    {
        return [
            'name' => "required|string|max:255",
            'start_date' => "required|date|max:255",
            'end_date' => "required|date|max:255",

            'code' => "nullable|string|unique:coupons,code",
            'type' => "required|in:fixed,percent",
            'amount' => ['required','numeric', new CouponValidAmount($this->post('type'))],
            'status' => "sometimes",
        ];
    }

    /**
     * @return string[]
     * #[ArrayShape(['name' => "string"])]
     */
    protected function onUpdate(): array
    {
        return [
            'name' => "required|string|max:255",
            // 'code' => "required|string|unique:coupons,code,".$this->route('id'),
            'type' => "required|in:fixed,percent",
            'amount' => ['required','numeric', new CouponValidAmount($this->post('type'))],
            'status' => "sometimes",
        ];

    }

    protected function onDelete(): array
    {
        return [
            'id' => 'required|exists:coupons,id'
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return mixed
     */
    public function rules()
    {
        switch ($this->method()) {
            case request()->isMethod('POST'):
                return $this->onCreate();

            case request()->isMethod('PUT'):
                return $this->onUpdate();

            case request()->isMethod('DELETE'):
                return $this->onDelete();

            default:
        }
    }
}
