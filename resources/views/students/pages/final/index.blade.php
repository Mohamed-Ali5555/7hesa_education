@extends('students.layouts.master')
@section('css')
@section('title')
    انهاء الاختبار
@endsection
@stop
@section('content')
<h1>شكرا لك على اتمام اختبار شهر 1</h1>
<p class="text-center mt-3">
    <a href="{{ route('student.dashboard.exams.index') }}" class="btn btn-info">
        الرجوع الى صفحة الامتحانات
    </a>
</p>
@endsection
