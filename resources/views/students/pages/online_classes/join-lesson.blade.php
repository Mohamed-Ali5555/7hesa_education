@extends('students.layouts.master')
@section('css')
    @toastr_css
@section('title')
    حصص اونلاين
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    حصص اونلاين
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="container">
    <h1>Join Lesson: {{ $online_classe->title }}</h1>
    
    <div id="meet"></div>
    <script src='https://meet.jit.si/external_api.js'></script>
    <script>
        const domain = 'meet.jit.si';
        const options = {
            roomName: '{{ str_replace('https://meet.jit.si/', '', $online_classe->jitsi_link) }}',
            width: '100%',
            height: 500,
            parentNode: document.querySelector('#meet'),
            userInfo: {
                displayName: '{{ Auth::user()->name }}'
            }
        };
        const api = new JitsiMeetExternalAPI(domain, options);
    </script>
</div>
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection

