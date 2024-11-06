<?php

namespace App\Http\Requests\Admin\Group;

use App\Enums\GroupVisibility;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{

    /**
     * @return string[]
     * #[ArrayShape(['name' => "string"])]
     */
    protected function onCreate(): array
    {
        return [
            'name' => "required|string|max:255",
            'visibility' => ['required', Rule::in(GroupVisibility::values())],

                'status' => "sometimes",
        ];
    }


    protected function onUpdate(): array
    {
        return [
            'name' => "required|string|max:255",

            'visibility' => ['required', Rule::in(GroupVisibility::values())],

        ];

    }

    protected function onDelete(): array
    {
        return [
            'id' => 'required|exists:groups,id'
        ];
    }

    
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
