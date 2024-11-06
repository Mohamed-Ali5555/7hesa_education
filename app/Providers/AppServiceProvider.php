<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Facades\CauserResolver;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        Paginator::useBootstrap();

        Activity::saving(function (Activity $activity) {

            $activity->properties = $activity->properties
                ->put('ip', request()->ip())
                ->put('agent', request()->userAgent())
                ->put(
                    'url',
                    request()->fullUrl()
                );
            $causer = optional($activity->causer);
            if ($causer) {
                $activity->properties = $activity->properties
                    ->put('causer_name', $causer->getRawOriginal('name'));
            }
            // $activity->description = trans('app.log_description', [
            //     'event' => $activity->event,
            //     'causer_name' => $causer->name,
            // ]);
        });
        DB::listen(function ($query) {
            Log::info('SQL: ' . $query->sql);
            Log::info('Bindings: ' . json_encode($query->bindings));
            Log::info('Time: ' . $query->time . 'ms');
        });

        // \DB::listen(function($query) {
        //     \Log::info(
        //         $query->sql,
        //         $query->bindings,
        //         $query->time
        //     );
        // });
    
        // \App::error(function(\Exception $exception) {
        //     \Log::error('Exception: ' . $exception->getMessage());
        //     \Log::error('Stack trace: ' . $exception->getTraceAsString());
        // });
    }
}
