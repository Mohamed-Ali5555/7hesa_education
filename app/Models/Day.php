<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function groups() {
        return $this->belongsToMany(Group::class, 'group_days');
    }
}
