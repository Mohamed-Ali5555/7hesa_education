@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('main_trans.complete') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('main_trans.complete') }}
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

                <form method="post" action="{{ route('teacher.complete_register.update', $teacher->id) }}"
                    autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">
                        {{ trans('Students_trans.personal_information') }}</h6>
                    {{-- <input type="hidden" name="teacher_id" value="{{ $ }}"> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('Students_trans.name_ar') }} : <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name_ar"
                                    value="{{ auth('teacher')->user()->getTranslation('name', 'ar') }}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('Students_trans.name_en') }} : <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="name_en"
                                    value="{{ auth('teacher')->user()->getTranslation('name', 'en') }}" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">{{ trans('Students_trans.gender') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="gender">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    <option value="male">{{ trans('app.gender.male') }}</option>
                                    <option value="female">{{ trans('app.gender.female') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nal_id">{{ trans('Teacher_trans.subject') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="subject_id">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    @foreach ($subject as $sub)
                                        <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nal_id">{{ trans('Teacher_trans.package') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="admin_package_id">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    @foreach ($admin_packages as $admin_package)
                                        <option value="{{ $admin_package->id }}">{{ $admin_package->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('Students_trans.address') }} : <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="address"
                                     type="text">
                            </div>
                        </div>
                    </div>

                    <h6 style="color: blue">
                        {{ trans('Students_trans.Student_information') }}</h6>
                    <div class="row">
                        <div class="col-md-4">
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="classroom_id">{{ trans('Students_trans.classrooms') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="classroom_id">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="section_id">{{ trans('Students_trans.section') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="section_id">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="business_type">نوع تعاقد العمل: <span class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" id="business_type" name="business_type">
                                    <option value="subscription">اشتراك</option>
                                    <option value="percentage">بالنسبة المئويه</option>
                                </select>
                            </div>
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
