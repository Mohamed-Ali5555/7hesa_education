<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CouponValidAmount implements Rule
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function passes($attribute, $value)
    {
        if ($this->type == 'fixed') {
            return true;
        }

        return $value <= 100;
    }

    public function message()
    {
        return trans('validation.custom.coupon.valid_amount');
    }

}
