@extends('teacher.layouts.master')
@section('css')
    @toastr_css
    <style>
        .class-info {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .class-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .class-header h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .class-status.active {
            color: green;
        }

        .class-status.inactive {
            color: red;
        }

        .meeting-status {
            margin-top: 10px;
        }

        .meeting-status span {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
        }

        .time-info {
            margin-bottom: 10px;
        }

        .time-info i {
            margin-right: 5px;
        }

        #container {
            display: flex;
            height: 600px;
        }

        /* #meet {
            width: 70%;
            height: 100%;
        } */
/* 
        #whiteboard {
            width: 30%;
            height: 100%;
            border: 1px solid #000;
        } */
    </style>
@endsection

@section('title')
    Online Classes
@stop

@section('page-header')
@section('PageTitle')
    Online Classes
@stop
@endsection

@section('content')
<div class="container class-info">
    <div class="class-header">
        <h1>{{ $online_class->topic }}</h1>
        <div class="meeting-status">
            <span class="class-status {{ $online_class->is_open ? 'active' : 'inactive' }}">
                {{ $online_class->is_open ? 'Meeting Open' : 'Meeting Closed' }}
            </span>
        </div>
    </div>
    <hr>
    <div class="time-info">
        <p><i class="fas fa-clock"></i> Start Time: {{ \Carbon\Carbon::parse($online_class->start_at)->format('Y-m-d H:i') }}</p>
        <p><i class="fas fa-hourglass-end"></i> End Time: {{ \Carbon\Carbon::parse($online_class->end_at)->format('Y-m-d H:i') }}</p>
        <p><i class="fas fa-calendar"></i> Current Time: {{ now()->format('Y-m-d H:i') }}</p>
    </div>
    <hr>

    <div class="meeting-controls">
        @if(!$online_class->is_meeting_open && now()->greaterThanOrEqualTo($online_class->start_at) && now()->lessThanOrEqualTo($online_class->end_at))
        <form action="{{ route('teacher.online_classes.open', $online_class) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Open Meeting</button>
        </form>
        @elseif($online_class->is_meeting_open)
        <form action="{{ route('teacher.online_classes.close', $online_class) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Close Meeting</button>
        </form>
        @else
        <p>The meeting is not currently scheduled.</p>
        @endif
    </div>

    @if($online_class->is_meeting_open && now()->greaterThanOrEqualTo($online_class->start_at) && now()->lessThanOrEqualTo($online_class->end_at))

        <div id="meet"></div>

    <script src='https://unpkg.com/jitsi-meet-whiteboard@0.2.0/dist/jitsi-meet-whiteboard.min.js'></script>

    <script src='https://meet.jit.si/external_api.js'></script>
    <script>
        const domain = 'meet.jit.si';
        const options = {
            roomName: '{{ str_replace('https://meet.jit.si/', '', $online_class->jitsi_link) }}',
            width: '100%',
            height: 500,
            parentNode: document.querySelector('#meet'),
            userInfo: {
                displayName: '{{ Auth::user()->name }} (Teacher)'
            }
            // ,
            // interfaceConfigOverwrite: {
            //     TOOLBAR_BUTTONS: [
            //         'microphone', 'camera', 'closedcaptions', 'desktop', 'fullscreen',
            //         'fodeviceselection', 'hangup', 'profile', 'chat', 'recording',
            //         'livestreaming', 'etherpad', 'sharedvideo', 'settings', 'raisehand',
            //         'videoquality', 'filmstrip', 'invite', 'feedback', 'stats', 'shortcuts',
            //         'tileview', 'videobackgroundblur', 'download', 'help', 'mute-everyone',
            //         'e2ee', 'sharedetherpad' // This adds the whiteboard feature
            //     ],
            // },
            // configOverwrite: {
            //     enableCollaborativeDocumentEditing: true, // Enables collaborative document editing
            // }
        };
        const api = new JitsiMeetExternalAPI(domain, options);
    </script>
    @else
        <p>The online class is not currently active or it's outside the scheduled time.</p>
    @endif
</div>
@endsection

@section('js')
    @toastr_js
    @toastr_render
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection