<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupDayTime extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getEndTimeAttribute($value)
    {
        return Carbon::createFromFormat('H:i:s', $value)->format('h:i A');
    }
    public function getStartTimeAttribute($value)
    {
        return Carbon::createFromFormat('H:i:s', $value)->format('h:i A');
    }
}
