<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TeacherScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        if (app()->has('auth_teacher') && app('auth_teacher')->id) {
            // dd('asd',app('auth_teacher')->id,app('auth_teacher'));
            $builder->where('teacher_id', app('auth_teacher')->id);
        }
    }
}
