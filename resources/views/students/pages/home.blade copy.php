@extends('students.layouts.master')
{{-- @section('css')
    @toastr_css
@endsection

@section('title')
    الملف الشخصي
@endsection

@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    الملف الشخصي
@stop
<!-- breadcrumb -->
@endsection --}}

@section('content')

<div class="row">
    <div class="col-12">
        <div class="calendar-main mb-30">
            <livewire:calendar-student />
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
