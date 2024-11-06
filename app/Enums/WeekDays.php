<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum WeekDays: int
{
    use EnumToArray;
    case SATURDAY = 1;
    case SUNDAY = 2;
    case MONDAY = 3;
    case TUESDAY = 4;
    case WEDNESDAY = 5;
    case THURSDAY = 6;
    case FRIDAY = 7;

    public function getTranslatedName(): string
    {
        return __('app.days.' . $this->value);
    }
}
