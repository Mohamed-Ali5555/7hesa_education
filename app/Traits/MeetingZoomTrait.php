<?php

namespace App\Traits;

use Jubaer\Zoom\Facades\Zoom;
use Illuminate\Support\Carbon;
use App\Services\AgoraService;

trait MeetingZoomTrait
{



public function createMeeting(Request $request, AgoraService $agoraService)
{
    
}




    // public function createMeeting($request)
    // {
    //     $meeting = Zoom::createMeeting([
    //         'topic' => $request->topic,
    //         'duration' => $request->duration,
    //         'password' => $request->password,
    //         'start_time' => Carbon::parse($request->start_time)->toIso8601String(),
    //         'timezone' => config('app.timezone'),
    //         "settings" => $this->settings(),
    //     ]);

    //     return $meeting;
    // }
    // public function updateMeeting($meetingId, $request)
    // {
    //     $meeting = Zoom::updateMeeting($meetingId, [
    //         'topic' => $request->topic,
    //         'duration' => $request->duration,
    //         'password' => $request->password,
    //         'start_time' => Carbon::parse($request->start_time)->toIso8601String(),
    //         'timezone' => config('app.timezone'),
    //         "settings" => $this->settings(),
    //     ]);

    //     return $meeting;
    // }
    // private function settings():array{
    //     return [
    //         'join_before_host' => false,
    //         'host_video' => false,
    //         'participant_video' => false,
    //         'mute_upon_entry' => true,
    //         'waiting_room' => true,
    //         'approval_type' => 0,
    //         'audio' => config('zoom.auto_recording', 'both'),
    //         'auto_recording' => config('zoom.auto_recording', 'none'),
    //     ];
    // } 
}
