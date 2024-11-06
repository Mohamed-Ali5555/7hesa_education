@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل كوبون {{ $coupon->name }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    تعديل كوبون {{ $coupon->name }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card h-100">
            <div class="card-body">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <br>
                        <form action="{{ route('teacher.coupon.update',$coupon->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            @include('teacher.pages.coupon.partials._form_edit')
                            <hr>
                            <div class="m-auto text-center">
                                
                            <button class="btn btn-success  " type="submit">حفظ
                                البيانات</button>
                            </div>
                        </form>
                    </div>
                </div>
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
