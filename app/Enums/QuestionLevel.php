<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum QuestionLevel: string
{
    use EnumToArray;
    case EASY = 'easy';
    case MEDIUM = 'medium';
    case HARD = 'hard';
}