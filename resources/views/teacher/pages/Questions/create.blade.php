@extends('teacher.layouts.master')
@section('css')
    @toastr_css
    <style>
        .answers {
            border-bottom: 1px solid #ccc;
            padding: 7px;
        }
        
    </style>
@endsection

@section('title', 'اضافة سؤال جديد')

{{-- @section('page-header') --}}
<!-- breadcrumb -->
@section('PageTitle', 'اضافة سؤال جديد')

@section('content')
    <!-- row -->
    <div class="row">
        <form id="addQna">
            @csrf

            <div class="col-md-12 mb-30">
                <div class="card card-statistics h-100">
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div>
                                        <label for="title">اسم السؤال</label>
                                        <input type="text" name="title" id="input-name"
                                            class="form-control form-control-alternative" autofocus>
                                        <input type="hidden" value="{{ $quizz_id }}" name="quizz_id">
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label for="level">مستوي السؤال</label>
                                        <select name="level" class="custom-select" id="level">
                                            @foreach ($levels as $level)
                                                <option value="{{ $level }}">{{ trans("app.levels.{$level}") }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" value="{{ $quizz_id }}" name="quizz_id">
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <label for="title">المحتوى</label>
                                    <textarea name="desc" id="desc" class="form-control form-control-alternative"></textarea>
                                    <div class="error"></div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-title">
                        <h4 class="text-primary text-center my-3 ">الاختيارات</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-12 question_body">
                                <div class="error"></div>
                                
                            </div>

                        </div>
                        <div class="form-group clearfix mb-20">
                            <button id="addAnswers" class="button" type="button">اضافة اختيار جديد</button>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="text-center m-auto">
                            <button class="btn btn-success" id="addQna">حفظ</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>

    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
    <script>
        var lastIndex = 1;
        const minAnswers = 2;
        const maxAnswers = 4;

        function createAnswerInput() {
            const itemIndex = lastIndex++;
            var html = `
                    <div  class="align-items-center answers col-12 mb-3 row">
                                        <div class="col-11">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input type="radio" name="is_correct" value="${itemIndex}" class="is_correct form-radio">
                                                </div>
                                                <input type="text" name="answers[${itemIndex}][answer]" class="form-control"
                                                    placeholder="ادخل الاختيار" required>
                                                <div class="invalid-feedback">من فضلك ادخل الاختيار .</div>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="m-auto text-center">
                                                <button class="btn btn-danger removeButton">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>`;
            $('.question_body').append(html);

        }
        for (let index = 0; index < minAnswers; index++) {
            createAnswerInput();
        }
        $(document).ready(function() {
            $('form').submit(function(e) {
                e.preventDefault();
                if ($('.answers').length < minAnswers) {
                    $('.error').text("please add At Least 2 answers.")
                    setTimeout(function() {
                        $('.error').text("");
                    }, 2000)
                } else {

                    var checkIsCorrect = false;

                    for (let i = 0; i < $(".is_correct").length; i++) {
                        if ($(".is_correct:eq(" + i + ")").prop("checked")) {
                            checkIsCorrect = true;
                            // $(".is_correct:eq(" + i + ")").val($(".is_correct:eq(" + i + ")").next().find(
                            //     "input").val());
                        }
                    }
                    if (checkIsCorrect) {
                        var formData = $(this).serialize();

                        $.ajax({
                            url: "{{ route('teacher.questions.store') }}",
                            type: "POST",
                            data: formData,
                            success: function(data) {

                                if (data.success) {
                                    location.reload();
                                    
                                } else {
                                    alert(data.msg);
                                }
                            }
                        });
                    } else {
                        $('.error').text("please choose anyone answer .")
                        setTimeout(function() {
                            $('.error').text("");
                        }, 2000)
                    }

                }
            });
            function checkAnswersCount(){
                if($('.answers').length >= maxAnswers){
                    return $('#addAnswers').hide();
                }
                return $('#addAnswers').show();

            }
            $('#addAnswers').click(function() {
                if ($('.answers').length >= 4) {
                    $('.error').text("please add maximum 4 answers.")
                    setTimeout(function() {
                        $('.error').text("");
                    }, 2000)
                } else {
                    createAnswerInput()
                }
                checkAnswersCount();
            });
            $(document).on('click', '.removeButton', function() {
                $(this).parents('.answers').remove();
                checkAnswersCount();
            });
            // $('#summernote').summernote();
        });
    </script>
@endsection
