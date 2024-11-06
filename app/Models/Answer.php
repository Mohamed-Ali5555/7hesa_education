<?php

namespace App\Models;

use App\Traits\ModelLogger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use ModelLogger;

    protected $guarded = [];
}
