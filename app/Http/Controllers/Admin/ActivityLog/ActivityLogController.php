<?php

namespace App\Http\Controllers\Admin\ActivityLog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
    public function index()
    {
        $logs = Activity::latest()->with('causer')->paginate(25);

        return view('admin.pages.activity_log.index', compact('logs'));
    }

    public function show($activity)
    {
        $activity = Activity::whereId($activity)->firstOrFail();

        return response()->json([
            'causer_name' => optional($activity->causer)->name,
            'ip' => $activity->getExtraProperty('ip'),
            'user_agent' => $activity->getExtraProperty('agent'),
            'description' => $activity->description,
            'event' =>  $activity->event,
            'event_name' =>  trans("app.log_events.{$activity->event}"),
            'created_at' => "{$activity->created_at} ({$activity->created_at->diffForHumans()})",
            // 'old_content' => $activity->changes[0]['old'] ?? $activity->changes['old'] ?? [],
            // 'new_content' => $activity->changes[0]['attributes'] ?? $activity->changes['attributes'] ?? [],
        ]);

    }
}
