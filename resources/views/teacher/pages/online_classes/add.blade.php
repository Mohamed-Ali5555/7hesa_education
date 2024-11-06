@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    اضافة حصة جديدة
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    اضافة حصة جديدة
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

                <form method="post" action="{{ route('teacher.online_sessions.store') }}" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="grade_id">{{ trans('Students_trans.Grade') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="grade_id">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    @foreach ($grades as $Grade)
                                        <option value="{{ $Grade->id }}">{{ $Grade->Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="start_at">{{ trans('Students_trans.start_at') }} : <span
                                        class="text-danger">*</span></label>
                                <input class="custom-select mr-sm-2" name="start_at" type="datetime-local">

                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="end_at">{{ trans('Students_trans.end_at') }} : <span
                                        class="text-danger">*</span></label>
                                        <input class="custom-select mr-sm-2" name="end_at" type="datetime-local">

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
                                <label for="group_id">{{ trans('Students_trans.group') }} : </label>
                                <select class="custom-select mr-sm-2" name="group_id">

                                </select>
                            </div>
                        </div>
                    </div><br>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>عنوان الحصة : <span class="text-danger">*</span></label>
                                <input class="form-control" name="topic" type="text">
                            </div>
                        </div>

                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label>تاريخ ووقت الحصة : <span class="text-danger">*</span></label>
                                <input class="form-control" type="datetime-local" name="start_time">
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label>مدة الحصة بالدقائق : <span class="text-danger">*</span></label>
                                <input class="form-control" name="duration" type="text">
                            </div>
                        </div> --}}

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="package_id">{{ trans('Students_trans.package') }} : <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select mr-sm-2" name="package_id">
                                <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                @foreach ($packages as $package)
                                    <option value="{{ $package->id }}">{{ $package->name }}</option>
                                @endforeach
                            </select>
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
<script>
    $(document).ready(function() {
        $('select[name="grade_id"]').on('change', function() {
            var grade_id = $(this).val();
            if (grade_id) {
                $.ajax({
                    url: "{{ URL::to('Get_classrooms') }}/" + grade_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="classroom_id"]').empty();
                        $('select[name="classroom_id"]').append(
                            '<option selected disabled >{{ trans('Parent_trans.Choose') }}...</option>'
                            );
                        $.each(data, function(key, value) {
                            $('select[name="classroom_id"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('select[name="classroom_id"]').on('change', function() {
            var classroom_id = $(this).val();
            if (classroom_id) {
                $.ajax({
                    url: "{{ URL::to('Get_Groups') }}/" + classroom_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="group_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="group_id"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });

                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>

@toastr_js
@toastr_render

@endsection
