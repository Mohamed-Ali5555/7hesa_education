<?php
namespace App\Traits;

use App\Models\Scopes\TeacherScope;
use App\Models\Teacher;

trait BelongsToTeacher
{
    public static function bootBelongsToTeacher()
    {
        static::addGlobalScope(new TeacherScope);
        static::creating(function ($model) {
            if (! $model->teacher_id && auth('teacher')->check() ) {
                $model->teacher_id = auth('teacher')->user()->id;
            }
        });
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
