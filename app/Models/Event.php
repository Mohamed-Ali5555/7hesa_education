<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelLogger;
class Event extends Model
{
    use ModelLogger;
    protected $fillable=['title','start'];
}
