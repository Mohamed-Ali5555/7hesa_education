@extends('admin.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('main_trans.add_student') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('main_trans.add_student') }}
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

                <form method="post" action="{{ route('admin.Students.complete') }}" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">
                        {{ trans('Students_trans.personal_information') }}</h6><br>
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('Students_trans.name_ar') }} : <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name_ar" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('Students_trans.name_en') }} : <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="name_en" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="gender">{{ trans('Students_trans.gender') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="gender">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    <option value="male">{{ trans('app.gender.male') }}</option>
                                    <option value="female">{{ trans('app.gender.female') }}</option>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nal_id">{{ trans('Students_trans.Nationality') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="nationalitie_id">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    @foreach ($nationals as $nal)
                                        <option value="{{ $nal->id }}">{{ $nal->Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">
                        {{ trans('Students_trans.Student_information') }}</h6><br>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="grade_id">{{ trans('Students_trans.Grade') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="grade_id">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    @foreach ($my_classes as $c)
                                        <option value="{{ $c->id }}">{{ $c->Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="classroom_id">{{ trans('Students_trans.classrooms') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="classroom_id">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="section_id">{{ trans('Students_trans.section') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="section_id">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="teacher_id">المدرس : <span class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="teacher_id">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="academic_year">{{ trans('Students_trans.academic_year') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="academic_year">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    @php
                                        $current_year = date('Y');
                                    @endphp
                                    @for ($year = $current_year; $year <= $current_year + 1; $year++)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div><br>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="academic_year">{{ trans('Students_trans.Attachments') }} : <span
                                    class="text-danger">*</span></label>
                            <input type="file" accept="image/*" name="photos[]" multiple>
                        </div>
                    </div>



                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
                        type="submit">{{ trans('Students_trans.submit') }}</button>
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

@endsection
