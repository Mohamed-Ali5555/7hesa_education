@extends('admin.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('Students_trans.Student_Edit')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{trans('Students_trans.Student_Edit')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form action="{{route('admin.student.update','test')}}" method="post" autocomplete="off">
                        @method('PUT')
                        @csrf
                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">{{trans('Students_trans.personal_information')}}</h6><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.name_ar')}} : <span class="text-danger">*</span></label>
                                    <input value="{{$Students->getTranslation('name','ar')}}" type="text" name="name_ar"  class="form-control">
                                    <input type="hidden" name="id" value="{{$Students->id}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.name_en')}} : <span class="text-danger">*</span></label>
                                    <input value="{{$Students->getTranslation('name','en')}}" class="form-control" name="name_en" type="text" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.email')}} : </label>
                                    <input type="email" value="{{ $Students->email }}" name="email" class="form-control" >
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.password')}} :</label>
                                    <input value="{{ $Students->password }}" type="password" name="password" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">{{trans('Students_trans.gender')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="gender">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        <option value="male" {{$Students->gender == 'male' ? 'selected' : ""}}>{{ trans("app.gender.male") }}</option>
                                        <option value="female" {{$Students->gender == 'female' ? 'selected' : ""}}>{{ trans("app.gender.female") }}</option>

                                    </select>
                                </div>
                            </div>

                         


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.Date_of_Birth')}}  :</label>
                                    <input class="form-control" type="text" value="{{$Students->Date_Birth}}" id="datepicker-action" name="Date_Birth" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>

                        </div>

                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">{{trans('Students_trans.Student_information')}}</h6><br>
                    <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="grade_id">{{trans('Students_trans.Grade')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="grade_id">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($grades as $Grade)
                                            <option value="{{ $Grade->id }}" {{$Grade->id == $Students->grade_id ? 'selected' : ""}}>{{ $Grade->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="classroom_id">{{trans('Students_trans.classrooms')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="classroom_id">
                                        <option value="{{optional($Students)->classroom_id}}">{{optional($Students->classroom)->Name_Class}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="section_id">{{trans('Students_trans.section')}} : </label>
                                    <select class="custom-select mr-sm-2" name="section_id">
                                        <option value="{{optional($Students)->section_id}}"> {{optional($Students->section)->name}}</option>
                                    </select>
                                </div>
                            </div>

              

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="academic_year">{{trans('Students_trans.academic_year')}} : <span class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="academic_year">
                                    <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                    @php
                                        $current_year = date("Y");
                                    @endphp
                                    @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                        <option value="{{ $year}}" {{$year == $Students->academic_year ? 'selected' : ' '}}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        </div><br>
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('Students_trans.submit')}}</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
    <script>
        $(document).ready(function () {
            $('select[name="grade_id"]').on('change', function () {
                var grade_id = $(this).val();
                if (grade_id) {
                    $.ajax({
                        url: "{{ URL::to('Get_classrooms') }}/" + grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="classroom_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="classroom_id"]').append('<option selected disabled >{{trans('Parent_trans.Choose')}}...</option>');
                                $('select[name="classroom_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });

                        },
                    });
                }

                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>


    <script>
        $(document).ready(function () {
            $('select[name="classroom_id"]').on('change', function () {
                var classroom_id = $(this).val();
                if (classroom_id) {
                    $.ajax({
                        url: "{{ route('ajax.sections','id') }}".replace('id',classroom_id) ,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="section_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });

                        },
                    });
                }

                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endsection
