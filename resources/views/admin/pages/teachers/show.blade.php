@extends('admin.layouts.master')
@section('css')
    @toastr_css
@section('title')

    {{ $teacher->name }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ $teacher->name }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-start icon-box bg-danger">
                        <span class="text-white">
                            <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="float-end text-end">
                        <p class="card-text text-dark">عدد طلابه</p>
                        <h4 class="text-dark">{{ $students->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-start icon-box bg-primary">
                        <span class="text-white">
                            <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="float-end text-end">
                        <p class="card-text text-dark">عدد الاختبارات</p>
                        <h4 class="text-dark">{{ $teacher->exams->count() }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-start icon-box bg-warning">
                        <span class="text-white">
                            <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="float-end text-end">
                        <p class="card-text text-dark">الاشتراك الحالي</p>
                        <h4 class="text-dark">------</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <h3 class="card-header">الطلاب</h3>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>student_id</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->student_id }}</td>

                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render

@endsection
