@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    اضافة كوبون جديد
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    اضافة كوبون جديد
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
                        <form action="{{ route('teacher.coupon.store') }}" method="post">
                            @csrf
                            @include('teacher.pages.coupon.partials._form')
                            <hr>
                            <div class="m-auto text-center">
                                <button class="btn btn-success" type="submit">
                                    حفظ
                                </button>
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
<script>
    $(document).ready(function() {
        $('select[name="grade_id"]').on('change', function() {
            var grade_id = $(this).val();
            if (grade_id) {
                $.ajax({
                    url: `{{ route('admin.classes.filter','id') }}`.replace('id',grade_id),
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="class_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="class_id"]').append('<option value="' +
                                key + '">' + value + '</option>');
                        });
                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>
@endsection
