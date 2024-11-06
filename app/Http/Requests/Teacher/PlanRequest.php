<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    protected function onCreate(): array
    {
        return [
            'name' => 'required|max:255',
        ];
    }

    /**
     * @return string[]
     * #[ArrayShape(['name' => "string"])]
     */
    protected function onUpdate(): array
    {
        return [
            'name' => 'required|max:255',
        ];
    }

    protected function onDelete(): array
    {
        return [

        ];
    }

    public function rules(): array
    {
        switch ($this->method()) {
            case request()->isMethod('POST'):
                return $this->onCreate();

            case request()->isMethod('PUT'):
                return $this->onUpdate();

            case request()->isMethod('DELETE'):
                return $this->onDelete();

            default:
                return abort(404);
        }
    }

}
