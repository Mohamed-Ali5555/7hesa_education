@extends('teacher.layouts.master')
@section('css')
    @toastr_css
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
 
@section('title')
    تعديل المجموعة
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    تعديل المجموعة
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
                <form method="post" action="{{ route('teacher.groups.update', $group->id) }}" autocomplete="off">
                    @csrf
                    @method('PUT') <!-- Since this is an edit form -->
                    @include('teacher.pages.groups.partials._form_edit')
                    
                    <!-- Modify the button to reflect an update -->
                    <button class="btn btn-primary text-center m-auto"
                        type="submit">{{ trans('Students_trans.update') }}
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
