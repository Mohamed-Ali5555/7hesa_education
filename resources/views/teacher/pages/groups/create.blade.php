@extends('teacher.layouts.master')
@section('css')
    @toastr_css
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
 
@section('title')
    اضافة مجموعة جديدة
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    اضافة مجموعة جديدة
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
                <form method="post" action="{{ route('teacher.groups.store') }}" autocomplete="off">
                    @csrf
                    @include('teacher.pages.groups.partials._form')
                    <button class="btn btn-success text-center m-auto"
                        type="submit">{{ trans('Students_trans.submit') }}
                    </button>
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
