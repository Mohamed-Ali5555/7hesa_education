<?php

namespace App\Traits;

use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

trait ModelLogger
{
    use LogsActivity;
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->logExcept([
                'created_at',
                'updated_at',
            ])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }
}
