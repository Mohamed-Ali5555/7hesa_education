@extends('admin.layouts.master')
@section('css')
    @toastr_css
@section('title')
    الاعدادات
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    الاعدادات
@stop
<!-- breadcrumb -->
@endsection
@section('content')


@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('error') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="{{ route('admin.settings.update', 'test') }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 border-right-2 border-right-blue-400">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">اسم المشروع<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="name" value="{{ $generalSettings->name }}" required type="text"
                                        class="form-control" placeholder="Name of School">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">الهاتف</label>
                                <div class="col-lg-9">
                                    <input name="phone" value="{{ $generalSettings->phone }}" type="text"
                                        class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">البريد الالكتروني</label>
                                <div class="col-lg-9">
                                    <input name="school_email" value="{{ $generalSettings->email }}" type="email"
                                        class="form-control" placeholder="School Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">عنوان المدرسة<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input required name="address" value="{{ $generalSettings->address }}" type="text"
                                        class="form-control" placeholder="School Address">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">شعار المدرسة</label>
                                <div class="col-lg-9">
                                    <div class="mb-3">
                                        <img style="width: 100px" height="100px"
                                            src="{{ URL::asset('attachments/logo/' . $generalSettings->logo) }}" alt="">
                                    </div>
                                    <input name="logo" accept="image/*" type="file" class="file-input"
                                        data-show-caption="false" data-show-upload="false" data-fouc>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
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
