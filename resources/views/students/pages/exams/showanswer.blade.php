@extends('students.layouts.master')
@section('css')
@section('title')
    انهاء الاختبار
@stop
@endsection
@section('content')

<h1 class="text-dark">عرض الاسئلة التي تم الاجابة عليها </h1>
@php $qcount = 1 @endphp
@foreach ($examAttempt->quizze->questions as $question)
    <div class="card card-statistics mb-30">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between align-items-center">
                <h5 class="text-dark mb-0"> Q{{ $qcount++ }}.{{ $question->title }}</h5>
                <span class="badge bg-success text-white">{{ $question->answers->firstWhere('is_correct')->answer }}</span>
            </div>
            @unless (empty($question->description))
                <div class="p-5 border">
                    {!! $question->description !!}
                </div>
                <hr>
            @endunless
            @foreach ($question->answers as $choice)
                <p>
                    @if ($examAttempt->answers->firstWhere('question_id',$question->id)?->answer_id  == $choice->id && $choice->is_correct)
                        <i class="text-success fa fa-check"></i>
                        @else
                        <i class="text-danger fa fa-times"></i>
                    @endif
                    {{-- <i @class([
                        'fa fa-check' => $examAttempt->answers->firstWhere('question_id',$question->id)?->answer_id  == $choice->id,
                        'fa fa-times' => !$choice->is_correct ,
                        'text-success' => $examAttempt->answers->firstWhere('question_id',$question->id)?->answer_id  == $choice->id,
                        'text-danger' => !$choice->is_correct ,
                    ])></i> --}}
                    {{ $choice->answer }}
                    {{-- @dd($examAttempt->answers->firstWhere('question_id',$question->id)) --}}
                    {{-- @if ($examAttempt->answers->firstWhere('question_id',$question->id)?->answer_id  == $choice->id)
                        <span class="badge bg-primary text-white">اختيارك</span>
                    @endif --}}
                    {{-- <span class="badge ba"></span> --}}
                </p>
            @endforeach
            {{-- @if ($data->answer->is_correct == 1)
            @else
                <p><i class="fa fa-close" style="color:red"></i>{{ $data->answer->answer }}</p>
            @endif --}}
        </div>
    </div>
@endforeach

@section('js')
@endsection
@endsection
