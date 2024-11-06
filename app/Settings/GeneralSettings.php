<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $name;
    public string $timezone;
    public string $phone;
    public string $address;
    public string $email;
    public string $logo;

    public static function group(): string
    {
        return 'general';
    }
}