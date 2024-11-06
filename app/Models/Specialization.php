<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\ModelLogger;

class Specialization extends Model
{
    use HasTranslations,ModelLogger;
    public $translatable = ['Name'];
    protected $fillable =['Name'];
}
