@php $perPage = 10 @endphp
<div class="quiz_tab">

    <form method="post" action="{{ route('student.dashboard.exams.store') }}" class="mb-5" id="exam_form">
        @csrf

        <input type="hidden" value="{{ $exam->id }}" name="exam_id">
        <div class="tab">

            <div class="tab-content">
                @foreach ($exam->questions->chunk($perPage) as $questionChunked)
                    <div class="tab-pane fade" id="qs_content_{{ $loop->iteration }}_box" role="tabpanel"
                        aria-labelledby="ques_{{ $loop->iteration }}_btn" tabindex="0">
                        @foreach ($questionChunked as $question)
                            <div class="card card-statistics mb-30 question">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Q{{ $loop->parent->index * $perPage + $loop->iteration }}.{{ $question->title }}
                                    </h5>
                                    <input type="hidden" value="{{ $question->id }}" name="q[]">
                                    {{-- <input type="hidden" name="ans_{{ $qcount - 1 }}"
                                    id="ans_{{ $qcount - 1 }}"> --}}
                                    @unless (empty($question->description))
                                        <div class="p-5 border">
                                            {!! $question->description !!}
                                        </div>
                                        <hr>
                                    @endunless

                                    @foreach ($question->answers->shuffle() as $answer)
                                        <label class="d-block" for="qu_{{ $question->id }}_{{ $loop->index }}">
                                            {{ $loop->iteration }} .
                                            <input data-question-id="{{ $question->id }}"
                                                id="qu_{{ $question->id }}_{{ $loop->index }}" type="radio"
                                                @checked(isset($selectedAnswers[$question->id]) && $selectedAnswers[$question->id] == $answer->id) name="answer_{{ $question->id }}"
                                                data-id="{{ $answer->id }}" class="select_ans"
                                                value="{{ $answer->id }}">
                                            {{ $answer->answer }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach


                    </div>
                @endforeach
            </div>
        </div>
        <div class="m-auto">
            <nav>
                <ul class="justify-content-center nav pagination" id="quiz_tabs" role="tablist">
                    @for ($i = 1; $i <= ceil($exam->questions->count() / $perPage); $i++)
                        <li class="page-item" role="presentation">
                            <a class="page-link nav-link" id="ques_{{ $i }}_btn" data-toggle="tab"
                                href="#qs_content_{{ $i }}_box" role="tab"
                                aria-controls="qs_content_{{ $i }}_box" aria-selected="false">
                                {{ $i }}
                            </a>
                        </li>
                    @endfor
                </ul>
            </nav>

        </div>
        <hr>

        <div class="bg-white m-auto p-10 text-center">
            <button class="btn btn-success btn-lg quiz_submit_btn" type="submit">ارسال</button>

        </div>

    </form>

</div>
