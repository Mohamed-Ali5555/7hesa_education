@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    اضافة باقة جديدة
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    اضافة باقة جديدة
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
                <form method="post" action="{{ route('teacher.package.update',$package->id) }}" autocomplete="off"
                    enctype="multipart/form-data">
                   
                    @csrf
                    @method('PUT')
                    @include('teacher.pages.packages.partials._edit')
                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
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
