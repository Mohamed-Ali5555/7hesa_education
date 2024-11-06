<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum BootstrapColors: string
{
    use EnumToArray;
    case PRIMARY = 'primary';
    case SECONDARY = 'secondary';
    case SUCCESS = 'success';
    case DANGER = 'danger';
    case WARNING = 'warning';
    case INFO = 'info';
    case LIGHT = 'light';
    case DARK = 'dark';

}