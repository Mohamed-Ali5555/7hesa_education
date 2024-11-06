@extends('admin.layouts.master')
@section('css')
    @toastr_css
@section('title')
    الرئيسيه
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    الرئيسيه
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body card-student">
                    <div class="clearfix">
                        <div class="float-left">
                            <span style="color: #122f56 !important">
                                <i class="fas fa-user-graduate highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text" style="color:#122f56 !important">عدد الطلاب</p>
                            <h4>{{ \App\Models\Student::count() }}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fas fa-binoculars mr-1" style="color:#122f56 !important" aria-hidden="true"></i>
                        <a href="{{route('admin.student.index')}}" target="_blank"><span style="color: #122f56">عرض البيانات</span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body card-teacher">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning" style="color: #122f56 !important">
                                <i class="fas fa-chalkboard-teacher highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text" style="color:#122f56 !important">عدد المعلمين</p>
                            <h4>{{ \App\Models\Teacher::count() }}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fas fa-binoculars mr-1" style="color:#122f56 !important" aria-hidden="true"></i><a
                            href="{{ route('admin.Teachers.index') }}" target="_blank"><span style="color: #122f56">عرض
                                البيانات</span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body card-class">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-light" style="color: #122f56 !important;">
                                <i class="fas fa-chalkboard highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text" style="color:#122f56 !important">عدد الفصول الدراسية</p>
                            <h4>{{ \App\Models\Section::count() }}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fas fa-binoculars mr-1" style="color:#122f56 !important" aria-hidden="true"></i><a
                            href="{{ route('admin.Sections.index') }}" target="_blank"><span style="color: #122f56">عرض
                                البيانات</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Orders Status widgets-->

    
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
