@extends('students.layouts.master')
@section('css')
    @toastr_css
    <style>
        .circular-progress{
            position: relative;
    height: 90px;
    width: 90px;
    border-radius: 50%;
    background: conic-gradient(#2a2be8 3.6deg, #c60707 0deg);
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translate(50px, 0px);
}
.circular-progress::before{
    content: "";
    position: absolute;
    height: 80px;
    width: 80px;
    border-radius: 50%;
    background-color: #fff;
}
.progress-value{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #2a2be8;
}
    </style>
@endsection
@section('title', 'قائمة الاختبارات')

@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle',"قائمة الاختبارات")
    
@stop

@section('content')
<!-- row -->
{{-- @if(auth()->user()->status_login !==1)
@include('layouts.continue_login')
@else --}}
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                        style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>المادة الدراسية</th>
                                <th>اسم  الاختبار</th>
                                <th>عرض الاسئلة</th>
                                <th> درجة الاختبار</th>
                                <th>بدء الاختيار</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($quizzes as $quiz)
                                {{-- @dd($quiz) --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $quiz->subject->name }}</td>
                                    <td>{{ $quiz->name }}</td>
                                    <td>
                                        @if ($quiz->studentDegree)
                                            @unless (is_null($quiz->studentDegree?->submitted_at))
                                                <a
                                                    href="{{ route('student.dashboard.exams.show_answer', $quiz->studentDegree->id) }}">
                                                    عرض الاجابات
                                                </a>
                                            @endunless
                                        @else
                                            <p class="text-center text-black">يجب اجراء الاختبار
                                                اولا</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($quiz->studentDegree && !is_null($quiz->studentDegree?->submitted_at))
                                              
                                                <div class="circular-progress">
                                                    <span class="progress-value">0%</span>
                                                    <span id="pro_val" value="{{ $quiz->studentDegree->marks }}"></span>
                                                    <span id="pro_val_total" value="{{ $quiz->totalmarks }}"></span>
                                                </div>
                                        @endif

                                    </td>
                                    <td>
                                        {{-- @dd($quiz->studentDegree->still_in_progress) --}}
                                        @if (!$quiz->studentDegree?->exists())
                                            <a href="{{ route('student.dashboard.exams.start', $quiz->id) }}"
                                                class="btn btn-outline-success btn-sm" role="button"
                                                aria-pressed="true" class="start_exam_btn">
                                                <i class="fas fa-person-booth"></i></a>
                                        @elseif($quiz->studentDegree->still_in_progress)
                                            <a href="{{ route('student.dashboard.exams.start', $quiz->id) }}"
                                                class="btn btn-outline-warning btn-sm" role="button"
                                                aria-pressed="true">
                                                <i class="fas fa-person-booth"></i> اكمل اداء الامتحان</a>
                                        @elseif($quiz->studentDegree->submitted_at)
                                            <span class="badge badge-success">تم اجراء اختبارك</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endif --}}
<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render

<script>
let circularProgress = document.querySelector(".circular-progress"),
progressValue = document.querySelector(".progress-value"),
pro_val = document.getElementById("pro_val").getAttribute("value"),
pro_val_total = document.getElementById("pro_val_total").getAttribute("value"),
presentage = 100;
var degree = pro_val * presentage / pro_val_total;

let progressStartValue = 0;    
var progressEndValue = degree,    
speed = 100;

let progress = setInterval(() => {
progressStartValue++;

progressValue.textContent = `${progressStartValue}%`
circularProgress.style.background = `conic-gradient(#2a2be8 ${progressStartValue * 3.6}deg, #c60707 0deg)`

if(progressStartValue == progressEndValue){
    clearInterval(progress);
}    
}, speed);
</script>
@endsection
