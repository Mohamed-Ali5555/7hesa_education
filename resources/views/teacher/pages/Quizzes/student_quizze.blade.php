@extends('teacher.layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة الطلاب المختبره
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    قائمة الطلاب المختبره
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                        data-page-length="50" style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الطالب</th>
                                <th>اسم الاختبار</th>
                                <th>الدرجة</th>
                                <th>الحالة</th>
                                <th>تاريخ بدء الاختبار</th>
                                <th>تاريخ تسليم الاختبار</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($degrees as $degree)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $degree->student->name }}</td>
                                    <td>{{ $degree->quizze->name }}</td>
                                    <td>{{ $degree->marks }}</td>
                                    @if ($degree->status == 0)
                                        <td class="text-success">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            لا يوجد تلاعب</td>
                                    @else
                                        <td class="text-danger"> 
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            يوجد تلاعب</td>
                                    @endif
                                    <td>{{ $degree->started_at }}</td>
                                    <td>{{ $degree->submitted_at }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm"
                                            data-toggle="modal"
                                            data-target="#repeat_quizze{{ $degree->quizze_id }}"
                                            title="إعادة">
                                            <i class="fas fa-repeat"></i></button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="repeat_quizze{{ $degree->quizze_id }}"
                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{ route('teacher.repeat.quizze', $degree->quizze_id) }}"
                                            method="post">

                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;"
                                                        class="modal-title" id="exampleModalLabel">فتح إعادة
                                                        الاختبار للطالب</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6>{{ $degree->student->name }}</h6>
                                                    <input type="hidden" name="student_id"
                                                        value="{{ $degree->student_id }}">
                                                    <input type="hidden" name="quizze_id"
                                                        value="{{ $degree->quizze_id }}">
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">{{ trans('My_Classes_trans.Close') }}</button>
                                                        <button type="submit"
                                                            class="btn btn-info">{{ trans('My_Classes_trans.submit') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                    </table>
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
@endsection
