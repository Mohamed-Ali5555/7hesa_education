@extends('students.layouts.master')
@section('css')
    @toastr_css
@section('title')
    حصه اونلاين
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    حصه اونلاين
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-6">
        <select class="custom-select" id="grade_search">
            <option value="all">
                بحث grade
            </option>
            @foreach ($grades as $grade)
                <option @if (old('grade_id') == $grade->id) selected="selected" @endif
                    value="{{ $grade->id }}">
                    {{ $grade->Name }}
                </option>
            @endforeach

        </select>
    </div>


    <div class="col-md-6">
        <select class="custom-select" id="subject_search">
            <option value="all">
                بحث subject
            </option>
            @foreach ($subjects as $subject)
                <option @if (old('subject_id') == $subject->id) selected="selected" @endif
                    value="{{ $subject->id }}">
                    {{ $subject->name }}
                </option>
            @endforeach

        </select>
    </div>
</div>
<div class="row" id="ajax_response_searchDiv">
    @foreach ($teachers as $teacher)
        <div class="col-md-4 mb-30">
            <div class="card card-statistics h-100">
                <a href="{{ route('student.dashboard.teachers.show', $teacher->id) }}">
                    <div class="bg-light border p-4 text-center">
                        <h5 class="mb-30 text-black">{{ $teacher->name }}</h5>
                        <div class="d-flex justify-content-center">
                            <span class="badge text-white bg-{{ $teacher->subject?->color_name }}">
                                {{ $teacher->subject?->name }}
                            </span>
                        </div>
                        <!-- action group -->
                        <div class="btn-group info-drop">
                            <button type="button" class="dropdown-toggle-split text-white"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-more"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="{{ route('student.dashboard.teachers.show', $teacher->id) }}">
                                    <i class="text-success ti-user"></i> View Profile
                                </a>
                            </div>
                        </div>
                        <img class="img-fluid w-25 rounded-circle" src="{{ $teacher->avatar }}" alt="">
                        @if (!empty($teacher->bio))
                            <p class="mt-30 text-white">
                                {{ str($teacher->bio)->limit(30, '...') }}
                            </p>
                        @endif
                    </div>
                </a>
                <div class="text-center mt-3 mb-3">
                    <a class="btn btn-info" href="{{ route('student.dashboard.teachers.show_teacher_details', $teacher->id) }}" style="display: inline-block;color:white;">معلومات المدرس</a>
                    <a class="btn btn-danger" href="{{ route('student.dashboard.teachers.show', $teacher->id) }}" style="display: inline-block;color:white;">باقات المدرس </a>
                </div>
            </div>
        </div>
    @endforeach
</div>


<!-- row closed -->
@endsection
@section('js')

<script>
$(document).ready(function() {
    $(document).on('input', '#grade_search', function() {
        make_search();
    });


    $(document).on('input', '#subject_search', function() {
        make_search();
    });

    function make_search() {
        var grade_search = $('#grade_search').val();
        var subject_search = $('#subject_search').val();

        var token = "{{ csrf_token() }}";

        $.ajax({
            url: "{{ route('student.dashboard.teachers.ajax_search') }}",
            type: 'POST',
            dataType: 'html',
            data: {
                grade_search: grade_search,
                subject_search: subject_search,
                _token: token,
            },
            success: function(data) {
                // Update the content of #ajax_response_searchDiv with the received data
                $("#ajax_response_searchDiv").html(data);
            },
            error: function(xhr, status, error) {
                console.error('An error occurred:', error);
                alert('Sorry, something went wrong. Please try again later.');
            }
        });
    }
});


</script>
@toastr_js
@toastr_render
@endsection
