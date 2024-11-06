@extends('students.layouts.master')

@section('content')
<div id='calendar'></div>
@endsection


@section('js')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: @json($lessons),
        dateClick: function(info) {
            alert('درس: ' + info.event.title + '\nالمدرس: ' + info.event.extendedProps.teacher);
        }
    });
    calendar.render();
});
</script>
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
@toastr_js
@toastr_render
@endsection
