@extends('students.layouts.master')
@section('css')
    <style>
        .pagination .page-item .page-link.active {
    background: #007bff;
    border-color: #007bff;
    color: #ffffff;
}
    </style>
    @livewireStyles

@section('title')
    إجراء اختبار
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    إجراء اختبار
@stop
<!-- breadcrumb -->
@endsection
@section('content')
{{-- @if ($exam && !$exam->still_in_progress)
    <h2 class="text-center">عزيزي الطالب تم اجراء اختبار شهر {{ $exam->name }} </h2>
    <p class="text-center mt-3">
        <a href="{{ route('student.dashboard.exams.index') }}" class="btn btn-info">الرجوع الى صفحة الامتحانات</a>
    </p>
@else
@endif --}}
<div>
    <h4 id="time" class="text-dark"></h4>
    @include('students.pages.exams._exam_question')
    {{-- @livewire('show-question', ['quiz' => $exam]) --}}
</div>

@endsection
@section('js')
<script src="{{ asset('assets/js/sweetalert2.all.js') }}"></script>
@toastr_js
@toastr_render

<livewire:scripts>
    <script>
        
        $(document).ready(function() {
            const _time = @json($remainingTime);
            
            function validateQuestionsForm() {
                const questions = document.querySelectorAll('.question');
                let allAnswered = true;

                questions.forEach(question => {
                    const radioButtons = question.querySelectorAll('input[type="radio"]');
                    const name = radioButtons[0].name;
                    const isChecked = Array.from(radioButtons).some(radio => radio.checked);
                    if (!isChecked) {
                        allAnswered = false;
                    }
                });
                return allAnswered;
            }


            $(document).on('click', '.quiz_submit_btn', function(e) {
                e.preventDefault();
                if (!validateQuestionsForm()) {
                    return swal({
                        title: "هل انت متأكد ?",
                        text: "قد تكون هناك اسئله غير مجاب عنها !",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: "رجوع",
                        confirmButtonText: "ارسال!"
                    }).then((result) => {
                        if (result.value) {
                            $('#exam_form').submit();
                        }
                    })


                }
                $('#exam_form').submit();
            });

            $(document).on('change', '.select_ans', function() {

                $.ajax({
                    url: "{{ route('student.dashboard.exams.saveanswer', $exam->id) }}",
                    method: "POST",
                    data: {
                        'answer_id': $(this).val(),
                        'question_id': $(this).attr('data-question-id'),
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        console.log(res);
                    },
                    error: function(err) {

                    },
                });
            });

            $('#quiz_tabs li.page-item a').first().tab('show');


            function timeToDoubleDigits(min) {
                return min.toString().length > 1 ? min : `0${min}`;
            }

            let Hour = parseInt(_time[0]);
            let Mint = parseInt(_time[1]);
            let seconds = _time[2];
            
            var Timer = setInterval(() => {
                if (Hour == 0 && Mint == 0 && seconds < 10) {
                    toastr.error('The Exam Will Submit Automatically After 10 Seconds .', 'Sorry!')

                }
                if (Hour == 0 && Mint == 0 && seconds == 0) {
                    clearInterval(Timer);

                    $("#exam_form").submit();
                }
                if (seconds <= 0) {
                    Mint--;
                    seconds = 59;
                }
                if (Mint <= 0 && Hour != 0) {
                    Hour--;
                    Mint = 59;
                    seconds = 59
                }
                

                $('#time').html(
                    `<span class="timer">${timeToDoubleDigits(Hour)}</span><span class="timer">${timeToDoubleDigits(Mint)}</span><span class="timer">${timeToDoubleDigits(seconds)}</span>`
                    
                );
                seconds--;
            }, 1000);
            
        })
    </script>
@endsection
