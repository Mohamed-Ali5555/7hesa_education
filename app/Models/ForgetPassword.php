<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelLogger;

class ForgetPassword extends Model
{
    use ModelLogger;

    public $table = 'password_resets';
    protected $fillable = [
        'email',
        'token',
        'created_at',
    ];
}
