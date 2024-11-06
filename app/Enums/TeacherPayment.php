<?php

namespace App\Enums;
use App\Traits\EnumToArray;

enum TeacherPayment: string
{
    use EnumToArray;
    case PLAN = 'plan';
    case PERCENT = 'percent';
}