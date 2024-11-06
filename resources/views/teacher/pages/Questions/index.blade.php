@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة الاسئلة
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    <p style="color: #000; display: inline-block">قائمة الاسئلة : </p> <span class="text-danger">{{ $quizz->name }}</span>
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <a href="{{ route('teacher.questions.show', $quizz->id) }}" class="btn btn-primary btn-sm"
                    role="button" aria-pressed="true">اضافة سؤال جديد</a><br><br>
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                        data-page-length="50" style="text-align: center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">السؤال</th>
                                <th scope="col">عمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($quizz->questions as $question)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $question->title }}</td>
                                    <td>
                                        <a href="{{ route('teacher.questions.edit', $question->id) }}"
                                            class="btn btn-sm btn-primary"
                                            data-id="{{ $question->id }}">تعديل</a>
                                        <a href="#" class=" btn btn-sm btn-info show_answers"
                                            data-id="{{ $question->id }}" data-toggle="modal"
                                            data-target="#showAnsModal"> الاجابات</a>
                                        <a href="#" class="delete_qs_btn btn btn-sm btn-danger"
                                            data-action="{{ route('teacher.questions.destroy',[
                                                'question' => $question->id,
                                                'quiz' => $quizz->id
                                            ]) }}" data-toggle="modal"
                                            data-target="#delete_qs_model"> حذف</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>عفوا لا يوجد اسئله لعرضها</td>
                                </tr>
                            @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- add_modal_Grade -->
    <div class="modal fade" id="showAnsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        عرض الاجابات
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>الاسئلة</th>
                            <th>الاجابة الصحيحة</th>
                        </thead>
                        <tbody class="list_answers"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_qs_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        حذف السؤال من الامتحان
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <div>
                            <p>هل انت متأكد من حذف السؤال من الامتحان</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-danger">نعم</button>
                            <button type="button" class="btn btn-secondary">لا</button>
                        </div>
                    </form>
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
        $(".show_answers").click(function() {
            var question = @json($quizz->questions);
            var qid = $(this).attr('data-id');
            // var html = '';
            $('.list_answers').html('');

            for (let i = 0; i < question.length; i++) {
                if (question[i]["id"] == qid) {
                    var answerLenght = question[i]["answers"].length;
                    for (let j = 0; j < answerLenght; j++) {
                        let is_correct = `<i class="fas fa-times text-danger"></i> No`;
                        if (question[i]["answers"][j]['is_correct'] == 1) {
                            is_correct = '<i class="fas fa-check text-success"></i> Yes';
                        }
                        $('.list_answers').append(`<tr>
                                        <td>${(j + 1)}</td>
                                        <td>${question[i]["answers"][j]["answer"]}</td>
                                        <td>${ is_correct}</td>
                                    </tr>`);
                    }
                    break;
                } else {
                    html =
                        `<tr colspan="2"><p style="text-align: center">لا يوجد اجابات لعرضها</p></tr>`;
                }
            }
        });
        $(".delete_qs_btn").click(function() {
            var action = $(this).data('action');
            console.log(action);
            $('#delete_qs_model form').attr('action',action);

        });
    });
</script>
@endsection
