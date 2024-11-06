@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل الحصه - #{{ $onlineClass->id }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    تعديل الحصه - #{{ $onlineClass->id }}
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

                <form method="post" action="{{ route('teacher.online_sessions.update', $onlineClass->id) }}"
                    autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="grade_id">{{ trans('Students_trans.Grade') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" id="grade_id" name="grade_id">
                                    <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                    @foreach ($grades as $grade)
                                        <option value="{{ $grade->id }}" @selected(old('grade_id', $grade->id) == $onlineClass->grade_id)>
                                            {{ $grade->Name }}</option>
                                    @endforeach
                                </select>
                                @error('grade_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="classroom_id">{{ trans('Students_trans.classrooms') }} : <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="classroom_id" >
                                    {{-- <option value="{{$package->Classroom_id}}">{{$package->class_room->Name_Class}}</option> --}}
                                    @foreach ($class_rooms as $class_room)
                                    <option style="color:black;" 
                                        @if (old('classroom_id', $onlineClass->classroom_id) == $class_room->id) 
                                            selected="selected" 
                                        @endif
                                        value="{{ $class_room->id }}">
                                        {{ $class_room->Name_Class }}
                                    </option>
                                @endforeach
                                
            
                                </select>
                            </div>

                            @error('classroom_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="group_id">{{ trans('Students_trans.group') }} : </label>
                                <select class="custom-select mr-sm-2" name="group_id" >
                                    {{-- <option value="{{$package->Classroom_id}}">{{$package->class_room->Name_Class}}</option> --}}
                                    @foreach ($groups as $group)
                                    <option style="color:black;" 
                                        @if (old('classroom_id', $onlineClass->group_id) == $group->id) 
                                            selected="selected" 
                                        @endif
                                        value="{{ $group->id }}">
                                        {{ $group->name }}
                                    </option>
                                @endforeach
                                
            
                                </select>
                            </div>

                            @error('group_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>عنوان الحصة : <span class="text-danger">*</span></label>
                                <input class="form-control" name="topic"
                                    value="{{ old('topic', $onlineClass->topic) }}" type="text">
                            </div>

                            @error('topic')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>تاريخ ووقت بدء الحصة : <span class="text-danger">*</span></label>
                                <input class="form-control" type="datetime-local"
                                       value="{{ old('start_at', $onlineClass->start_at ?? '') }}" name="start_at">
                            </div>
                    
                            @error('start_at')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>تاريخ ووقت انتهاء الحصة : <span class="text-danger">*</span></label>
                                <input class="form-control" type="datetime-local"
                                    value="{{ old('end_at', $onlineClass->end_at ?? '') }}" name="end_at">
                            </div>
                        
                            @error('end_at')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="package_id">{{ trans('Students_trans.package') }} : <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select mr-sm-2" id="package_id" name="package_id">
                                <option selected disabled>{{ trans('Parent_trans.Choose') }}...</option>
                                @foreach ($packages as $package)
                                    <option value="{{ $package->id }}" @selected(old('package_id', $package->id) == $onlineClass->package_id)>
                                        {{ $package->name }}</option>
                                @endforeach
                            </select>
                            @error('package_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">
                        {{ trans('Students_trans.submit') }}
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
<script>
$(document).ready(function () {
    $('#grade_id').trigger('change');
});
</script>
<script>
    $(document).ready(function () {
        $('select[name="grade_id"]').on('change', function () {
            var grade_id = $(this).val();
            if (grade_id) {
                $.ajax({
                    url: "{{ URL::to('classes') }}/" + grade_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="classroom_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="classroom_id"]').append('<option value="' + key + '">' + value + '</option>');
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
@endsection
