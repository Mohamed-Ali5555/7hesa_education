<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_package extends Model
{
    public $table = 'admin_packages';

    protected $guarded = [];
    use HasFactory;
}
