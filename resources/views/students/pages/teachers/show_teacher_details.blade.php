@extends('students.layouts.master')
@section('css')
    @toastr_css
    <style>
        .teacher-card {
            width: 100%;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
        }

        .card-header {
            background-color: #f0f0f0;
            padding: 20px;
            position: relative;
        }

        .teacher-name {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 5px solid #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 20%);
        }

        .card-body {
            padding: 20px;
        }

        .subject-badge {
            display: inline-block;
            padding: 5px 10px;
            font-size: 12px;
            color: #fff;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .teacher-bio {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .card-footer {
            padding: 1.75rem 1.25rem !important;
            background-color: rgb(255 255 255)!important;
            border-top: 0px solid rgba(0, 0, 0, 0.125)!important;
        }
        .btn:hover {
            background-color: #2980b9;
        }

        .btn.contact-teacher {
            background-color: #e74c3c;
        }

        .btn.contact-teacher:hover {
            background-color: #c0392b;
        }
    </style>
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

<div class="teacher-card">
    <div class="card-body">
        <div class="row">

            <div class="col-md-4">
                <img class="img-fluid w-25 rounded-circle" src="{{ $teacher->avatar }}" alt="">
            </div>

            <div class="col-md-8">
                <!-- Subject Badges -->
                <div class="row">

                    <div class="col-md-6">
                        <span class="teacher-name">name:<span>{{optional($teacher)->name }}</span></span>
                    </div>
                    <div class="col-md-6">
                        <span class="teacher-name">Address:<span>{{ optional($teacher)->Address }}</span></span>
                    </div>

                    <div class="col-md-6">
                        <span class="teacher-name">section:<span>{{ optional(optional($teacher)->sections_test)->name }}</span></span>
                    </div>
                    <div class="col-md-6">
                        <span class="teacher-name">
                            grade:
                            <span>
                                {{ optional(optional(optional($teacher)->sections_test)->grades)->Name ?? 'No grade available' }}
                            </span>
                        </span>
                                            </div>


                    <div class="col-md-6">
                        <span class="teacher-name">subject: <span>{{ optional(optional($teacher)->subject)->name }}</span></span>
                    </div>


                    <div class="col-md-6">
                        <span class="teacher-name">gender:<span>{{ optional($teacher)->gender }}</span></span>
                    </div>


                </div>
            </div>

            

        </div>

        <div class="card-footer">
   
            <a type="submit" class="btn view-profile" href="{{route('student.dashboard.teachers.index')}}">View Profile</a>
        </div>
    </div>
</div>

{{-- <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <img class="profile-image" src="teacher-avatar.jpg" alt="Teacher Avatar" style="height:300px;width:444px;">

            </div>
            <div class="col-md-8">
                <div class="col-md-4">
                    <h2 class="teacher-name">{{$teacher->name}}</h2>

                </div>
                <div class="col-md-4">
                    <h2 class="teacher-name">{{$teacher->name}}</h2>

                </div>
            </div>
        </div>
    </div> --}}

<!-- row closed -->
@endsection
@section('js')

@toastr_js
@toastr_render
@endsection
