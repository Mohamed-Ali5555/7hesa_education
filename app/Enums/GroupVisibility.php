<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum GroupVisibility: string
{
    use EnumToArray;
    case PRIVATE = 'private';
    case PUBLIC = 'public';
}